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
    <title>DigitalAgency Pro - Expert Digital Marketing Solutions</title>
    <meta name="description" content="Transform your business with our comprehensive digital marketing services. SEO, PPC, Social Media, and Web Development solutions that drive results." />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<script type="module" src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Fdigitalage5654back.builtwithrocket.new&_be=https%3A%2F%2Fapplication.rocket.new&_v=0.1.6"></script>
</head>
<body class="bg-background text-text-primary">
<?php include __DIR__ . '/../partials/header.php'; ?>
<nav class="bg-white shadow-md">

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2426&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Digital Marketing Team" class="w-full h-full object-cover" loading="lazy" onerror="this.src='https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
            <div class="absolute inset-0 bg-primary/80"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="fade-in">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 text-balance">
                    Transform Your Business with 
                    <span class="text-accent">Digital Excellence</span>
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto text-balance">
                    We deliver data-driven digital marketing solutions that boost your online presence, 
                    drive qualified leads, and accelerate business growth.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="contact.html" class="btn-accent text-lg px-8 py-4 min-touch-target">
                        Get Free Consultation
                    </a>
                    <a href="portfolio.html" class="btn-secondary text-lg px-8 py-4 min-touch-target bg-white/20 hover:bg-white/30 text-white border border-white/30">
                        View Our Work
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
    </section>

    <!-- Services Overview Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">
                    Our Digital Marketing Services
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Comprehensive solutions designed to elevate your brand and drive measurable results
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- SEO Service Card -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/20 transition-custom-normal">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-3">SEO Optimization</h3>
                    <p class="text-text-secondary mb-4">
                        Boost your search rankings and organic traffic with our proven SEO strategies.
                    </p>
                    <a href="services.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                        Learn More →
                    </a>
                </div>

                <!-- PPC Service Card -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="w-16 h-16 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-accent/20 transition-custom-normal">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-3">PPC Advertising</h3>
                    <p class="text-text-secondary mb-4">
                        Maximize ROI with targeted pay-per-click campaigns across all major platforms.
                    </p>
                    <a href="services.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                        Learn More →
                    </a>
                </div>

                <!-- Social Media Service Card -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="w-16 h-16 bg-success/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-success/20 transition-custom-normal">
                        <svg class="w-8 h-8 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-3">Social Media</h3>
                    <p class="text-text-secondary mb-4">
                        Build brand awareness and engage your audience across social platforms.
                    </p>
                    <a href="services.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                        Learn More →
                    </a>
                </div>

                <!-- Web Development Service Card -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="w-16 h-16 bg-secondary/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-secondary/20 transition-custom-normal">
                        <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-3">Web Development</h3>
                    <p class="text-text-secondary mb-4">
                        Create stunning, conversion-optimized websites that drive business results.
                    </p>
                    <a href="services.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                        Learn More →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Testimonials Section -->
    <section class="py-16 lg:py-24 bg-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">
                    What Our Clients Say
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Don't just take our word for it - hear from businesses we've helped grow
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="card p-6 fade-in-delayed">
                    <div class="flex items-center mb-4">
                        <div class="flex text-accent">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-text-secondary mb-4 italic">
                        "DigitalAgency Pro transformed our online presence completely. Our website traffic increased by 300% and lead generation improved dramatically."
                    </p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150&h=150&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Client testimonial" class="w-12 h-12 rounded-full object-cover mr-4" loading="lazy" onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=150&h=150&dpr=2'; this.onerror=null;" />
                        <div>
                            <h4 class="font-semibold text-text-primary">Michael Chen</h4>
                            <p class="text-sm text-text-secondary">CEO, TechStart Inc.</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="card p-6 fade-in-delayed">
                    <div class="flex items-center mb-4">
                        <div class="flex text-accent">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-text-secondary mb-4 italic">
                        "The ROI from their PPC campaigns exceeded our expectations. Professional team with excellent communication throughout the project."
                    </p>
                    <div class="flex items-center">
                        <img src="https://images.pixabay.com/photo/2017/06/26/02/47/man-2442565_1280.jpg?auto=compress&cs=tinysrgb&w=150&h=150&dpr=2" alt="Client testimonial" class="w-12 h-12 rounded-full object-cover mr-4" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=150&h=150&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />
                        <div>
                            <h4 class="font-semibold text-text-primary">Sarah Johnson</h4>
                            <p class="text-sm text-text-secondary">Marketing Director, GrowthCorp</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="card p-6 fade-in-delayed">
                    <div class="flex items-center mb-4">
                        <div class="flex text-accent">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-text-secondary mb-4 italic">
                        "Outstanding social media management and content strategy. Our engagement rates have never been higher. Highly recommend their services."
                    </p>
                    <div class="flex items-center">
                        <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=150&h=150&dpr=2" alt="Client testimonial" class="w-12 h-12 rounded-full object-cover mr-4" loading="lazy" onerror="this.src='https://images.pixabay.com/photo/2016/11/21/12/42/beard-1845166_1280.jpg?auto=compress&cs=tinysrgb&w=150&h=150&dpr=2'; this.onerror=null;" />
                        <div>
                            <h4 class="font-semibold text-text-primary">David Rodriguez</h4>
                            <p class="text-sm text-text-secondary">Founder, LocalBiz Solutions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Preview Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">
                    Featured Case Studies
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Explore our successful projects and see how we've helped businesses achieve their goals
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Case Study 1 -->
                <div class="card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&h=400&auto=format&fit=crop&ixlib=rb-4.0.3" alt="E-commerce Growth Case Study" class="w-full h-48 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.pexels.com/photos/265087/pexels-photo-265087.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=2'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-primary/80 opacity-0 group-hover:opacity-100 transition-custom-normal flex items-center justify-center">
                            <a href="portfolio.html" class="btn-accent">View Case Study</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-text-primary mb-2">E-commerce Growth Strategy</h3>
                        <p class="text-text-secondary mb-4">
                            Increased online sales by 450% through comprehensive SEO and PPC optimization for a fashion retailer.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-accent font-medium">+450% Sales Growth</span>
                            <a href="portfolio.html" class="text-primary hover:text-primary-700 transition-custom-fast">
                                Learn More →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div class="card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pixabay.com/photo/2016/11/27/21/42/stock-1863880_1280.jpg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=2" alt="Local Business SEO Case Study" class="w-full h-48 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=600&h=400&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-primary/80 opacity-0 group-hover:opacity-100 transition-custom-normal flex items-center justify-center">
                            <a href="portfolio.html" class="btn-accent">View Case Study</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-text-primary mb-2">Local SEO Domination</h3>
                        <p class="text-text-secondary mb-4">
                            Helped a local restaurant chain achieve #1 rankings for key local search terms across 5 cities.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-accent font-medium">#1 Local Rankings</span>
                            <a href="portfolio.html" class="text-primary hover:text-primary-700 transition-custom-fast">
                                Learn More →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Case Study 3 -->
                <div class="card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=2" alt="Social Media Campaign Case Study" class="w-full h-48 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.pixabay.com/photo/2017/01/14/12/59/iceland-1979445_1280.jpg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=2'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-primary/80 opacity-0 group-hover:opacity-100 transition-custom-normal flex items-center justify-center">
                            <a href="portfolio.html" class="btn-accent">View Case Study</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-text-primary mb-2">Viral Social Campaign</h3>
                        <p class="text-text-secondary mb-4">
                            Created a social media campaign that generated 2M+ impressions and 50K new followers in 30 days.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-accent font-medium">2M+ Impressions</span>
                            <a href="portfolio.html" class="text-primary hover:text-primary-700 transition-custom-fast">
                                Learn More →
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="portfolio.html" class="btn-primary text-lg px-8 py-4">View All Case Studies</a>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-16 lg:py-24 bg-primary text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="fade-in">
                    <div class="text-4xl md:text-5xl font-bold mb-2" id="clients-counter">500</div>
                    <p class="text-primary-200">Happy Clients</p>
                </div>
                <div class="fade-in-delayed">
                    <div class="text-4xl md:text-5xl font-bold mb-2" id="projects-counter">1200</div>
                    <p class="text-primary-200">Projects Completed</p>
                </div>
                <div class="fade-in-delayed">
                    <div class="text-4xl md:text-5xl font-bold mb-2" id="experience-counter">8</div>
                    <p class="text-primary-200">Years Experience</p>
                </div>
                <div class="fade-in-delayed">
                    <div class="text-4xl md:text-5xl font-bold mb-2" id="growth-counter">350</div>
                    <p class="text-primary-200">% Avg Growth</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Signup Section -->
    <section class="py-16 lg:py-24 bg-secondary-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">
                    Stay Updated with Digital Marketing Insights
                </h2>
                <p class="text-lg text-text-secondary mb-8 max-w-2xl mx-auto">
                    Get the latest tips, strategies, and industry insights delivered to your inbox weekly
                </p>
                <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto" id="newsletter-form">
                    <input type="email" placeholder="Enter your email address" class="form-input flex-1" required id="newsletter-email" />
                    <button type="submit" class="btn-primary whitespace-nowrap">
                        Subscribe Now
                    </button>
                </form>
                <p class="text-sm text-text-secondary mt-4">
                    No spam, unsubscribe at any time. We respect your privacy.
                </p>
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

        // Newsletter form submission
        const newsletterForm = document.getElementById('newsletter-form');
        newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const email = document.getElementById('newsletter-email').value;
            alert(`Thank you for subscribing with email: ${email}`);
            newsletterForm.reset();
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

        // Animated counters
        function animateCounter(element, target, duration = 2000) {
            let start = 0;
            const increment = target / (duration / 16);
            const timer = setInterval(() => {
                start += increment;
                if (start >= target) {
                    element.textContent = target + (element.id === 'growth-counter' ? '%' : '+');
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(start) + (element.id === 'growth-counter' ? '%' : '+');
                }
            }, 16);
        }

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                    
                    // Animate counters when statistics section is visible
                    if (entry.target.querySelector('#clients-counter')) {
                        animateCounter(document.getElementById('clients-counter'), 500);
                        animateCounter(document.getElementById('projects-counter'), 1200);
                        animateCounter(document.getElementById('experience-counter'), 8);
                        animateCounter(document.getElementById('growth-counter'), 350);
                    }
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.fade-in, .fade-in-delayed').forEach(el => {
            observer.observe(el);
        });

        // Observe statistics section
        const statsSection = document.querySelector('#clients-counter').closest('section');
        if (statsSection) {
            observer.observe(statsSection);
        }
    </script>
<script id="dhws-dataInjector" src="../public/dhws-data-injector.js"></script>
</body>
</html>