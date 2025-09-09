<?php
require __DIR__ . '/../includes/init.php';
require_once __DIR__ . '/../includes/admin_auth.php'; // keep your existing auth helpers
require_once __DIR__ . '/../includes/admin_auth_login.php'; // add this if admin_auth_login is defined elsewhere

// Define admin_auth_last_error if not already defined
if (!function_exists('admin_auth_last_error')) {
  function admin_auth_last_error() {
    // You can customize this to fetch the last error from your session or a static variable
    return $_SESSION['admin_auth_last_error'] ?? null;
  }
}

// Define admin_is_logged_in if not already defined
if (!function_exists('admin_is_logged_in')) {
  function admin_is_logged_in() {
    return !empty($_SESSION['admin_logged_in']);
  }
}

// If already logged in, bounce to dashboard
if (function_exists('admin_is_logged_in') && admin_is_logged_in()) {
  header('Location: ' . url('admin/index.php'));
  exit;
}

$error = '';

// Handle POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email    = trim(strtolower($_POST['email'] ?? ''));
  $password = $_POST['password'] ?? '';
  $remember = !empty($_POST['remember']);

  // Use your auth helper
  if (function_exists('admin_auth_login')) {
    $ok = admin_auth_login($pdo, $email, $password, $remember);   // <- your helper
  } else {
    $ok = false;
  }

  if ($ok) {
    header('Location: ' . url('admin/index.php'));
    exit;
  }

  // Try to get a nice error from your helper, else generic:
  if (function_exists('admin_auth_last_error')) {
    $error = admin_auth_last_error() ?: 'Incorrect email or password';
  } else {
    $error = 'Incorrect password';
  }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CMS Admin Pro — Sign in</title>
  <!-- IMPORTANT: point to the shared assets you actually have -->
  <link rel="stylesheet" href="<?= asset('assets/css/admin.css?v=auth3') ?>">
</head>
<body class="auth-body">
  <div class="auth-wrap">
    <form id="auth-form" class="auth-card" method="post" action="">
      <div class="auth-icon">🛡️</div>
      <h1 class="auth-title">CMS Admin Pro</h1>
      <p class="auth-sub">Sign in to your admin dashboard</p>

      <?php if (!empty($error)): ?>
        <div class="auth-alert"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>

      <label class="auth-label" for="email">Email Address</label>
      <div class="auth-field">
        <span class="auth-ico">✉️</span>
        <input class="auth-input" id="email" name="email" type="email"
               placeholder="Enter your email address" required
               value="<?= htmlspecialchars($_POST['email'] ?? 'admin@example.com') ?>">
      </div>

      <label class="auth-label" for="pwd">Password</label>
      <div class="auth-field">
        <span class="auth-ico">🔒</span>
        <input class="auth-input" id="pwd" name="password" type="password" placeholder="Enter your password" required>
        <button type="button" id="togglePwd" class="auth-eye" aria-label="Show password">
          <span id="eyeOpen">👁</span>
          <span id="eyeClosed" style="display:none">🙈</span>
        </button>
      </div>

      <div class="auth-row">
        <label class="auth-check"><input type="checkbox" name="remember" value="1"> Remember me</label>
        <a class="auth-link" href="#">Forgot password?</a>
      </div>

      <button id="btnSubmit" class="auth-btn" type="submit">
        <span>Sign In</span>
        <span class="auth-arrow">→</span>
        <span class="auth-spin"></span>
      </button>
    </form>
  </div>

  <!-- IMPORTANT: point to the shared assets you actually have -->
  <script src="<?= asset('assets/js/admin.js?v=auth3') ?>"></script>
</body>
</html>
