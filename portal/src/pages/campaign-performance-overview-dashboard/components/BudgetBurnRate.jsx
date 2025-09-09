import React from 'react';
import Icon from '../../../components/AppIcon';

const BudgetBurnRate = ({ campaigns }) => {
  const getBurnRateColor = (percentage) => {
    if (percentage >= 90) return 'text-error';
    if (percentage >= 75) return 'text-warning';
    return 'text-success';
  };

  const getBurnRateIcon = (percentage) => {
    if (percentage >= 90) return 'AlertTriangle';
    if (percentage >= 75) return 'AlertCircle';
    return 'TrendingUp';
  };

  return (
    <div className="bg-card border border-border rounded-lg p-6">
      <div className="flex items-center justify-between mb-4">
        <h3 className="text-lg font-semibold text-foreground">Budget Burn Rate</h3>
        <Icon name="DollarSign" size={20} className="text-muted-foreground" />
      </div>
      <div className="space-y-4">
        {campaigns?.map((campaign) => (
          <div key={campaign?.id} className="space-y-2">
            <div className="flex items-center justify-between">
              <span className="text-sm font-medium text-foreground truncate">{campaign?.name}</span>
              <div className="flex items-center space-x-2">
                <Icon 
                  name={getBurnRateIcon(campaign?.burnRate)} 
                  size={14} 
                  className={getBurnRateColor(campaign?.burnRate)}
                />
                <span className={`text-sm font-medium ${getBurnRateColor(campaign?.burnRate)}`}>
                  {campaign?.burnRate}%
                </span>
              </div>
            </div>
            
            <div className="w-full bg-muted rounded-full h-2">
              <div
                className={`h-2 rounded-full transition-all duration-300 ${
                  campaign?.burnRate >= 90 
                    ? 'bg-error' 
                    : campaign?.burnRate >= 75 
                    ? 'bg-warning' :'bg-success'
                }`}
                style={{ width: `${Math.min(campaign?.burnRate, 100)}%` }}
              ></div>
            </div>
            
            <div className="flex justify-between text-xs text-muted-foreground">
              <span>Spent: ${campaign?.spent?.toLocaleString()}</span>
              <span>Budget: ${campaign?.budget?.toLocaleString()}</span>
            </div>
          </div>
        ))}
      </div>
      <div className="mt-4 pt-4 border-t border-border">
        <div className="flex items-center justify-between text-sm">
          <span className="text-muted-foreground">Total Budget Utilization</span>
          <span className="font-medium text-foreground">
            {Math.round(campaigns?.reduce((acc, c) => acc + c?.burnRate, 0) / campaigns?.length)}%
          </span>
        </div>
      </div>
    </div>
  );
};

export default BudgetBurnRate;