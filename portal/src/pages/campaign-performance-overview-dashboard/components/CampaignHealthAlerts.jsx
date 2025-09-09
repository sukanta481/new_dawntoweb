import React from 'react';
import Icon from '../../../components/AppIcon';

const CampaignHealthAlerts = ({ alerts }) => {
  const getAlertIcon = (type) => {
    switch (type) {
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

  const getAlertColor = (type) => {
    switch (type) {
      case 'critical':
        return 'text-error bg-error/10 border-error/20';
      case 'warning':
        return 'text-warning bg-warning/10 border-warning/20';
      case 'info':
        return 'text-primary bg-primary/10 border-primary/20';
      default:
        return 'text-muted-foreground bg-muted border-border';
    }
  };

  return (
    <div className="bg-card border border-border rounded-lg p-6">
      <div className="flex items-center justify-between mb-4">
        <h3 className="text-lg font-semibold text-foreground">Campaign Health</h3>
        <div className="flex items-center space-x-2">
          <div className="w-2 h-2 bg-success rounded-full animate-pulse"></div>
          <span className="text-xs text-muted-foreground">Live</span>
        </div>
      </div>
      <div className="space-y-3">
        {alerts?.length === 0 ? (
          <div className="text-center py-8">
            <Icon name="CheckCircle" size={48} className="text-success mx-auto mb-3" />
            <p className="text-sm text-muted-foreground">All campaigns are healthy</p>
          </div>
        ) : (
          alerts?.map((alert) => (
            <div
              key={alert?.id}
              className={`flex items-start space-x-3 p-3 rounded-lg border ${getAlertColor(alert?.type)}`}
            >
              <Icon name={getAlertIcon(alert?.type)} size={16} className="mt-0.5 flex-shrink-0" />
              <div className="flex-1 min-w-0">
                <p className="text-sm font-medium">{alert?.campaign}</p>
                <p className="text-xs opacity-80 mt-1">{alert?.message}</p>
                <p className="text-xs opacity-60 mt-1">{alert?.timestamp}</p>
              </div>
            </div>
          ))
        )}
      </div>
      {alerts?.length > 0 && (
        <div className="mt-4 pt-4 border-t border-border">
          <button className="text-sm text-primary hover:text-primary/80 font-medium">
            View all alerts ({alerts?.length})
          </button>
        </div>
      )}
    </div>
  );
};

export default CampaignHealthAlerts;