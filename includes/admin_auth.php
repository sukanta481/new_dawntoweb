<?php
// includes/admin_auth.php
// Helpers for admin sign-in/out and route guards.

if (session_status() === PHP_SESSION_NONE) { session_start(); }

// Who counts as an admin area user?
function is_admin_role(string $role): bool {
  return in_array($role, ['admin','staff','sales'], true);
}

function admin_user(): ?array {
  return $_SESSION['admin'] ?? null;
}

function require_admin(array $roles = []): void {
  $u = admin_user();
  if (!$u) {
    // not logged in
    header('Location: ' . url('admin/login.php') . '?next=' . urlencode($_SERVER['REQUEST_URI'] ?? ''));
    exit;
  }
  if ($roles && !in_array($u['role'], $roles, true)) {
    http_response_code(403);
    echo "<h1>403</h1><p>You don’t have permission to view this page.</p>";
    exit;
  }
}

function admin_logout(): void {
  unset($_SESSION['admin']);
}

function admin_login(PDO $pdo, string $email, string $password): array {
  $stmt = $pdo->prepare("SELECT id, name, email, password_hash, role, status FROM users WHERE email = ? LIMIT 1");
  $stmt->execute([strtolower(trim($email))]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if (!$row)          return [false, 'No account found for this email'];
  if ($row['status'] !== 'active') return [false, 'Account disabled'];

  if (!is_admin_role($row['role'])) return [false, 'This user cannot access admin'];

  if (!password_verify($password, $row['password_hash'])) {
    return [false, 'Incorrect password'];
  }

  // success
  $_SESSION['admin'] = [
    'id'    => (int)$row['id'],
    'name'  => $row['name'] ?: 'Admin',
    'email' => $row['email'],
    'role'  => $row['role'],
    'login_at' => time(),
  ];

  // update last_login_at
  $pdo->prepare("UPDATE users SET last_login_at = NOW() WHERE id = ?")->execute([$row['id']]);

  return [true, 'ok'];
}
