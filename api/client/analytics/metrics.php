<?php
require __DIR__ . '/../../includes/init.php';
require_client_json(); // returns 401 JSON if not logged in

header('Content-Type: application/json; charset=utf-8');

$clientId = (int)$_SESSION['user']['id'];

// Example schema assumptions:
// - contact_leads(client_id, created_at)
// - campaign_stats(client_id, date, spend, impressions, clicks, leads)
// Adjust queries to your actual tables.

$kpis = [
  'leads'       => 0,
  'spend'       => 0.0,
  'impressions' => 0,
  'ctr'         => '0%'
];

try {
  // Total leads for this client
  $stmt = $pdo->prepare("SELECT COUNT(*) FROM contact_leads WHERE client_id = ?");
  $stmt->execute([$clientId]);
  $kpis['leads'] = (int)$stmt->fetchColumn();

  // Aggregates from campaign_stats
  $stmt = $pdo->prepare("
    SELECT 
      COALESCE(SUM(spend),0) as spend,
      COALESCE(SUM(impressions),0) as impressions,
      COALESCE(SUM(clicks),0) as clicks
    FROM campaign_stats
    WHERE client_id = ?
  ");
  $stmt->execute([$clientId]);
  $row = $stmt->fetch();
  if ($row) {
    $kpis['spend']       = (float)$row['spend'];
    $kpis['impressions'] = (int)$row['impressions'];
    $clicks              = (int)$row['clicks'];
    $kpis['ctr']         = ($row['impressions'] > 0) ? round($clicks / $row['impressions'] * 100, 2) . '%' : '0%';
  }

  // Daily series (last 30 days)
  $stmt = $pdo->prepare("
    SELECT date, leads
    FROM campaign_stats
    WHERE client_id = ? AND date >= (CURRENT_DATE - INTERVAL 30 DAY)
    ORDER BY date ASC
  ");
  $stmt->execute([$clientId]);
  $daily = [];
  while ($r = $stmt->fetch()) {
    $daily[] = ['date' => $r['date'], 'leads' => (int)$r['leads']];
  }

  echo json_encode(['kpis' => $kpis, 'daily' => $daily]);
} catch (Throwable $e) {
  http_response_code(500);
  echo json_encode(['error' => 'Server error', 'details' => $e->getMessage()]);
}
