<?php
// includes/init.php
if (session_status() === PHP_SESSION_NONE) { session_start(); }

// Auto-detect project base (assumes your pages live under /pages/…)
$script = $_SERVER['SCRIPT_NAME'] ?? $_SERVER['PHP_SELF'] ?? '/';
$base   = preg_replace('#/pages/.*$#', '/', $script);
if ($base === '' || $base === null) { $base = '/'; }
define('BASE', $base);

function url($path)  { return rtrim(BASE, '/').'/'.ltrim($path, '/'); }
function asset($path){ return url($path); }

function nav_class($current, $name) {
  return $current === $name
    ? 'nav-link active text-primary font-medium'
    : 'nav-link text-text-secondary hover:text-primary';
}

// Optional: set a default timezone for consistent timestamps
date_default_timezone_set('UTC');

// Load DB + auth (needed for client login system)
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/auth.php';
