<?php
session_start();

// Detect environment (local vs live)
if ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1') {
    // Local database
    $DB_HOST = '127.0.0.1';
    $DB_NAME = 'new_dawntoweb';
    $DB_USER = 'root';
    $DB_PASS = '';
} else {
    // Live Hostinger database
    $DB_HOST = 'localhost'; // or Hostinger’s DB host (check Hostinger panel, often looks like "mysql.hostinger.in")
    $DB_NAME = 'u286257250_dawntoweb';
    $DB_USER = 'u286257250_dawntoweb';
    $DB_PASS = 'Sukanta@8961';
}

header('Content-Type: application/json');

$options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
];

try {
  $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4", $DB_USER, $DB_PASS, $options);
} catch (PDOException $e) {
  http_response_code(500);
  echo json_encode(['ok' => false, 'error' => 'DB connection failed']);
  exit;
}
