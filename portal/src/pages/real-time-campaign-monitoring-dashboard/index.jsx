import React, { useState, useEffect } from 'react';
import Header from '../../components/ui/Header';
import LiveStatusBar from './components/LiveStatusBar';
import AlertPanel from './components/AlertPanel';
import RealTimeChart from './components/RealTimeChart';
import PerformanceHeatmap from './components/PerformanceHeatmap';
import QuickActionSidebar from './components/QuickActionSidebar';
import LiveDataFeed from './components/LiveDataFeed';
import MetricSelector from './components/MetricSelector';

const RealTimeCampaignMonitoringDashboard = () => {
  const [selectedMetric, setSelectedMetric] = useState('spend');
  const [connectionStatus, setConnectionStatus] = useState(true);

  // Mock data for live status
  const statusData = {
    activeCampaigns: 24,
    currentSpendRate: 1247,
    systemHealth: 'healthy',
    connectionStatus: connectionStatus
  };

  // Mock alerts data
  const alertsData = [
    {
      id: 1,
      title: 'Budget Overrun Alert',
      message: 'Campaign "Summer Sale 2024" has exceeded 90% of daily budget',
      severity: 'critical',
      timestamp: '2 min ago',
      primaryAction: 'Pause Campaign',
      secondaryAction: 'Increase Budget'
    },
    {
      id: 2,
      title: 'Low CTR Performance',
      message: 'Campaign "Brand Awareness Q3" CTR dropped below 1.5%',
      severity: 'warning',
      timestamp: '5 min ago',
      primaryAction: 'Optimize Ads',
      secondaryAction: 'View Details'
    },
    {
      id: 3,
      title: 'Bid Recommendation',
      message: 'Increase bids for "premium keywords" to improve visibility',
      severity: 'info',
      timestamp: '8 min ago',
      primaryAction: 'Apply Bids',
      secondaryAction: 'Review'
    }
  ];

  // Mock campaigns data
  const campaignsData = [
    { id: 'campaign1', name: 'Summer Sale 2024', status: 'active' },
    { id: 'campaign2', name: 'Brand Awareness Q3', status: 'active' },
    { id: 'campaign3', name: 'Product Launch', status: 'paused' },
    { id: 'campaign4', name: 'Retargeting Campaign', status: 'active' },
    { id: 'campaign5', name: 'Holiday Promotion', status: 'active' }
  ];

  // Mock real-time chart data
  const chartData = [
    { time: '09:00', campaign1: 120, campaign2: 85, campaign3: 0, campaign4: 45, campaign5: 67 },
    { time: '09:15', campaign1: 135, campaign2: 92, campaign3: 0, campaign4: 52, campaign5: 71 },
    { time: '09:30', campaign1: 142, campaign2: 88, campaign3: 0, campaign4: 48, campaign5: 69 },
    { time: '09:45', campaign1: 158, campaign2: 95, campaign3: 0, campaign4: 55, campaign5: 73 },
    { time: '10:00', campaign1: 165, campaign2: 102, campaign3: 0, campaign4: 58, campaign5: 76 },
    { time: '10:15', campaign1: 172, campaign2: 98, campaign3: 0, campaign4: 61, campaign5: 78 },
    { time: '10:30', campaign1: 168, campaign2: 105, campaign3: 0, campaign4: 59, campaign5: 81 }
  ];

  // Mock heatmap data
  const heatmapData = Array.from({ length: 7 }, (_, dayIndex) =>
    Array.from({ length: 24 }, (_, hourIndex) => ({
      spend: Math.floor(Math.random() * 500) + 100,
      ctr: Math.random() * 5 + 1,
      cpc: Math.random() * 3 + 0.5,
      impressions: Math.floor(Math.random() * 10000) + 1000
    }))
  );

  // Mock live data feed
  const liveDataFeed = [
    {
      id: 1,
      type: 'conversion',
      campaign: 'Summer Sale 2024',
      description: 'Purchase completed',
      value: { revenue: 89.99 },
      timestamp: '10:32:15'
    },
    {
      id: 2,
      type: 'click',
      campaign: 'Brand Awareness Q3',
      description: 'Ad clicked',
      value: { cpc: 1.25 },
      timestamp: '10:32:08'
    },
    {
      id: 3,
      type: 'impression',
      campaign: 'Product Launch',
      description: 'Ad served',
      value: 1,
      timestamp: '10:32:02'
    },
    {
      id: 4,
      type: 'conversion',
      campaign: 'Retargeting Campaign',
      description: 'Lead generated',
      value: { revenue: 45.00 },
      timestamp: '10:31:55'
    },
    {
      id: 5,
      type: 'budget_alert',
      campaign: 'Holiday Promotion',
      description: 'Budget threshold reached',
      value: '80%',
      timestamp: '10:31:48'
    }
  ];

  // Available metrics
  const metrics = [
    { key: 'spend', label: 'Spend' },
    { key: 'ctr', label: 'CTR' },
    { key: 'cpc', label: 'CPC' },
    { key: 'impressions', label: 'Impressions' }
  ];

  // Mock thresholds
  const thresholds = {
    spend: 200,
    ctr: 2.0,
    cpc: 2.5,
    impressions: 5000
  };

  // Simulate connection status changes
  useEffect(() => {
    const interval = setInterval(() => {
      setConnectionStatus(prev => Math.random() > 0.1 ? true : prev);
    }, 30000);

    return () => clearInterval(interval);
  }, []);

  const handleAlertAction = (alertId, action) => {
    console.log(`Alert ${alertId}: ${action}`);
    // Handle alert actions
  };

  const handleCampaignAction = (action, campaignId = null) => {
    console.log(`Campaign action: ${action}`, campaignId);
    // Handle campaign actions
  };

  const handleBudgetAdjustment = (type, percentage) => {
    console.log(`Budget adjustment: ${type} ${percentage}%`);
    // Handle budget adjustments
  };

  const handleRuleTrigger = (rule) => {
    console.log(`Rule triggered: ${rule}`);
    // Handle rule triggers
  };

  const handleHeatmapCellClick = (dayIndex, hour, cellData) => {
    console.log(`Heatmap cell clicked: Day ${dayIndex}, Hour ${hour}`, cellData);
    // Handle heatmap cell clicks for filtering
  };

  return (
    <div className="min-h-screen bg-background">
      <Header />
      
      <main className="pt-16 p-6">
        <div className="max-w-7xl mx-auto">
          {/* Page Header */}
          <div className="mb-6">
            <h1 className="text-3xl font-bold text-foreground mb-2">
              Real-Time Campaign Monitoring
            </h1>
            <p className="text-muted-foreground">
              Monitor live campaign performance with instant alerts and quick optimization actions
            </p>
          </div>

          {/* Live Status Bar */}
          <LiveStatusBar {...statusData} />

          {/* Metric Selector */}
          <MetricSelector
            selectedMetric={selectedMetric}
            onMetricChange={setSelectedMetric}
            metrics={metrics}
          />

          {/* Main Dashboard Grid */}
          <div className="grid grid-cols-1 lg:grid-cols-12 gap-6">
            {/* Alert Panel */}
            <div className="lg:col-span-4">
              <AlertPanel
                alerts={alertsData}
                onActionClick={handleAlertAction}
              />
            </div>

            {/* Main Monitoring Area */}
            <div className="lg:col-span-8 space-y-6">
              {/* Real-Time Chart */}
              <RealTimeChart
                data={chartData}
                campaigns={campaignsData}
                selectedMetric={selectedMetric}
                thresholds={thresholds}
              />

              {/* Performance Heatmap */}
              <PerformanceHeatmap
                data={heatmapData}
                selectedMetric={selectedMetric}
                onCellClick={handleHeatmapCellClick}
              />
            </div>
          </div>

          {/* Bottom Section */}
          <div className="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
            {/* Quick Action Sidebar */}
            <div className="lg:col-span-1">
              <QuickActionSidebar
                campaigns={campaignsData}
                onCampaignAction={handleCampaignAction}
                onBudgetAdjustment={handleBudgetAdjustment}
                onRuleTrigger={handleRuleTrigger}
              />
            </div>

            {/* Live Data Feed */}
            <div className="lg:col-span-2">
              <LiveDataFeed feedData={liveDataFeed} />
            </div>
          </div>
        </div>
      </main>
    </div>
  );
};

export default RealTimeCampaignMonitoringDashboard;