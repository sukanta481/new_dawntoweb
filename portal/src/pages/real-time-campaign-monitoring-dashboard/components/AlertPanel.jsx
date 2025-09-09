import React from 'react';
import Icon from '../../../components/AppIcon';
import Button from '../../../components/ui/Button';

const AlertPanel = ({ alerts, onActionClick }) => {
  const getSeverityColor = (severity) => {
    switch (severity) {
      case 'critical':
        return 'border-error bg-error/5 text-error';
      case 'warning':
        return 'border-warning bg-warning/5 text-warning';
      case 'info':
        return 'border-primary bg-primary/5 text-primary';
      default:
        return 'border-border bg-muted/5 text-muted-foreground';
    }
  };

  const getSeverityIcon = (severity) => {
    switch (severity) {
      case 'critical':
        return 'AlertTriangle';
      case 'warning':
        return 'AlertCircle';
      case 'info':
        return 'Info';
      default:
        return 'Bell';
    }
  };

  return (
    <div className="bg-card border border-border rounded-lg p-4">
      <div className="flex items-center justify-between mb-4">
        <h3 className="text-lg font-semibold text-foreground">Active Alerts</h3>
        <div className="flex items-center space-x-2">
          <div className="w-2 h-2 bg-error rounded-full animate-pulse" />
          <span className="text-sm text-muted-foreground">{alerts?.length} alerts</span>
        </div>
      </div>
      <div className="space-y-3 max-h-96 overflow-y-auto">
        {alerts?.map((alert) => (
          <div
            key={alert?.id}
            className={`border rounded-lg p-3 ${getSeverityColor(alert?.severity)}`}
          >
            <div className="flex items-start space-x-3">
              <Icon 
                name={getSeverityIcon(alert?.severity)} 
                size={18} 
                className="mt-0.5 flex-shrink-0"
              />
              <div className="flex-1 min-w-0">
                <div className="flex items-center justify-between mb-1">
                  <h4 className="text-sm font-medium truncate">{alert?.title}</h4>
                  <span className="text-xs opacity-75">{alert?.timestamp}</span>
                </div>
                <p className="text-xs opacity-90 mb-2">{alert?.message}</p>
                <div className="flex items-center space-x-2">
                  <Button
                    variant="outline"
                    size="xs"
                    onClick={() => onActionClick(alert?.id, alert?.primaryAction)}
                    className="text-xs"
                  >
                    {alert?.primaryAction}
                  </Button>
                  {alert?.secondaryAction && (
                    <Button
                      variant="ghost"
                      size="xs"
                      onClick={() => onActionClick(alert?.id, alert?.secondaryAction)}
                      className="text-xs"
                    >
                      {alert?.secondaryAction}
                    </Button>
                  )}
                </div>
              </div>
            </div>
          </div>
        ))}
      </div>
      {alerts?.length === 0 && (
        <div className="text-center py-8">
          <Icon name="CheckCircle" size={48} color="var(--color-success)" className="mx-auto mb-2" />
          <p className="text-sm text-muted-foreground">No active alerts</p>
          <p className="text-xs text-muted-foreground">All campaigns running smoothly</p>
        </div>
      )}
    </div>
  );
};

export default AlertPanel;