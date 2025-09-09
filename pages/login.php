<?php
require __DIR__ . '/../includes/init.php';
$currentPage = 'login';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Client Login - dawntoweb</title>
  <link rel="stylesheet" href="<?= asset('css/main.css') ?>" />
</head>
<body class="bg-background text-text-primary">

<?php include __DIR__ . '/../partials/header.php'; ?>

<section class="py-16 lg:py-24">
  <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8">
    <div class="card p-8">
      <h1 class="text-3xl font-bold mb-2">Client Login</h1>
      <p class="text-text-secondary mb-6">Access your client portal.</p>

      <!-- Global error -->
      <div id="form-error" class="status-error p-3 rounded mb-4 hidden"></div>

      <form id="login-form" class="space-y-6" action="<?= url('api/auth_login.php') ?>" method="POST" novalidate>
        <!-- CSRF + redirect -->
        <input type="hidden" name="csrf" value="<?= htmlspecialchars(csrf_token(), ENT_QUOTES) ?>">
        <input type="hidden" name="redirect" value="<?= url('pages/dashboard.php') ?>">

        <div>
          <label class="block text-sm font-medium mb-2" for="email">Email</label>
          <input id="email" name="email" type="email" required class="form-input w-full" placeholder="client@example.com" />
          <div class="error-message hidden text-error text-sm mt-1"></div>
        </div>

        <div>
          <label class="block text-sm font-medium mb-2" for="password">Password</label>

          <!-- password with eye toggle -->
          <div class="relative">
            <input id="password" name="password" type="password" required class="form-input w-full pr-12" placeholder="••••••••" />
            <button type="button" id="toggle-pass"
                    class="absolute inset-y-0 right-0 px-3 text-text-secondary hover:text-primary"
                    aria-label="Show password">👁</button>
          </div>
          <div class="error-message hidden text-error text-sm mt-1"></div>
        </div>

        <button type="submit" class="btn-primary w-full py-3" id="btn-login">Log In</button>
      </form>
    </div>
  </div>
</section>

<script>
// Eye toggle
(function(){
  const btn = document.getElementById('toggle-pass');
  const pwd = document.getElementById('password');
  if (btn && pwd) {
    btn.addEventListener('click', () => {
      pwd.type = (pwd.type === 'password') ? 'text' : 'password';
      btn.textContent = (pwd.type === 'password') ? '👁' : '🙈';
    });
  }
})();

// AJAX submit -> asks for JSON, sends FormData (so PHP sees $_POST)
(function () {
  const form   = document.getElementById('login-form');
  const email  = document.getElementById('email');
  const pass   = document.getElementById('password');
  const msg    = document.getElementById('form-error');
  const button = document.getElementById('btn-login');

  function fieldError(input, message) {
    const group = input.closest('div');
    const err   = group ? group.querySelector('.error-message') : null;
    if (err) { err.textContent = message; err.classList.remove('hidden'); }
    input.classList.add('border-error');
  }
  function clearErrors() {
    msg && msg.classList.add('hidden');
    [email, pass].forEach(el => {
      const err = el.closest('div').querySelector('.error-message');
      if (err) err.classList.add('hidden');
      el.classList.remove('border-error');
    });
  }

  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    clearErrors();

    // basic front-end validation
    if (!email.value.trim()) return fieldError(email, 'Email is required');
    if (!pass.value) return fieldError(pass, 'Password is required');

    const fd = new FormData(form);
    fd.set('ajax', '1'); // tells server to reply JSON

    button.disabled = true;

    try {
      const res  = await fetch(form.action, {
        method: 'POST',
        body: fd,
        headers: { 'Accept': 'application/json' },
        credentials: 'include'
      });
      const data = await res.json().catch(() => ({}));

      if (!res.ok || !data.ok) {
        // precise message from server
        if (data.field === 'email') fieldError(email, data.message || 'Invalid email');
        else if (data.field === 'password') fieldError(pass, data.message || 'Invalid password');
        else { msg.textContent = data.message || 'Invalid credentials'; msg.classList.remove('hidden'); }
        return;
      }

      // success
      window.location.href = data.redirect || '<?= url('pages/dashboard.php') ?>';
    } catch (err) {
      msg.textContent = 'Network error. Please try again.';
      msg.classList.remove('hidden');
    } finally {
      button.disabled = false;
    }
  });
})();
</script>

</body>
</html>
