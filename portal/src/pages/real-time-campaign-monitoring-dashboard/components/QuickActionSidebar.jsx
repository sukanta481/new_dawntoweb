import React from 'react';

import Button from '../../../components/ui/Button';
import Select from '../../../components/ui/Select';

const QuickActionSidebar = ({ campaigns, onCampaignAction, onBudgetAdjustment, onRuleTrigger }) => {
  const actionOptions = [
    { value: 'pause', label: 'Pause Campaign' },
    { value: 'resume', label: 'Resume Campaign' },
    { value: 'increase_budget', label: 'Increase Budget' },
    { value: 'decrease_budget', label: 'Decrease Budget' }
  ];

  const ruleOptions = [
    { value: 'auto_pause_low_ctr', label: 'Auto-pause Low CTR' },
    { value: 'budget_alert_80', label: 'Budget Alert at 80%' },
    { value: 'bid_optimization', label: 'Auto Bid Optimization' },
    { value: 'dayparting_rule', label: 'Dayparting Rule' }
  ];

  return (
    <div className="bg-card border border-border rounded-lg p-4">
      <h3 className="text-lg font-semibold text-foreground mb-4">Quick Actions</h3>
      {/* Emergency Controls */}
      <div className="mb-6">
        <h4 className="text-sm font-medium text-foreground mb-3">Emergency Controls</h4>
        <div className="space-y-2">
          <Button
            variant="destructive"
            size="sm"
            fullWidth
            iconName="Pause"
            iconPosition="left"
            onClick={() => onCampaignAction('pause_all')}
          >
            Pause All Campaigns
          </Button>
          <Button
            variant="warning"
            size="sm"
            fullWidth
            iconName="AlertTriangle"
            iconPosition="left"
            onClick={() => onCampaignAction('emergency_budget_stop')}
          >
            Emergency Budget Stop
          </Button>
        </div>
      </div>
      {/* Campaign Controls */}
      <div className="mb-6">
        <h4 className="text-sm font-medium text-foreground mb-3">Campaign Controls</h4>
        <div className="space-y-3">
          {campaigns?.slice(0, 5)?.map((campaign) => (
            <div key={campaign?.id} className="border border-border rounded-lg p-3">
              <div className="flex items-center justify-between mb-2">
                <span className="text-sm font-medium text-foreground truncate">
                  {campaign?.name}
                </span>
                <div className={`w-2 h-2 rounded-full ${
                  campaign?.status === 'active' ? 'bg-success' : 'bg-error'
                }`} />
              </div>
              <div className="flex items-center space-x-2">
                <Button
                  variant="outline"
                  size="xs"
                  iconName={campaign?.status === 'active' ? 'Pause' : 'Play'}
                  onClick={() => onCampaignAction(
                    campaign?.status === 'active' ? 'pause' : 'resume',
                    campaign?.id
                  )}
                >
                  {campaign?.status === 'active' ? 'Pause' : 'Resume'}
                </Button>
                <Button
                  variant="ghost"
                  size="xs"
                  iconName="Settings"
                  onClick={() => onCampaignAction('settings', campaign?.id)}
                />
              </div>
            </div>
          ))}
        </div>
      </div>
      {/* Budget Adjustments */}
      <div className="mb-6">
        <h4 className="text-sm font-medium text-foreground mb-3">Budget Adjustments</h4>
        <div className="space-y-3">
          <div className="flex items-center space-x-2">
            <Button
              variant="outline"
              size="sm"
              iconName="Minus"
              onClick={() => onBudgetAdjustment('decrease', 10)}
            >
              -10%
            </Button>
            <Button
              variant="outline"
              size="sm"
              iconName="Plus"
              onClick={() => onBudgetAdjustment('increase', 10)}
            >
              +10%
            </Button>
          </div>
          <div className="flex items-center space-x-2">
            <Button
              variant="outline"
              size="sm"
              iconName="Minus"
              onClick={() => onBudgetAdjustment('decrease', 25)}
            >
              -25%
            </Button>
            <Button
              variant="outline"
              size="sm"
              iconName="Plus"
              onClick={() => onBudgetAdjustment('increase', 25)}
            >
              +25%
            </Button>
          </div>
        </div>
      </div>
      {/* Automated Rules */}
      <div>
        <h4 className="text-sm font-medium text-foreground mb-3">Automated Rules</h4>
        <div className="space-y-3">
          <Select
            options={ruleOptions}
            placeholder="Select rule to trigger"
            onChange={(value) => onRuleTrigger(value)}
            className="w-full"
          />
          <Button
            variant="secondary"
            size="sm"
            fullWidth
            iconName="Zap"
            iconPosition="left"
            onClick={() => onRuleTrigger('create_new')}
          >
            Create New Rule
          </Button>
        </div>
      </div>
    </div>
  );
};

export default QuickActionSidebar;