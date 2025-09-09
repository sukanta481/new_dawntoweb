import React from 'react';
import { BarChart, Bar, XAxis, YAxis, CartesianGrid, Tooltip, ResponsiveContainer } from 'recharts';

const ChannelROIChart = () => {
  const data = [
    { channel: 'Email', roi: 420, target: 350, budget: 45000 },
    { channel: 'Social', roi: 285, target: 250, budget: 125000 },
    { channel: 'Search', roi: 340, target: 300, budget: 180000 },
    { channel: 'Display', roi: 180, target: 200, budget: 95000 },
    { channel: 'Video', roi: 225, target: 180, budget: 75000 },
    { channel: 'Content', roi: 310, target: 280, budget: 60000 }
  ];

  const CustomTooltip = ({ active, payload, label }) => {
    if (active && payload && payload?.length) {
      const data = payload?.[0]?.payload;
      return (
        <div className="bg-white p-4 border border-gray-200 rounded-lg shadow-lg">
          <p className="font-medium text-gray-900 mb-2">{label} Marketing</p>
          <div className="space-y-1">
            <p className="text-sm">
              <span className="text-blue-600 font-medium">ROI: {data?.roi}%</span>
            </p>
            <p className="text-sm">
              <span className="text-gray-600">Target: {data?.target}%</span>
            </p>
            <p className="text-sm">
              <span className="text-gray-600">Budget: ${data?.budget?.toLocaleString()}</span>
            </p>
          </div>
        </div>
      );
    }
    return null;
  };

  return (
    <div className="bg-white rounded-xl border border-gray-200 p-6 shadow-sm">
      <div className="flex items-center justify-between mb-6">
        <h3 className="text-lg font-semibold text-gray-900">Channel ROI Performance</h3>
        <div className="flex items-center space-x-4">
          <div className="flex items-center space-x-2">
            <div className="w-3 h-3 bg-blue-500 rounded-full"></div>
            <span className="text-sm text-gray-600">Actual ROI</span>
          </div>
          <div className="flex items-center space-x-2">
            <div className="w-3 h-3 bg-gray-300 rounded-full"></div>
            <span className="text-sm text-gray-600">Target ROI</span>
          </div>
        </div>
      </div>
      
      <div className="h-80">
        <ResponsiveContainer width="100%" height="100%">
          <BarChart data={data} margin={{ top: 20, right: 30, left: 20, bottom: 5 }}>
            <CartesianGrid strokeDasharray="3 3" stroke="#f0f0f0" />
            <XAxis 
              dataKey="channel" 
              axisLine={false}
              tickLine={false}
              tick={{ fill: '#6B7280', fontSize: 12 }}
            />
            <YAxis 
              axisLine={false}
              tickLine={false}
              tick={{ fill: '#6B7280', fontSize: 12 }}
              label={{ value: 'ROI (%)', angle: -90, position: 'insideLeft' }}
            />
            <Tooltip content={<CustomTooltip />} />
            <Bar dataKey="target" fill="#E5E7EB" radius={[4, 4, 0, 0]} />
            <Bar dataKey="roi" fill="#3B82F6" radius={[4, 4, 0, 0]} />
          </BarChart>
        </ResponsiveContainer>
      </div>
    </div>
  );
};

export default ChannelROIChart;