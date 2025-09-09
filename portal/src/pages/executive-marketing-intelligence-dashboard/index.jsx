import React, { useState, useEffect } from 'react';
import Header from '../../components/ui/Header';
import ExecutiveMetricsCard from './components/ExecutiveMetricsCard';
import MarketingMixChart from './components/MarketingMixChart';
import ChannelROIChart from './components/ChannelROIChart';
import CustomerAcquisitionFunnel from './components/CustomerAcquisitionFunnel';
import StrategicInsightsPanel from './components/StrategicInsightsPanel';
import CampaignPortfolioTimeline from './components/CampaignPortfolioTimeline';
import ExecutiveFilters from './components/ExecutiveFilters';

const ExecutiveMarketingIntelligenceDashboard = () => {
  const [timePeriod, setTimePeriod] = useState('quarterly');
  const [department, setDepartment] = useState('all');
  const [brand, setBrand] = useState('all');
  const [isLoading, setIsLoading] = useState(false);

  // Executive KPI metrics data
  const executiveMetrics = [
    {
      title: 'Marketing ROI',
      value: '325%',
      change: '+12%',
      changeType: 'positive',
      benchmark: '280%',
      icon: 'TrendingUp',
      color: 'blue'
    },
    {
      title: 'Customer Acquisition Cost',
      value: '$125',
      change: '-15%',
      changeType: 'positive',
      benchmark: '$145',
      icon: 'DollarSign',
      color: 'green'
    },
    {
      title: 'Customer Lifetime Value',
      value: '$1,250',
      change: '+8%',
      changeType: 'positive',
      benchmark: '$1,180',
      icon: 'Users',
      color: 'purple'
    },
    {
      title: 'Market Share',
      value: '18.5%',
      change: '+2.1%',
      changeType: 'positive',
      benchmark: '16.8%',
      icon: 'PieChart',
      color: 'orange'
    }
  ];

  const handleExport = () => {
    setIsLoading(true);
    // Simulate export process
    setTimeout(() => {
      setIsLoading(false);
      // In real implementation, this would trigger report generation
      console.log('Exporting executive report...');
    }, 2000);
  };

  const handleRefresh = () => {
    setIsLoading(true);
    // Simulate data refresh
    setTimeout(() => {
      setIsLoading(false);
      console.log('Data refreshed');
    }, 1500);
  };

  useEffect(() => {
    // Simulate initial data load
    setIsLoading(true);
    setTimeout(() => {
      setIsLoading(false);
    }, 1000);
  }, [timePeriod, department, brand]);

  return (
    <div className="min-h-screen bg-gray-50">
      <Header />
      <main className="pt-20 pb-8">
        <div className="max-w-7xl mx-auto px-6">
          {/* Page Header */}
          <div className="mb-8">
            <div className="flex items-center justify-between">
              <div>
                <h1 className="text-3xl font-bold text-gray-900">Executive Marketing Intelligence</h1>
                <p className="text-gray-600 mt-2">
                  Strategic insights and performance overview for marketing leadership
                </p>
              </div>
              
              <div className="flex items-center space-x-2 bg-blue-50 px-4 py-2 rounded-lg">
                <div className="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                <span className="text-sm font-medium text-blue-700">Executive Dashboard</span>
              </div>
            </div>
          </div>

          {/* Executive Filters */}
          <ExecutiveFilters
            timePeriod={timePeriod}
            setTimePeriod={setTimePeriod}
            department={department}
            setDepartment={setDepartment}
            brand={brand}
            setBrand={setBrand}
            onExport={handleExport}
            onRefresh={handleRefresh}
          />

          {/* Hero Metrics Section */}
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            {executiveMetrics?.map((metric, index) => (
              <ExecutiveMetricsCard
                key={index}
                title={metric?.title}
                value={metric?.value}
                change={metric?.change}
                changeType={metric?.changeType}
                benchmark={metric?.benchmark}
                icon={metric?.icon}
                color={metric?.color}
              />
            ))}
          </div>

          {/* Central Visualization Section */}
          <div className="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <div className="lg:col-span-2 space-y-6">
              <MarketingMixChart />
              <ChannelROIChart />
            </div>
            
            <div className="space-y-6">
              <CustomerAcquisitionFunnel />
            </div>
          </div>

          {/* Strategic Insights and Portfolio Overview */}
          <div className="grid grid-cols-1 lg:grid-cols-4 gap-6 mb-8">
            <div className="lg:col-span-1">
              <StrategicInsightsPanel />
            </div>
            
            <div className="lg:col-span-3">
              <CampaignPortfolioTimeline />
            </div>
          </div>

          {/* Executive Summary Footer */}
          <div className="bg-white rounded-xl border border-gray-200 p-6 shadow-sm">
            <div className="flex items-center justify-between">
              <div>
                <h3 className="text-lg font-semibold text-gray-900 mb-2">Executive Summary</h3>
                <p className="text-gray-600 text-sm">
                  Marketing performance is exceeding targets across key metrics. ROI up 12% QoQ with strong customer acquisition efficiency.
                  Recommend scaling email and social channels while optimizing display performance.
                </p>
              </div>
              
              <div className="flex items-center space-x-3">
                <button className="text-sm text-blue-600 hover:text-blue-700 font-medium">
                  View Full Report
                </button>
                <button className="text-sm text-gray-600 hover:text-gray-700">
                  Schedule Review
                </button>
              </div>
            </div>
            
            <div className="mt-4 pt-4 border-t border-gray-200">
              <div className="flex items-center justify-between text-sm text-gray-500">
                <span>Report generated on December 19, 2024</span>
                <span>Next update: December 20, 2024 at 9:00 AM</span>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  );
};

export default ExecutiveMarketingIntelligenceDashboard;