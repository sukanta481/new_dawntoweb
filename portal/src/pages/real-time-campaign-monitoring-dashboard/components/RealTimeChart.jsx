import React, { useMemo } from 'react';
import { LineChart, Line, XAxis, YAxis, CartesianGrid, Tooltip, ResponsiveContainer, ReferenceLine } from 'recharts';

const RealTimeChart = ({ data, campaigns, selectedMetric, thresholds }) => {
  const colors = ['#3B82F6', '#10B981', '#F59E0B', '#EF4444', '#8B5CF6', '#06B6D4'];

  const formatTooltip = (value, name) => {
    if (selectedMetric === 'spend') {
      return [`$${value?.toLocaleString()}`, name];
    } else if (selectedMetric === 'ctr') {
      return [`${value?.toFixed(2)}%`, name];
    } else if (selectedMetric === 'cpc') {
      return [`$${value?.toFixed(2)}`, name];
    }
    return [value?.toLocaleString(), name];
  };

  const formatYAxis = (value) => {
    if (selectedMetric === 'spend' || selectedMetric === 'cpc') {
      return `$${value}`;
    } else if (selectedMetric === 'ctr') {
      return `${value}%`;
    }
    return value;
  };

  const threshold = thresholds?.[selectedMetric];

  return (
    <div className="bg-card border border-border rounded-lg p-4">
      <div className="flex items-center justify-between mb-4">
        <h3 className="text-lg font-semibold text-foreground">Real-Time Performance</h3>
        <div className="flex items-center space-x-2">
          <div className="w-2 h-2 bg-success rounded-full animate-pulse" />
          <span className="text-sm text-muted-foreground">Live data</span>
        </div>
      </div>
      <div className="h-80">
        <ResponsiveContainer width="100%" height="100%">
          <LineChart data={data} margin={{ top: 5, right: 30, left: 20, bottom: 5 }}>
            <CartesianGrid strokeDasharray="3 3" stroke="var(--color-border)" />
            <XAxis 
              dataKey="time" 
              stroke="var(--color-muted-foreground)"
              fontSize={12}
            />
            <YAxis 
              stroke="var(--color-muted-foreground)"
              fontSize={12}
              tickFormatter={formatYAxis}
            />
            <Tooltip 
              formatter={formatTooltip}
              labelStyle={{ color: 'var(--color-foreground)' }}
              contentStyle={{
                backgroundColor: 'var(--color-card)',
                border: '1px solid var(--color-border)',
                borderRadius: '8px'
              }}
            />
            
            {threshold && (
              <ReferenceLine 
                y={threshold} 
                stroke="var(--color-error)" 
                strokeDasharray="5 5"
                label={{ value: "Threshold", position: "topRight" }}
              />
            )}

            {campaigns?.map((campaign, index) => (
              <Line
                key={campaign?.id}
                type="monotone"
                dataKey={campaign?.id}
                stroke={colors?.[index % colors?.length]}
                strokeWidth={2}
                dot={false}
                activeDot={{ r: 4, fill: colors?.[index % colors?.length] }}
                name={campaign?.name}
              />
            ))}
          </LineChart>
        </ResponsiveContainer>
      </div>
      <div className="flex flex-wrap gap-2 mt-4">
        {campaigns?.map((campaign, index) => (
          <div key={campaign?.id} className="flex items-center space-x-2">
            <div 
              className="w-3 h-3 rounded-full"
              style={{ backgroundColor: colors?.[index % colors?.length] }}
            />
            <span className="text-sm text-muted-foreground">{campaign?.name}</span>
          </div>
        ))}
      </div>
    </div>
  );
};

export default RealTimeChart;