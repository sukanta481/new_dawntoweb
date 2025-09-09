import React, { useState } from 'react';
import Icon from '../../../components/AppIcon';

const AttributionFlowDiagram = ({ data }) => {
  const [selectedNode, setSelectedNode] = useState(null);

  const handleNodeClick = (node) => {
    setSelectedNode(selectedNode?.id === node?.id ? null : node);
  };

  const getNodeColor = (type) => {
    const colors = {
      'awareness': '#3B82F6',
      'consideration': '#10B981',
      'conversion': '#F59E0B',
      'retention': '#8B5CF6'
    };
    return colors?.[type] || '#6B7280';
  };

  const getNodeIcon = (type) => {
    const icons = {
      'awareness': 'Eye',
      'consideration': 'Search',
      'conversion': 'ShoppingCart',
      'retention': 'Heart'
    };
    return icons?.[type] || 'Circle';
  };

  return (
    <div className="bg-card rounded-lg border border-border p-6">
      <div className="flex items-center justify-between mb-6">
        <h3 className="text-lg font-semibold text-foreground">Customer Journey Attribution</h3>
        <div className="flex items-center space-x-4 text-sm text-muted-foreground">
          <div className="flex items-center space-x-2">
            <div className="w-3 h-3 rounded-full bg-primary" />
            <span>Awareness</span>
          </div>
          <div className="flex items-center space-x-2">
            <div className="w-3 h-3 rounded-full bg-success" />
            <span>Consideration</span>
          </div>
          <div className="flex items-center space-x-2">
            <div className="w-3 h-3 rounded-full bg-warning" />
            <span>Conversion</span>
          </div>
          <div className="flex items-center space-x-2">
            <div className="w-3 h-3 rounded-full bg-purple-500" />
            <span>Retention</span>
          </div>
        </div>
      </div>
      <div className="relative">
        {/* Flow Diagram */}
        <div className="flex items-center justify-between space-x-8 mb-8">
          {data?.map((node, index) => (
            <div key={node?.id} className="flex flex-col items-center space-y-2">
              {/* Connection Line */}
              {index < data?.length - 1 && (
                <div className="absolute top-12 w-16 h-0.5 bg-border"
                     style={{ left: `${(index + 1) * 120 - 40}px` }} />
              )}
              
              {/* Node */}
              <button
                onClick={() => handleNodeClick(node)}
                className={`relative w-24 h-24 rounded-full border-4 transition-all duration-200 hover:scale-105 ${
                  selectedNode?.id === node?.id 
                    ? 'border-primary shadow-lg' 
                    : 'border-border hover:border-muted-foreground'
                }`}
                style={{ backgroundColor: `${getNodeColor(node?.type)}20` }}
              >
                <div className="flex flex-col items-center justify-center h-full">
                  <Icon 
                    name={getNodeIcon(node?.type)} 
                    size={20} 
                    color={getNodeColor(node?.type)} 
                  />
                  <span className="text-xs font-medium mt-1" style={{ color: getNodeColor(node?.type) }}>
                    {node?.users?.toLocaleString()}
                  </span>
                </div>
                
                {/* Conversion Rate Badge */}
                {node?.conversionRate && (
                  <div className="absolute -top-2 -right-2 bg-success text-white text-xs px-2 py-1 rounded-full">
                    {node?.conversionRate}%
                  </div>
                )}
              </button>
              
              {/* Node Label */}
              <div className="text-center">
                <h4 className="text-sm font-medium text-foreground">{node?.stage}</h4>
                <p className="text-xs text-muted-foreground">{node?.channel}</p>
              </div>
            </div>
          ))}
        </div>

        {/* Detailed Metrics Panel */}
        {selectedNode && (
          <div className="bg-muted rounded-lg p-4 border border-border">
            <div className="flex items-center justify-between mb-4">
              <h4 className="text-lg font-semibold text-foreground">
                {selectedNode?.stage} - {selectedNode?.channel}
              </h4>
              <button
                onClick={() => setSelectedNode(null)}
                className="text-muted-foreground hover:text-foreground"
              >
                <Icon name="X" size={20} />
              </button>
            </div>
            
            <div className="grid grid-cols-2 md:grid-cols-4 gap-4">
              <div className="text-center">
                <div className="text-2xl font-bold text-foreground">
                  {selectedNode?.users?.toLocaleString()}
                </div>
                <div className="text-sm text-muted-foreground">Users</div>
              </div>
              
              <div className="text-center">
                <div className="text-2xl font-bold text-foreground">
                  ${selectedNode?.spend?.toLocaleString()}
                </div>
                <div className="text-sm text-muted-foreground">Spend</div>
              </div>
              
              <div className="text-center">
                <div className="text-2xl font-bold text-foreground">
                  {selectedNode?.conversionRate}%
                </div>
                <div className="text-sm text-muted-foreground">Conv. Rate</div>
              </div>
              
              <div className="text-center">
                <div className="text-2xl font-bold text-foreground">
                  ${selectedNode?.cpa?.toFixed(2)}
                </div>
                <div className="text-sm text-muted-foreground">CPA</div>
              </div>
            </div>
          </div>
        )}
      </div>
    </div>
  );
};

export default AttributionFlowDiagram;