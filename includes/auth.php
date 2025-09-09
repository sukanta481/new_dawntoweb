<?php
// includes/auth.php

function csrf_token() {
    if (empty($_SESSION['csrf'])) {
        $_SESSION['csrf'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf'];
}
function csrf_verify($token) {
    return isset($_SESSION['csrf']) && hash_equals($_SESSION['csrf'], $token);
}

function current_user() {
    return $_SESSION['user'] ?? null;
}

function is_client_logged_in() {
    return !empty($_SESSION['user']) && ($_SESSION['user']['role'] ?? '') === 'client';
}

function require_client() {
    if (!is_client_logged_in()) {
        header('Location: ' . url('pages/login.php') . '?redirect=' . urlencode($_SERVER['REQUEST_URI'] ?? url('pages/dashboard.php')));
        exit;
    }
}

function increment_login_attempt($email) {
    $key = 'login_try_' . sha1(strtolower($email) . ($_SERVER['REMOTE_ADDR'] ?? 'unknown'));
    $now = time();
    if (empty($_SESSION[$key])) {
        $_SESSION[$key] = ['c' => 1, 't' => $now];
        return 1;
    }
    // reset window after 15 minutes
    if ($now - $_SESSION[$key]['t'] > 15*60) {
        $_SESSION[$key] = ['c' => 1, 't' => $now];
        return 1;
    }
    $_SESSION[$key]['c']++;
    return $_SESSION[$key]['c'];
}
function reset_login_attempt($email) {
    $key = 'login_try_' . sha1(strtolower($email) . ($_SERVER['REMOTE_ADDR'] ?? 'unknown'));
    unset($_SESSION[$key]);
}

function login_client($email, $password, PDO $pdo) {
    $email = trim(strtolower($email));
    $stmt = $pdo->prepare("SELECT id, name, email, password_hash, status FROM clients WHERE email = ? LIMIT 1");
    $stmt->execute([$email]);
    $row = $stmt->fetch();
    if (!$row) { return ['ok'=>false, 'error'=>'Invalid credentials']; }
    if ($row['status'] !== 'active') { return ['ok'=>false, 'error'=>'Account is not active']; }
    if (!password_verify($password, $row['password_hash'])) {
        return ['ok'=>false, 'error'=>'Invalid credentials'];
    }
    // Success
    $_SESSION['user'] = [
        'id'    => (int)$row['id'],
        'name'  => $row['name'],
        'email' => $row['email'],
        'role'  => 'client',
        'login_at' => time(),
    ];
    return ['ok'=>true];
}

function logout_client() {
    $_SESSION['user'] = null;
    unset($_SESSION['user']);
    // keep csrf and other session data if needed
}
function require_client_json() {
  if (empty($_SESSION['user'])) {
    http_response_code(401);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['error' => 'Unauthorized']);
    exit;
  }
}

?>
