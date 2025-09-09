<?php
// includes/db.php
// >>> Update these for your machine <<<
$DB_HOST = 'localhost';
$DB_NAME = 'new_dawntoweb';   // your database name
$DB_USER = 'root';
$DB_PASS = '';                // XAMPP default is empty; WAMP often 'root'/'', or use your password.

$dsn = "mysql:host={$DB_HOST};dbname={$DB_NAME};charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $DB_USER, $DB_PASS, $options);
} catch (Throwable $e) {
    http_response_code(500);
    die('Database connection failed: ' . htmlspecialchars($e->getMessage()));
}
?>
