<?php
// tools/create_client.php  (DELETE this file after you run it once!)
// Usage: /tools/create_client.php?name=Client+Name&email=client@example.com&password=Passw0rd!
require __DIR__ . '/../includes/init.php';
if (!isset($_GET['email'], $_GET['password'], $_GET['name'])) {
    header('Content-Type: text/plain; charset=utf-8');
    echo "Usage: create_client.php?name=Client+Name&email=client@example.com&password=Passw0rd!\n";
    exit;
}

$name = trim($_GET['name']);
$email = strtolower(trim($_GET['email']));
$password = $_GET['password'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { die('Invalid email'); }
if (strlen($password) < 8) { die('Password must be at least 8 chars'); }

$hash = password_hash($password, PASSWORD_DEFAULT);
$stmt = $pdo->prepare("INSERT INTO clients (name, email, password_hash, status) VALUES (?, ?, ?, 'active')");
try {
    $stmt->execute([$name, $email, $hash]);
    echo "Client created: {$email}\n";
} catch (Throwable $e) {
    http_response_code(500);
    echo "Error: " . $e->getMessage();
}
?>
