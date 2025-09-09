<?php
require __DIR__ . '/../includes/init.php';
$currentPage = 'signup';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up - dawntoweb</title>
  <link rel="stylesheet" href="<?= asset('css/main.css') ?>" />
</head>
<body class="bg-background text-text-primary">

<?php include __DIR__ . '/../partials/header.php'; ?>

<section class="py-16 lg:py-24">
  <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8">
    <div class="card p-8">
      <h1 class="text-3xl font-bold mb-2">Create an Account</h1>
      <p class="text-text-secondary mb-6">Sign up to access your client portal.</p>

      <!-- Global error -->
      <div id="form-error" class="status-error p-3 rounded mb-4 hidden"></div>

      <form id="signup-form" class="space-y-6" action="<?= url('api/auth_register.php') ?>" method="POST" novalidate>
        <div>
          <label class="block text-sm font-medium mb-2" for="name">Full Name</label>
          <input id="name" name="name" type="text" required class="form-input w-full" placeholder="John Doe" />
          <div class="error-message hidden text-error text-sm mt-1"></div>
        </div>

        <div>
          <label class="block text-sm font-medium mb-2" for="email">Email</label>
          <input id="email" name="email" type="email" required class="form-input w-full" placeholder="client@example.com" />
          <div class="error-message hidden text-error text-sm mt-1"></div>
        </div>

        <div>
          <label class="block text-sm font-medium mb-2" for="password">Password</label>
          <div class="relative">
            <input id="password" name="password" type="password" required minlength="6" class="form-input w-full pr-12" placeholder="••••••••" />
            <button type="button" id="toggle-pass" class="absolute inset-y-0 right-0 px-3 text-text-secondary hover:text-primary" aria-label="Show password">👁</button>
          </div>
          <div class="error-message hidden text-error text-sm mt-1"></div>
        </div>

        <div>
          <label class="block text-sm font-medium mb-2" for="password_confirm">Confirm Password</label>
          <div class="relative">
            <input id="password_confirm" name="password_confirm" type="password" required minlength="6" class="form-input w-full pr-12" placeholder="••••••••" />
            <button type="button" id="toggle-pass-confirm" class="absolute inset-y-0 right-0 px-3 text-text-secondary hover:text-primary" aria-label="Show password">👁</button>
          </div>
          <div class="error-message hidden text-error text-sm mt-1"></div>
        </div>

        <button type="submit" class="btn-primary w-full py-3" id="btn-signup">Sign Up</button>
      </form>

      <p class="mt-4 text-sm text-center">
        Already have an account? <a href="<?= url('pages/login.php') ?>" class="text-primary hover:underline">Log in</a>
      </p>
    </div>
  </div>
</section>

<script>
// Toggle password visibility
(function(){
  const pwd = document.getElementById('password');
  const pwdBtn = document.getElementById('toggle-pass');
  if(pwd && pwdBtn){
    pwdBtn.addEventListener('click', () => {
      pwd.type = (pwd.type === 'password') ? 'text' : 'password';
      pwdBtn.textContent = (pwd.type === 'password') ? '👁' : '🙈';
    });
  }
  const pwd2 = document.getElementById('password_confirm');
  const pwd2Btn = document.getElementById('toggle-pass-confirm');
  if(pwd2 && pwd2Btn){
    pwd2Btn.addEventListener('click', () => {
      pwd2.type = (pwd2.type === 'password') ? 'text' : 'password';
      pwd2Btn.textContent = (pwd2.type === 'password') ? '👁' : '🙈';
    });
  }
})();

// AJAX submit
(function () {
  const form   = document.getElementById('signup-form');
  const name   = document.getElementById('name');
  const email  = document.getElementById('email');
  const pass   = document.getElementById('password');
  const pass2  = document.getElementById('password_confirm');
  const msg    = document.getElementById('form-error');
  const button = document.getElementById('btn-signup');

  function fieldError(input, message) {
    const group = input.closest('div');
    const err   = group ? group.querySelector('.error-message') : null;
    if (err) { err.textContent = message; err.classList.remove('hidden'); }
    input.classList.add('border-error');
  }
  function clearErrors() {
    msg && msg.classList.add('hidden');
    [name, email, pass, pass2].forEach(el => {
      const err = el.closest('div').querySelector('.error-message');
      if (err) err.classList.add('hidden');
      el.classList.remove('border-error');
    });
  }

  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    clearErrors();

    // basic validation
    if (!name.value.trim()) return fieldError(name, 'Name is required');
    if (!email.value.trim()) return fieldError(email, 'Email is required');
    if (!pass.value) return fieldError(pass, 'Password is required');
    if (pass.value !== pass2.value) return fieldError(pass2, 'Passwords do not match');

    const payload = { name: name.value.trim(), email: email.value.trim(), password: pass.value };

    button.disabled = true;

    try {
      const res  = await fetch(form.action, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
        body: JSON.stringify(payload),
        credentials: 'include'
      });
      const data = await res.json().catch(() => ({}));

      if (!res.ok || !data.ok) {
        msg.textContent = data.error || 'Registration failed';
        msg.classList.remove('hidden');
        return;
      }

      // success
      msg.textContent = '✅ Account created! Redirecting to login...';
      msg.classList.remove('hidden');
      msg.classList.add('text-green-600');
      setTimeout(()=>window.location.href="<?= url('pages/login.php') ?>", 1500);
    } catch (err) {
      msg.textContent = 'Network error. Please try again.';
      msg.classList.remove('hidden');
    } finally {
      button.disabled = false;
    }
  });
})();
</script>

<script src="<?= asset('js/main.js') ?>"></script>


</body>
</html>
