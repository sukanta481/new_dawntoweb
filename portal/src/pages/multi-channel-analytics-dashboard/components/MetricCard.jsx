import React from 'react';
import Icon from '../../../components/AppIcon';

const MetricCard = ({ 
  title, 
  value, 
  change, 
  changeType, 
  sparklineData, 
  platform, 
  icon,
  color = '#3B82F6'
}) => {
  const isPositive = changeType === 'positive';
  const isNegative = changeType === 'negative';

  // Generate simple sparkline path
  const generateSparklinePath = (data) => {
    if (!data || data?.length === 0) return '';
    
    const width = 60;
    const height = 20;
    const max = Math.max(...data);
    const min = Math.min(...data);
    const range = max - min || 1;
    
    return data?.map((value, index) => {
      const x = (index / (data?.length - 1)) * width;
      const y = height - ((value - min) / range) * height;
      return `${index === 0 ? 'M' : 'L'} ${x} ${y}`;
    })?.join(' ');
  };

  return (
    <div className="bg-card rounded-lg border border-border p-4 hover:shadow-md transition-shadow duration-200">
      <div className="flex items-center justify-between mb-3">
        <div className="flex items-center space-x-2">
          <div 
            className="w-8 h-8 rounded-lg flex items-center justify-center"
            style={{ backgroundColor: `${color}20` }}
          >
            <Icon name={icon} size={16} color={color} />
          </div>
          <div>
            <h3 className="text-sm font-medium text-foreground">{title}</h3>
            <span className="text-xs text-muted-foreground">{platform}</span>
          </div>
        </div>
        
        {sparklineData && (
          <div className="w-16 h-6">
            <svg width="60" height="20" className="overflow-visible">
              <path
                d={generateSparklinePath(sparklineData)}
                stroke={color}
                strokeWidth="1.5"
                fill="none"
                className="drop-shadow-sm"
              />
            </svg>
          </div>
        )}
      </div>

      <div className="space-y-1">
        <div className="text-2xl font-semibold text-foreground">{value}</div>
        
        {change && (
          <div className="flex items-center space-x-1">
            <Icon 
              name={isPositive ? "TrendingUp" : isNegative ? "TrendingDown" : "Minus"} 
              size={14} 
              color={isPositive ? "#10B981" : isNegative ? "#EF4444" : "#6B7280"} 
            />
            <span 
              className={`text-sm font-medium ${
                isPositive ? 'text-success' : isNegative ? 'text-error' : 'text-muted-foreground'
              }`}
            >
              {change}
            </span>
            <span className="text-xs text-muted-foreground">vs last period</span>
          </div>
        )}
      </div>
    </div>
  );
};

export default MetricCard;