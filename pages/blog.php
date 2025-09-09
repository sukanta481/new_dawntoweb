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
    <title>Digital Marketing Blog - DigitalAgency Pro</title>
    <meta name="description" content="Stay updated with the latest digital marketing insights, strategies, and industry trends. Expert tips on SEO, PPC, social media, and more." />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<script type="module" src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Fdigitalage5654back.builtwithrocket.new&_be=https%3A%2F%2Fapplication.rocket.new&_v=0.1.6"></script>
</head>
<body class="bg-background text-text-primary">
    <?php include __DIR__ . '/../partials/header.php'; ?>
    <nav class="bg-white shadow-md">

    <!-- Blog Header Section -->
    <section class="py-12 lg:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 fade-in">
                <h1 class="text-4xl md:text-5xl font-bold text-text-primary mb-4">
                    Digital Marketing <span class="text-primary">Insights</span>
                </h1>
                <p class="text-lg text-text-secondary max-w-3xl mx-auto">
                    Stay ahead of the curve with expert insights, proven strategies, and the latest trends in digital marketing. 
                    Learn from industry professionals and grow your business.
                </p>
            </div>

            <!-- Search Bar -->
            <div class="max-w-2xl mx-auto mb-8 fade-in-delayed">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <input type="text" placeholder="Search articles, topics, or authors..." class="form-input w-full pl-10 pr-4 py-3 text-lg" id="blog-search" />
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <button type="button" class="text-text-secondary hover:text-primary transition-custom-fast" id="search-clear">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Filters -->
    <section class="py-8 bg-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Mobile Category Filters (Horizontal Scroll) -->
            <div class="md:hidden mb-6">
                <div class="flex space-x-3 overflow-x-auto pb-2 scrollbar-hide">
                    <button class="category-filter active whitespace-nowrap px-4 py-2 rounded-full bg-primary text-white font-medium transition-custom-fast" data-category="all">
                        All Posts
                    </button>
                    <button class="category-filter whitespace-nowrap px-4 py-2 rounded-full bg-white text-text-secondary hover:bg-primary hover:text-white font-medium transition-custom-fast" data-category="seo">
                        SEO
                    </button>
                    <button class="category-filter whitespace-nowrap px-4 py-2 rounded-full bg-white text-text-secondary hover:bg-primary hover:text-white font-medium transition-custom-fast" data-category="ppc">
                        PPC
                    </button>
                    <button class="category-filter whitespace-nowrap px-4 py-2 rounded-full bg-white text-text-secondary hover:bg-primary hover:text-white font-medium transition-custom-fast" data-category="social-media">
                        Social Media
                    </button>
                    <button class="category-filter whitespace-nowrap px-4 py-2 rounded-full bg-white text-text-secondary hover:bg-primary hover:text-white font-medium transition-custom-fast" data-category="content">
                        Content Marketing
                    </button>
                    <button class="category-filter whitespace-nowrap px-4 py-2 rounded-full bg-white text-text-secondary hover:bg-primary hover:text-white font-medium transition-custom-fast" data-category="analytics">
                        Analytics
                    </button>
                </div>
            </div>

            <!-- Desktop Category Filters -->
            <div class="hidden md:flex justify-center space-x-4 mb-8">
                <button class="category-filter active px-6 py-3 rounded-full bg-primary text-white font-medium transition-custom-fast" data-category="all">
                    All Posts
                </button>
                <button class="category-filter px-6 py-3 rounded-full bg-white text-text-secondary hover:bg-primary hover:text-white font-medium transition-custom-fast" data-category="seo">
                    SEO
                </button>
                <button class="category-filter px-6 py-3 rounded-full bg-white text-text-secondary hover:bg-primary hover:text-white font-medium transition-custom-fast" data-category="ppc">
                    PPC
                </button>
                <button class="category-filter px-6 py-3 rounded-full bg-white text-text-secondary hover:bg-primary hover:text-white font-medium transition-custom-fast" data-category="social-media">
                    Social Media
                </button>
                <button class="category-filter px-6 py-3 rounded-full bg-white text-text-secondary hover:bg-primary hover:text-white font-medium transition-custom-fast" data-category="content">
                    Content Marketing
                </button>
                <button class="category-filter px-6 py-3 rounded-full bg-white text-text-secondary hover:bg-primary hover:text-white font-medium transition-custom-fast" data-category="analytics">
                    Analytics
                </button>
            </div>
        </div>
    </section>

    <!-- Featured Posts Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">Featured Articles</h2>
                <p class="text-lg text-text-secondary">Our most popular and impactful content</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
                <!-- Featured Post 1 -->
                <article class="card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?q=80&w=800&h=400&auto=format&fit=crop&ixlib=rb-4.0.3" alt="SEO Strategy Guide" class="w-full h-64 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.pexels.com/photos/270637/pexels-photo-270637.jpeg?auto=compress&cs=tinysrgb&w=800&h=400&dpr=2'; this.onerror=null;" />
                        <div class="absolute top-4 left-4">
                            <span class="bg-primary text-white px-3 py-1 rounded-full text-sm font-medium">SEO</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-text-secondary mb-3">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=40&h=40&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Author" class="w-8 h-8 rounded-full object-cover mr-3" loading="lazy" onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=40&h=40&dpr=2'; this.onerror=null;" />
                            <span>Sarah Johnson</span>
                            <span class="mx-2">•</span>
                            <span>March 15, 2025</span>
                            <span class="mx-2">•</span>
                            <span>8 min read</span>
                        </div>
                        <h3 class="text-2xl font-bold text-text-primary mb-3 group-hover:text-primary transition-custom-fast">
                            The Complete Guide to SEO in 2025: Strategies That Actually Work
                        </h3>
                        <p class="text-text-secondary mb-4">
                            Discover the latest SEO strategies and techniques that are driving results in 2025. From AI-powered optimization to voice search, learn what's working now.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-sm text-text-secondary">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                    2.5k views
                                </span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                    156 likes
                                </span>
                            </div>
                            <a href="blog.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                                Read More →
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Featured Post 2 -->
                <article class="card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pixabay.com/photo/2017/01/14/12/59/iceland-1979445_1280.jpg?auto=compress&cs=tinysrgb&w=800&h=400&dpr=2" alt="PPC Campaign Optimization" class="w-full h-64 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&h=400&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />
                        <div class="absolute top-4 left-4">
                            <span class="bg-accent text-white px-3 py-1 rounded-full text-sm font-medium">PPC</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-text-secondary mb-3">
                            <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=40&h=40&dpr=2" alt="Author" class="w-8 h-8 rounded-full object-cover mr-3" loading="lazy" onerror="this.src='https://images.pixabay.com/photo/2016/11/21/12/42/beard-1845166_1280.jpg?auto=compress&cs=tinysrgb&w=40&h=40&dpr=2'; this.onerror=null;" />
                            <span>Michael Chen</span>
                            <span class="mx-2">•</span>
                            <span>March 12, 2025</span>
                            <span class="mx-2">•</span>
                            <span>6 min read</span>
                        </div>
                        <h3 class="text-2xl font-bold text-text-primary mb-3 group-hover:text-primary transition-custom-fast">
                            How to Optimize PPC Campaigns for Maximum ROI
                        </h3>
                        <p class="text-text-secondary mb-4">
                            Learn advanced PPC optimization techniques that can dramatically improve your return on ad spend. Real case studies and actionable insights included.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-sm text-text-secondary">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                    1.8k views
                                </span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                    89 likes
                                </span>
                            </div>
                            <a href="blog.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                                Read More →
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Main Blog Content -->
    <section class="py-16 bg-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Blog Posts Grid -->
                <div class="lg:w-2/3">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-text-primary mb-2">Latest Articles</h2>
                        <p class="text-text-secondary">Stay updated with our newest insights and strategies</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8" id="blog-posts-grid">
                        <!-- Blog Post 1 -->
                        <article class="card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed" data-category="social-media">
                            <div class="relative overflow-hidden">
                                <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=600&h=300&dpr=2" alt="Social Media Strategy" class="w-full h-48 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1611224923853-80b023f02d71?q=80&w=600&h=300&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />
                                <div class="absolute top-4 left-4">
                                    <span class="bg-success text-white px-3 py-1 rounded-full text-sm font-medium">Social Media</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-sm text-text-secondary mb-3">
                                    <img src="https://images.pixabay.com/photo/2017/06/26/02/47/man-2442565_1280.jpg?auto=compress&cs=tinysrgb&w=32&h=32&dpr=2" alt="Author" class="w-6 h-6 rounded-full object-cover mr-2" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=32&h=32&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />
                                    <span>Emma Davis</span>
                                    <span class="mx-2">•</span>
                                    <span>March 10, 2025</span>
                                </div>
                                <h3 class="text-xl font-bold text-text-primary mb-3 group-hover:text-primary transition-custom-fast">
                                    Social Media Trends to Watch in 2025
                                </h3>
                                <p class="text-text-secondary mb-4">
                                    Explore the emerging social media trends that will shape your marketing strategy this year.
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-text-secondary">5 min read</span>
                                    <a href="blog.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 2 -->
                        <article class="card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed" data-category="content">
                            <div class="relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?q=80&w=600&h=300&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Content Marketing" class="w-full h-48 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.pexels.com/photos/265087/pexels-photo-265087.jpeg?auto=compress&cs=tinysrgb&w=600&h=300&dpr=2'; this.onerror=null;" />
                                <div class="absolute top-4 left-4">
                                    <span class="bg-secondary text-white px-3 py-1 rounded-full text-sm font-medium">Content</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-sm text-text-secondary mb-3">
                                    <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=32&h=32&dpr=2" alt="Author" class="w-6 h-6 rounded-full object-cover mr-2" loading="lazy" onerror="this.src='https://images.pixabay.com/photo/2016/11/21/12/42/beard-1845166_1280.jpg?auto=compress&cs=tinysrgb&w=32&h=32&dpr=2'; this.onerror=null;" />
                                    <span>David Rodriguez</span>
                                    <span class="mx-2">•</span>
                                    <span>March 8, 2025</span>
                                </div>
                                <h3 class="text-xl font-bold text-text-primary mb-3 group-hover:text-primary transition-custom-fast">
                                    Creating Content That Converts
                                </h3>
                                <p class="text-text-secondary mb-4">
                                    Learn how to craft compelling content that drives engagement and conversions for your business.
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-text-secondary">7 min read</span>
                                    <a href="blog.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 3 -->
                        <article class="card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed" data-category="analytics">
                            <div class="relative overflow-hidden">
                                <img src="https://images.pixabay.com/photo/2016/11/27/21/42/stock-1863880_1280.jpg?auto=compress&cs=tinysrgb&w=600&h=300&dpr=2" alt="Analytics Dashboard" class="w-full h-48 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=600&h=300&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />
                                <div class="absolute top-4 left-4">
                                    <span class="bg-warning text-white px-3 py-1 rounded-full text-sm font-medium">Analytics</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-sm text-text-secondary mb-3">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=32&h=32&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Author" class="w-6 h-6 rounded-full object-cover mr-2" loading="lazy" onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=32&h=32&dpr=2'; this.onerror=null;" />
                                    <span>Alex Thompson</span>
                                    <span class="mx-2">•</span>
                                    <span>March 5, 2025</span>
                                </div>
                                <h3 class="text-xl font-bold text-text-primary mb-3 group-hover:text-primary transition-custom-fast">
                                    Google Analytics 4: Essential Metrics
                                </h3>
                                <p class="text-text-secondary mb-4">
                                    Master the key metrics in GA4 that matter most for your digital marketing success.
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-text-secondary">6 min read</span>
                                    <a href="blog.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 4 -->
                        <article class="card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed" data-category="seo">
                            <div class="relative overflow-hidden">
                                <img src="https://images.pexels.com/photos/270637/pexels-photo-270637.jpeg?auto=compress&cs=tinysrgb&w=600&h=300&dpr=2" alt="Local SEO" class="w-full h-48 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?q=80&w=600&h=300&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />
                                <div class="absolute top-4 left-4">
                                    <span class="bg-primary text-white px-3 py-1 rounded-full text-sm font-medium">SEO</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-sm text-text-secondary mb-3">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=32&h=32&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Author" class="w-6 h-6 rounded-full object-cover mr-2" loading="lazy" onerror="this.src='https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=32&h=32&dpr=2'; this.onerror=null;" />
                                    <span>Sarah Johnson</span>
                                    <span class="mx-2">•</span>
                                    <span>March 3, 2025</span>
                                </div>
                                <h3 class="text-xl font-bold text-text-primary mb-3 group-hover:text-primary transition-custom-fast">
                                    Local SEO: Dominate Your Market
                                </h3>
                                <p class="text-text-secondary mb-4">
                                    Proven strategies to improve your local search rankings and attract more customers.
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-text-secondary">9 min read</span>
                                    <a href="blog.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 5 -->
                        <article class="card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed" data-category="ppc">
                            <div class="relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=600&h=300&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Google Ads" class="w-full h-48 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.pixabay.com/photo/2017/01/14/12/59/iceland-1979445_1280.jpg?auto=compress&cs=tinysrgb&w=600&h=300&dpr=2'; this.onerror=null;" />
                                <div class="absolute top-4 left-4">
                                    <span class="bg-accent text-white px-3 py-1 rounded-full text-sm font-medium">PPC</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-sm text-text-secondary mb-3">
                                    <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=32&h=32&dpr=2" alt="Author" class="w-6 h-6 rounded-full object-cover mr-2" loading="lazy" onerror="this.src='https://images.pixabay.com/photo/2016/11/21/12/42/beard-1845166_1280.jpg?auto=compress&cs=tinysrgb&w=32&h=32&dpr=2'; this.onerror=null;" />
                                    <span>Michael Chen</span>
                                    <span class="mx-2">•</span>
                                    <span>March 1, 2025</span>
                                </div>
                                <h3 class="text-xl font-bold text-text-primary mb-3 group-hover:text-primary transition-custom-fast">
                                    Google Ads Bidding Strategies
                                </h3>
                                <p class="text-text-secondary mb-4">
                                    Choose the right bidding strategy to maximize your Google Ads performance and ROI.
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-text-secondary">8 min read</span>
                                    <a href="blog.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 6 -->
                        <article class="card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed" data-category="content">
                            <div class="relative overflow-hidden">
                                <img src="https://images.pexels.com/photos/265087/pexels-photo-265087.jpeg?auto=compress&cs=tinysrgb&w=600&h=300&dpr=2" alt="Email Marketing" class="w-full h-48 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?q=80&w=600&h=300&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />
                                <div class="absolute top-4 left-4">
                                    <span class="bg-secondary text-white px-3 py-1 rounded-full text-sm font-medium">Content</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-sm text-text-secondary mb-3">
                                    <img src="https://images.pixabay.com/photo/2017/06/26/02/47/man-2442565_1280.jpg?auto=compress&cs=tinysrgb&w=32&h=32&dpr=2" alt="Author" class="w-6 h-6 rounded-full object-cover mr-2" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=32&h=32&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />
                                    <span>Emma Davis</span>
                                    <span class="mx-2">•</span>
                                    <span>February 28, 2025</span>
                                </div>
                                <h3 class="text-xl font-bold text-text-primary mb-3 group-hover:text-primary transition-custom-fast">
                                    Email Marketing Best Practices
                                </h3>
                                <p class="text-text-secondary mb-4">
                                    Build effective email campaigns that engage subscribers and drive conversions.
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-text-secondary">6 min read</span>
                                    <a href="blog.html" class="text-primary font-medium hover:text-primary-700 transition-custom-fast">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Load More Button -->
                    <div class="text-center mt-12">
                        <button class="btn-primary text-lg px-8 py-4" id="load-more-btn">
                            Load More Articles
                        </button>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:w-1/3">
                    <!-- Newsletter Signup -->
                    <div class="card p-6 mb-8 fade-in-delayed">
                        <h3 class="text-xl font-bold text-text-primary mb-4">Stay Updated</h3>
                        <p class="text-text-secondary mb-4">
                            Get the latest digital marketing insights delivered to your inbox weekly.
                        </p>
                        <form class="space-y-4" id="sidebar-newsletter-form">
                            <input type="email" placeholder="Your email address" class="form-input w-full" required id="sidebar-newsletter-email" />
                            <button type="submit" class="btn-primary w-full">
                                Subscribe Now
                            </button>
                        </form>
                        <p class="text-xs text-text-secondary mt-3">
                            No spam, unsubscribe anytime. We respect your privacy.
                        </p>
                    </div>

                    <!-- Recent Posts -->
                    <div class="card p-6 mb-8 fade-in-delayed">
                        <h3 class="text-xl font-bold text-text-primary mb-6">Recent Posts</h3>
                        <div class="space-y-4">
                            <article class="flex space-x-3">
                                <img src="https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?q=80&w=80&h=60&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Recent post" class="w-16 h-12 object-cover rounded flex-shrink-0" loading="lazy" onerror="this.src='https://images.pexels.com/photos/270637/pexels-photo-270637.jpeg?auto=compress&cs=tinysrgb&w=80&h=60&dpr=2'; this.onerror=null;" />
                                <div>
                                    <h4 class="text-sm font-semibold text-text-primary hover:text-primary transition-custom-fast">
                                        <a href="blog.html">Voice Search Optimization Tips</a>
                                    </h4>
                                    <p class="text-xs text-text-secondary">March 18, 2025</p>
                                </div>
                            </article>
                            <article class="flex space-x-3">
                                <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=80&h=60&dpr=2" alt="Recent post" class="w-16 h-12 object-cover rounded flex-shrink-0" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1611224923853-80b023f02d71?q=80&w=80&h=60&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />
                                <div>
                                    <h4 class="text-sm font-semibold text-text-primary hover:text-primary transition-custom-fast">
                                        <a href="blog.html">Instagram Marketing Trends</a>
                                    </h4>
                                    <p class="text-xs text-text-secondary">March 16, 2025</p>
                                </div>
                            </article>
                            <article class="flex space-x-3">
                                <img src="https://images.pixabay.com/photo/2016/11/27/21/42/stock-1863880_1280.jpg?auto=compress&cs=tinysrgb&w=80&h=60&dpr=2" alt="Recent post" class="w-16 h-12 object-cover rounded flex-shrink-0" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=80&h=60&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />
                                <div>
                                    <h4 class="text-sm font-semibold text-text-primary hover:text-primary transition-custom-fast">
                                        <a href="blog.html">Conversion Rate Optimization</a>
                                    </h4>
                                    <p class="text-xs text-text-secondary">March 14, 2025</p>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- Popular Tags -->
                    <div class="card p-6 mb-8 fade-in-delayed">
                        <h3 class="text-xl font-bold text-text-primary mb-6">Popular Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-primary-100 text-primary rounded-full text-sm hover:bg-primary-200 transition-custom-fast cursor-pointer">SEO</span>
                            <span class="px-3 py-1 bg-accent-100 text-accent rounded-full text-sm hover:bg-accent-200 transition-custom-fast cursor-pointer">PPC</span>
                            <span class="px-3 py-1 bg-success-100 text-success rounded-full text-sm hover:bg-success-200 transition-custom-fast cursor-pointer">Social Media</span>
                            <span class="px-3 py-1 bg-secondary-100 text-secondary rounded-full text-sm hover:bg-secondary-200 transition-custom-fast cursor-pointer">Content Marketing</span>
                            <span class="px-3 py-1 bg-warning-100 text-warning rounded-full text-sm hover:bg-warning-200 transition-custom-fast cursor-pointer">Analytics</span>
                            <span class="px-3 py-1 bg-primary-100 text-primary rounded-full text-sm hover:bg-primary-200 transition-custom-fast cursor-pointer">Email Marketing</span>
                            <span class="px-3 py-1 bg-accent-100 text-accent rounded-full text-sm hover:bg-accent-200 transition-custom-fast cursor-pointer">Conversion</span>
                            <span class="px-3 py-1 bg-success-100 text-success rounded-full text-sm hover:bg-success-200 transition-custom-fast cursor-pointer">Digital Strategy</span>
                        </div>
                    </div>

                    <!-- Social Media Follow -->
                    <div class="card p-6 fade-in-delayed">
                        <h3 class="text-xl font-bold text-text-primary mb-6">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="flex items-center justify-center w-10 h-10 bg-primary text-white rounded-full hover:bg-primary-700 transition-custom-fast min-touch-target">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="flex items-center justify-center w-10 h-10 bg-primary text-white rounded-full hover:bg-primary-700 transition-custom-fast min-touch-target">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="#" class="flex items-center justify-center w-10 h-10 bg-primary text-white rounded-full hover:bg-primary-700 transition-custom-fast min-touch-target">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
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

        // Search functionality
        const searchInput = document.getElementById('blog-search');
        const searchClear = document.getElementById('search-clear');
        const blogPostsGrid = document.getElementById('blog-posts-grid');

        searchInput.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            const posts = blogPostsGrid.querySelectorAll('article');
            
            posts.forEach(post => {
                const title = post.querySelector('h3').textContent.toLowerCase();
                const content = post.querySelector('p').textContent.toLowerCase();
                const author = post.querySelector('.text-sm span').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || content.includes(searchTerm) || author.includes(searchTerm)) {
                    post.style.display = 'block';
                } else {
                    post.style.display = 'none';
                }
            });
        });

        searchClear.addEventListener('click', () => {
            searchInput.value = '';
            const posts = blogPostsGrid.querySelectorAll('article');
            posts.forEach(post => {
                post.style.display = 'block';
            });
        });

        // Category filtering
        const categoryFilters = document.querySelectorAll('.category-filter');
        
        categoryFilters.forEach(filter => {
            filter.addEventListener('click', () => {
                // Remove active class from all filters
                categoryFilters.forEach(f => {
                    f.classList.remove('active', 'bg-primary', 'text-white');
                    f.classList.add('bg-white', 'text-text-secondary');
                });
                
                // Add active class to clicked filter
                filter.classList.add('active', 'bg-primary', 'text-white');
                filter.classList.remove('bg-white', 'text-text-secondary');
                
                const category = filter.dataset.category;
                const posts = blogPostsGrid.querySelectorAll('article');
                
                posts.forEach(post => {
                    if (category === 'all' || post.dataset.category === category) {
                        post.style.display = 'block';
                    } else {
                        post.style.display = 'none';
                    }
                });
            });
        });

        // Newsletter form submission
        const sidebarNewsletterForm = document.getElementById('sidebar-newsletter-form');
        sidebarNewsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const email = document.getElementById('sidebar-newsletter-email').value;
            alert(`Thank you for subscribing with email: ${email}`);
            sidebarNewsletterForm.reset();
        });

        // Load more functionality
        const loadMoreBtn = document.getElementById('load-more-btn');
        loadMoreBtn.addEventListener('click', () => {
            // Simulate loading more posts
            alert('Loading more articles... (This would load additional blog posts from the database)');
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

        // Social sharing functionality (for future implementation)
        function shareArticle(url, title) {
            if (navigator.share) {
                navigator.share({
                    title: title,
                    url: url
                });
            } else {
                // Fallback for browsers that don't support Web Share API
                const shareUrl = `https://twitter.com/intent/tweet?text=${encodeURIComponent(title)}&url=${encodeURIComponent(url)}`;
                window.open(shareUrl, '_blank');
            }
        }

        // Popular tags functionality
        const popularTags = document.querySelectorAll('.card:last-child span');
        popularTags.forEach(tag => {
            tag.addEventListener('click', () => {
                const tagText = tag.textContent.toLowerCase().replace(' ', '-');
                // Simulate filtering by tag
                console.log(`Filtering by tag: ${tagText}`);
                // This would trigger the same filtering logic as categories
            });
        });
    </script>
<script id="dhws-dataInjector" src="../public/dhws-data-injector.js"></script>
</body>
</html>