import React from 'react';

const PerformanceHeatmap = ({ data, selectedMetric, onCellClick }) => {
  const days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
  const hours = Array.from({ length: 24 }, (_, i) => i);

  const getIntensity = (value, min, max) => {
    if (max === min) return 0;
    return (value - min) / (max - min);
  };

  const values = data?.flat()?.map(cell => cell?.[selectedMetric])?.filter(v => v !== undefined);
  const minValue = Math.min(...values);
  const maxValue = Math.max(...values);

  const getColor = (intensity) => {
    if (intensity < 0.2) return 'bg-blue-100';
    if (intensity < 0.4) return 'bg-blue-200';
    if (intensity < 0.6) return 'bg-blue-300';
    if (intensity < 0.8) return 'bg-blue-400';
    return 'bg-blue-500';
  };

  const formatValue = (value) => {
    if (selectedMetric === 'spend') return `$${value}`;
    if (selectedMetric === 'ctr') return `${value?.toFixed(1)}%`;
    if (selectedMetric === 'cpc') return `$${value?.toFixed(2)}`;
    return value?.toString();
  };

  return (
    <div className="bg-card border border-border rounded-lg p-4">
      <div className="flex items-center justify-between mb-4">
        <h3 className="text-lg font-semibold text-foreground">Performance Heatmap</h3>
        <div className="flex items-center space-x-2 text-sm text-muted-foreground">
          <span>Low</span>
          <div className="flex space-x-1">
            <div className="w-3 h-3 bg-blue-100 rounded-sm" />
            <div className="w-3 h-3 bg-blue-200 rounded-sm" />
            <div className="w-3 h-3 bg-blue-300 rounded-sm" />
            <div className="w-3 h-3 bg-blue-400 rounded-sm" />
            <div className="w-3 h-3 bg-blue-500 rounded-sm" />
          </div>
          <span>High</span>
        </div>
      </div>
      <div className="overflow-x-auto">
        <div className="min-w-max">
          {/* Hour labels */}
          <div className="flex mb-2">
            <div className="w-12" /> {/* Empty space for day labels */}
            {hours?.map(hour => (
              <div key={hour} className="w-8 text-xs text-center text-muted-foreground">
                {hour}
              </div>
            ))}
          </div>

          {/* Heatmap grid */}
          {days?.map((day, dayIndex) => (
            <div key={day} className="flex items-center mb-1">
              <div className="w-12 text-xs text-muted-foreground text-right pr-2">
                {day}
              </div>
              {hours?.map(hour => {
                const cellData = data?.[dayIndex]?.[hour];
                const value = cellData?.[selectedMetric] || 0;
                const intensity = getIntensity(value, minValue, maxValue);
                
                return (
                  <div
                    key={`${day}-${hour}`}
                    className={`w-8 h-6 m-0.5 rounded-sm cursor-pointer hover:ring-2 hover:ring-primary transition-all ${getColor(intensity)}`}
                    onClick={() => onCellClick(dayIndex, hour, cellData)}
                    title={`${day} ${hour}:00 - ${formatValue(value)}`}
                  />
                );
              })}
            </div>
          ))}
        </div>
      </div>
      <div className="mt-4 text-xs text-muted-foreground">
        Click on any cell to filter campaigns by time period
      </div>
    </div>
  );
};

export default PerformanceHeatmap;