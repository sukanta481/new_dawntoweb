import React from 'react';
import Icon from '../../../components/AppIcon';

const LiveStatusBar = ({ activeCampaigns, currentSpendRate, systemHealth, connectionStatus }) => {
  return (
    <div className="bg-card border border-border rounded-lg p-4 mb-6">
      <div className="grid grid-cols-1 md:grid-cols-4 gap-4">
        {/* Active Campaigns */}
        <div className="flex items-center space-x-3">
          <div className="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center">
            <Icon name="Play" size={20} color="var(--color-primary)" />
          </div>
          <div>
            <p className="text-sm text-muted-foreground">Active Campaigns</p>
            <p className="text-xl font-semibold text-foreground">{activeCampaigns}</p>
          </div>
        </div>

        {/* Current Spend Rate */}
        <div className="flex items-center space-x-3">
          <div className="w-10 h-10 bg-warning/10 rounded-lg flex items-center justify-center">
            <Icon name="DollarSign" size={20} color="var(--color-warning)" />
          </div>
          <div>
            <p className="text-sm text-muted-foreground">Spend Rate/Hour</p>
            <p className="text-xl font-semibold text-foreground">${currentSpendRate}</p>
          </div>
        </div>

        {/* System Health */}
        <div className="flex items-center space-x-3">
          <div className={`w-10 h-10 rounded-lg flex items-center justify-center ${
            systemHealth === 'healthy' ? 'bg-success/10' : 'bg-error/10'
          }`}>
            <Icon 
              name={systemHealth === 'healthy' ? 'CheckCircle' : 'AlertTriangle'} 
              size={20} 
              color={systemHealth === 'healthy' ? 'var(--color-success)' : 'var(--color-error)'} 
            />
          </div>
          <div>
            <p className="text-sm text-muted-foreground">System Health</p>
            <p className={`text-xl font-semibold capitalize ${
              systemHealth === 'healthy' ? 'text-success' : 'text-error'
            }`}>
              {systemHealth}
            </p>
          </div>
        </div>

        {/* Connection Status */}
        <div className="flex items-center space-x-3">
          <div className="flex items-center space-x-2">
            <div className={`w-3 h-3 rounded-full ${
              connectionStatus ? 'bg-success animate-pulse' : 'bg-error'
            }`} />
            <div className={`w-10 h-10 rounded-lg flex items-center justify-center ${
              connectionStatus ? 'bg-success/10' : 'bg-error/10'
            }`}>
              <Icon 
                name={connectionStatus ? 'Wifi' : 'WifiOff'} 
                size={20} 
                color={connectionStatus ? 'var(--color-success)' : 'var(--color-error)'} 
              />
            </div>
          </div>
          <div>
            <p className="text-sm text-muted-foreground">Connection</p>
            <p className={`text-xl font-semibold ${
              connectionStatus ? 'text-success' : 'text-error'
            }`}>
              {connectionStatus ? 'Live' : 'Offline'}
            </p>
          </div>
        </div>
      </div>
    </div>
  );
};

export default LiveStatusBar;