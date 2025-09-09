import React from 'react';
import Icon from '../../../components/AppIcon';

const CustomerAcquisitionFunnel = () => {
  const funnelData = [
    { stage: 'Awareness', count: 2500000, percentage: 100, color: 'bg-blue-500', icon: 'Eye' },
    { stage: 'Interest', count: 750000, percentage: 30, color: 'bg-green-500', icon: 'MousePointer' },
    { stage: 'Consideration', count: 125000, percentage: 5, color: 'bg-yellow-500', icon: 'Search' },
    { stage: 'Intent', count: 37500, percentage: 1.5, color: 'bg-orange-500', icon: 'ShoppingCart' },
    { stage: 'Purchase', count: 12500, percentage: 0.5, color: 'bg-purple-500', icon: 'CreditCard' }
  ];

  const conversionRates = [
    { from: 'Awareness', to: 'Interest', rate: 30 },
    { from: 'Interest', to: 'Consideration', rate: 16.7 },
    { from: 'Consideration', to: 'Intent', rate: 30 },
    { from: 'Intent', to: 'Purchase', rate: 33.3 }
  ];

  return (
    <div className="bg-white rounded-xl border border-gray-200 p-6 shadow-sm">
      <div className="flex items-center justify-between mb-6">
        <h3 className="text-lg font-semibold text-gray-900">Customer Acquisition Funnel</h3>
        <div className="text-sm text-gray-500">Last 30 days</div>
      </div>
      <div className="space-y-4">
        {funnelData?.map((stage, index) => (
          <div key={stage?.stage} className="relative">
            <div className="flex items-center space-x-4">
              <div className={`p-2 rounded-lg ${stage?.color} bg-opacity-10`}>
                <Icon name={stage?.icon} size={20} className={stage?.color?.replace('bg-', 'text-')} />
              </div>
              
              <div className="flex-1">
                <div className="flex items-center justify-between mb-2">
                  <span className="font-medium text-gray-900">{stage?.stage}</span>
                  <div className="flex items-center space-x-4">
                    <span className="text-sm text-gray-600">
                      {stage?.count?.toLocaleString()} users
                    </span>
                    <span className="text-sm font-medium text-gray-900">
                      {stage?.percentage}%
                    </span>
                  </div>
                </div>
                
                <div className="w-full bg-gray-200 rounded-full h-3">
                  <div 
                    className={`h-3 rounded-full ${stage?.color}`}
                    style={{ width: `${stage?.percentage}%` }}
                  />
                </div>
              </div>
            </div>
            
            {index < conversionRates?.length && (
              <div className="flex items-center justify-center mt-2 mb-2">
                <div className="flex items-center space-x-2 bg-gray-50 px-3 py-1 rounded-full">
                  <Icon name="ArrowDown" size={14} className="text-gray-500" />
                  <span className="text-xs font-medium text-gray-600">
                    {conversionRates?.[index]?.rate}% conversion
                  </span>
                </div>
              </div>
            )}
          </div>
        ))}
      </div>
      <div className="mt-6 pt-6 border-t border-gray-200">
        <div className="grid grid-cols-3 gap-4">
          <div className="text-center">
            <div className="text-2xl font-bold text-gray-900">0.5%</div>
            <div className="text-sm text-gray-600">Overall Conversion</div>
          </div>
          <div className="text-center">
            <div className="text-2xl font-bold text-green-600">$125</div>
            <div className="text-sm text-gray-600">Avg. CAC</div>
          </div>
          <div className="text-center">
            <div className="text-2xl font-bold text-blue-600">$1,250</div>
            <div className="text-sm text-gray-600">Customer LTV</div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default CustomerAcquisitionFunnel;