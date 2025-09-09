import React, { useState, useEffect } from 'react';
import Header from '../../components/ui/Header';
import KPICard from './components/KPICard';
import PerformanceChart from './components/PerformanceChart';
import CampaignHealthAlerts from './components/CampaignHealthAlerts';
import BudgetBurnRate from './components/BudgetBurnRate';
import TopPerformingCampaigns from './components/TopPerformingCampaigns';
import CampaignDataTable from './components/CampaignDataTable';
import GlobalControls from './components/GlobalControls';

const CampaignPerformanceOverviewDashboard = () => {
  const [refreshKey, setRefreshKey] = useState(0);
  const [selectedCampaigns, setSelectedCampaigns] = useState(['all']);
  const [dateRange, setDateRange] = useState('last-7-days');

  // Mock KPI data
  const kpiData = [
    {
      title: "Total Spend",
      value: "$124,580",
      change: "+12.5%",
      changeType: "positive",
      icon: "DollarSign",
      color: "primary"
    },
    {
      title: "Overall ROAS",
      value: "4.2x",
      change: "+8.3%",
      changeType: "positive",
      icon: "TrendingUp",
      color: "success"
    },
    {
      title: "Average CTR",
      value: "3.45%",
      change: "-2.1%",
      changeType: "negative",
      icon: "MousePointer",
      color: "warning"
    },
    {
      title: "Active Campaigns",
      value: "28",
      change: "+4",
      changeType: "positive",
      icon: "Target",
      color: "primary"
    }
  ];

  // Mock performance chart data
  const performanceData = [
    { date: "Aug 12", spend: 15420, roas: 3.8 },
    { date: "Aug 13", spend: 18650, roas: 4.1 },
    { date: "Aug 14", spend: 16890, roas: 3.9 },
    { date: "Aug 15", spend: 21340, roas: 4.5 },
    { date: "Aug 16", spend: 19780, roas: 4.2 },
    { date: "Aug 17", spend: 22150, roas: 4.7 },
    { date: "Aug 18", spend: 20480, roas: 4.3 },
    { date: "Aug 19", spend: 17920, roas: 4.0 }
  ];

  // Mock health alerts data
  const healthAlerts = [
    {
      id: 1,
      campaign: "Summer Sale - Google Ads",
      message: "Budget will be exhausted in 2 days at current spend rate",
      type: "warning",
      timestamp: "2 minutes ago"
    },
    {
      id: 2,
      campaign: "Brand Awareness - Facebook",
      message: "CTR dropped below 2% threshold",
      type: "critical",
      timestamp: "15 minutes ago"
    },
    {
      id: 3,
      campaign: "Product Launch - LinkedIn",
      message: "ROAS improved by 25% in last 24 hours",
      type: "info",
      timestamp: "1 hour ago"
    }
  ];

  // Mock budget burn rate data
  const budgetData = [
    {
      id: 1,
      name: "Summer Sale Campaign",
      burnRate: 85,
      spent: 42500,
      budget: 50000
    },
    {
      id: 2,
      name: "Brand Awareness Drive",
      burnRate: 92,
      spent: 27600,
      budget: 30000
    },
    {
      id: 3,
      name: "Product Launch Promo",
      burnRate: 67,
      spent: 20100,
      budget: 30000
    },
    {
      id: 4,
      name: "Holiday Collection",
      burnRate: 45,
      spent: 13500,
      budget: 30000
    }
  ];

  // Mock top performing campaigns
  const topCampaigns = [
    {
      id: 1,
      name: "Premium Product Launch",
      status: "active",
      roas: 6.8,
      ctr: 4.2,
      spend: 18500,
      performance: "excellent",
      changePercent: "+24%"
    },
    {
      id: 2,
      name: "Summer Collection Sale",
      status: "active",
      roas: 5.4,
      ctr: 3.8,
      spend: 22100,
      performance: "excellent",
      changePercent: "+18%"
    },
    {
      id: 3,
      name: "Brand Awareness Q3",
      status: "active",
      roas: 4.9,
      ctr: 3.5,
      spend: 15800,
      performance: "good",
      changePercent: "+12%"
    }
  ];

  // Mock underperforming campaigns
  const underperformingCampaigns = [
    {
      id: 4,
      name: "Generic Display Ads",
      status: "active",
      roas: 1.2,
      ctr: 0.8,
      spend: 8900,
      performance: "poor",
      changePercent: "-15%"
    },
    {
      id: 5,
      name: "Competitor Keywords",
      status: "paused",
      roas: 1.8,
      ctr: 1.2,
      spend: 12400,
      performance: "poor",
      changePercent: "-8%"
    },
    {
      id: 6,
      name: "Retargeting Campaign",
      status: "active",
      roas: 2.1,
      ctr: 1.5,
      spend: 6700,
      performance: "average",
      changePercent: "-3%"
    }
  ];

  // Mock campaign table data
  const campaignTableData = [
    {
      id: 1,
      name: "Premium Product Launch",
      platform: "Google Ads",
      status: "active",
      spend: 18500,
      impressions: 245000,
      clicks: 10290,
      ctr: 4.2,
      roas: 6.8
    },
    {
      id: 2,
      name: "Summer Collection Sale",
      platform: "Facebook Ads",
      status: "active",
      spend: 22100,
      impressions: 580000,
      clicks: 22040,
      ctr: 3.8,
      roas: 5.4
    },
    {
      id: 3,
      name: "Brand Awareness Q3",
      platform: "LinkedIn Ads",
      status: "active",
      spend: 15800,
      impressions: 125000,
      clicks: 4375,
      ctr: 3.5,
      roas: 4.9
    },
    {
      id: 4,
      name: "Holiday Collection Preview",
      platform: "Twitter Ads",
      status: "active",
      spend: 9200,
      impressions: 180000,
      clicks: 5400,
      ctr: 3.0,
      roas: 3.2
    },
    {
      id: 5,
      name: "Generic Display Ads",
      platform: "Google Display",
      status: "active",
      spend: 8900,
      impressions: 1200000,
      clicks: 9600,
      ctr: 0.8,
      roas: 1.2
    },
    {
      id: 6,
      name: "Competitor Keywords",
      platform: "Google Ads",
      status: "paused",
      spend: 12400,
      impressions: 95000,
      clicks: 1140,
      ctr: 1.2,
      roas: 1.8
    },
    {
      id: 7,
      name: "Retargeting Campaign",
      platform: "Facebook Ads",
      status: "active",
      spend: 6700,
      impressions: 320000,
      clicks: 4800,
      ctr: 1.5,
      roas: 2.1
    },
    {
      id: 8,
      name: "Video Ad Campaign",
      platform: "YouTube Ads",
      status: "active",
      spend: 14300,
      impressions: 450000,
      clicks: 13500,
      ctr: 3.0,
      roas: 4.1
    },
    {
      id: 9,
      name: "Local Store Promotion",
      platform: "Google Ads",
      status: "active",
      spend: 5600,
      impressions: 78000,
      clicks: 2340,
      ctr: 3.0,
      roas: 3.8
    },
    {
      id: 10,
      name: "Email Signup Campaign",
      platform: "Facebook Ads",
      status: "active",
      spend: 3200,
      impressions: 150000,
      clicks: 4500,
      ctr: 3.0,
      roas: 2.9
    }
  ];

  const handleCampaignChange = (campaigns) => {
    setSelectedCampaigns(campaigns);
    // Trigger data refresh based on selected campaigns
  };

  const handleDateRangeChange = (range) => {
    setDateRange(range);
    // Trigger data refresh based on date range
  };

  const handleRefresh = () => {
    setRefreshKey(prev => prev + 1);
    // Trigger manual data refresh
  };

  useEffect(() => {
    // Auto-refresh every 15 minutes
    const interval = setInterval(() => {
      setRefreshKey(prev => prev + 1);
    }, 15 * 60 * 1000);

    return () => clearInterval(interval);
  }, []);

  return (
    <div className="min-h-screen bg-background">
      <Header />
      <main className="pt-16">
        <div className="max-w-7xl mx-auto px-6 py-8">
          {/* Global Controls */}
          <GlobalControls
            onCampaignChange={handleCampaignChange}
            onDateRangeChange={handleDateRangeChange}
            onRefresh={handleRefresh}
          />

          {/* KPI Cards Row */}
          <div className="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
            {kpiData?.map((kpi, index) => (
              <KPICard
                key={index}
                title={kpi?.title}
                value={kpi?.value}
                change={kpi?.change}
                changeType={kpi?.changeType}
                icon={kpi?.icon}
                color={kpi?.color}
              />
            ))}
          </div>

          {/* Main Content Grid */}
          <div className="grid grid-cols-1 xl:grid-cols-4 gap-6 mb-8">
            {/* Performance Chart - Takes 3 columns on desktop */}
            <div className="xl:col-span-3">
              <PerformanceChart 
                data={performanceData}
                title="Daily Spend vs ROAS Trends"
              />
            </div>

            {/* Right Sidebar - Takes 1 column on desktop */}
            <div className="space-y-6">
              <CampaignHealthAlerts alerts={healthAlerts} />
              <BudgetBurnRate campaigns={budgetData} />
            </div>
          </div>

          {/* Performance Lists Row */}
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <TopPerformingCampaigns campaigns={topCampaigns} type="top" />
            <TopPerformingCampaigns campaigns={underperformingCampaigns} type="bottom" />
          </div>

          {/* Campaign Data Table */}
          <CampaignDataTable campaigns={campaignTableData} />
        </div>
      </main>
    </div>
  );
};

export default CampaignPerformanceOverviewDashboard;