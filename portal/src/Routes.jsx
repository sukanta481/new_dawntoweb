import React from "react";
import { BrowserRouter, Routes as RouterRoutes, Route } from "react-router-dom";
import ScrollToTop from "components/ScrollToTop";
import ErrorBoundary from "components/ErrorBoundary";
import NotFound from "pages/NotFound";
import ExecutiveMarketingIntelligenceDashboard from './pages/executive-marketing-intelligence-dashboard';
import MultiChannelAnalyticsDashboard from './pages/multi-channel-analytics-dashboard';
import RealTimeCampaignMonitoringDashboard from './pages/real-time-campaign-monitoring-dashboard';
import CampaignPerformanceOverviewDashboard from './pages/campaign-performance-overview-dashboard';

const Routes = () => {
  return (
    <BrowserRouter>
      <ErrorBoundary>
      <ScrollToTop />
      <RouterRoutes>
        {/* Define your route here */}
        <Route path="/" element={<CampaignPerformanceOverviewDashboard />} />
        <Route path="/executive-marketing-intelligence-dashboard" element={<ExecutiveMarketingIntelligenceDashboard />} />
        <Route path="/multi-channel-analytics-dashboard" element={<MultiChannelAnalyticsDashboard />} />
        <Route path="/real-time-campaign-monitoring-dashboard" element={<RealTimeCampaignMonitoringDashboard />} />
        <Route path="/campaign-performance-overview-dashboard" element={<CampaignPerformanceOverviewDashboard />} />
        <Route path="*" element={<NotFound />} />
      </RouterRoutes>
      </ErrorBoundary>
    </BrowserRouter>
  );
};

export default Routes;
