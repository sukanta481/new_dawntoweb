<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

// Load .env
$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

// Database credentials from .env
$db_host = $_ENV['DB_HOST'] ?? 'localhost';
$db_name = $_ENV['DB_NAME'] ?? '';
$db_user = $_ENV['DB_USER'] ?? 'root';
$db_pass = $_ENV['DB_PASS'] ?? '';

try {
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>