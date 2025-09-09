import React, { useState } from 'react';
import Select from '../../../components/ui/Select';
import Button from '../../../components/ui/Button';


const GlobalControls = ({ onCampaignChange, onDateRangeChange, onRefresh }) => {
  const [selectedCampaigns, setSelectedCampaigns] = useState(['all']);
  const [dateRange, setDateRange] = useState('last-7-days');
  const [autoRefresh, setAutoRefresh] = useState(true);
  const [lastRefresh, setLastRefresh] = useState(new Date());

  const campaignOptions = [
    { value: 'all', label: 'All Campaigns' },
    { value: 'google-ads', label: 'Google Ads Campaigns' },
    { value: 'facebook-ads', label: 'Facebook Ads Campaigns' },
    { value: 'linkedin-ads', label: 'LinkedIn Ads Campaigns' },
    { value: 'twitter-ads', label: 'Twitter Ads Campaigns' },
    { value: 'display-campaigns', label: 'Display Campaigns' },
    { value: 'video-campaigns', label: 'Video Campaigns' },
    { value: 'search-campaigns', label: 'Search Campaigns' }
  ];

  const dateRangeOptions = [
    { value: 'today', label: 'Today' },
    { value: 'yesterday', label: 'Yesterday' },
    { value: 'last-7-days', label: 'Last 7 days' },
    { value: 'last-30-days', label: 'Last 30 days' },
    { value: 'last-90-days', label: 'Last 90 days' },
    { value: 'this-month', label: 'This month' },
    { value: 'last-month', label: 'Last month' },
    { value: 'custom', label: 'Custom range' }
  ];

  const handleCampaignChange = (value) => {
    setSelectedCampaigns(Array.isArray(value) ? value : [value]);
    onCampaignChange && onCampaignChange(value);
  };

  const handleDateRangeChange = (value) => {
    setDateRange(value);
    onDateRangeChange && onDateRangeChange(value);
  };

  const handleRefresh = () => {
    setLastRefresh(new Date());
    onRefresh && onRefresh();
  };

  const toggleAutoRefresh = () => {
    setAutoRefresh(!autoRefresh);
  };

  const formatLastRefresh = () => {
    const now = new Date();
    const diff = Math.floor((now - lastRefresh) / 1000);
    
    if (diff < 60) return `${diff}s ago`;
    if (diff < 3600) return `${Math.floor(diff / 60)}m ago`;
    return `${Math.floor(diff / 3600)}h ago`;
  };

  return (
    <div className="bg-card border border-border rounded-lg p-6 mb-6">
      <div className="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
        {/* Left Section - Filters */}
        <div className="flex flex-col sm:flex-row sm:items-center space-y-4 sm:space-y-0 sm:space-x-4">
          <div className="min-w-0 flex-1 sm:flex-none sm:w-64">
            <Select
              label="Campaign Selection"
              options={campaignOptions}
              value={selectedCampaigns?.[0]}
              onChange={handleCampaignChange}
             
              searchable
              placeholder="Select campaigns"
              className="w-full"
            />
          </div>
          
          <div className="min-w-0 flex-1 sm:flex-none sm:w-48">
            <Select
              label="Date Range"
              options={dateRangeOptions}
              value={dateRange}
              onChange={handleDateRangeChange}
              placeholder="Select date range"
              className="w-full"
            />
          </div>
        </div>

        {/* Right Section - Controls */}
        <div className="flex items-center justify-between sm:justify-end space-x-4">
          {/* Auto Refresh Toggle */}
          <div className="flex items-center space-x-2">
            <button
              onClick={toggleAutoRefresh}
              className={`relative inline-flex h-6 w-11 items-center rounded-full transition-colors duration-200 ${
                autoRefresh ? 'bg-primary' : 'bg-muted'
              }`}
            >
              <span
                className={`inline-block h-4 w-4 transform rounded-full bg-white transition-transform duration-200 ${
                  autoRefresh ? 'translate-x-6' : 'translate-x-1'
                }`}
              />
            </button>
            <div className="flex flex-col">
              <span className="text-xs font-medium text-foreground">Auto Refresh</span>
              <span className="text-xs text-muted-foreground">Every 15min</span>
            </div>
          </div>

          {/* Last Refresh Info */}
          <div className="hidden sm:flex flex-col items-end">
            <span className="text-xs font-medium text-foreground">Last Updated</span>
            <span className="text-xs text-muted-foreground">{formatLastRefresh()}</span>
          </div>

          {/* Refresh Button */}
          <Button
            variant="outline"
            size="sm"
            onClick={handleRefresh}
            iconName="RefreshCw"
            className="flex-shrink-0"
          >
            <span className="hidden sm:inline">Refresh</span>
          </Button>

          {/* Real-time Status */}
          <div className="flex items-center space-x-2">
            <div className={`w-2 h-2 rounded-full ${autoRefresh ? 'bg-success animate-pulse' : 'bg-muted'}`} />
            <span className="text-xs text-muted-foreground hidden sm:inline">
              {autoRefresh ? 'Live' : 'Manual'}
            </span>
          </div>
        </div>
      </div>
      {/* Mobile Last Refresh */}
      <div className="sm:hidden mt-4 pt-4 border-t border-border">
        <div className="flex items-center justify-between text-xs">
          <span className="text-muted-foreground">Last updated {formatLastRefresh()}</span>
          <div className="flex items-center space-x-2">
            <div className={`w-2 h-2 rounded-full ${autoRefresh ? 'bg-success animate-pulse' : 'bg-muted'}`} />
            <span className="text-muted-foreground">{autoRefresh ? 'Live updates' : 'Manual refresh'}</span>
          </div>
        </div>
      </div>
    </div>
  );
};

export default GlobalControls;