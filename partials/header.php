<?php
// partials/header.php
// Requires includes/init.php to be loaded first on the page.
// Set $currentPage per page: 'home','about','services','portfolio','blog','contact','login','dashboard', etc.
$user = function_exists('current_user') ? current_user() : ($_SESSION['user'] ?? null);
?>
<header class="sticky top-0 z-50 bg-white/95 backdrop-blur-sm border-b border-border shadow-custom-sm">
  <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <a href="<?= url('pages/homepage.php') ?>" class="flex items-center space-x-2">
          <img src="<?= asset('public/brand/logo2.png') ?>" alt="dawntoweb logo" class="w-20 h-20" width="60" height="60" />
          <span class="text-xl font-bold text-primary">dawntoweb</span>
        </a>
      </div>

      <!-- Desktop Navigation -->
      <div class="hidden md:block">
        <div class="ml-10 flex items-baseline space-x-4">
          <a href="<?= url('pages/homepage.php') ?>" class="<?= nav_class($currentPage ?? '', 'home') ?>">Home</a>
          <a href="<?= url('pages/about_us.php') ?>" class="<?= nav_class($currentPage ?? '', 'about') ?>">About</a>
          <a href="<?= url('pages/services.php') ?>" class="<?= nav_class($currentPage ?? '', 'services') ?>">Services</a>
          <a href="<?= url('pages/portfolio.php') ?>" class="<?= nav_class($currentPage ?? '', 'portfolio') ?>">Portfolio</a>
          <a href="<?= url('pages/blog.php') ?>" class="<?= nav_class($currentPage ?? '', 'blog') ?>">Blog</a>
          <a href="<?= url('pages/contact.php') ?>" class="<?= nav_class($currentPage ?? '', 'contact') ?>">Contact</a>
        </div>
      </div>

      <!-- Right-side CTA / Auth -->
      <div class="hidden md:flex items-center gap-3">
        <?php if ($user): ?>
          <span class="text-sm text-text-secondary hidden lg:inline">Hi, <?= htmlspecialchars($user['name']) ?></span>
          <a href="<?= url('api/auth_logout.php') ?>" class="btn-secondary">Logout</a>
        <?php else: ?>
          <a href="<?= url('pages/login.php') ?>" class="btn-secondary <?= ($currentPage ?? '')==='login' ? 'border-primary text-primary' : '' ?>">Client Login</a>
        <?php endif; ?>
        <a href="<?= url('pages/contact.php') ?>" class="btn-primary">Get Started</a>
      </div>

      <!-- Mobile menu button -->
      <div class="md:hidden">
        <button type="button" class="min-touch-target text-text-secondary hover:text-primary focus:outline-none" id="mobile-menu-button">
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Navigation -->
    <div class="md:hidden hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t border-border">
        <a href="<?= url('pages/homepage.php') ?>" class="block px-3 py-2 <?= ($currentPage ?? '')==='home' ? 'text-primary font-medium' : 'text-text-secondary hover:text-primary' ?>">Home</a>
        <a href="<?= url('pages/about_us.php') ?>" class="block px-3 py-2 <?= ($currentPage ?? '')==='about' ? 'text-primary font-medium' : 'text-text-secondary hover:text-primary' ?>">About</a>
        <a href="<?= url('pages/services.php') ?>" class="block px-3 py-2 <?= ($currentPage ?? '')==='services' ? 'text-primary font-medium' : 'text-text-secondary hover:text-primary' ?>">Services</a>
        <a href="<?= url('pages/portfolio.php') ?>" class="block px-3 py-2 <?= ($currentPage ?? '')==='portfolio' ? 'text-primary font-medium' : 'text-text-secondary hover:text-primary' ?>">Portfolio</a>
        <a href="<?= url('pages/blog.php') ?>" class="block px-3 py-2 <?= ($currentPage ?? '')==='blog' ? 'text-primary font-medium' : 'text-text-secondary hover:text-primary' ?>">Blog</a>
        <a href="<?= url('pages/contact.php') ?>" class="block px-3 py-2 <?= ($currentPage ?? '')==='contact' ? 'text-primary font-medium' : 'text-text-secondary hover:text-primary' ?>">Contact</a>

        <?php if (!empty($_SESSION['user'])): ?>
          <a class="btn-secondary block px-3 py-2" href="<?= url('portal/index.php') ?>">Client Portal</a>
          <a class="btn-secondary block px-3 py-2" href="<?= url('api/auth_logout.php') ?>">Logout</a>
        <?php else: ?>
          <a class="btn-secondary block px-3 py-2" href="<?= url('pages/login.php') ?>">Client Login</a>
        <?php endif; ?>

        <a href="<?= url('pages/contact.php') ?>" class="block mt-2 btn-primary text-center">Get Started</a>
      </div>
    </div>
  </nav>
</header>

<script>
  document.addEventListener("DOMContentLoaded", function() {
  console.log("✅ DOM loaded");
  const btn = document.getElementById('mobile-menu-button');
  const menu = document.getElementById('mobile-menu');
  console.log("Button:", btn);
  console.log("Menu:", menu);

  if (btn && menu) {
    btn.addEventListener('click', () => {
      console.log("Button clicked!");
      menu.classList.toggle('hidden');
    });
  }
});

  document.addEventListener("DOMContentLoaded", function() {
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    if (btn && menu) {
      btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
      });
    }
  });
</script>
