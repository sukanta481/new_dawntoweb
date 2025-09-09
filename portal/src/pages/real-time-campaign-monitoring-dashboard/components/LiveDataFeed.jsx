import React from 'react';
import Icon from '../../../components/AppIcon';

const LiveDataFeed = ({ feedData }) => {
  const getEventIcon = (type) => {
    switch (type) {
      case 'conversion':
        return 'Target';
      case 'click':
        return 'MousePointer';
      case 'impression':
        return 'Eye';
      case 'budget_alert':
        return 'AlertTriangle';
      default:
        return 'Activity';
    }
  };

  const getEventColor = (type) => {
    switch (type) {
      case 'conversion':
        return 'text-success bg-success/10';
      case 'click':
        return 'text-primary bg-primary/10';
      case 'impression':
        return 'text-muted-foreground bg-muted/10';
      case 'budget_alert':
        return 'text-warning bg-warning/10';
      default:
        return 'text-muted-foreground bg-muted/10';
    }
  };

  const formatValue = (type, value) => {
    if (type === 'conversion' && value?.revenue) {
      return `$${value?.revenue}`;
    }
    if (type === 'click' && value?.cpc) {
      return `$${value?.cpc}`;
    }
    return value?.toString();
  };

  return (
    <div className="bg-card border border-border rounded-lg p-4">
      <div className="flex items-center justify-between mb-4">
        <h3 className="text-lg font-semibold text-foreground">Live Data Feed</h3>
        <div className="flex items-center space-x-2">
          <div className="w-2 h-2 bg-success rounded-full animate-pulse" />
          <span className="text-sm text-muted-foreground">Real-time</span>
        </div>
      </div>
      <div className="space-y-2 max-h-80 overflow-y-auto">
        {feedData?.map((event) => (
          <div
            key={event?.id}
            className="flex items-center space-x-3 p-2 rounded-lg hover:bg-muted/50 transition-colors"
          >
            <div className={`w-8 h-8 rounded-lg flex items-center justify-center ${getEventColor(event?.type)}`}>
              <Icon name={getEventIcon(event?.type)} size={16} />
            </div>
            
            <div className="flex-1 min-w-0">
              <div className="flex items-center justify-between">
                <p className="text-sm font-medium text-foreground truncate">
                  {event?.campaign}
                </p>
                <span className="text-xs text-muted-foreground">
                  {event?.timestamp}
                </span>
              </div>
              <div className="flex items-center justify-between">
                <p className="text-xs text-muted-foreground">
                  {event?.description}
                </p>
                {event?.value && (
                  <span className="text-xs font-medium text-foreground">
                    {formatValue(event?.type, event?.value)}
                  </span>
                )}
              </div>
            </div>
          </div>
        ))}
      </div>
      {feedData?.length === 0 && (
        <div className="text-center py-8">
          <Icon name="Activity" size={48} color="var(--color-muted-foreground)" className="mx-auto mb-2" />
          <p className="text-sm text-muted-foreground">No recent activity</p>
          <p className="text-xs text-muted-foreground">Waiting for live data...</p>
        </div>
      )}
    </div>
  );
};

export default LiveDataFeed;