<?php
require __DIR__ . '/../includes/init.php';

const REVEAL_LOGIN_ERRORS = true;

function is_json_request(): bool {
  $ctype = strtolower($_SERVER['CONTENT_TYPE'] ?? '');
  return strpos($ctype, 'application/json') !== false;
}

function wants_json(): bool {
  $accept = $_SERVER['HTTP_ACCEPT'] ?? '';
  $xhr    = strtolower($_SERVER['HTTP_X_REQUESTED_WITH'] ?? '');
  // Treat JSON body as AJAX, too (prevents HTML redirects breaking fetch)
  return strpos($accept, 'application/json') !== false
      || $xhr === 'xmlhttprequest'
      || (isset($_POST['ajax']) && $_POST['ajax'] === '1')
      || is_json_request();
}

function send_json(int $status, array $payload) {
  http_response_code($status);
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode($payload);
  exit;
}

function input(): array {
  if (is_json_request()) {
    $raw = file_get_contents('php://input') ?: '';
    $j   = json_decode($raw, true) ?: [];
    return [
      'email'    => trim(strtolower($j['email'] ?? '')),
      'password' => $j['password'] ?? '',
      'redirect' => $j['redirect'] ?? url('pages/dashboard.php'),
      // allow CSRF header if you add it later
      'csrf'     => $j['csrf'] ?? ($_SERVER['HTTP_X_CSRF_TOKEN'] ?? '')
    ];
  }
  return [
    'email'    => trim(strtolower($_POST['email'] ?? '')),
    'password' => $_POST['password'] ?? '',
    'redirect' => $_POST['redirect'] ?? url('pages/dashboard.php'),
    'csrf'     => $_POST['csrf'] ?? ''
  ];
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  if (wants_json()) send_json(405, ['ok' => false, 'message' => 'Method not allowed']);
  header('Location: ' . url('pages/login.php'));
  exit;
}

$in = input();
$email    = $in['email'];
$password = $in['password'];
$redirect = $in['redirect'];
$token    = $in['csrf'];

// Basic validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  if (wants_json()) send_json(422, ['ok'=>false, 'field'=>'email', 'message'=>'Please enter a valid email']);
  header('Location: ' . url('pages/login.php') . '?e=' . urlencode('Please enter a valid email.'));
  exit;
}
if ($password === '') {
  if (wants_json()) send_json(422, ['ok'=>false, 'field'=>'password', 'message'=>'Password is required']);
  header('Location: ' . url('pages/login.php') . '?e=' . urlencode('Password is required.'));
  exit;
}

// CSRF: enforce for FORM posts; allow JSON while you wire CSRF header
if (!is_json_request() && !csrf_verify($token)) {
  if (wants_json()) send_json(419, ['ok'=>false, 'message'=>'Security token invalid. Refresh and try again']);
  header('Location: ' . url('pages/login.php') . '?e=' . urlencode('Security token invalid. Please try again.'));
  exit;
}

// Rate limit: 5 tries / 15 minutes (email+IP, if your helper uses IP internally)
if (increment_login_attempt($email) > 5) {
  $msg = 'Too many attempts. Try again in 15 minutes.';
  if (wants_json()) send_json(429, ['ok'=>false, 'message'=>$msg]);
  header('Location: ' . url('pages/login.php') . '?e=' . urlencode($msg));
  exit;
}

// Look up user
$stmt = $pdo->prepare("SELECT id, name, email, password_hash, role, status FROM users WHERE email = ? LIMIT 1");
$stmt->execute([$email]);
$row = $stmt->fetch();

if (!$row) {
  $msg = REVEAL_LOGIN_ERRORS ? 'No account found for this email' : 'Invalid email or password';
  if (wants_json()) send_json(401, ['ok'=>false, 'field'=>'email', 'message'=>$msg]);
  header('Location: ' . url('pages/login.php') . '?e=' . urlencode($msg));
  exit;
}
if ($row['status'] !== 'active') {
  $msg = 'Account is disabled. Contact support.';
  if (wants_json()) send_json(403, ['ok'=>false, 'field'=>'email', 'message'=>$msg]);
  header('Location: ' . url('pages/login.php') . '?e=' . urlencode($msg));
  exit;
}
if (!password_verify($password, $row['password_hash'])) {
  $msg = REVEAL_LOGIN_ERRORS ? 'Incorrect password' : 'Invalid email or password';
  if (wants_json()) send_json(401, ['ok'=>false, 'field'=>'password', 'message'=>$msg]);
  header('Location: ' . url('pages/login.php') . '?e=' . urlencode($msg));
  exit;
}

// Success
reset_login_attempt($email);
$_SESSION['user'] = [
  'id'       => (int)$row['id'],
  'name'     => $row['name'],
  'email'    => $row['email'],
  'role'     => 'client',
  'login_at' => time(),
];

if (wants_json()) send_json(200, ['ok'=>true, 'redirect'=>$redirect ?: url('pages/dashboard.php')]);
header('Location: ' . ($redirect ?: url('pages/dashboard.php')));
exit;
