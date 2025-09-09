import React from 'react';
import Icon from '../../../components/AppIcon';

const StrategicInsightsPanel = () => {
  const insights = [
    {
      id: 1,
      type: 'opportunity',
      title: 'Email ROI Exceeds Target',
      description: 'Email marketing ROI is 20% above target. Consider increasing budget allocation.',
      impact: 'High',
      action: 'Reallocate $25K from display to email',
      icon: 'TrendingUp',
      color: 'green'
    },
    {
      id: 2,
      type: 'alert',
      title: 'Display Performance Below Target',
      description: 'Display advertising ROI is 10% below target for Q4.',
      impact: 'Medium',
      action: 'Review creative assets and targeting',
      icon: 'AlertTriangle',
      color: 'orange'
    },
    {
      id: 3,
      type: 'insight',
      title: 'Social Media Momentum',
      description: 'Social engagement up 45% month-over-month with strong video content performance.',
      impact: 'High',
      action: 'Increase video content production',
      icon: 'BarChart3',
      color: 'blue'
    },
    {
      id: 4,
      type: 'recommendation',
      title: 'Customer Acquisition Optimization',
      description: 'CAC decreased 15% while LTV increased 8%. Strong unit economics improvement.',
      impact: 'High',
      action: 'Scale successful acquisition channels',
      icon: 'Target',
      color: 'purple'
    }
  ];

  const getColorClasses = (color, type) => {
    const colors = {
      green: {
        bg: 'bg-green-50',
        text: 'text-green-600',
        border: 'border-green-200',
        icon: 'text-green-500'
      },
      orange: {
        bg: 'bg-orange-50',
        text: 'text-orange-600',
        border: 'border-orange-200',
        icon: 'text-orange-500'
      },
      blue: {
        bg: 'bg-blue-50',
        text: 'text-blue-600',
        border: 'border-blue-200',
        icon: 'text-blue-500'
      },
      purple: {
        bg: 'bg-purple-50',
        text: 'text-purple-600',
        border: 'border-purple-200',
        icon: 'text-purple-500'
      }
    };
    return colors?.[color] || colors?.blue;
  };

  const getImpactBadge = (impact) => {
    const badges = {
      High: 'bg-red-100 text-red-800',
      Medium: 'bg-yellow-100 text-yellow-800',
      Low: 'bg-gray-100 text-gray-800'
    };
    return badges?.[impact] || badges?.Medium;
  };

  return (
    <div className="bg-white rounded-xl border border-gray-200 p-6 shadow-sm">
      <div className="flex items-center justify-between mb-6">
        <h3 className="text-lg font-semibold text-gray-900">Strategic Insights</h3>
        <button className="text-sm text-blue-600 hover:text-blue-700 font-medium">
          View All
        </button>
      </div>
      <div className="space-y-4">
        {insights?.map((insight) => {
          const colorClasses = getColorClasses(insight?.color);
          
          return (
            <div 
              key={insight?.id}
              className={`p-4 rounded-lg border ${colorClasses?.bg} ${colorClasses?.border}`}
            >
              <div className="flex items-start space-x-3">
                <div className={`p-2 rounded-lg bg-white ${colorClasses?.icon}`}>
                  <Icon name={insight?.icon} size={16} />
                </div>
                
                <div className="flex-1 min-w-0">
                  <div className="flex items-center justify-between mb-2">
                    <h4 className="font-medium text-gray-900 text-sm">
                      {insight?.title}
                    </h4>
                    <span className={`px-2 py-1 rounded-full text-xs font-medium ${getImpactBadge(insight?.impact)}`}>
                      {insight?.impact}
                    </span>
                  </div>
                  
                  <p className="text-sm text-gray-600 mb-3">
                    {insight?.description}
                  </p>
                  
                  <div className="flex items-center justify-between">
                    <span className="text-xs font-medium text-gray-700">
                      Action: {insight?.action}
                    </span>
                    <button className={`text-xs font-medium ${colorClasses?.text} hover:underline`}>
                      Details
                    </button>
                  </div>
                </div>
              </div>
            </div>
          );
        })}
      </div>
      <div className="mt-6 pt-6 border-t border-gray-200">
        <div className="flex items-center justify-between text-sm">
          <span className="text-gray-600">Last updated: 2 hours ago</span>
          <button className="text-blue-600 hover:text-blue-700 font-medium">
            Refresh Insights
          </button>
        </div>
      </div>
    </div>
  );
};

export default StrategicInsightsPanel;