import React, { useState } from 'react';
import Icon from '../../../components/AppIcon';
import Button from '../../../components/ui/Button';
import Input from '../../../components/ui/Input';
import Select from '../../../components/ui/Select';

const DataExportGrid = ({ data }) => {
  const [searchTerm, setSearchTerm] = useState('');
  const [sortField, setSortField] = useState('channel');
  const [sortDirection, setSortDirection] = useState('asc');
  const [selectedRows, setSelectedRows] = useState([]);
  const [isExpanded, setIsExpanded] = useState(false);

  const sortOptions = [
    { value: 'channel', label: 'Channel' },
    { value: 'spend', label: 'Spend' },
    { value: 'conversions', label: 'Conversions' },
    { value: 'ctr', label: 'CTR' },
    { value: 'cpa', label: 'CPA' }
  ];

  const filteredData = data?.filter(row =>
    row?.channel?.toLowerCase()?.includes(searchTerm?.toLowerCase()) ||
    row?.campaign?.toLowerCase()?.includes(searchTerm?.toLowerCase())
  );

  const sortedData = [...filteredData]?.sort((a, b) => {
    const aVal = a?.[sortField];
    const bVal = b?.[sortField];
    
    if (typeof aVal === 'string') {
      return sortDirection === 'asc' 
        ? aVal?.localeCompare(bVal)
        : bVal?.localeCompare(aVal);
    }
    
    return sortDirection === 'asc' ? aVal - bVal : bVal - aVal;
  });

  const handleSort = (field) => {
    if (sortField === field) {
      setSortDirection(sortDirection === 'asc' ? 'desc' : 'asc');
    } else {
      setSortField(field);
      setSortDirection('asc');
    }
  };

  const handleRowSelect = (id) => {
    setSelectedRows(prev =>
      prev?.includes(id)
        ? prev?.filter(rowId => rowId !== id)
        : [...prev, id]
    );
  };

  const handleSelectAll = () => {
    setSelectedRows(
      selectedRows?.length === sortedData?.length
        ? []
        : sortedData?.map(row => row?.id)
    );
  };

  const handleExport = (format) => {
    const selectedData = selectedRows?.length > 0
      ? sortedData?.filter(row => selectedRows?.includes(row?.id))
      : sortedData;
    
    console.log(`Exporting ${selectedData?.length} rows as ${format}`);
    // Export logic would go here
  };

  const getSortIcon = (field) => {
    if (sortField !== field) return 'ArrowUpDown';
    return sortDirection === 'asc' ? 'ArrowUp' : 'ArrowDown';
  };

  return (
    <div className="bg-card rounded-lg border border-border">
      <div className="p-6 border-b border-border">
        <div className="flex items-center justify-between mb-4">
          <h3 className="text-lg font-semibold text-foreground">Campaign Data Export</h3>
          <Button
            variant="ghost"
            onClick={() => setIsExpanded(!isExpanded)}
            iconName={isExpanded ? "ChevronUp" : "ChevronDown"}
            iconPosition="right"
          >
            {isExpanded ? 'Collapse' : 'Expand'}
          </Button>
        </div>

        {isExpanded && (
          <div className="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0 md:space-x-4">
            <div className="flex-1 max-w-md">
              <Input
                type="search"
                placeholder="Search campaigns or channels..."
                value={searchTerm}
                onChange={(e) => setSearchTerm(e?.target?.value)}
              />
            </div>
            
            <div className="flex items-center space-x-4">
              <Select
                options={sortOptions}
                value={sortField}
                onChange={setSortField}
                className="w-40"
              />
              
              <div className="flex items-center space-x-2">
                <Button
                  variant="outline"
                  size="sm"
                  onClick={() => handleExport('csv')}
                  iconName="Download"
                  iconPosition="left"
                  disabled={sortedData?.length === 0}
                >
                  CSV
                </Button>
                <Button
                  variant="outline"
                  size="sm"
                  onClick={() => handleExport('excel')}
                  iconName="FileSpreadsheet"
                  iconPosition="left"
                  disabled={sortedData?.length === 0}
                >
                  Excel
                </Button>
              </div>
            </div>
          </div>
        )}
      </div>
      {isExpanded && (
        <div className="overflow-x-auto">
          <table className="w-full">
            <thead className="bg-muted">
              <tr>
                <th className="p-3 text-left">
                  <input
                    type="checkbox"
                    checked={selectedRows?.length === sortedData?.length && sortedData?.length > 0}
                    onChange={handleSelectAll}
                    className="rounded border-border"
                  />
                </th>
                
                {['channel', 'campaign', 'spend', 'conversions', 'ctr', 'cpa']?.map((field) => (
                  <th key={field} className="p-3 text-left">
                    <button
                      onClick={() => handleSort(field)}
                      className="flex items-center space-x-1 text-sm font-medium text-foreground hover:text-primary"
                    >
                      <span className="capitalize">{field === 'ctr' ? 'CTR' : field === 'cpa' ? 'CPA' : field}</span>
                      <Icon name={getSortIcon(field)} size={14} />
                    </button>
                  </th>
                ))}
              </tr>
            </thead>
            
            <tbody>
              {sortedData?.map((row) => (
                <tr key={row?.id} className="border-b border-border hover:bg-muted/50">
                  <td className="p-3">
                    <input
                      type="checkbox"
                      checked={selectedRows?.includes(row?.id)}
                      onChange={() => handleRowSelect(row?.id)}
                      className="rounded border-border"
                    />
                  </td>
                  
                  <td className="p-3">
                    <div className="flex items-center space-x-2">
                      <div 
                        className="w-3 h-3 rounded-full"
                        style={{ backgroundColor: row?.color }}
                      />
                      <span className="font-medium text-foreground">{row?.channel}</span>
                    </div>
                  </td>
                  
                  <td className="p-3 text-foreground">{row?.campaign}</td>
                  <td className="p-3 text-foreground">${row?.spend?.toLocaleString()}</td>
                  <td className="p-3 text-foreground">{row?.conversions?.toLocaleString()}</td>
                  <td className="p-3 text-foreground">{row?.ctr?.toFixed(2)}%</td>
                  <td className="p-3 text-foreground">${row?.cpa?.toFixed(2)}</td>
                </tr>
              ))}
            </tbody>
          </table>
          
          {sortedData?.length === 0 && (
            <div className="text-center py-8">
              <Icon name="Search" size={48} color="var(--color-muted-foreground)" className="mx-auto mb-3" />
              <h4 className="font-medium text-foreground mb-1">No results found</h4>
              <p className="text-sm text-muted-foreground">
                Try adjusting your search terms or filters
              </p>
            </div>
          )}
        </div>
      )}
      {isExpanded && sortedData?.length > 0 && (
        <div className="p-4 border-t border-border bg-muted/50">
          <div className="flex items-center justify-between text-sm text-muted-foreground">
            <span>
              {selectedRows?.length > 0 
                ? `${selectedRows?.length} of ${sortedData?.length} rows selected`
                : `${sortedData?.length} total rows`
              }
            </span>
            <span>Last updated: {new Date()?.toLocaleTimeString()}</span>
          </div>
        </div>
      )}
    </div>
  );
};

export default DataExportGrid;