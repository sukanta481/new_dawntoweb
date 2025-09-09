import React from 'react';
import Icon from '../../../components/AppIcon';

const FunnelAnalysisChart = ({ data }) => {
  const maxValue = Math.max(...data?.map(stage => stage?.value));
  
  const getStageColor = (index) => {
    const colors = ['#3B82F6', '#10B981', '#F59E0B', '#EF4444', '#8B5CF6'];
    return colors?.[index % colors?.length];
  };

  const calculateConversionRate = (current, previous) => {
    if (!previous) return null;
    return ((current / previous) * 100)?.toFixed(1);
  };

  return (
    <div className="bg-card rounded-lg border border-border p-6">
      <div className="flex items-center justify-between mb-6">
        <h3 className="text-lg font-semibold text-foreground">Conversion Funnel Analysis</h3>
        <div className="flex items-center space-x-2 text-sm text-muted-foreground">
          <Icon name="Users" size={16} />
          <span>Total Users: {data?.[0]?.value?.toLocaleString()}</span>
        </div>
      </div>
      <div className="space-y-4">
        {data?.map((stage, index) => {
          const widthPercentage = (stage?.value / maxValue) * 100;
          const conversionRate = calculateConversionRate(stage?.value, data?.[index - 1]?.value);
          const color = getStageColor(index);
          
          return (
            <div key={stage?.id} className="relative">
              {/* Stage Bar */}
              <div className="relative">
                <div 
                  className="h-16 rounded-lg flex items-center justify-between px-6 text-white font-medium shadow-sm"
                  style={{ 
                    backgroundColor: color,
                    width: `${Math.max(widthPercentage, 20)}%` // Minimum 20% width for readability
                  }}
                >
                  <div className="flex items-center space-x-3">
                    <Icon name={stage?.icon} size={20} color="white" />
                    <span className="text-lg">{stage?.name}</span>
                  </div>
                  
                  <div className="text-right">
                    <div className="text-xl font-bold">{stage?.value?.toLocaleString()}</div>
                    <div className="text-sm opacity-90">{stage?.channel}</div>
                  </div>
                </div>
                
                {/* Conversion Rate Badge */}
                {conversionRate && (
                  <div className="absolute -right-16 top-1/2 transform -translate-y-1/2">
                    <div className="bg-muted border border-border rounded-lg px-3 py-2 text-center">
                      <div className="text-sm font-medium text-foreground">{conversionRate}%</div>
                      <div className="text-xs text-muted-foreground">conv. rate</div>
                    </div>
                  </div>
                )}
              </div>
              {/* Drop-off Indicator */}
              {index < data?.length - 1 && (
                <div className="flex items-center justify-center py-2">
                  <div className="flex items-center space-x-2 text-sm text-muted-foreground">
                    <Icon name="ArrowDown" size={16} />
                    <span>
                      {(data?.[index]?.value - data?.[index + 1]?.value)?.toLocaleString()} users dropped off
                    </span>
                  </div>
                </div>
              )}
            </div>
          );
        })}
      </div>
      {/* Summary Statistics */}
      <div className="mt-6 pt-6 border-t border-border">
        <div className="grid grid-cols-2 md:grid-cols-4 gap-4">
          <div className="text-center">
            <div className="text-2xl font-bold text-foreground">
              {((data?.[data?.length - 1]?.value / data?.[0]?.value) * 100)?.toFixed(1)}%
            </div>
            <div className="text-sm text-muted-foreground">Overall Conversion</div>
          </div>
          
          <div className="text-center">
            <div className="text-2xl font-bold text-foreground">
              {data?.reduce((sum, stage) => sum + stage?.value, 0)?.toLocaleString()}
            </div>
            <div className="text-sm text-muted-foreground">Total Interactions</div>
          </div>
          
          <div className="text-center">
            <div className="text-2xl font-bold text-foreground">
              {data?.length}
            </div>
            <div className="text-sm text-muted-foreground">Funnel Stages</div>
          </div>
          
          <div className="text-center">
            <div className="text-2xl font-bold text-foreground">
              ${(data?.[data?.length - 1]?.value * 45.50)?.toLocaleString()}
            </div>
            <div className="text-sm text-muted-foreground">Est. Revenue</div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default FunnelAnalysisChart;