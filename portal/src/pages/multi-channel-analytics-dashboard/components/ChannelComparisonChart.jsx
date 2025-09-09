import React from 'react';
import { BarChart, Bar, XAxis, YAxis, CartesianGrid, Tooltip, Legend, ResponsiveContainer } from 'recharts';

const ChannelComparisonChart = ({ data, selectedMetric = 'conversions' }) => {
  const platformColors = {
    'Google Ads': '#4285F4',
    'Facebook': '#1877F2',
    'LinkedIn': '#0A66C2',
    'Twitter': '#1DA1F2',
    'Instagram': '#E4405F',
    'YouTube': '#FF0000'
  };

  const formatValue = (value, metric) => {
    switch (metric) {
      case 'spend':
        return `$${value?.toLocaleString()}`;
      case 'ctr': case'conversionRate':
        return `${value?.toFixed(2)}%`;
      case 'cpc': case'cpa':
        return `$${value?.toFixed(2)}`;
      default:
        return value?.toLocaleString();
    }
  };

  const CustomTooltip = ({ active, payload, label }) => {
    if (active && payload && payload?.length) {
      return (
        <div className="bg-card border border-border rounded-lg shadow-lg p-3">
          <p className="font-medium text-foreground mb-2">{label}</p>
          {payload?.map((entry, index) => (
            <div key={index} className="flex items-center space-x-2 text-sm">
              <div 
                className="w-3 h-3 rounded-full"
                style={{ backgroundColor: entry?.color }}
              />
              <span className="text-muted-foreground">{entry?.dataKey}:</span>
              <span className="font-medium text-foreground">
                {formatValue(entry?.value, selectedMetric)}
              </span>
            </div>
          ))}
        </div>
      );
    }
    return null;
  };

  return (
    <div className="w-full h-80">
      <ResponsiveContainer width="100%" height="100%">
        <BarChart
          data={data}
          margin={{ top: 20, right: 30, left: 20, bottom: 5 }}
        >
          <CartesianGrid strokeDasharray="3 3" stroke="#E5E7EB" />
          <XAxis 
            dataKey="channel" 
            tick={{ fontSize: 12, fill: '#6B7280' }}
            axisLine={{ stroke: '#E5E7EB' }}
          />
          <YAxis 
            tick={{ fontSize: 12, fill: '#6B7280' }}
            axisLine={{ stroke: '#E5E7EB' }}
            tickFormatter={(value) => formatValue(value, selectedMetric)}
          />
          <Tooltip content={<CustomTooltip />} />
          <Legend 
            wrapperStyle={{ fontSize: '12px', color: '#6B7280' }}
          />
          
          {Object.keys(platformColors)?.map((platform) => (
            <Bar
              key={platform}
              dataKey={selectedMetric}
              fill={platformColors?.[platform]}
              radius={[4, 4, 0, 0]}
              name={platform}
            />
          ))}
        </BarChart>
      </ResponsiveContainer>
    </div>
  );
};

export default ChannelComparisonChart;