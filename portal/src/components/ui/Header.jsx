import React, { useState } from 'react';
import { useLocation, useNavigate } from 'react-router-dom';
import Icon from '../AppIcon';
import Button from './Button';
import Select from './Select';

const Header = () => {
  const location = useLocation();
  const navigate = useNavigate();
  const [dateRange, setDateRange] = useState('last-7-days');
  const [userRole, setUserRole] = useState('specialist');
  const [isConnected, setIsConnected] = useState(true);

  const navigationItems = [
    {
      label: 'Campaign Overview',
      path: '/campaign-performance-overview-dashboard',
      icon: 'BarChart3',
      description: 'Primary performance monitoring and KPI tracking'
    },
    {
      label: 'Multi-Channel Analytics',
      path: '/multi-channel-analytics-dashboard',
      icon: 'TrendingUp',
      description: 'Cross-platform performance comparison and attribution analysis'
    },
    {
      label: 'Real-Time Monitoring',
      path: '/real-time-campaign-monitoring-dashboard',
      icon: 'Activity',
      description: 'Live campaign status and alert management'
    },
    {
      label: 'Executive Intelligence',
      path: '/executive-marketing-intelligence-dashboard',
      icon: 'PieChart',
      description: 'High-level strategic insights and ROI analysis'
    }
  ];

  const dateRangeOptions = [
    { value: 'today', label: 'Today' },
    { value: 'last-7-days', label: 'Last 7 days' },
    { value: 'last-30-days', label: 'Last 30 days' },
    { value: 'last-90-days', label: 'Last 90 days' },
    { value: 'custom', label: 'Custom range' }
  ];

  const userRoleOptions = [
    { value: 'specialist', label: 'Campaign Specialist' },
    { value: 'director', label: 'Marketing Director' },
    { value: 'executive', label: 'Executive' },
    { value: 'analyst', label: 'Marketing Analyst' }
  ];

  const handleNavigation = (path) => {
    navigate(path);
  };

  const handleDateRangeChange = (value) => {
    setDateRange(value);
    // Trigger data refresh across dashboards
  };

  const handleRoleChange = (value) => {
    setUserRole(value);
    // Update dashboard configurations based on role
  };

  return (
    <header className="fixed top-0 left-0 right-0 z-100 bg-card border-b border-border">
      <div className="flex items-center justify-between h-16 px-6">
        {/* Logo Section */}
        <div className="flex items-center">
          <div className="flex items-center space-x-3">
            <div className="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
              <Icon name="BarChart3" size={20} color="white" />
            </div>
            <div className="flex flex-col">
              <h1 className="text-lg font-semibold text-foreground">MarketingCampaign</h1>
              <span className="text-xs text-muted-foreground -mt-1">Analytics</span>
            </div>
          </div>
        </div>

        {/* Primary Navigation */}
        <nav className="hidden lg:flex items-center space-x-1">
          {navigationItems?.map((item) => {
            const isActive = location?.pathname === item?.path;
            return (
              <button
                key={item?.path}
                onClick={() => handleNavigation(item?.path)}
                className={`flex items-center space-x-2 px-6 py-3 rounded-lg text-sm font-medium transition-all duration-200 ease-out ${
                  isActive
                    ? 'bg-primary text-primary-foreground shadow-sm'
                    : 'text-muted-foreground hover:text-foreground hover:bg-muted'
                }`}
                title={item?.description}
              >
                <Icon name={item?.icon} size={16} />
                <span>{item?.label}</span>
              </button>
            );
          })}
        </nav>

        {/* Right Section */}
        <div className="flex items-center space-x-4">
          {/* Date Range Selector */}
          <div className="hidden md:block">
            <Select
              options={dateRangeOptions}
              value={dateRange}
              onChange={handleDateRangeChange}
              placeholder="Select date range"
              className="w-40"
            />
          </div>

          {/* Real-Time Status Indicator */}
          <div className="flex items-center space-x-2">
            <div className={`w-2 h-2 rounded-full ${isConnected ? 'bg-success animate-pulse' : 'bg-error'}`} />
            <span className="hidden sm:inline text-xs text-muted-foreground">
              {isConnected ? 'Live' : 'Offline'}
            </span>
          </div>

          {/* User Context Switcher */}
          <div className="hidden sm:block">
            <Select
              options={userRoleOptions}
              value={userRole}
              onChange={handleRoleChange}
              placeholder="Select role"
              className="w-44"
            />
          </div>

          {/* Mobile Menu Button */}
          <div className="lg:hidden">
            <Button variant="ghost" size="icon">
              <Icon name="Menu" size={20} />
            </Button>
          </div>
        </div>
      </div>
      {/* Mobile Navigation */}
      <div className="lg:hidden border-t border-border bg-card">
        <nav className="flex overflow-x-auto">
          {navigationItems?.map((item) => {
            const isActive = location?.pathname === item?.path;
            return (
              <button
                key={item?.path}
                onClick={() => handleNavigation(item?.path)}
                className={`flex flex-col items-center space-y-1 px-4 py-3 min-w-0 flex-1 text-xs transition-all duration-200 ease-out ${
                  isActive
                    ? 'text-primary border-b-2 border-primary' :'text-muted-foreground hover:text-foreground'
                }`}
              >
                <Icon name={item?.icon} size={16} />
                <span className="truncate">{item?.label?.split(' ')?.[0]}</span>
              </button>
            );
          })}
        </nav>
      </div>
    </header>
  );
};

export default Header;