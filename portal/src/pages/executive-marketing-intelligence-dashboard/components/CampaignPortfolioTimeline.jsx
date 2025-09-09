import React from 'react';
import Icon from '../../../components/AppIcon';

const CampaignPortfolioTimeline = () => {
  const campaigns = [
    {
      id: 1,
      name: 'Holiday Season Campaign',
      status: 'active',
      budget: 250000,
      spent: 180000,
      startDate: '2024-11-01',
      endDate: '2024-12-31',
      performance: 'excellent',
      roi: 340,
      channels: ['Social', 'Email', 'Display'],
      progress: 72
    },
    {
      id: 2,
      name: 'Brand Awareness Initiative',
      status: 'active',
      budget: 180000,
      spent: 95000,
      startDate: '2024-10-15',
      endDate: '2025-01-15',
      performance: 'good',
      roi: 285,
      channels: ['Video', 'Social', 'Content'],
      progress: 53
    },
    {
      id: 3,
      name: 'Product Launch Campaign',
      status: 'planning',
      budget: 320000,
      spent: 0,
      startDate: '2025-01-15',
      endDate: '2025-03-31',
      performance: 'pending',
      roi: 0,
      channels: ['Search', 'Social', 'PR'],
      progress: 0
    },
    {
      id: 4,
      name: 'Customer Retention Program',
      status: 'active',
      budget: 120000,
      spent: 85000,
      startDate: '2024-09-01',
      endDate: '2024-12-31',
      performance: 'excellent',
      roi: 420,
      channels: ['Email', 'Content'],
      progress: 71
    }
  ];

  const getStatusColor = (status) => {
    const colors = {
      active: 'bg-green-100 text-green-800',
      planning: 'bg-blue-100 text-blue-800',
      completed: 'bg-gray-100 text-gray-800',
      paused: 'bg-yellow-100 text-yellow-800'
    };
    return colors?.[status] || colors?.planning;
  };

  const getPerformanceColor = (performance) => {
    const colors = {
      excellent: 'text-green-600',
      good: 'text-blue-600',
      average: 'text-yellow-600',
      poor: 'text-red-600',
      pending: 'text-gray-500'
    };
    return colors?.[performance] || colors?.pending;
  };

  const getPerformanceIcon = (performance) => {
    const icons = {
      excellent: 'TrendingUp',
      good: 'ArrowUp',
      average: 'Minus',
      poor: 'TrendingDown',
      pending: 'Clock'
    };
    return icons?.[performance] || icons?.pending;
  };

  return (
    <div className="bg-white rounded-xl border border-gray-200 p-6 shadow-sm">
      <div className="flex items-center justify-between mb-6">
        <h3 className="text-lg font-semibold text-gray-900">Campaign Portfolio Overview</h3>
        <div className="flex items-center space-x-3">
          <button className="text-sm text-gray-600 hover:text-gray-900">
            Filter
          </button>
          <button className="text-sm text-blue-600 hover:text-blue-700 font-medium">
            View Calendar
          </button>
        </div>
      </div>
      <div className="space-y-4">
        {campaigns?.map((campaign) => (
          <div key={campaign?.id} className="border border-gray-200 rounded-lg p-4 hover:shadow-sm transition-shadow">
            <div className="flex items-center justify-between mb-3">
              <div className="flex items-center space-x-3">
                <h4 className="font-medium text-gray-900">{campaign?.name}</h4>
                <span className={`px-2 py-1 rounded-full text-xs font-medium ${getStatusColor(campaign?.status)}`}>
                  {campaign?.status}
                </span>
              </div>
              
              <div className="flex items-center space-x-4">
                <div className={`flex items-center space-x-1 ${getPerformanceColor(campaign?.performance)}`}>
                  <Icon name={getPerformanceIcon(campaign?.performance)} size={16} />
                  {campaign?.roi > 0 && (
                    <span className="text-sm font-medium">{campaign?.roi}% ROI</span>
                  )}
                </div>
              </div>
            </div>
            
            <div className="grid grid-cols-12 gap-4 mb-3">
              <div className="col-span-3">
                <div className="text-sm text-gray-600">Budget</div>
                <div className="font-medium">${campaign?.budget?.toLocaleString()}</div>
              </div>
              <div className="col-span-3">
                <div className="text-sm text-gray-600">Spent</div>
                <div className="font-medium">${campaign?.spent?.toLocaleString()}</div>
              </div>
              <div className="col-span-3">
                <div className="text-sm text-gray-600">Duration</div>
                <div className="font-medium text-sm">
                  {new Date(campaign.startDate)?.toLocaleDateString()} - {new Date(campaign.endDate)?.toLocaleDateString()}
                </div>
              </div>
              <div className="col-span-3">
                <div className="text-sm text-gray-600">Channels</div>
                <div className="flex flex-wrap gap-1">
                  {campaign?.channels?.map((channel, index) => (
                    <span key={index} className="text-xs bg-gray-100 text-gray-700 px-2 py-1 rounded">
                      {channel}
                    </span>
                  ))}
                </div>
              </div>
            </div>
            
            <div className="flex items-center space-x-3">
              <div className="flex-1">
                <div className="flex items-center justify-between mb-1">
                  <span className="text-sm text-gray-600">Progress</span>
                  <span className="text-sm font-medium text-gray-900">{campaign?.progress}%</span>
                </div>
                <div className="w-full bg-gray-200 rounded-full h-2">
                  <div 
                    className="bg-blue-500 h-2 rounded-full transition-all duration-300"
                    style={{ width: `${campaign?.progress}%` }}
                  />
                </div>
              </div>
              
              <button className="text-sm text-blue-600 hover:text-blue-700 font-medium">
                Details
              </button>
            </div>
          </div>
        ))}
      </div>
      <div className="mt-6 pt-6 border-t border-gray-200">
        <div className="grid grid-cols-4 gap-4 text-center">
          <div>
            <div className="text-2xl font-bold text-gray-900">4</div>
            <div className="text-sm text-gray-600">Active Campaigns</div>
          </div>
          <div>
            <div className="text-2xl font-bold text-blue-600">$870K</div>
            <div className="text-sm text-gray-600">Total Budget</div>
          </div>
          <div>
            <div className="text-2xl font-bold text-green-600">$360K</div>
            <div className="text-sm text-gray-600">Total Spent</div>
          </div>
          <div>
            <div className="text-2xl font-bold text-purple-600">325%</div>
            <div className="text-sm text-gray-600">Avg. ROI</div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default CampaignPortfolioTimeline;