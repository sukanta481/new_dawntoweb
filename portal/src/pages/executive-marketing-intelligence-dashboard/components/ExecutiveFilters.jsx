import React from 'react';
import Select from '../../../components/ui/Select';
import Button from '../../../components/ui/Button';
import Icon from '../../../components/AppIcon';

const ExecutiveFilters = ({ 
  timePeriod, 
  setTimePeriod, 
  department, 
  setDepartment, 
  brand, 
  setBrand,
  onExport,
  onRefresh 
}) => {
  const timePeriodOptions = [
    { value: 'monthly', label: 'Monthly View' },
    { value: 'quarterly', label: 'Quarterly View' },
    { value: 'ytd', label: 'Year to Date' },
    { value: 'annual', label: 'Annual View' }
  ];

  const departmentOptions = [
    { value: 'all', label: 'All Departments' },
    { value: 'digital', label: 'Digital Marketing' },
    { value: 'brand', label: 'Brand Marketing' },
    { value: 'performance', label: 'Performance Marketing' },
    { value: 'content', label: 'Content Marketing' }
  ];

  const brandOptions = [
    { value: 'all', label: 'All Brands' },
    { value: 'primary', label: 'Primary Brand' },
    { value: 'subsidiary-a', label: 'Subsidiary A' },
    { value: 'subsidiary-b', label: 'Subsidiary B' },
    { value: 'new-ventures', label: 'New Ventures' }
  ];

  return (
    <div className="bg-white rounded-xl border border-gray-200 p-6 shadow-sm mb-6">
      <div className="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
        <div className="flex flex-col sm:flex-row sm:items-center space-y-4 sm:space-y-0 sm:space-x-4">
          <Select
            label="Time Period"
            options={timePeriodOptions}
            value={timePeriod}
            onChange={setTimePeriod}
            className="w-full sm:w-48"
          />
          
          <Select
            label="Department"
            options={departmentOptions}
            value={department}
            onChange={setDepartment}
            className="w-full sm:w-48"
          />
          
          <Select
            label="Brand"
            options={brandOptions}
            value={brand}
            onChange={setBrand}
            className="w-full sm:w-48"
          />
        </div>
        
        <div className="flex items-center space-x-3">
          <Button
            variant="outline"
            size="sm"
            iconName="RefreshCw"
            iconPosition="left"
            onClick={onRefresh}
          >
            Refresh
          </Button>
          
          <Button
            variant="outline"
            size="sm"
            iconName="Download"
            iconPosition="left"
            onClick={onExport}
          >
            Export Report
          </Button>
          
          <Button
            variant="default"
            size="sm"
            iconName="Presentation"
            iconPosition="left"
          >
            Board Deck
          </Button>
        </div>
      </div>
      
      <div className="mt-4 pt-4 border-t border-gray-200">
        <div className="flex items-center justify-between text-sm">
          <div className="flex items-center space-x-4">
            <span className="text-gray-600">
              Last updated: <span className="font-medium">Dec 19, 2024 at 8:30 AM</span>
            </span>
            <div className="flex items-center space-x-1">
              <div className="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
              <span className="text-green-600 font-medium">Live Data</span>
            </div>
          </div>
          
          <div className="flex items-center space-x-2 text-gray-500">
            <Icon name="Shield" size={16} />
            <span>Executive Access</span>
          </div>
        </div>
      </div>
    </div>
  );
};

export default ExecutiveFilters;