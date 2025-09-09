<header class="admin-topbar">
  <div class="topbar-inner">
    <div class="brand">
      <div class="brand-badge">A</div>
      <div>
        <div>Agency Admin</div>
        <div class="muted" style="font-size:12px">Control Center</div>
      </div>
    </div>
    <button id="admin-burger" class="burger" aria-label="Toggle navigation"><span class="bar"></span></button>
    <div class="topbar-right">
      <span class="muted">Role: <?= htmlspecialchars(user_role()) ?></span>
      <a class="logout" href="<?= admin_url('logout.php') ?>">Logout</a>
    </div>
  </div>
</header>
