<?php
// Admin bootstrap: load global init and guard admin routes
require_once __DIR__ . '/../includes/init.php'; // expects: session, $pdo, url(), csrf helpers

if (session_status() === PHP_SESSION_NONE) { session_start(); }

// Small helper to build URLs inside /admin
if (!function_exists('admin_url')) {
  function admin_url($path = '') {
    $base = rtrim(url('admin/'), '/');
    return $base . '/' . ltrim($path, '/');
  }
}

// Role/permission helpers
require_once __DIR__ . '/rbac.php';
?>
