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
    <title>About Us - DigitalAgency Pro | Expert Digital Marketing Team</title>
    <meta name="description" content="Meet the expert team behind DigitalAgency Pro. Learn about our mission, values, and the passionate professionals driving digital marketing success for businesses worldwide." />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<script type="module" src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Fdigitalage5654back.builtwithrocket.new&_be=https%3A%2F%2Fapplication.rocket.new&_v=0.1.6"></script>
</head>
<body class="bg-background text-text-primary">
    <?php include __DIR__ . '/../partials/header.php'; ?>
    <nav class="bg-white shadow-md">

    <!-- Hero Section -->
    <section class="relative py-16 lg:py-24 bg-primary text-white overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" fill="none">
                <defs>
                    <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                        <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="0.5"/>
                    </pattern>
                </defs>
                <rect width="100" height="100" fill="url(#grid)"/>
            </svg>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="fade-in">
                <h1 class="text-4xl text-white md:text-5xl lg:text-6xl font-bold mb-6 text-balance">
                    Meet the Team Behind Your 
                    <span class="text-accent">Digital Success</span>
                </h1>
                <p class="text-xl md:text-2xl text-primary-200 mb-8 max-w-3xl mx-auto text-balance">
                    We're passionate digital marketing experts dedicated to transforming businesses through innovative strategies and measurable results.
                </p>
            </div>
        </div>
    </section>

    <!-- Company Story Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Story Content -->
                <div class="fade-in">
                    <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-6">
                        Our Story: From Vision to Digital Excellence
                    </h2>
                    <div class="space-y-4 text-lg text-text-secondary">
                        <p>
                            Founded in 2017 by digital marketing veterans Sarah Chen and Michael Rodriguez, DigitalAgency Pro emerged from a simple yet powerful vision: to democratize digital marketing success for businesses of all sizes.
                        </p>
                        <p>
                            What started as a two-person consultancy has grown into a full-service digital marketing powerhouse, serving over 500 clients across diverse industries. Our journey began when Sarah and Michael recognized the gap between complex digital marketing strategies and practical business implementation.
                        </p>
                        <p>
                            Today, we're proud to be a certified Google Partner, Facebook Marketing Partner, and HubSpot Solutions Provider, combining cutting-edge technology with human creativity to deliver exceptional results for our clients.
                        </p>
                    </div>
                    <div class="mt-8">
                        <a href="portfolio.html" class="btn-primary">View Our Work</a>
                    </div>
                </div>

                <!-- Story Image -->
                <div class="fade-in-delayed">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800&h=600&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="DigitalAgency Pro team collaboration" class="w-full h-96 object-cover rounded-lg shadow-custom-lg" loading="lazy" onerror="this.src='https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&dpr=2'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-primary/20 rounded-lg"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Values Section -->
    <section class="py-16 lg:py-24 bg-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">
                    Our Mission & Values
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Guided by core principles that drive everything we do
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Mission Card -->
                <div class="card p-8 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed lg:col-span-3">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary/20 transition-custom-normal">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-text-primary mb-4">Our Mission</h3>
                    <p class="text-text-secondary text-lg max-w-3xl mx-auto">
                        To empower businesses with data-driven digital marketing strategies that deliver measurable growth, exceptional ROI, and sustainable competitive advantages in the digital landscape.
                    </p>
                </div>

                <!-- Value 1 -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="w-16 h-16 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-accent/20 transition-custom-normal">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-3">Transparency</h3>
                    <p class="text-text-secondary">
                        Clear communication, honest reporting, and open collaboration in every client relationship.
                    </p>
                </div>

                <!-- Value 2 -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="w-16 h-16 bg-success/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-success/20 transition-custom-normal">
                        <svg class="w-8 h-8 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-3">Results-Driven</h3>
                    <p class="text-text-secondary">
                        Every strategy is designed with measurable outcomes and ROI as the primary focus.
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="w-16 h-16 bg-secondary/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-secondary/20 transition-custom-normal">
                        <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-3">Innovation</h3>
                    <p class="text-text-secondary">
                        Staying ahead of digital trends and continuously evolving our strategies and tools.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Profiles Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">
                    Meet Our Expert Team
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Passionate professionals with diverse expertise in digital marketing, strategy, and technology
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!-- Team Member 1 - Founder -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="relative mb-6">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?q=80&w=300&h=300&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Sarah Chen - Co-Founder & CEO" class="w-24 h-24 rounded-full object-cover mx-auto shadow-custom-md" loading="lazy" onerror="this.src='https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=300&h=300&dpr=2'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-primary/20 rounded-full opacity-0 group-hover:opacity-100 transition-custom-normal"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-2">Sarah Chen</h3>
                    <p class="text-accent font-medium mb-3">Co-Founder & CEO</p>
                    <p class="text-text-secondary text-sm mb-4">
                        15+ years in digital marketing strategy. Former Google marketing lead with expertise in data analytics and growth hacking.
                    </p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-text-secondary hover:text-primary transition-custom-fast min-touch-target">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-text-secondary hover:text-primary transition-custom-fast min-touch-target">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                    </div>
                    <!-- Hover Expertise Details -->
                    <div class="mt-4 opacity-0 group-hover:opacity-100 transition-custom-normal">
                        <div class="text-xs text-primary font-medium">
                            Specialties: Growth Strategy, Analytics, Team Leadership
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 - Co-Founder -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="relative mb-6">
                        <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=300&h=300&dpr=2" alt="Michael Rodriguez - Co-Founder & CTO" class="w-24 h-24 rounded-full object-cover mx-auto shadow-custom-md" loading="lazy" onerror="this.src='https://images.pixabay.com/photo/2016/11/21/12/42/beard-1845166_1280.jpg?auto=compress&cs=tinysrgb&w=300&h=300&dpr=2'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-primary/20 rounded-full opacity-0 group-hover:opacity-100 transition-custom-normal"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-2">Michael Rodriguez</h3>
                    <p class="text-accent font-medium mb-3">Co-Founder & CTO</p>
                    <p class="text-text-secondary text-sm mb-4">
                        Technical marketing expert with 12+ years in MarTech. Specializes in automation, CRM integration, and conversion optimization.
                    </p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-text-secondary hover:text-primary transition-custom-fast min-touch-target">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-text-secondary hover:text-primary transition-custom-fast min-touch-target">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="mt-4 opacity-0 group-hover:opacity-100 transition-custom-normal">
                        <div class="text-xs text-primary font-medium">
                            Specialties: MarTech, Automation, CRO
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="relative mb-6">
                        <img src="https://images.pixabay.com/photo/2017/06/26/02/47/man-2442565_1280.jpg?auto=compress&cs=tinysrgb&w=300&h=300&dpr=2" alt="David Kim - Head of SEO" class="w-24 h-24 rounded-full object-cover mx-auto shadow-custom-md" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=300&h=300&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-primary/20 rounded-full opacity-0 group-hover:opacity-100 transition-custom-normal"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-2">David Kim</h3>
                    <p class="text-accent font-medium mb-3">Head of SEO</p>
                    <p class="text-text-secondary text-sm mb-4">
                        SEO specialist with 10+ years optimizing websites for Fortune 500 companies. Expert in technical SEO and content strategy.
                    </p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-text-secondary hover:text-primary transition-custom-fast min-touch-target">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-text-secondary hover:text-primary transition-custom-fast min-touch-target">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="mt-4 opacity-0 group-hover:opacity-100 transition-custom-normal">
                        <div class="text-xs text-primary font-medium">
                            Specialties: Technical SEO, Content Strategy, SERP Analysis
                        </div>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="relative mb-6">
                        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=300&h=300&dpr=2" alt="Emma Thompson - Social Media Director" class="w-24 h-24 rounded-full object-cover mx-auto shadow-custom-md" loading="lazy" onerror="this.src='https://images.pixabay.com/photo/2016/11/29/03/53/girl-1867092_1280.jpg?auto=compress&cs=tinysrgb&w=300&h=300&dpr=2'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-primary/20 rounded-full opacity-0 group-hover:opacity-100 transition-custom-normal"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-2">Emma Thompson</h3>
                    <p class="text-accent font-medium mb-3">Social Media Director</p>
                    <p class="text-text-secondary text-sm mb-4">
                        Creative strategist with 8+ years building viral campaigns. Expert in influencer partnerships and community management.
                    </p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-text-secondary hover:text-primary transition-custom-fast min-touch-target">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-text-secondary hover:text-primary transition-custom-fast min-touch-target">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="mt-4 opacity-0 group-hover:opacity-100 transition-custom-normal">
                        <div class="text-xs text-primary font-medium">
                            Specialties: Social Strategy, Influencer Marketing, Content Creation
                        </div>
                    </div>
                </div>

                <!-- Team Member 5 -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="relative mb-6">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=300&h=300&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="James Wilson - PPC Specialist" class="w-24 h-24 rounded-full object-cover mx-auto shadow-custom-md" loading="lazy" onerror="this.src='https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=300&h=300&dpr=2'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-primary/20 rounded-full opacity-0 group-hover:opacity-100 transition-custom-normal"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-2">James Wilson</h3>
                    <p class="text-accent font-medium mb-3">PPC Specialist</p>
                    <p class="text-text-secondary text-sm mb-4">
                        Google Ads certified expert managing $2M+ in ad spend annually. Specializes in e-commerce and lead generation campaigns.
                    </p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-text-secondary hover:text-primary transition-custom-fast min-touch-target">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-text-secondary hover:text-primary transition-custom-fast min-touch-target">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="mt-4 opacity-0 group-hover:opacity-100 transition-custom-normal">
                        <div class="text-xs text-primary font-medium">
                            Specialties: Google Ads, Facebook Ads, Campaign Optimization
                        </div>
                    </div>
                </div>

                <!-- Team Member 6 -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="relative mb-6">
                        <img src="https://images.pixabay.com/photo/2016/11/29/03/53/girl-1867092_1280.jpg?auto=compress&cs=tinysrgb&w=300&h=300&dpr=2" alt="Lisa Park - Content Marketing Manager" class="w-24 h-24 rounded-full object-cover mx-auto shadow-custom-md" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=300&h=300&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-primary/20 rounded-full opacity-0 group-hover:opacity-100 transition-custom-normal"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-2">Lisa Park</h3>
                    <p class="text-accent font-medium mb-3">Content Marketing Manager</p>
                    <p class="text-text-secondary text-sm mb-4">
                        Award-winning content strategist with 9+ years creating compelling narratives that drive engagement and conversions.
                    </p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-text-secondary hover:text-primary transition-custom-fast min-touch-target">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-text-secondary hover:text-primary transition-custom-fast min-touch-target">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="mt-4 opacity-0 group-hover:opacity-100 transition-custom-normal">
                        <div class="text-xs text-primary font-medium">
                            Specialties: Content Strategy, Copywriting, Brand Storytelling
                        </div>
                    </div>
                </div>

                <!-- Team Member 7 -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="relative mb-6">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=300&h=300&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Alex Johnson - Web Developer" class="w-24 h-24 rounded-full object-cover mx-auto shadow-custom-md" loading="lazy" onerror="this.src='https://images.pexels.com/photos/1043471/pexels-photo-1043471.jpeg?auto=compress&cs=tinysrgb&w=300&h=300&dpr=2'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-primary/20 rounded-full opacity-0 group-hover:opacity-100 transition-custom-normal"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-2">Alex Johnson</h3>
                    <p class="text-accent font-medium mb-3">Lead Web Developer</p>
                    <p class="text-text-secondary text-sm mb-4">
                        Full-stack developer with 11+ years building high-performance websites. Expert in React, Node.js, and conversion optimization.
                    </p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-text-secondary hover:text-primary transition-custom-fast min-touch-target">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-text-secondary hover:text-primary transition-custom-fast min-touch-target">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="mt-4 opacity-0 group-hover:opacity-100 transition-custom-normal">
                        <div class="text-xs text-primary font-medium">
                            Specialties: React, Node.js, Performance Optimization
                        </div>
                    </div>
                </div>

                <!-- Team Member 8 -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="relative mb-6">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=300&h=300&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Rachel Martinez - Analytics Manager" class="w-24 h-24 rounded-full object-cover mx-auto shadow-custom-md" loading="lazy" onerror="this.src='https://images.pexels.com/photos/733872/pexels-photo-733872.jpeg?auto=compress&cs=tinysrgb&w=300&h=300&dpr=2'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-primary/20 rounded-full opacity-0 group-hover:opacity-100 transition-custom-normal"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-text-primary mb-2">Rachel Martinez</h3>
                    <p class="text-accent font-medium mb-3">Analytics Manager</p>
                    <p class="text-text-secondary text-sm mb-4">
                        Data scientist with 7+ years turning complex analytics into actionable insights. Expert in GA4, attribution modeling, and reporting.
                    </p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-text-secondary hover:text-primary transition-custom-fast min-touch-target">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-text-secondary hover:text-primary transition-custom-fast min-touch-target">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="mt-4 opacity-0 group-hover:opacity-100 transition-custom-normal">
                        <div class="text-xs text-primary font-medium">
                            Specialties: GA4, Data Analysis, Attribution Modeling
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Timeline Section -->
    <section class="py-16 lg:py-24 bg-secondary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">
                    Our Journey to Excellence
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Key milestones that shaped our agency and defined our commitment to client success
                </p>
            </div>

            <!-- Desktop Timeline -->
            <div class="hidden md:block">
                <div class="relative">
                    <!-- Timeline Line -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-primary-200"></div>
                    
                    <div class="space-y-12">
                        <!-- Timeline Item 1 -->
                        <div class="relative flex items-center fade-in-delayed">
                            <div class="flex-1 pr-8 text-right">
                                <div class="card p-6">
                                    <h3 class="text-xl font-semibold text-text-primary mb-2">Agency Founded</h3>
                                    <p class="text-text-secondary mb-2">
                                        Sarah Chen and Michael Rodriguez launch DigitalAgency Pro with a vision to democratize digital marketing success.
                                    </p>
                                    <span class="text-primary font-medium">2017</span>
                                </div>
                            </div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-primary rounded-full border-4 border-white shadow-custom-md"></div>
                            <div class="flex-1 pl-8"></div>
                        </div>

                        <!-- Timeline Item 2 -->
                        <div class="relative flex items-center fade-in-delayed">
                            <div class="flex-1 pr-8"></div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-accent rounded-full border-4 border-white shadow-custom-md"></div>
                            <div class="flex-1 pl-8">
                                <div class="card p-6">
                                    <h3 class="text-xl font-semibold text-text-primary mb-2">First 100 Clients</h3>
                                    <p class="text-text-secondary mb-2">
                                        Reached our first major milestone by helping 100 businesses transform their digital presence.
                                    </p>
                                    <span class="text-primary font-medium">2019</span>
                                </div>
                            </div>
                        </div>

                        <!-- Timeline Item 3 -->
                        <div class="relative flex items-center fade-in-delayed">
                            <div class="flex-1 pr-8 text-right">
                                <div class="card p-6">
                                    <h3 class="text-xl font-semibold text-text-primary mb-2">Google Partner Status</h3>
                                    <p class="text-text-secondary mb-2">
                                        Achieved Google Partner certification, validating our expertise in Google Ads and Analytics.
                                    </p>
                                    <span class="text-primary font-medium">2020</span>
                                </div>
                            </div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-success rounded-full border-4 border-white shadow-custom-md"></div>
                            <div class="flex-1 pl-8"></div>
                        </div>

                        <!-- Timeline Item 4 -->
                        <div class="relative flex items-center fade-in-delayed">
                            <div class="flex-1 pr-8"></div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-secondary rounded-full border-4 border-white shadow-custom-md"></div>
                            <div class="flex-1 pl-8">
                                <div class="card p-6">
                                    <h3 class="text-xl font-semibold text-text-primary mb-2">Team Expansion</h3>
                                    <p class="text-text-secondary mb-2">
                                        Grew to 15+ specialists across SEO, PPC, social media, and web development.
                                    </p>
                                    <span class="text-primary font-medium">2022</span>
                                </div>
                            </div>
                        </div>

                        <!-- Timeline Item 5 -->
                        <div class="relative flex items-center fade-in-delayed">
                            <div class="flex-1 pr-8 text-right">
                                <div class="card p-6">
                                    <h3 class="text-xl font-semibold text-text-primary mb-2">500+ Clients Milestone</h3>
                                    <p class="text-text-secondary mb-2">
                                        Celebrated serving over 500 businesses with an average 350% growth rate.
                                    </p>
                                    <span class="text-primary font-medium">2024</span>
                                </div>
                            </div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-primary rounded-full border-4 border-white shadow-custom-md"></div>
                            <div class="flex-1 pl-8"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Timeline -->
            <div class="md:hidden">
                <div class="relative pl-8">
                    <!-- Timeline Line -->
                    <div class="absolute left-4 top-0 w-1 h-full bg-primary-200"></div>
                    
                    <div class="space-y-8">
                        <!-- Mobile Timeline Item 1 -->
                        <div class="relative fade-in-delayed">
                            <div class="absolute left-0 transform -translate-x-1/2 w-4 h-4 bg-primary rounded-full border-4 border-white shadow-custom-md"></div>
                            <div class="card p-6">
                                <span class="text-primary font-medium text-sm">2017</span>
                                <h3 class="text-lg font-semibold text-text-primary mb-2">Agency Founded</h3>
                                <p class="text-text-secondary text-sm">
                                    Sarah Chen and Michael Rodriguez launch DigitalAgency Pro with a vision to democratize digital marketing success.
                                </p>
                            </div>
                        </div>

                        <!-- Mobile Timeline Item 2 -->
                        <div class="relative fade-in-delayed">
                            <div class="absolute left-0 transform -translate-x-1/2 w-4 h-4 bg-accent rounded-full border-4 border-white shadow-custom-md"></div>
                            <div class="card p-6">
                                <span class="text-primary font-medium text-sm">2019</span>
                                <h3 class="text-lg font-semibold text-text-primary mb-2">First 100 Clients</h3>
                                <p class="text-text-secondary text-sm">
                                    Reached our first major milestone by helping 100 businesses transform their digital presence.
                                </p>
                            </div>
                        </div>

                        <!-- Mobile Timeline Item 3 -->
                        <div class="relative fade-in-delayed">
                            <div class="absolute left-0 transform -translate-x-1/2 w-4 h-4 bg-success rounded-full border-4 border-white shadow-custom-md"></div>
                            <div class="card p-6">
                                <span class="text-primary font-medium text-sm">2020</span>
                                <h3 class="text-lg font-semibold text-text-primary mb-2">Google Partner Status</h3>
                                <p class="text-text-secondary text-sm">
                                    Achieved Google Partner certification, validating our expertise in Google Ads and Analytics.
                                </p>
                            </div>
                        </div>

                        <!-- Mobile Timeline Item 4 -->
                        <div class="relative fade-in-delayed">
                            <div class="absolute left-0 transform -translate-x-1/2 w-4 h-4 bg-secondary rounded-full border-4 border-white shadow-custom-md"></div>
                            <div class="card p-6">
                                <span class="text-primary font-medium text-sm">2022</span>
                                <h3 class="text-lg font-semibold text-text-primary mb-2">Team Expansion</h3>
                                <p class="text-text-secondary text-sm">
                                    Grew to 15+ specialists across SEO, PPC, social media, and web development.
                                </p>
                            </div>
                        </div>

                        <!-- Mobile Timeline Item 5 -->
                        <div class="relative fade-in-delayed">
                            <div class="absolute left-0 transform -translate-x-1/2 w-4 h-4 bg-primary rounded-full border-4 border-white shadow-custom-md"></div>
                            <div class="card p-6">
                                <span class="text-primary font-medium text-sm">2024</span>
                                <h3 class="text-lg font-semibold text-text-primary mb-2">500+ Clients Milestone</h3>
                                <p class="text-text-secondary text-sm">
                                    Celebrated serving over 500 businesses with an average 350% growth rate.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics & Certifications Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Statistics -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center mb-16">
                <div class="fade-in">
                    <div class="text-4xl md:text-5xl font-bold text-primary mb-2" id="years-counter">8</div>
                    <p class="text-text-secondary">Years of Excellence</p>
                </div>
                <div class="fade-in-delayed">
                    <div class="text-4xl md:text-5xl font-bold text-primary mb-2" id="team-counter">15</div>
                    <p class="text-text-secondary">Expert Team Members</p>
                </div>
                <div class="fade-in-delayed">
                    <div class="text-4xl md:text-5xl font-bold text-primary mb-2" id="clients-served-counter">500</div>
                    <p class="text-text-secondary">Clients Served</p>
                </div>
                <div class="fade-in-delayed">
                    <div class="text-4xl md:text-5xl font-bold text-primary mb-2" id="avg-growth-counter">350</div>
                    <p class="text-text-secondary">% Average Growth</p>
                </div>
            </div>

            <!-- Certifications -->
            <div class="text-center mb-12 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">
                    Our Certifications & Partnerships
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Recognized expertise validated by industry-leading platforms
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
                <!-- Google Partner -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/20 transition-custom-normal">
                        <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-semibold text-text-primary">Google Partner</h3>
                </div>

                <!-- Facebook Partner -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="w-16 h-16 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-accent/20 transition-custom-normal">
                        <svg class="w-8 h-8 text-accent" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-semibold text-text-primary">Meta Partner</h3>
                </div>

                <!-- HubSpot Partner -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="w-16 h-16 bg-success/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-success/20 transition-custom-normal">
                        <svg class="w-8 h-8 text-success" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.164 7.931V4.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v3.431l6 3.5 6-3.5zM6.164 8.931v7.5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5v-7.5l-6 3.5-6-3.5z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-semibold text-text-primary">HubSpot Solutions</h3>
                </div>

                <!-- Bing Ads Partner -->
                <div class="card p-6 text-center group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="w-16 h-16 bg-secondary/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-secondary/20 transition-custom-normal">
                        <svg class="w-8 h-8 text-secondary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-semibold text-text-primary">Microsoft Partner</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Testimonials Section -->
    <section class="py-16 lg:py-24 bg-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">
                    What Our Clients Say About Working With Us
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Real experiences from businesses who've partnered with our team
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Testimonial 1 -->
                <div class="card p-8 fade-in-delayed">
                    <div class="flex items-center mb-6">
                        <div class="flex text-accent mr-4">
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
                    <p class="text-text-secondary mb-6 italic text-lg">
                        "Working with DigitalAgency Pro has been transformative for our business. Their team doesn't just execute campaigns—they become true partners in our growth. The level of communication and transparency is exceptional."
                    </p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150&h=150&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Client testimonial" class="w-16 h-16 rounded-full object-cover mr-4" loading="lazy" onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=150&h=150&dpr=2'; this.onerror=null;" />
                        <div>
                            <h4 class="font-semibold text-text-primary text-lg">Robert Chen</h4>
                            <p class="text-text-secondary">CEO, TechStart Solutions</p>
                            <p class="text-sm text-primary">3-year partnership</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="card p-8 fade-in-delayed">
                    <div class="flex items-center mb-6">
                        <div class="flex text-accent mr-4">
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
                    <p class="text-text-secondary mb-6 italic text-lg">
                        "The team at DigitalAgency Pro feels like an extension of our own company. They understand our culture, our goals, and consistently deliver strategies that align with our vision. Highly recommend their collaborative approach."
                    </p>
                    <div class="flex items-center">
                        <img src="https://images.pixabay.com/photo/2017/06/26/02/47/man-2442565_1280.jpg?auto=compress&cs=tinysrgb&w=150&h=150&dpr=2" alt="Client testimonial" class="w-16 h-16 rounded-full object-cover mr-4" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=150&h=150&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />
                        <div>
                            <h4 class="font-semibold text-text-primary text-lg">Maria Rodriguez</h4>
                            <p class="text-text-secondary">Marketing Director, GrowthCorp</p>
                            <p class="text-sm text-primary">2-year partnership</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="py-16 lg:py-24 bg-primary text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="fade-in">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-balance">
                    Ready to Partner with Our Expert Team?
                </h2>
                <p class="text-xl text-primary-200 mb-8 max-w-2xl mx-auto text-balance">
                    Let's discuss how our proven strategies and dedicated team can accelerate your business growth.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="contact.html" class="btn-accent text-lg px-8 py-4 min-touch-target">
                        Schedule Free Consultation
                    </a>
                    <a href="portfolio.html" class="btn-secondary text-lg px-8 py-4 min-touch-target bg-white/20 hover:bg-white/30 text-white border border-white/30">
                        View Case Studies
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-secondary-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                        <span class="text-xl font-bold">DigitalAgency Pro</span>
                    </div>
                    <p class="text-secondary-300 mb-4">
                        Transforming businesses through innovative digital marketing solutions and data-driven strategies.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-secondary-400 hover:text-white transition-custom-fast min-touch-target">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-secondary-400 hover:text-white transition-custom-fast min-touch-target">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-secondary-400 hover:text-white transition-custom-fast min-touch-target">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-secondary-400 hover:text-white transition-custom-fast min-touch-target">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="services.html" class="text-secondary-300 hover:text-white transition-custom-fast">SEO Optimization</a></li>
                        <li><a href="services.html" class="text-secondary-300 hover:text-white transition-custom-fast">PPC Advertising</a></li>
                        <li><a href="services.html" class="text-secondary-300 hover:text-white transition-custom-fast">Social Media Marketing</a></li>
                        <li><a href="services.html" class="text-secondary-300 hover:text-white transition-custom-fast">Web Development</a></li>
                        <li><a href="services.html" class="text-secondary-300 hover:text-white transition-custom-fast">Content Marketing</a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Company</h3>
                    <ul class="space-y-2">
                        <li><a href="about_us.html" class="text-secondary-300 hover:text-white transition-custom-fast">About Us</a></li>
                        <li><a href="portfolio.html" class="text-secondary-300 hover:text-white transition-custom-fast">Portfolio</a></li>
                        <li><a href="blog.html" class="text-secondary-300 hover:text-white transition-custom-fast">Blog</a></li>
                        <li><a href="contact.html" class="text-secondary-300 hover:text-white transition-custom-fast">Contact</a></li>
                        <li><a href="contact.html" class="text-secondary-300 hover:text-white transition-custom-fast">Careers</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Info</h3>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="text-secondary-300">123 Business Ave, Suite 100<br />New York, NY 10001</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span class="text-secondary-300">(555) 123-4567</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-secondary-300">hello@digitalagencypro.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-secondary-700 mt-12 pt-8 text-center">
                <p class="text-secondary-400">
                    © 2025 DigitalAgency Pro. All Rights Reserved. | Privacy Policy | Terms of Service
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Animated counters
        function animateCounter(element, target, duration = 2000) {
            let start = 0;
            const increment = target / (duration / 16);
            const timer = setInterval(() => {
                start += increment;
                if (start >= target) {
                    element.textContent = target + (element.id === 'avg-growth-counter' ? '%' : '+');
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(start) + (element.id === 'avg-growth-counter' ? '%' : '+');
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
                    if (entry.target.querySelector('#years-counter')) {
                        animateCounter(document.getElementById('years-counter'), 8);
                        animateCounter(document.getElementById('team-counter'), 15);
                        animateCounter(document.getElementById('clients-served-counter'), 500);
                        animateCounter(document.getElementById('avg-growth-counter'), 350);
                    }
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.fade-in, .fade-in-delayed').forEach(el => {
            observer.observe(el);
        });

        // Observe statistics section
        const statsSection = document.querySelector('#years-counter').closest('section');
        if (statsSection) {
            observer.observe(statsSection);
        }

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
    </script>
<script id="dhws-dataInjector" src="../public/dhws-data-injector.js"></script>
</body>
</html>