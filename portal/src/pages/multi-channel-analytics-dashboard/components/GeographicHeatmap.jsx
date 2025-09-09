import React, { useState } from 'react';
import Icon from '../../../components/AppIcon';
import Select from '../../../components/ui/Select';

const GeographicHeatmap = ({ data }) => {
  const [selectedMetric, setSelectedMetric] = useState('conversions');
  const [selectedRegion, setSelectedRegion] = useState(null);

  const metricOptions = [
    { value: 'conversions', label: 'Conversions' },
    { value: 'spend', label: 'Ad Spend' },
    { value: 'ctr', label: 'Click-Through Rate' },
    { value: 'cpa', label: 'Cost Per Acquisition' }
  ];

  const getIntensityColor = (value, max) => {
    const intensity = value / max;
    if (intensity > 0.8) return '#1E3A8A'; // Dark blue
    if (intensity > 0.6) return '#3B82F6'; // Blue
    if (intensity > 0.4) return '#60A5FA'; // Light blue
    if (intensity > 0.2) return '#93C5FD'; // Very light blue
    return '#DBEAFE'; // Lightest blue
  };

  const formatValue = (value, metric) => {
    switch (metric) {
      case 'spend':
        return `$${value?.toLocaleString()}`;
      case 'ctr':
        return `${value?.toFixed(2)}%`;
      case 'cpa':
        return `$${value?.toFixed(2)}`;
      default:
        return value?.toLocaleString();
    }
  };

  const maxValue = Math.max(...data?.map(region => region?.[selectedMetric]));

  return (
    <div className="bg-card rounded-lg border border-border p-6">
      <div className="flex items-center justify-between mb-6">
        <h3 className="text-lg font-semibold text-foreground">Geographic Performance</h3>
        <div className="flex items-center space-x-4">
          <Select
            options={metricOptions}
            value={selectedMetric}
            onChange={setSelectedMetric}
            className="w-48"
          />
          <Icon name="Map" size={20} color="var(--color-primary)" />
        </div>
      </div>
      {/* Mock Map Visualization */}
      <div className="relative bg-muted rounded-lg p-8 mb-6" style={{ minHeight: '400px' }}>
        <div className="absolute inset-0 flex items-center justify-center">
          <div className="text-center">
            <Icon name="MapPin" size={48} color="var(--color-muted-foreground)" className="mx-auto mb-4" />
            <h4 className="text-lg font-medium text-foreground mb-2">Interactive Geographic Heatmap</h4>
            <p className="text-sm text-muted-foreground mb-4">
              Visual representation of {selectedMetric} performance across regions
            </p>
            
            {/* Sample Map Regions */}
            <div className="grid grid-cols-2 md:grid-cols-3 gap-4 max-w-2xl mx-auto">
              {data?.slice(0, 6)?.map((region) => (
                <button
                  key={region?.id}
                  onClick={() => setSelectedRegion(region)}
                  className={`p-4 rounded-lg border-2 transition-all duration-200 hover:scale-105 ${
                    selectedRegion?.id === region?.id 
                      ? 'border-primary bg-primary/10' :'border-border hover:border-muted-foreground'
                  }`}
                  style={{ 
                    backgroundColor: getIntensityColor(region?.[selectedMetric], maxValue) + '40'
                  }}
                >
                  <div className="text-sm font-medium text-foreground mb-1">{region?.name}</div>
                  <div className="text-lg font-bold text-foreground">
                    {formatValue(region?.[selectedMetric], selectedMetric)}
                  </div>
                  <div className="text-xs text-muted-foreground">
                    {region?.percentage}% of total
                  </div>
                </button>
              ))}
            </div>
          </div>
        </div>
      </div>
      {/* Region Details */}
      {selectedRegion && (
        <div className="bg-muted rounded-lg p-4 border border-border">
          <div className="flex items-center justify-between mb-4">
            <h4 className="text-lg font-semibold text-foreground">{selectedRegion?.name}</h4>
            <button
              onClick={() => setSelectedRegion(null)}
              className="text-muted-foreground hover:text-foreground"
            >
              <Icon name="X" size={20} />
            </button>
          </div>
          
          <div className="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div className="text-center">
              <div className="text-2xl font-bold text-foreground">
                {selectedRegion?.conversions?.toLocaleString()}
              </div>
              <div className="text-sm text-muted-foreground">Conversions</div>
            </div>
            
            <div className="text-center">
              <div className="text-2xl font-bold text-foreground">
                ${selectedRegion?.spend?.toLocaleString()}
              </div>
              <div className="text-sm text-muted-foreground">Ad Spend</div>
            </div>
            
            <div className="text-center">
              <div className="text-2xl font-bold text-foreground">
                {selectedRegion?.ctr?.toFixed(2)}%
              </div>
              <div className="text-sm text-muted-foreground">CTR</div>
            </div>
            
            <div className="text-center">
              <div className="text-2xl font-bold text-foreground">
                ${selectedRegion?.cpa?.toFixed(2)}
              </div>
              <div className="text-sm text-muted-foreground">CPA</div>
            </div>
          </div>
        </div>
      )}
      {/* Legend */}
      <div className="flex items-center justify-between mt-6 pt-4 border-t border-border">
        <div className="flex items-center space-x-4">
          <span className="text-sm text-muted-foreground">Performance Intensity:</span>
          <div className="flex items-center space-x-2">
            <div className="w-4 h-4 rounded" style={{ backgroundColor: '#DBEAFE' }} />
            <span className="text-xs text-muted-foreground">Low</span>
            <div className="w-4 h-4 rounded" style={{ backgroundColor: '#60A5FA' }} />
            <span className="text-xs text-muted-foreground">Medium</span>
            <div className="w-4 h-4 rounded" style={{ backgroundColor: '#1E3A8A' }} />
            <span className="text-xs text-muted-foreground">High</span>
          </div>
        </div>
        
        <div className="text-sm text-muted-foreground">
          Click regions for detailed metrics
        </div>
      </div>
    </div>
  );
};

export default GeographicHeatmap;