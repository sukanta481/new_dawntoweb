import React from 'react';
import Button from '../../../components/ui/Button';

const MetricSelector = ({ selectedMetric, onMetricChange, metrics }) => {
  return (
    <div className="bg-card border border-border rounded-lg p-4 mb-6">
      <h3 className="text-sm font-medium text-foreground mb-3">Select Metric</h3>
      <div className="flex flex-wrap gap-2">
        {metrics?.map((metric) => (
          <Button
            key={metric?.key}
            variant={selectedMetric === metric?.key ? 'default' : 'outline'}
            size="sm"
            onClick={() => onMetricChange(metric?.key)}
          >
            {metric?.label}
          </Button>
        ))}
      </div>
    </div>
  );
};

export default MetricSelector;