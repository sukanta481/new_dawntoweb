<?php
require __DIR__ . '/../includes/init.php';
$currentPage = 'home';
?>
<?php include __DIR__ . '/../partials/head.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Digital Marketing Services - DigitalAgency Pro</title>
    <meta name="description" content="Comprehensive digital marketing services including SEO, PPC, social media marketing, web development, and content marketing. Get expert solutions that drive results." />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<script type="module" src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Fdigitalage5654back.builtwithrocket.new&_be=https%3A%2F%2Fapplication.rocket.new&_v=0.1.6"></script>
</head>
<body class="bg-background text-text-primary">
    <?php include __DIR__ . '/../partials/header.php'; ?>
    <nav class="bg-white shadow-md">


    <!-- Hero Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="fade-in">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-text-primary mb-6 text-balance">
                    Digital Marketing Services That 
                    <span class="text-primary">Drive Results</span>
                </h1>
                <p class="text-xl md:text-2xl text-text-secondary mb-8 max-w-3xl mx-auto text-balance">
                    From SEO and PPC to social media and web development, we offer comprehensive digital marketing solutions tailored to your business goals.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="#service-inquiry" class="btn-primary text-lg px-8 py-4 min-touch-target">
                        Get Free Quote
                    </a>
                    <a href="#services-overview" class="btn-secondary text-lg px-8 py-4 min-touch-target">
                        Explore Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Filter Section -->
    <section class="py-8 bg-primary-50 sticky top-16 z-40" id="services-filter">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Mobile Filter (Horizontal Scroll) -->
            <div class="md:hidden">
                <div class="flex space-x-2 overflow-x-auto pb-2 scrollbar-hide">
                    <button class="filter-chip active whitespace-nowrap px-4 py-2 rounded-full bg-primary text-white text-sm font-medium transition-custom-fast" data-filter="all">
                        All Services
                    </button>
                    <button class="filter-chip whitespace-nowrap px-4 py-2 rounded-full bg-white text-text-secondary text-sm font-medium border border-border hover:bg-primary hover:text-white transition-custom-fast" data-filter="seo">
                        SEO
                    </button>
                    <button class="filter-chip whitespace-nowrap px-4 py-2 rounded-full bg-white text-text-secondary text-sm font-medium border border-border hover:bg-primary hover:text-white transition-custom-fast" data-filter="ppc">
                        PPC
                    </button>
                    <button class="filter-chip whitespace-nowrap px-4 py-2 rounded-full bg-white text-text-secondary text-sm font-medium border border-border hover:bg-primary hover:text-white transition-custom-fast" data-filter="social">
                        Social Media
                    </button>
                    <button class="filter-chip whitespace-nowrap px-4 py-2 rounded-full bg-white text-text-secondary text-sm font-medium border border-border hover:bg-primary hover:text-white transition-custom-fast" data-filter="web">
                        Web Development
                    </button>
                    <button class="filter-chip whitespace-nowrap px-4 py-2 rounded-full bg-white text-text-secondary text-sm font-medium border border-border hover:bg-primary hover:text-white transition-custom-fast" data-filter="content">
                        Content Marketing
                    </button>
                </div>
            </div>

            <!-- Desktop Filter -->
            <div class="hidden md:flex justify-center space-x-4">
                <button class="filter-chip active px-6 py-3 rounded-full bg-primary text-white font-medium transition-custom-fast min-touch-target" data-filter="all">
                    All Services
                </button>
                <button class="filter-chip px-6 py-3 rounded-full bg-white text-text-secondary font-medium border border-border hover:bg-primary hover:text-white transition-custom-fast min-touch-target" data-filter="seo">
                    SEO Optimization
                </button>
                <button class="filter-chip px-6 py-3 rounded-full bg-white text-text-secondary font-medium border border-border hover:bg-primary hover:text-white transition-custom-fast min-touch-target" data-filter="ppc">
                    PPC Advertising
                </button>
                <button class="filter-chip px-6 py-3 rounded-full bg-white text-text-secondary font-medium border border-border hover:bg-primary hover:text-white transition-custom-fast min-touch-target" data-filter="social">
                    Social Media
                </button>
                <button class="filter-chip px-6 py-3 rounded-full bg-white text-text-secondary font-medium border border-border hover:bg-primary hover:text-white transition-custom-fast min-touch-target" data-filter="web">
                    Web Development
                </button>
                <button class="filter-chip px-6 py-3 rounded-full bg-white text-text-secondary font-medium border border-border hover:bg-primary hover:text-white transition-custom-fast min-touch-target" data-filter="content">
                    Content Marketing
                </button>
            </div>
        </div>
    </section>

    <!-- Services Overview Section -->
    <section class="py-16 lg:py-24 bg-white" id="services-overview">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">
                    Our Digital Marketing Services
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Comprehensive solutions designed to elevate your brand and drive measurable business growth
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="services-grid">
                <!-- SEO Service Card -->
                <div class="service-card card p-8 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed" data-category="seo">
                    <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary/20 transition-custom-normal">
                        <svg class="w-10 h-10 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-text-primary mb-4">SEO Optimization</h3>
                    <p class="text-text-secondary mb-6">
                        Boost your search rankings and organic traffic with our proven SEO strategies and technical optimization.
                    </p>
                    <ul class="text-left text-text-secondary mb-6 space-y-2">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Keyword Research & Strategy
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            On-Page & Technical SEO
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Link Building & Authority
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Monthly Reporting & Analytics
                        </li>
                    </ul>
                    <div class="text-center mb-6">
                        <span class="text-2xl font-bold text-primary">Starting at $1,500/mo</span>
                    </div>
                    <div class="flex flex-col space-y-3">
                        <a href="contact.html" class="btn-primary w-full">Get Quote</a>
                        <a href="portfolio.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                            View SEO Case Studies →
                        </a>
                    </div>
                </div>

                <!-- PPC Service Card -->
                <div class="service-card card p-8 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed" data-category="ppc">
                    <div class="w-20 h-20 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-accent/20 transition-custom-normal">
                        <svg class="w-10 h-10 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-text-primary mb-4">PPC Advertising</h3>
                    <p class="text-text-secondary mb-6">
                        Maximize ROI with targeted pay-per-click campaigns across Google Ads, Facebook, and other platforms.
                    </p>
                    <ul class="text-left text-text-secondary mb-6 space-y-2">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Google Ads Management
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Facebook & Instagram Ads
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Landing Page Optimization
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Conversion Tracking & ROI
                        </li>
                    </ul>
                    <div class="text-center mb-6">
                        <span class="text-2xl font-bold text-primary">Starting at $2,000/mo</span>
                    </div>
                    <div class="flex flex-col space-y-3">
                        <a href="contact.html" class="btn-primary w-full">Get Quote</a>
                        <a href="portfolio.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                            View PPC Case Studies →
                        </a>
                    </div>
                </div>

                <!-- Social Media Service Card -->
                <div class="service-card card p-8 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed" data-category="social">
                    <div class="w-20 h-20 bg-success/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-success/20 transition-custom-normal">
                        <svg class="w-10 h-10 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-text-primary mb-4">Social Media Marketing</h3>
                    <p class="text-text-secondary mb-6">
                        Build brand awareness and engage your audience across all major social media platforms.
                    </p>
                    <ul class="text-left text-text-secondary mb-6 space-y-2">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Content Strategy & Creation
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Community Management
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Influencer Partnerships
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Analytics & Reporting
                        </li>
                    </ul>
                    <div class="text-center mb-6">
                        <span class="text-2xl font-bold text-primary">Starting at $1,200/mo</span>
                    </div>
                    <div class="flex flex-col space-y-3">
                        <a href="contact.html" class="btn-primary w-full">Get Quote</a>
                        <a href="portfolio.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                            View Social Media Work →
                        </a>
                    </div>
                </div>

                <!-- Web Development Service Card -->
                <div class="service-card card p-8 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed" data-category="web">
                    <div class="w-20 h-20 bg-secondary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-secondary/20 transition-custom-normal">
                        <svg class="w-10 h-10 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-text-primary mb-4">Web Development</h3>
                    <p class="text-text-secondary mb-6">
                        Create stunning, conversion-optimized websites that drive business results and user engagement.
                    </p>
                    <ul class="text-left text-text-secondary mb-6 space-y-2">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Custom Website Design
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            E-commerce Development
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Mobile Optimization
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Performance & Security
                        </li>
                    </ul>
                    <div class="text-center mb-6">
                        <span class="text-2xl font-bold text-primary">Starting at $5,000</span>
                    </div>
                    <div class="flex flex-col space-y-3">
                        <a href="contact.html" class="btn-primary w-full">Get Quote</a>
                        <a href="portfolio.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                            View Website Portfolio →
                        </a>
                    </div>
                </div>

                <!-- Content Marketing Service Card -->
                <div class="service-card card p-8 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed" data-category="content">
                    <div class="w-20 h-20 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-accent/20 transition-custom-normal">
                        <svg class="w-10 h-10 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-text-primary mb-4">Content Marketing</h3>
                    <p class="text-text-secondary mb-6">
                        Engage your audience with compelling content that builds trust and drives conversions.
                    </p>
                    <ul class="text-left text-text-secondary mb-6 space-y-2">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Blog Writing & SEO
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Video Content Creation
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Email Marketing Campaigns
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Content Strategy & Planning
                        </li>
                    </ul>
                    <div class="text-center mb-6">
                        <span class="text-2xl font-bold text-primary">Starting at $1,800/mo</span>
                    </div>
                    <div class="flex flex-col space-y-3">
                        <a href="contact.html" class="btn-primary w-full">Get Quote</a>
                        <a href="portfolio.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                            View Content Examples →
                        </a>
                    </div>
                </div>

                <!-- Email Marketing Service Card -->
                <div class="service-card card p-8 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed" data-category="email">
                    <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary/20 transition-custom-normal">
                        <svg class="w-10 h-10 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-text-primary mb-4">Email Marketing</h3>
                    <p class="text-text-secondary mb-6">
                        Nurture leads and retain customers with targeted email campaigns that drive engagement and sales.
                    </p>
                    <ul class="text-left text-text-secondary mb-6 space-y-2">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Campaign Design & Setup
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            List Segmentation
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Automation Workflows
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            A/B Testing & Optimization
                        </li>
                    </ul>
                    <div class="text-center mb-6">
                        <span class="text-2xl font-bold text-primary">Starting at $800/mo</span>
                    </div>
                    <div class="flex flex-col space-y-3">
                        <a href="contact.html" class="btn-primary w-full">Get Quote</a>
                        <a href="portfolio.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                            View Email Campaigns →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Comparison Table Section -->
    <section class="py-16 lg:py-24 bg-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">
                    Compare Our Service Packages
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Choose the perfect package for your business needs and budget
                </p>
            </div>

            <!-- Desktop Comparison Table -->
            <div class="hidden lg:block overflow-x-auto">
                <table class="w-full bg-white rounded-lg shadow-custom-md">
                    <thead>
                        <tr class="border-b border-border">
                            <th class="text-left p-6 font-semibold text-text-primary">Features</th>
                            <th class="text-center p-6 font-semibold text-text-primary">Starter<br /><span class="text-sm font-normal text-text-secondary">$1,500/mo</span></th>
                            <th class="text-center p-6 font-semibold text-text-primary bg-primary-50">Professional<br /><span class="text-sm font-normal text-text-secondary">$3,500/mo</span></th>
                            <th class="text-center p-6 font-semibold text-text-primary">Enterprise<br /><span class="text-sm font-normal text-text-secondary">$7,500/mo</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-border">
                            <td class="p-6 font-medium text-text-primary">SEO Optimization</td>
                            <td class="p-6 text-center">
                                <svg class="w-5 h-5 text-success mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                            <td class="p-6 text-center bg-primary-50">
                                <svg class="w-5 h-5 text-success mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                            <td class="p-6 text-center">
                                <svg class="w-5 h-5 text-success mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                        </tr>
                        <tr class="border-b border-border">
                            <td class="p-6 font-medium text-text-primary">PPC Advertising</td>
                            <td class="p-6 text-center">
                                <svg class="w-5 h-5 text-text-secondary mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                            <td class="p-6 text-center bg-primary-50">
                                <svg class="w-5 h-5 text-success mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                            <td class="p-6 text-center">
                                <svg class="w-5 h-5 text-success mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                        </tr>
                        <tr class="border-b border-border">
                            <td class="p-6 font-medium text-text-primary">Social Media Management</td>
                            <td class="p-6 text-center">Basic</td>
                            <td class="p-6 text-center bg-primary-50">Advanced</td>
                            <td class="p-6 text-center">Premium</td>
                        </tr>
                        <tr class="border-b border-border">
                            <td class="p-6 font-medium text-text-primary">Content Marketing</td>
                            <td class="p-6 text-center">4 posts/month</td>
                            <td class="p-6 text-center bg-primary-50">12 posts/month</td>
                            <td class="p-6 text-center">24 posts/month</td>
                        </tr>
                        <tr class="border-b border-border">
                            <td class="p-6 font-medium text-text-primary">Email Marketing</td>
                            <td class="p-6 text-center">
                                <svg class="w-5 h-5 text-text-secondary mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                            <td class="p-6 text-center bg-primary-50">
                                <svg class="w-5 h-5 text-success mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                            <td class="p-6 text-center">
                                <svg class="w-5 h-5 text-success mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                        </tr>
                        <tr class="border-b border-border">
                            <td class="p-6 font-medium text-text-primary">Monthly Reports</td>
                            <td class="p-6 text-center">Basic</td>
                            <td class="p-6 text-center bg-primary-50">Detailed</td>
                            <td class="p-6 text-center">Comprehensive</td>
                        </tr>
                        <tr>
                            <td class="p-6 font-medium text-text-primary">Dedicated Account Manager</td>
                            <td class="p-6 text-center">
                                <svg class="w-5 h-5 text-text-secondary mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                            <td class="p-6 text-center bg-primary-50">
                                <svg class="w-5 h-5 text-success mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                            <td class="p-6 text-center">
                                <svg class="w-5 h-5 text-success mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Mobile Comparison Cards -->
            <div class="lg:hidden space-y-6">
                <!-- Starter Package -->
                <div class="card p-6">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold text-text-primary mb-2">Starter</h3>
                        <p class="text-3xl font-bold text-primary">$1,500<span class="text-lg text-text-secondary">/mo</span></p>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-center justify-between">
                            <span class="text-text-primary">SEO Optimization</span>
                            <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-text-primary">PPC Advertising</span>
                            <svg class="w-5 h-5 text-text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-text-primary">Social Media</span>
                            <span class="text-text-secondary">Basic</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-text-primary">Content Marketing</span>
                            <span class="text-text-secondary">4 posts/month</span>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="contact.html" class="btn-primary w-full">Choose Starter</a>
                    </div>
                </div>

                <!-- Professional Package -->
                <div class="card p-6 border-2 border-primary relative">
                    <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                        <span class="bg-primary text-white px-4 py-1 rounded-full text-sm font-medium">Most Popular</span>
                    </div>
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold text-text-primary mb-2">Professional</h3>
                        <p class="text-3xl font-bold text-primary">$3,500<span class="text-lg text-text-secondary">/mo</span></p>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-center justify-between">
                            <span class="text-text-primary">SEO Optimization</span>
                            <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-text-primary">PPC Advertising</span>
                            <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-text-primary">Social Media</span>
                            <span class="text-text-secondary">Advanced</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-text-primary">Content Marketing</span>
                            <span class="text-text-secondary">12 posts/month</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-text-primary">Email Marketing</span>
                            <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="contact.html" class="btn-primary w-full">Choose Professional</a>
                    </div>
                </div>

                <!-- Enterprise Package -->
                <div class="card p-6">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold text-text-primary mb-2">Enterprise</h3>
                        <p class="text-3xl font-bold text-primary">$7,500<span class="text-lg text-text-secondary">/mo</span></p>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-center justify-between">
                            <span class="text-text-primary">SEO Optimization</span>
                            <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-text-primary">PPC Advertising</span>
                            <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-text-primary">Social Media</span>
                            <span class="text-text-secondary">Premium</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-text-primary">Content Marketing</span>
                            <span class="text-text-secondary">24 posts/month</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-text-primary">Email Marketing</span>
                            <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </li>
                        <li class="flex items-center justify-between">
                            <span class="text-text-primary">Dedicated Manager</span>
                            <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="contact.html" class="btn-primary w-full">Choose Enterprise</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Case Studies Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">
                    Service-Specific Case Studies
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    See how our services have delivered exceptional results for businesses like yours
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- SEO Case Study -->
                <div class="card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&h=300&auto=format&fit=crop&ixlib=rb-4.0.3" alt="SEO Success Case Study" class="w-full h-48 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.pexels.com/photos/265087/pexels-photo-265087.jpeg?auto=compress&cs=tinysrgb&w=600&h=300&dpr=2'; this.onerror=null;" />
                        <div class="absolute top-4 left-4">
                            <span class="bg-primary text-white px-3 py-1 rounded-full text-sm font-medium">SEO</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-text-primary mb-2">Local Restaurant Chain SEO</h3>
                        <p class="text-text-secondary mb-4">
                            Achieved #1 local rankings across 5 cities, resulting in 300% increase in organic traffic and 150% boost in reservations.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-success">300%</div>
                                <div class="text-sm text-text-secondary">Traffic Increase</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-success">#1</div>
                                <div class="text-sm text-text-secondary">Local Rankings</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-success">150%</div>
                                <div class="text-sm text-text-secondary">More Reservations</div>
                            </div>
                        </div>
                        <a href="portfolio.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                            Read Full Case Study →
                        </a>
                    </div>
                </div>

                <!-- PPC Case Study -->
                <div class="card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pixabay.com/photo/2016/11/27/21/42/stock-1863880_1280.jpg?auto=compress&cs=tinysrgb&w=600&h=300&dpr=2" alt="PPC Campaign Success" class="w-full h-48 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=600&h=300&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />
                        <div class="absolute top-4 left-4">
                            <span class="bg-accent text-white px-3 py-1 rounded-full text-sm font-medium">PPC</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-text-primary mb-2">E-commerce PPC Campaign</h3>
                        <p class="text-text-secondary mb-4">
                            Optimized Google Ads and Facebook campaigns for fashion retailer, achieving 450% ROAS and 200% increase in online sales.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-success">450%</div>
                                <div class="text-sm text-text-secondary">ROAS</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-success">200%</div>
                                <div class="text-sm text-text-secondary">Sales Increase</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-success">-35%</div>
                                <div class="text-sm text-text-secondary">Cost Per Click</div>
                            </div>
                        </div>
                        <a href="portfolio.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                            Read Full Case Study →
                        </a>
                    </div>
                </div>

                <!-- Social Media Case Study -->
                <div class="card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=600&h=300&dpr=2" alt="Social Media Campaign Success" class="w-full h-48 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.pixabay.com/photo/2017/01/14/12/59/iceland-1979445_1280.jpg?auto=compress&cs=tinysrgb&w=600&h=300&dpr=2'; this.onerror=null;" />
                        <div class="absolute top-4 left-4">
                            <span class="bg-success text-white px-3 py-1 rounded-full text-sm font-medium">Social Media</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-text-primary mb-2">Viral Social Campaign</h3>
                        <p class="text-text-secondary mb-4">
                            Created engaging social media campaign that generated 2M+ impressions, 50K new followers, and 25% increase in brand awareness.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-success">2M+</div>
                                <div class="text-sm text-text-secondary">Impressions</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-success">50K</div>
                                <div class="text-sm text-text-secondary">New Followers</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-success">25%</div>
                                <div class="text-sm text-text-secondary">Brand Awareness</div>
                            </div>
                        </div>
                        <a href="portfolio.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                            Read Full Case Study →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 lg:py-24 bg-secondary-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">
                    Frequently Asked Questions
                </h2>
                <p class="text-lg text-text-secondary">
                    Get answers to common questions about our digital marketing services
                </p>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="card">
                    <button class="faq-button w-full text-left p-6 focus:outline-none" data-target="faq-1">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-text-primary">How long does it take to see results from SEO?</h3>
                            <svg class="w-5 h-5 text-text-secondary transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-content hidden px-6 pb-6" id="faq-1">
                        <p class="text-text-secondary">
                            SEO is a long-term strategy that typically shows initial improvements within 3-6 months, with significant results becoming apparent after 6-12 months. The timeline depends on factors like competition, current website status, and the scope of optimization work required.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="card">
                    <button class="faq-button w-full text-left p-6 focus:outline-none" data-target="faq-2">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-text-primary">What's included in your PPC management service?</h3>
                            <svg class="w-5 h-5 text-text-secondary transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-content hidden px-6 pb-6" id="faq-2">
                        <p class="text-text-secondary">
                            Our PPC management includes campaign setup and optimization, keyword research, ad copy creation, landing page recommendations, bid management, A/B testing, conversion tracking, and detailed monthly reporting. We manage campaigns across Google Ads, Facebook, Instagram, and other relevant platforms.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="card">
                    <button class="faq-button w-full text-left p-6 focus:outline-none" data-target="faq-3">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-text-primary">Do you work with businesses in my industry?</h3>
                            <svg class="w-5 h-5 text-text-secondary transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-content hidden px-6 pb-6" id="faq-3">
                        <p class="text-text-secondary">
                            We have experience working with businesses across various industries including e-commerce, healthcare, professional services, restaurants, real estate, technology, and more. Our strategies are customized to each industry's unique challenges and opportunities.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="card">
                    <button class="faq-button w-full text-left p-6 focus:outline-none" data-target="faq-4">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-text-primary">Can I cancel my service contract at any time?</h3>
                            <svg class="w-5 h-5 text-text-secondary transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-content hidden px-6 pb-6" id="faq-4">
                        <p class="text-text-secondary">
                            We offer flexible contracts with 30-day notice for cancellation. We believe in earning your business through results, not long-term contracts. However, we recommend a minimum 6-month commitment for SEO services to see meaningful results.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="card">
                    <button class="faq-button w-full text-left p-6 focus:outline-none" data-target="faq-5">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-text-primary">How do you measure and report on success?</h3>
                            <svg class="w-5 h-5 text-text-secondary transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-content hidden px-6 pb-6" id="faq-5">
                        <p class="text-text-secondary">
                            We provide comprehensive monthly reports that include key performance indicators relevant to your goals: organic traffic growth, keyword rankings, conversion rates, ROI, social media engagement, and more. We also schedule regular review calls to discuss performance and strategy adjustments.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="card">
                    <button class="faq-button w-full text-left p-6 focus:outline-none" data-target="faq-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-text-primary">What makes your agency different from competitors?</h3>
                            <svg class="w-5 h-5 text-text-secondary transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-content hidden px-6 pb-6" id="faq-6">
                        <p class="text-text-secondary">
                            Our data-driven approach, transparent reporting, and focus on ROI set us apart. We combine technical expertise with creative strategy, provide dedicated account management, and maintain open communication throughout our partnership. Our track record of delivering measurable results speaks for itself.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Inquiry Form Section -->
    <section class="py-16 lg:py-24 bg-white" id="service-inquiry">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">
                    Get Your Custom Service Quote
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Tell us about your business goals and we'll create a tailored digital marketing strategy for you
                </p>
            </div>

            <div class="card p-8">
                <form class="space-y-6" id="service-inquiry-form">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="first-name" class="block text-sm font-medium text-text-primary mb-2">First Name *</label>
                            <input type="text" id="first-name" name="first-name" required class="form-input w-full" placeholder="Enter your first name" />
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-medium text-text-primary mb-2">Last Name *</label>
                            <input type="text" id="last-name" name="last-name" required class="form-input w-full" placeholder="Enter your last name" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-text-primary mb-2">Email Address *</label>
                            <input type="email" id="email" name="email" required class="form-input w-full" placeholder="Enter your email address" />
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-text-primary mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-input w-full" placeholder="Enter your phone number" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="company" class="block text-sm font-medium text-text-primary mb-2">Company Name *</label>
                            <input type="text" id="company" name="company" required class="form-input w-full" placeholder="Enter your company name" />
                        </div>
                        <div>
                            <label for="website" class="block text-sm font-medium text-text-primary mb-2">Website URL</label>
                            <input type="url" id="website" name="website" class="form-input w-full" placeholder="https://yourwebsite.com" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="services" class="block text-sm font-medium text-text-primary mb-2">Services Interested In *</label>
                            <select id="services" name="services" required class="form-input w-full">
                                <option value>Select a service</option>
                                <option value="seo">SEO Optimization</option>
                                <option value="ppc">PPC Advertising</option>
                                <option value="social">Social Media Marketing</option>
                                <option value="web">Web Development</option>
                                <option value="content">Content Marketing</option>
                                <option value="email">Email Marketing</option>
                                <option value="multiple">Multiple Services</option>
                                <option value="consultation">Free Consultation</option>
                            </select>
                        </div>
                        <div>
                            <label for="budget" class="block text-sm font-medium text-text-primary mb-2">Monthly Budget Range</label>
                            <select id="budget" name="budget" class="form-input w-full">
                                <option value>Select budget range</option>
                                <option value="under-1000">Under $1,000</option>
                                <option value="1000-2500">$1,000 - $2,500</option>
                                <option value="2500-5000">$2,500 - $5,000</option>
                                <option value="5000-10000">$5,000 - $10,000</option>
                                <option value="over-10000">Over $10,000</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="goals" class="block text-sm font-medium text-text-primary mb-2">Business Goals & Challenges</label>
                        <textarea id="goals" name="goals" rows="4" class="form-input w-full" placeholder="Tell us about your business goals, current challenges, and what you hope to achieve with digital marketing..."></textarea>
                    </div>

                    <div>
                        <label for="timeline" class="block text-sm font-medium text-text-primary mb-2">When would you like to start?</label>
                        <select id="timeline" name="timeline" class="form-input w-full">
                            <option value>Select timeline</option>
                            <option value="immediately">Immediately</option>
                            <option value="within-month">Within 1 month</option>
                            <option value="1-3-months">1-3 months</option>
                            <option value="3-6-months">3-6 months</option>
                            <option value="just-researching">Just researching</option>
                        </select>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="newsletter-consent" name="newsletter-consent" class="h-4 w-4 text-primary focus:ring-primary border-border rounded" />
                        <label for="newsletter-consent" class="ml-2 block text-sm text-text-secondary">
                            I'd like to receive digital marketing tips and insights via email
                        </label>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn-primary text-lg px-8 py-4 min-touch-target">
                            Get My Custom Quote
                        </button>
                        <p class="text-sm text-text-secondary mt-4">
                            We'll respond within 24 hours with a personalized proposal
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 lg:py-24 bg-primary text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="fade-in">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Ready to Transform Your Digital Presence?
                </h2>
                <p class="text-xl text-primary-200 mb-8 max-w-2xl mx-auto">
                    Schedule a free consultation to discuss your goals and discover how our services can drive your business growth.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="contact.html" class="btn-accent text-lg px-8 py-4 min-touch-target">
                        Schedule Free Consultation
                    </a>
                    <a href="portfolio.html" class="btn-secondary text-lg px-8 py-4 min-touch-target bg-white/20 hover:bg-white/30 text-white border border-white/30">
                        View Success Stories
                    </a>
                </div>
            </div>
        </div>
    </section>

     <?php include __DIR__ . '/../partials/footer.php'; ?>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Service filtering functionality
        const filterChips = document.querySelectorAll('.filter-chip');
        const serviceCards = document.querySelectorAll('.service-card');

        filterChips.forEach(chip => {
            chip.addEventListener('click', () => {
                // Remove active class from all chips
                filterChips.forEach(c => {
                    c.classList.remove('active', 'bg-primary', 'text-white');
                    c.classList.add('bg-white', 'text-text-secondary', 'border', 'border-border');
                });

                // Add active class to clicked chip
                chip.classList.add('active', 'bg-primary', 'text-white');
                chip.classList.remove('bg-white', 'text-text-secondary', 'border', 'border-border');

                const filterValue = chip.getAttribute('data-filter');

                // Filter service cards
                serviceCards.forEach(card => {
                    if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                        card.style.display = 'block';
                        card.classList.add('fade-in');
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // FAQ functionality
        const faqButtons = document.querySelectorAll('.faq-button');

        faqButtons.forEach(button => {
            button.addEventListener('click', () => {
                const targetId = button.getAttribute('data-target');
                const content = document.getElementById(targetId);
                const icon = button.querySelector('svg');

                // Toggle content visibility
                content.classList.toggle('hidden');

                // Rotate icon
                if (content.classList.contains('hidden')) {
                    icon.style.transform = 'rotate(0deg)';
                } else {
                    icon.style.transform = 'rotate(180deg)';
                }
            });
        });

        // Service inquiry form submission
        const serviceInquiryForm = document.getElementById('service-inquiry-form');
        serviceInquiryForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(serviceInquiryForm);
            const data = Object.fromEntries(formData);
            
            // Simulate form submission
            alert('Thank you for your inquiry! We will contact you within 24 hours with a personalized proposal.');
            serviceInquiryForm.reset();
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.fade-in, .fade-in-delayed').forEach(el => {
            observer.observe(el);
        });

        // Sticky filter behavior
        const filterSection = document.getElementById('services-filter');
        const header = document.querySelector('header');
        
        window.addEventListener('scroll', () => {
            const headerHeight = header.offsetHeight;
            const scrollTop = window.pageYOffset;
            
            if (scrollTop > headerHeight) {
                filterSection.style.top = headerHeight + 'px';
            } else {
                filterSection.style.top = '64px'; // Default header height
            }
        });
    </script>
<script id="dhws-dataInjector" src="../public/dhws-data-injector.js"></script>
</body>
</html>