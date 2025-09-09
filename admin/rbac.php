<?php
// Tiny role-based access control (RBAC) helpers
function current_user() { return $_SESSION['user'] ?? null; }

function is_logged_in() { return !empty($_SESSION['user']); }

function require_login() {
  if (!is_logged_in()) {
    header('Location: ' . admin_url('login.php'));
    exit;
  }
}

function user_role() { return $_SESSION['user']['role'] ?? 'guest'; }

function require_role($roles) {
  $roles = is_array($roles) ? $roles : [$roles];
  require_login();
  if (!in_array(user_role(), $roles, true)) {
    http_response_code(403);
    echo "<h1>403 — Forbidden</h1><p>You don't have permission to access this area.</p>";
    exit;
  }
}

// Simple capability map (extend as needed)
function can($capability) {
  $role = user_role();
  $caps = [
    'admin' => ['*'],
    'staff' => ['manage_clients','manage_campaigns','view_reports','edit_pages','upload_media','view_leads'],
    'sales' => ['view_leads','manage_leads','view_reports'],
  ];
  $list = $caps[$role] ?? [];
  return in_array('*', $list, true) || in_array($capability, $list, true);
}
?>
