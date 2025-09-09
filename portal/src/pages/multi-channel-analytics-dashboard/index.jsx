import React, { useState, useEffect } from 'react';
import Header from '../../components/ui/Header';
import Icon from '../../components/AppIcon';
import Select from '../../components/ui/Select';
import Button from '../../components/ui/Button';
import MetricCard from './components/MetricCard';
import ChannelComparisonChart from './components/ChannelComparisonChart';
import AttributionFlowDiagram from './components/AttributionFlowDiagram';
import BudgetAllocationPanel from './components/BudgetAllocationPanel';
import FunnelAnalysisChart from './components/FunnelAnalysisChart';
import GeographicHeatmap from './components/GeographicHeatmap';
import DataExportGrid from './components/DataExportGrid';

const MultiChannelAnalyticsDashboard = () => {
  const [selectedPlatforms, setSelectedPlatforms] = useState(['Google Ads', 'Facebook', 'LinkedIn']);
  const [attributionModel, setAttributionModel] = useState('last-click');
  const [dateComparison, setDateComparison] = useState('previous-period');
  const [activeTab, setActiveTab] = useState('comparison');
  const [lastUpdated, setLastUpdated] = useState(new Date());

  // Mock data for metrics
  const metricsData = [
    {
      title: 'Cost Per Point',
      value: '$2.45',
      change: '+12.5%',
      changeType: 'positive',
      sparklineData: [2.1, 2.3, 2.2, 2.4, 2.6, 2.5, 2.45],
      platform: 'Google Ads',
      icon: 'DollarSign',
      color: '#4285F4'
    },
    {
      title: 'ACOS',
      value: '18.2%',
      change: '-3.1%',
      changeType: 'positive',
      sparklineData: [21.3, 20.1, 19.8, 18.9, 18.5, 18.3, 18.2],
      platform: 'Facebook',
      icon: 'Target',
      color: '#1877F2'
    },
    {
      title: 'Click-Through Rate',
      value: '3.47%',
      change: '+8.9%',
      changeType: 'positive',
      sparklineData: [3.1, 3.2, 3.3, 3.4, 3.5, 3.46, 3.47],
      platform: 'LinkedIn',
      icon: 'MousePointer',
      color: '#0A66C2'
    },
    {
      title: 'Conversion Rate',
      value: '4.23%',
      change: '+15.7%',
      changeType: 'positive',
      sparklineData: [3.6, 3.8, 3.9, 4.0, 4.1, 4.2, 4.23],
      platform: 'Twitter',
      icon: 'TrendingUp',
      color: '#1DA1F2'
    }
  ];

  // Mock data for channel comparison
  const channelComparisonData = [
    {
      channel: 'Google Ads',
      conversions: 1247,
      spend: 15420,
      ctr: 3.47,
      conversionRate: 4.23,
      cpc: 2.45,
      cpa: 12.37
    },
    {
      channel: 'Facebook',
      conversions: 892,
      spend: 11250,
      ctr: 2.89,
      conversionRate: 3.81,
      cpc: 1.89,
      cpa: 12.61
    },
    {
      channel: 'LinkedIn',
      conversions: 456,
      spend: 8930,
      ctr: 1.94,
      conversionRate: 5.12,
      cpc: 4.23,
      cpa: 19.58
    },
    {
      channel: 'Twitter',
      conversions: 234,
      spend: 4560,
      ctr: 1.67,
      conversionRate: 2.94,
      cpc: 2.87,
      cpa: 19.49
    }
  ];

  // Mock data for attribution flow
  const attributionFlowData = [
    {
      id: 1,
      stage: 'Awareness',
      channel: 'Google Ads',
      type: 'awareness',
      users: 12450,
      spend: 5420,
      conversionRate: 15.2,
      cpa: 0.44
    },
    {
      id: 2,
      stage: 'Consideration',
      channel: 'Facebook',
      type: 'consideration',
      users: 8920,
      spend: 4230,
      conversionRate: 28.7,
      cpa: 0.47
    },
    {
      id: 3,
      stage: 'Intent',
      channel: 'LinkedIn',
      type: 'consideration',
      users: 4560,
      spend: 3890,
      conversionRate: 45.3,
      cpa: 0.85
    },
    {
      id: 4,
      stage: 'Conversion',
      channel: 'Multi-touch',
      type: 'conversion',
      users: 2067,
      spend: 2340,
      conversionRate: 100,
      cpa: 1.13
    }
  ];

  // Mock data for budget recommendations
  const budgetRecommendations = [
    {
      id: 1,
      channel: 'Google Ads',
      color: '#4285F4',
      description: 'Increase budget by 25% to capture high-intent search traffic during peak hours',
      currentBudget: 15420,
      suggestedBudget: 19275,
      expectedLift: 18.5,
      impact: 'high'
    },
    {
      id: 2,
      channel: 'Facebook',
      color: '#1877F2',
      description: 'Reallocate 15% budget from low-performing audiences to lookalike segments',
      currentBudget: 11250,
      suggestedBudget: 9562,
      expectedLift: 12.3,
      impact: 'medium'
    },
    {
      id: 3,
      channel: 'LinkedIn',
      color: '#0A66C2',
      description: 'Reduce budget by 10% and focus on higher-converting job titles',
      currentBudget: 8930,
      suggestedBudget: 8037,
      expectedLift: 8.7,
      impact: 'low'
    }
  ];

  // Mock data for anomalies
  const anomaliesData = [
    {
      id: 1,
      title: 'Unusual CTR Spike',
      description: 'Google Ads CTR increased by 45% in the last 2 hours, potentially indicating ad fraud or technical issue',
      channel: 'Google Ads',
      metric: 'CTR',
      change: '+45%',
      severity: 'high',
      timestamp: '2 hours ago'
    },
    {
      id: 2,
      title: 'Budget Burn Rate Alert',
      description: 'Facebook campaign is spending 23% faster than usual, may exhaust daily budget early',
      channel: 'Facebook',
      metric: 'Spend Rate',
      change: '+23%',
      severity: 'medium',
      timestamp: '45 minutes ago'
    }
  ];

  // Mock data for funnel analysis
  const funnelData = [
    {
      id: 1,
      name: 'Impressions',
      value: 245000,
      channel: 'All Channels',
      icon: 'Eye'
    },
    {
      id: 2,
      name: 'Clicks',
      value: 8920,
      channel: 'All Channels',
      icon: 'MousePointer'
    },
    {
      id: 3,
      name: 'Landing Page Views',
      value: 7834,
      channel: 'All Channels',
      icon: 'Monitor'
    },
    {
      id: 4,
      name: 'Add to Cart',
      value: 2456,
      channel: 'All Channels',
      icon: 'ShoppingCart'
    },
    {
      id: 5,
      name: 'Conversions',
      value: 1247,
      channel: 'All Channels',
      icon: 'CheckCircle'
    }
  ];

  // Mock data for geographic performance
  const geographicData = [
    {
      id: 1,
      name: 'California',
      conversions: 342,
      spend: 4230,
      ctr: 3.89,
      cpa: 12.37,
      percentage: 27.4
    },
    {
      id: 2,
      name: 'New York',
      conversions: 289,
      spend: 3890,
      ctr: 3.45,
      cpa: 13.46,
      percentage: 23.2
    },
    {
      id: 3,
      name: 'Texas',
      conversions: 234,
      spend: 3120,
      ctr: 3.12,
      cpa: 13.33,
      percentage: 18.8
    },
    {
      id: 4,
      name: 'Florida',
      conversions: 189,
      spend: 2450,
      ctr: 2.98,
      cpa: 12.96,
      percentage: 15.2
    },
    {
      id: 5,
      name: 'Illinois',
      conversions: 156,
      spend: 2100,
      ctr: 2.87,
      cpa: 13.46,
      percentage: 12.5
    },
    {
      id: 6,
      name: 'Pennsylvania',
      conversions: 123,
      spend: 1890,
      ctr: 2.76,
      cpa: 15.37,
      percentage: 9.9
    }
  ];

  // Mock data for export grid
  const exportGridData = [
    {
      id: 1,
      channel: 'Google Ads',
      campaign: 'Search - Brand Keywords',
      spend: 5420,
      conversions: 456,
      ctr: 3.47,
      cpa: 11.89,
      color: '#4285F4'
    },
    {
      id: 2,
      channel: 'Facebook',
      campaign: 'Lookalike Audiences - US',
      spend: 4230,
      conversions: 342,
      ctr: 2.89,
      cpa: 12.37,
      color: '#1877F2'
    },
    {
      id: 3,
      channel: 'LinkedIn',
      campaign: 'Job Title Targeting - Managers',
      spend: 3890,
      conversions: 234,
      ctr: 1.94,
      cpa: 16.62,
      color: '#0A66C2'
    },
    {
      id: 4,
      channel: 'Twitter',
      campaign: 'Interest Targeting - Tech',
      spend: 2340,
      conversions: 156,
      ctr: 1.67,
      cpa: 15.00,
      color: '#1DA1F2'
    },
    {
      id: 5,
      channel: 'Google Ads',
      campaign: 'Display - Remarketing',
      spend: 3120,
      conversions: 289,
      ctr: 2.34,
      cpa: 10.80,
      color: '#4285F4'
    }
  ];

  const platformOptions = [
    { value: 'Google Ads', label: 'Google Ads' },
    { value: 'Facebook', label: 'Facebook' },
    { value: 'LinkedIn', label: 'LinkedIn' },
    { value: 'Twitter', label: 'Twitter' },
    { value: 'Instagram', label: 'Instagram' },
    { value: 'YouTube', label: 'YouTube' }
  ];

  const attributionOptions = [
    { value: 'first-click', label: 'First Click' },
    { value: 'last-click', label: 'Last Click' },
    { value: 'linear', label: 'Linear' },
    { value: 'time-decay', label: 'Time Decay' },
    { value: 'position-based', label: 'Position Based' }
  ];

  const comparisonOptions = [
    { value: 'previous-period', label: 'Previous Period' },
    { value: 'previous-year', label: 'Previous Year' },
    { value: 'custom-range', label: 'Custom Range' }
  ];

  const tabOptions = [
    { id: 'comparison', label: 'Channel Comparison', icon: 'BarChart3' },
    { id: 'funnel', label: 'Funnel Analysis', icon: 'Filter' },
    { id: 'geographic', label: 'Geographic Heatmap', icon: 'Map' }
  ];

  // Auto-refresh data every 30 minutes
  useEffect(() => {
    const interval = setInterval(() => {
      setLastUpdated(new Date());
    }, 30 * 60 * 1000);

    return () => clearInterval(interval);
  }, []);

  const handleManualRefresh = () => {
    setLastUpdated(new Date());
  };

  return (
    <div className="min-h-screen bg-background">
      <Header />
      <main className="pt-16">
        <div className="max-w-7xl mx-auto px-6 py-8">
          {/* Page Header */}
          <div className="mb-8">
            <div className="flex items-center justify-between mb-4">
              <div>
                <h1 className="text-3xl font-bold text-foreground">Multi-Channel Analytics</h1>
                <p className="text-muted-foreground mt-1">
                  Compare performance across advertising platforms and identify optimization opportunities
                </p>
              </div>
              
              <div className="flex items-center space-x-4">
                <div className="flex items-center space-x-2 text-sm text-muted-foreground">
                  <div className="w-2 h-2 bg-success rounded-full animate-pulse" />
                  <span>Last updated: {lastUpdated?.toLocaleTimeString()}</span>
                </div>
                <Button
                  variant="outline"
                  onClick={handleManualRefresh}
                  iconName="RefreshCw"
                  iconPosition="left"
                >
                  Refresh
                </Button>
              </div>
            </div>

            {/* Global Filter Bar */}
            <div className="bg-card rounded-lg border border-border p-4">
              <div className="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0 lg:space-x-6">
                <div className="flex flex-col sm:flex-row sm:items-center space-y-4 sm:space-y-0 sm:space-x-4">
                  <div className="flex items-center space-x-2">
                    <Icon name="Filter" size={16} color="var(--color-muted-foreground)" />
                    <span className="text-sm font-medium text-foreground">Filters:</span>
                  </div>
                  
                  <Select
                    options={platformOptions}
                    value={selectedPlatforms}
                    onChange={setSelectedPlatforms}
                    multiple
                    placeholder="Select platforms"
                    className="w-64"
                  />
                  
                  <Select
                    options={attributionOptions}
                    value={attributionModel}
                    onChange={setAttributionModel}
                    placeholder="Attribution model"
                    className="w-48"
                  />
                  
                  <Select
                    options={comparisonOptions}
                    value={dateComparison}
                    onChange={setDateComparison}
                    placeholder="Date comparison"
                    className="w-48"
                  />
                </div>
                
                <div className="flex items-center space-x-2">
                  <Button variant="outline" size="sm" iconName="Download">
                    Export Report
                  </Button>
                  <Button variant="outline" size="sm" iconName="Settings">
                    Configure
                  </Button>
                </div>
              </div>
            </div>
          </div>

          {/* Primary Metrics Strip */}
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            {metricsData?.map((metric, index) => (
              <MetricCard key={index} {...metric} />
            ))}
          </div>

          {/* Main Content Area */}
          <div className="grid grid-cols-1 xl:grid-cols-3 gap-8 mb-8">
            {/* Central Visualization Area (16 columns equivalent) */}
            <div className="xl:col-span-2 space-y-8">
              {/* Tabbed Visualization */}
              <div className="bg-card rounded-lg border border-border">
                <div className="border-b border-border">
                  <nav className="flex space-x-1 p-1">
                    {tabOptions?.map((tab) => (
                      <button
                        key={tab?.id}
                        onClick={() => setActiveTab(tab?.id)}
                        className={`flex items-center space-x-2 px-4 py-3 rounded-lg text-sm font-medium transition-all duration-200 ${
                          activeTab === tab?.id
                            ? 'bg-primary text-primary-foreground shadow-sm'
                            : 'text-muted-foreground hover:text-foreground hover:bg-muted'
                        }`}
                      >
                        <Icon name={tab?.icon} size={16} />
                        <span>{tab?.label}</span>
                      </button>
                    ))}
                  </nav>
                </div>
                
                <div className="p-6">
                  {activeTab === 'comparison' && (
                    <ChannelComparisonChart 
                      data={channelComparisonData} 
                      selectedMetric="conversions"
                    />
                  )}
                  {activeTab === 'funnel' && (
                    <FunnelAnalysisChart data={funnelData} />
                  )}
                  {activeTab === 'geographic' && (
                    <GeographicHeatmap data={geographicData} />
                  )}
                </div>
              </div>

              {/* Attribution Flow Diagram */}
              <AttributionFlowDiagram data={attributionFlowData} />
            </div>

            {/* Right Panel (8 columns equivalent) */}
            <div className="space-y-8">
              <BudgetAllocationPanel 
                recommendations={budgetRecommendations}
                anomalies={anomaliesData}
              />
            </div>
          </div>

          {/* Bottom Section - Data Export Grid */}
          <DataExportGrid data={exportGridData} />
        </div>
      </main>
    </div>
  );
};

export default MultiChannelAnalyticsDashboard;