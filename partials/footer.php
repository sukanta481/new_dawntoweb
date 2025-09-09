<?php
// partials/footer.php
?>
<footer class="bg-secondary-900 text-white py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      
      <!-- Logo + About -->
      <div>
        <div class="flex-shrink-0">
        <a href="<?= url('pages/homepage.php') ?>" class="flex items-center space-x-2">
          <img src="<?= asset('public/brand/logo2.png') ?>" alt="dawntoweb logo" class="w-20 h-20" width="60" height="60" />
          <span class="text-xl font-bold text-white">dawntoweb</span>
        </a>
        </div>
        <p class="text-secondary-300 mb-4">
          Transforming businesses through innovative digital marketing solutions and data-driven strategies.
        </p>
      </div>

      <!-- Services -->
      <div>
        <h3 class="text-lg font-semibold mb-4">Services</h3>
        <ul class="space-y-2">
          <li><a href="<?= url('pages/services.php') ?>" class="text-secondary-300 hover:text-white transition-custom-fast">SEO Optimization</a></li>
          <li><a href="<?= url('pages/services.php') ?>" class="text-secondary-300 hover:text-white transition-custom-fast">PPC Advertising</a></li>
          <li><a href="<?= url('pages/services.php') ?>" class="text-secondary-300 hover:text-white transition-custom-fast">Social Media Marketing</a></li>
          <li><a href="<?= url('pages/services.php') ?>" class="text-secondary-300 hover:text-white transition-custom-fast">Web Development</a></li>
          <li><a href="<?= url('pages/services.php') ?>" class="text-secondary-300 hover:text-white transition-custom-fast">Content Marketing</a></li>
        </ul>
      </div>

      <!-- Company -->
      <div>
        <h3 class="text-lg font-semibold mb-4">Company</h3>
        <ul class="space-y-2">
          <li><a href="<?= url('pages/about_us.php') ?>" class="text-secondary-300 hover:text-white transition-custom-fast">About Us</a></li>
          <li><a href="<?= url('pages/portfolio.php') ?>" class="text-secondary-300 hover:text-white transition-custom-fast">Portfolio</a></li>
          <li><a href="<?= url('pages/blog.php') ?>" class="text-secondary-300 hover:text-white transition-custom-fast">Blog</a></li>
          <li><a href="<?= url('pages/contact.php') ?>" class="text-secondary-300 hover:text-white transition-custom-fast">Contact</a></li>
          <li><a href="<?= url('pages/contact.php') ?>" class="text-secondary-300 hover:text-white transition-custom-fast">Careers</a></li>
        </ul>
      </div>

      <!-- Contact + Social Media -->
      <div>
        <h3 class="text-lg font-semibold mb-4">Contact Info</h3>
        <div class="space-y-3 mb-6">
          <div class="flex items-center space-x-3">
            <span class="text-secondary-300">225/h/304 Bagmari Road<br />Kolkata - 700054, West Bengal, India</span>
          </div>
          <div class="flex items-center space-x-3">
            <span class="text-secondary-300">+91 94332 15443</span>
          </div>
          <div class="flex items-center space-x-3">
            <span class="text-secondary-300">info@dawntoweb.com</span>
          </div>
        </div>

        <!-- Social Media Icons -->
        <div class="flex space-x-4">
          <a href="https://facebook.com" target="_blank" class="text-secondary-300 hover:text-white text-xl">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://instagram.com" target="_blank" class="text-secondary-300 hover:text-white text-xl">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://youtube.com" target="_blank" class="text-secondary-300 hover:text-white text-xl">
            <i class="fab fa-youtube"></i>
          </a>
          <a href="https://linkedin.com" target="_blank" class="text-secondary-300 hover:text-white text-xl">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="https://wa.me/919433215443" target="_blank" class="text-secondary-300 hover:text-white text-xl">
            <i class="fab fa-whatsapp"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Bottom Copyright -->
    <div class="border-t border-secondary-700 mt-12 pt-8 text-center">
      <p class="text-secondary-400">
        © 2025 dawntoweb. All Rights Reserved. | Privacy Policy | Terms of Service
      </p>
    </div>
  </div>
</footer>

<!-- FontAwesome CDN (required for social icons) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<script src="<?= asset('js/main.js') ?>"></script>
