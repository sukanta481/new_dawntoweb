import React from 'react';
import Icon from '../../../components/AppIcon';
import Button from '../../../components/ui/Button';

const BudgetAllocationPanel = ({ recommendations, anomalies }) => {
  const getSeverityColor = (severity) => {
    switch (severity) {
      case 'high':
        return 'text-error bg-red-50 border-red-200';
      case 'medium':
        return 'text-warning bg-yellow-50 border-yellow-200';
      case 'low':
        return 'text-success bg-green-50 border-green-200';
      default:
        return 'text-muted-foreground bg-muted border-border';
    }
  };

  const getSeverityIcon = (severity) => {
    switch (severity) {
      case 'high':
        return 'AlertTriangle';
      case 'medium':
        return 'AlertCircle';
      case 'low':
        return 'Info';
      default:
        return 'Bell';
    }
  };

  return (
    <div className="space-y-6">
      {/* Budget Recommendations */}
      <div className="bg-card rounded-lg border border-border p-6">
        <div className="flex items-center justify-between mb-4">
          <h3 className="text-lg font-semibold text-foreground">Budget Recommendations</h3>
          <Icon name="TrendingUp" size={20} color="var(--color-success)" />
        </div>
        
        <div className="space-y-4">
          {recommendations?.map((rec) => (
            <div key={rec?.id} className="border border-border rounded-lg p-4">
              <div className="flex items-start justify-between mb-2">
                <div className="flex items-center space-x-2">
                  <div 
                    className="w-3 h-3 rounded-full"
                    style={{ backgroundColor: rec?.color }}
                  />
                  <h4 className="font-medium text-foreground">{rec?.channel}</h4>
                </div>
                <span className={`text-sm px-2 py-1 rounded-full ${
                  rec?.impact === 'high' ? 'bg-success text-white' :
                  rec?.impact === 'medium'? 'bg-warning text-white' : 'bg-muted text-muted-foreground'
                }`}>
                  {rec?.impact} impact
                </span>
              </div>
              
              <p className="text-sm text-muted-foreground mb-3">{rec?.description}</p>
              
              <div className="flex items-center justify-between">
                <div className="flex items-center space-x-4 text-sm">
                  <span className="text-muted-foreground">Current: ${rec?.currentBudget?.toLocaleString()}</span>
                  <Icon name="ArrowRight" size={16} color="var(--color-muted-foreground)" />
                  <span className="font-medium text-foreground">Suggested: ${rec?.suggestedBudget?.toLocaleString()}</span>
                </div>
                
                <div className="flex items-center space-x-2">
                  <span className={`text-sm font-medium ${
                    rec?.expectedLift > 0 ? 'text-success' : 'text-error'
                  }`}>
                    {rec?.expectedLift > 0 ? '+' : ''}{rec?.expectedLift}% ROI
                  </span>
                  <Button variant="outline" size="sm">
                    Apply
                  </Button>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
      {/* Anomaly Detection */}
      <div className="bg-card rounded-lg border border-border p-6">
        <div className="flex items-center justify-between mb-4">
          <h3 className="text-lg font-semibold text-foreground">Anomaly Detection</h3>
          <div className="flex items-center space-x-2">
            <div className="w-2 h-2 bg-success rounded-full animate-pulse" />
            <span className="text-sm text-muted-foreground">Live monitoring</span>
          </div>
        </div>
        
        <div className="space-y-3">
          {anomalies?.map((anomaly) => (
            <div 
              key={anomaly?.id} 
              className={`border rounded-lg p-4 ${getSeverityColor(anomaly?.severity)}`}
            >
              <div className="flex items-start space-x-3">
                <Icon 
                  name={getSeverityIcon(anomaly?.severity)} 
                  size={20} 
                  className="mt-0.5 flex-shrink-0"
                />
                
                <div className="flex-1 min-w-0">
                  <div className="flex items-center justify-between mb-1">
                    <h4 className="font-medium text-sm">{anomaly?.title}</h4>
                    <span className="text-xs opacity-75">{anomaly?.timestamp}</span>
                  </div>
                  
                  <p className="text-sm opacity-90 mb-2">{anomaly?.description}</p>
                  
                  <div className="flex items-center justify-between">
                    <div className="flex items-center space-x-4 text-xs">
                      <span>Channel: {anomaly?.channel}</span>
                      <span>Metric: {anomaly?.metric}</span>
                      <span>Change: {anomaly?.change}</span>
                    </div>
                    
                    <div className="flex items-center space-x-2">
                      <Button variant="ghost" size="xs">
                        Investigate
                      </Button>
                      <Button variant="ghost" size="xs">
                        Dismiss
                      </Button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          ))}
        </div>
        
        {anomalies?.length === 0 && (
          <div className="text-center py-8">
            <Icon name="CheckCircle" size={48} color="var(--color-success)" className="mx-auto mb-3" />
            <h4 className="font-medium text-foreground mb-1">All Clear</h4>
            <p className="text-sm text-muted-foreground">No anomalies detected in the last 24 hours</p>
          </div>
        )}
      </div>
    </div>
  );
};

export default BudgetAllocationPanel;