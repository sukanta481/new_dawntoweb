import React from 'react';
import Icon from '../../../components/AppIcon';

const TopPerformingCampaigns = ({ campaigns, type = 'top' }) => {
  const getPerformanceIcon = (performance) => {
    if (performance === 'excellent') return 'TrendingUp';
    if (performance === 'good') return 'ArrowUp';
    if (performance === 'average') return 'Minus';
    return 'TrendingDown';
  };

  const getPerformanceColor = (performance) => {
    if (performance === 'excellent') return 'text-success';
    if (performance === 'good') return 'text-primary';
    if (performance === 'average') return 'text-warning';
    return 'text-error';
  };

  const getStatusBadge = (status) => {
    const statusConfig = {
      active: 'bg-success/10 text-success border-success/20',
      paused: 'bg-warning/10 text-warning border-warning/20',
      ended: 'bg-muted text-muted-foreground border-border'
    };
    
    return statusConfig?.[status] || statusConfig?.active;
  };

  return (
    <div className="bg-card border border-border rounded-lg p-6">
      <div className="flex items-center justify-between mb-4">
        <h3 className="text-lg font-semibold text-foreground">
          {type === 'top' ? 'Top Performing' : 'Needs Attention'}
        </h3>
        <Icon 
          name={type === 'top' ? 'Award' : 'AlertTriangle'} 
          size={20} 
          className={type === 'top' ? 'text-success' : 'text-warning'}
        />
      </div>
      <div className="space-y-4">
        {campaigns?.map((campaign, index) => (
          <div key={campaign?.id} className="flex items-center space-x-3 p-3 rounded-lg hover:bg-muted/50 transition-colors duration-200">
            <div className="flex-shrink-0">
              <div className={`w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold ${
                type === 'top' ? 'bg-success/10 text-success' : 'bg-warning/10 text-warning'
              }`}>
                {index + 1}
              </div>
            </div>
            
            <div className="flex-1 min-w-0">
              <div className="flex items-center justify-between mb-1">
                <h4 className="text-sm font-medium text-foreground truncate">{campaign?.name}</h4>
                <div className={`px-2 py-1 rounded-full text-xs font-medium border ${getStatusBadge(campaign?.status)}`}>
                  {campaign?.status}
                </div>
              </div>
              
              <div className="flex items-center justify-between text-xs text-muted-foreground">
                <span>ROAS: {campaign?.roas}x</span>
                <span>CTR: {campaign?.ctr}%</span>
              </div>
              
              <div className="flex items-center justify-between mt-2">
                <span className="text-xs text-muted-foreground">
                  Spend: ${campaign?.spend?.toLocaleString()}
                </span>
                <div className={`flex items-center space-x-1 ${getPerformanceColor(campaign?.performance)}`}>
                  <Icon name={getPerformanceIcon(campaign?.performance)} size={12} />
                  <span className="text-xs font-medium">{campaign?.changePercent}</span>
                </div>
              </div>
            </div>
          </div>
        ))}
      </div>
      <div className="mt-4 pt-4 border-t border-border">
        <button className="text-sm text-primary hover:text-primary/80 font-medium w-full text-center">
          View all campaigns
        </button>
      </div>
    </div>
  );
};

export default TopPerformingCampaigns;