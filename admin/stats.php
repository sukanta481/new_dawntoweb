<?php
require __DIR__ . '/../includes/init.php';
require __DIR__ . '/../includes/admin_auth.php';
require_admin();

header('Content-Type: application/json');
$counts = [
  'users'     => (int)$pdo->query("SELECT COUNT(*) FROM users")->fetchColumn(),
  'clients'   => (int)$pdo->query("SELECT COUNT(*) FROM clients")->fetchColumn(),
  'campaigns' => (int)$pdo->query("SELECT COUNT(*) FROM campaigns")->fetchColumn(),
  'leads'     => (int)$pdo->query("SELECT COUNT(*) FROM leads")->fetchColumn(),
];
echo json_encode($counts);
