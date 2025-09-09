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
    <title>Portfolio - DigitalAgency Pro | Successful Digital Marketing Case Studies</title>
    <meta name="description" content="Explore our portfolio of successful digital marketing projects. See how we've helped businesses achieve remarkable growth through SEO, PPC, social media, and web development." />
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
                    Our Success Stories
                </h1>
                <p class="text-xl md:text-2xl text-text-secondary mb-8 max-w-3xl mx-auto text-balance">
                    Discover how we've helped businesses achieve remarkable growth through strategic digital marketing solutions
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary">500+</div>
                        <div class="text-text-secondary">Projects Completed</div>
                    </div>
                    <div class="hidden sm:block w-px h-12 bg-border"></div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-accent">350%</div>
                        <div class="text-text-secondary">Average Growth</div>
                    </div>
                    <div class="hidden sm:block w-px h-12 bg-border"></div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-success">98%</div>
                        <div class="text-text-secondary">Client Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search and Filter Section -->
    <section class="py-8 bg-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Search Bar -->
            <div class="mb-8 fade-in">
                <div class="relative max-w-md mx-auto">
                    <input type="text" placeholder="Search projects by industry, service, or keyword..." class="form-input w-full pl-10 pr-4" id="search-input" />
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Filter Categories -->
            <div class="fade-in-delayed">
                <div class="flex flex-wrap justify-center gap-3 mb-6">
                    <button class="filter-btn active" data-filter="all">
                        All Projects <span class="result-count">(12)</span>
                    </button>
                    <button class="filter-btn" data-filter="seo">
                        SEO <span class="result-count">(4)</span>
                    </button>
                    <button class="filter-btn" data-filter="ppc">
                        PPC <span class="result-count">(3)</span>
                    </button>
                    <button class="filter-btn" data-filter="social">
                        Social Media <span class="result-count">(3)</span>
                    </button>
                    <button class="filter-btn" data-filter="web">
                        Web Design <span class="result-count">(2)</span>
                    </button>
                </div>

                <!-- Additional Filters -->
                <div class="flex flex-wrap justify-center gap-3">
                    <select class="form-input text-sm" id="industry-filter">
                        <option value>All Industries</option>
                        <option value="ecommerce">E-commerce</option>
                        <option value="healthcare">Healthcare</option>
                        <option value="finance">Finance</option>
                        <option value="technology">Technology</option>
                        <option value="retail">Retail</option>
                        <option value="restaurant">Restaurant</option>
                    </select>
                    <select class="form-input text-sm" id="size-filter">
                        <option value>Project Size</option>
                        <option value="small">Small ($5K-$15K)</option>
                        <option value="medium">Medium ($15K-$50K)</option>
                        <option value="large">Large ($50K+)</option>
                    </select>
                    <button class="btn-secondary text-sm" id="reset-filters">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                        Reset
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
                <!-- Project 1 - E-commerce SEO -->
                <div class="portfolio-item card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in" data-category="seo" data-industry="ecommerce" data-size="large">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=600&h=400&auto=format&fit=crop&ixlib=rb-4.0.3" alt="E-commerce SEO Success Story" class="w-full h-48 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.pexels.com/photos/230544/pexels-photo-230544.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=2'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-primary/80 opacity-0 group-hover:opacity-100 transition-custom-normal flex items-center justify-center">
                            <button class="btn-accent case-study-btn" data-project="ecommerce-seo">View Case Study</button>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-success text-white px-2 py-1 rounded text-xs font-medium">SEO</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-text-primary mb-2">Fashion Retailer SEO Transformation</h3>
                        <p class="text-text-secondary mb-4">
                            Increased organic traffic by 450% and revenue by 320% for a leading fashion e-commerce brand through comprehensive SEO strategy.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-primary font-medium">FashionForward Inc.</span>
                            <span class="text-sm text-text-secondary">E-commerce</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-4">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-success">+450%</div>
                                    <div class="text-xs text-text-secondary">Traffic</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-lg font-bold text-accent">+320%</div>
                                    <div class="text-xs text-text-secondary">Revenue</div>
                                </div>
                            </div>
                            <button class="text-primary hover:text-primary-700 transition-custom-fast case-study-btn" data-project="ecommerce-seo">
                                Learn More →
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 2 - Local Restaurant PPC -->
                <div class="portfolio-item card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed" data-category="ppc" data-industry="restaurant" data-size="medium">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pexels.com/photos/262978/pexels-photo-262978.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=2" alt="Restaurant PPC Campaign Success" class="w-full h-48 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.pixabay.com/photo/2017/08/03/13/30/people-2576336_1280.jpg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=2'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-primary/80 opacity-0 group-hover:opacity-100 transition-custom-normal flex items-center justify-center">
                            <button class="btn-accent case-study-btn" data-project="restaurant-ppc">View Case Study</button>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-accent text-white px-2 py-1 rounded text-xs font-medium">PPC</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-text-primary mb-2">Local Restaurant Chain Growth</h3>
                        <p class="text-text-secondary mb-4">
                            Achieved 280% increase in online orders and 150% boost in foot traffic through targeted PPC campaigns across 5 locations.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-primary font-medium">Bella Vista Restaurants</span>
                            <span class="text-sm text-text-secondary">Restaurant</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-4">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-success">+280%</div>
                                    <div class="text-xs text-text-secondary">Orders</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-lg font-bold text-accent">+150%</div>
                                    <div class="text-xs text-text-secondary">Traffic</div>
                                </div>
                            </div>
                            <button class="text-primary hover:text-primary-700 transition-custom-fast case-study-btn" data-project="restaurant-ppc">
                                Learn More →
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 3 - Tech Startup Social Media -->
                <div class="portfolio-item card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed" data-category="social" data-industry="technology" data-size="medium">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pixabay.com/photo/2017/01/14/12/59/iceland-1979445_1280.jpg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=2" alt="Tech Startup Social Media Campaign" class="w-full h-48 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1611224923853-80b023f02d71?q=80&w=600&h=400&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-primary/80 opacity-0 group-hover:opacity-100 transition-custom-normal flex items-center justify-center">
                            <button class="btn-accent case-study-btn" data-project="tech-social">View Case Study</button>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-primary text-white px-2 py-1 rounded text-xs font-medium">Social Media</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-text-primary mb-2">Tech Startup Viral Campaign</h3>
                        <p class="text-text-secondary mb-4">
                            Generated 2M+ impressions and 50K new followers in 30 days, leading to $500K in new funding for innovative SaaS platform.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-primary font-medium">InnovateTech Solutions</span>
                            <span class="text-sm text-text-secondary">Technology</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-4">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-success">2M+</div>
                                    <div class="text-xs text-text-secondary">Impressions</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-lg font-bold text-accent">50K+</div>
                                    <div class="text-xs text-text-secondary">Followers</div>
                                </div>
                            </div>
                            <button class="text-primary hover:text-primary-700 transition-custom-fast case-study-btn" data-project="tech-social">
                                Learn More →
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 4 - Healthcare SEO -->
                <div class="portfolio-item card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed" data-category="seo" data-industry="healthcare" data-size="large">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?q=80&w=600&h=400&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Healthcare SEO Success Story" class="w-full h-48 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.pexels.com/photos/40568/medical-appointment-doctor-healthcare-40568.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=2'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-primary/80 opacity-0 group-hover:opacity-100 transition-custom-normal flex items-center justify-center">
                            <button class="btn-accent case-study-btn" data-project="healthcare-seo">View Case Study</button>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-success text-white px-2 py-1 rounded text-xs font-medium">SEO</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-text-primary mb-2">Medical Practice Local SEO</h3>
                        <p class="text-text-secondary mb-4">
                            Achieved #1 local rankings for 15+ medical keywords, resulting in 200% increase in patient appointments and online bookings.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-primary font-medium">HealthFirst Medical Group</span>
                            <span class="text-sm text-text-secondary">Healthcare</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-4">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-success">#1</div>
                                    <div class="text-xs text-text-secondary">Rankings</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-lg font-bold text-accent">+200%</div>
                                    <div class="text-xs text-text-secondary">Bookings</div>
                                </div>
                            </div>
                            <button class="text-primary hover:text-primary-700 transition-custom-fast case-study-btn" data-project="healthcare-seo">
                                Learn More →
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 5 - Finance Web Design -->
                <div class="portfolio-item card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed" data-category="web" data-industry="finance" data-size="large">
                    <div class="relative overflow-hidden">
                        <img src="https://images.pexels.com/photos/590022/pexels-photo-590022.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=2" alt="Finance Website Redesign" class="w-full h-48 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.pixabay.com/photo/2016/11/27/21/42/stock-1863880_1280.jpg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=2'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-primary/80 opacity-0 group-hover:opacity-100 transition-custom-normal flex items-center justify-center">
                            <button class="btn-accent case-study-btn" data-project="finance-web">View Case Study</button>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-secondary text-white px-2 py-1 rounded text-xs font-medium">Web Design</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-text-primary mb-2">Financial Services Website Redesign</h3>
                        <p class="text-text-secondary mb-4">
                            Complete website overhaul resulting in 180% increase in lead generation and 65% improvement in user engagement metrics.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-primary font-medium">SecureWealth Advisors</span>
                            <span class="text-sm text-text-secondary">Finance</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-4">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-success">+180%</div>
                                    <div class="text-xs text-text-secondary">Leads</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-lg font-bold text-accent">+65%</div>
                                    <div class="text-xs text-text-secondary">Engagement</div>
                                </div>
                            </div>
                            <button class="text-primary hover:text-primary-700 transition-custom-fast case-study-btn" data-project="finance-web">
                                Learn More →
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 6 - Retail PPC -->
                <div class="portfolio-item card overflow-hidden group hover:shadow-custom-lg transition-custom-normal fade-in-delayed" data-category="ppc" data-industry="retail" data-size="medium">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=600&h=400&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Retail PPC Campaign Success" class="w-full h-48 object-cover group-hover:scale-105 transition-custom-normal" loading="lazy" onerror="this.src='https://images.pexels.com/photos/264636/pexels-photo-264636.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&dpr=2'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-primary/80 opacity-0 group-hover:opacity-100 transition-custom-normal flex items-center justify-center">
                            <button class="btn-accent case-study-btn" data-project="retail-ppc">View Case Study</button>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-accent text-white px-2 py-1 rounded text-xs font-medium">PPC</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-text-primary mb-2">Home Decor Store PPC Optimization</h3>
                        <p class="text-text-secondary mb-4">
                            Reduced cost-per-acquisition by 40% while increasing online sales by 220% through strategic PPC campaign optimization.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-primary font-medium">HomeStyle Boutique</span>
                            <span class="text-sm text-text-secondary">Retail</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-4">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-success">-40%</div>
                                    <div class="text-xs text-text-secondary">CPA</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-lg font-bold text-accent">+220%</div>
                                    <div class="text-xs text-text-secondary">Sales</div>
                                </div>
                            </div>
                            <button class="text-primary hover:text-primary-700 transition-custom-fast case-study-btn" data-project="retail-ppc">
                                Learn More →
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="btn-primary text-lg px-8 py-4" id="load-more-btn">
                    Load More Projects
                </button>
            </div>
        </div>
    </section>

    <!-- Client Testimonials Section -->
    <section class="py-16 lg:py-24 bg-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">
                    What Our Clients Say About Our Work
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Real feedback from businesses we've helped achieve their digital marketing goals
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
                        <span class="text-sm text-text-secondary">Project: E-commerce SEO</span>
                    </div>
                    <blockquote class="text-lg text-text-secondary mb-6 italic">
                        "The results speak for themselves - 450% increase in organic traffic and 320% boost in revenue. DigitalAgency Pro's SEO expertise transformed our online presence completely. Their strategic approach and attention to detail made all the difference."
                    </blockquote>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?q=80&w=150&h=150&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Client testimonial" class="w-12 h-12 rounded-full object-cover mr-4" loading="lazy" onerror="this.src='https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=150&h=150&dpr=2'; this.onerror=null;" />
                        <div>
                            <h4 class="font-semibold text-text-primary">Emily Rodriguez</h4>
                            <p class="text-sm text-text-secondary">CEO, FashionForward Inc.</p>
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
                        <span class="text-sm text-text-secondary">Project: Social Media Campaign</span>
                    </div>
                    <blockquote class="text-lg text-text-secondary mb-6 italic">
                        "The viral social media campaign they created for us was phenomenal. 2 million impressions and 50K new followers in just 30 days helped us secure our Series A funding. Their creativity and execution are unmatched."
                    </blockquote>
                    <div class="flex items-center">
                        <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=150&h=150&dpr=2" alt="Client testimonial" class="w-12 h-12 rounded-full object-cover mr-4" loading="lazy" onerror="this.src='https://images.pixabay.com/photo/2016/11/21/12/42/beard-1845166_1280.jpg?auto=compress&cs=tinysrgb&w=150&h=150&dpr=2'; this.onerror=null;" />
                        <div>
                            <h4 class="font-semibold text-text-primary">Marcus Chen</h4>
                            <p class="text-sm text-text-secondary">Founder, InnovateTech Solutions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 lg:py-24 bg-primary text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="fade-in">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Ready to Create Your Success Story?
                </h2>
                <p class="text-xl text-primary-200 mb-8 max-w-2xl mx-auto">
                    Let's discuss how we can help your business achieve similar results with our proven digital marketing strategies.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="contact.html" class="btn-accent text-lg px-8 py-4 min-touch-target">
                        Start Your Project
                    </a>
                    <a href="services.html" class="btn-secondary text-lg px-8 py-4 min-touch-target bg-white/20 hover:bg-white/30 text-white border border-white/30">
                        View Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Study Modal -->
    <div id="case-study-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg max-w-4xl w-full max-h-[90vh] overflow-y-auto">
                <div class="p-6 border-b border-border flex justify-between items-center">
                    <h3 class="text-2xl font-bold text-text-primary" id="modal-title">Case Study Details</h3>
                    <button class="min-touch-target text-text-secondary hover:text-text-primary" id="close-modal">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <div class="p-6" id="modal-content">
                    <!-- Dynamic content will be loaded here -->
                </div>
            </div>
        </div>
    </div>

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

        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');
        const searchInput = document.getElementById('search-input');
        const industryFilter = document.getElementById('industry-filter');
        const sizeFilter = document.getElementById('size-filter');
        const resetButton = document.getElementById('reset-filters');

        // Filter button styles
        const filterBtnStyles = `
            .filter-btn {
                padding: 0.5rem 1rem;
                border-radius: 0.375rem;
                border: 1px solid var(--color-border);
                background-color: white;
                color: var(--color-text-secondary);
                font-weight: 500;
                transition: var(--transition-fast);
                cursor: pointer;
                min-height: 44px;
            }
            .filter-btn:hover {
                background-color: var(--color-primary-50);
                color: var(--color-primary);
                border-color: var(--color-primary);
            }
            .filter-btn.active {
                background-color: var(--color-primary);
                color: white;
                border-color: var(--color-primary);
            }
            .result-count {
                font-size: 0.875rem;
                opacity: 0.8;
            }
        `;

        // Add styles to head
        const style = document.createElement('style');
        style.textContent = filterBtnStyles;
        document.head.appendChild(style);

        // Filter functionality
        function filterPortfolio() {
            const activeFilter = document.querySelector('.filter-btn.active').dataset.filter;
            const searchTerm = searchInput.value.toLowerCase();
            const selectedIndustry = industryFilter.value;
            const selectedSize = sizeFilter.value;

            let visibleCount = 0;

            portfolioItems.forEach(item => {
                const category = item.dataset.category;
                const industry = item.dataset.industry;
                const size = item.dataset.size;
                const text = item.textContent.toLowerCase();

                const matchesFilter = activeFilter === 'all' || category === activeFilter;
                const matchesSearch = searchTerm === '' || text.includes(searchTerm);
                const matchesIndustry = selectedIndustry === '' || industry === selectedIndustry;
                const matchesSize = selectedSize === '' || size === selectedSize;

                if (matchesFilter && matchesSearch && matchesIndustry && matchesSize) {
                    item.style.display = 'block';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });

            // Update result counts
            updateResultCounts();
        }

        function updateResultCounts() {
            filterButtons.forEach(btn => {
                const filter = btn.dataset.filter;
                let count = 0;

                if (filter === 'all') {
                    count = portfolioItems.length;
                } else {
                    portfolioItems.forEach(item => {
                        if (item.dataset.category === filter) {
                            count++;
                        }
                    });
                }

                const countSpan = btn.querySelector('.result-count');
                countSpan.textContent = `(${count})`;
            });
        }

        // Event listeners
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                filterButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                filterPortfolio();
            });
        });

        searchInput.addEventListener('input', filterPortfolio);
        industryFilter.addEventListener('change', filterPortfolio);
        sizeFilter.addEventListener('change', filterPortfolio);

        resetButton.addEventListener('click', () => {
            searchInput.value = '';
            industryFilter.value = '';
            sizeFilter.value = '';
            filterButtons.forEach(b => b.classList.remove('active'));
            filterButtons[0].classList.add('active');
            filterPortfolio();
        });

        // Case study modal functionality
        const modal = document.getElementById('case-study-modal');
        const modalTitle = document.getElementById('modal-title');
        const modalContent = document.getElementById('modal-content');
        const closeModal = document.getElementById('close-modal');
        const caseStudyButtons = document.querySelectorAll('.case-study-btn');

        const caseStudyData = {
            'ecommerce-seo': {
                title: 'Fashion Retailer SEO Transformation',
                client: 'FashionForward Inc.',
                industry: 'E-commerce Fashion',
                duration: '8 months',
                challenge: 'FashionForward Inc. was struggling with low organic visibility and declining online sales. Their website ranked poorly for key fashion keywords and faced intense competition from established brands.',
                strategy: 'We implemented a comprehensive SEO strategy including technical optimization, content marketing, link building, and local SEO for their physical stores.',
                results: [
                    'Organic traffic increased by 450%',
                    'Revenue grew by 320%',
                    'Keyword rankings improved for 200+ terms',
                    'Page load speed improved by 60%',
                    'Conversion rate increased by 35%'
                ],
                testimonial: 'The results speak for themselves - 450% increase in organic traffic and 320% boost in revenue. DigitalAgency Pro\'s SEO expertise transformed our online presence completely.',
                image: 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&h=400&auto=format&fit=crop&ixlib=rb-4.0.3'
            },
            'restaurant-ppc': {
                title: 'Local Restaurant Chain Growth',
                client: 'Bella Vista Restaurants',
                industry: 'Restaurant & Food Service',
                duration: '6 months',
                challenge: 'Bella Vista Restaurants needed to increase online orders and drive more foot traffic to their 5 locations while competing with major food delivery platforms.',
                strategy: 'We created targeted PPC campaigns focusing on local search, food delivery keywords, and geo-targeted advertising to reach customers within delivery radius.',
                results: [
                    'Online orders increased by 280%',
                    'Foot traffic grew by 150%',
                    'Cost per acquisition reduced by 25%',
                    'Average order value increased by 40%',
                    'Customer retention improved by 60%'
                ],
                testimonial: 'The PPC campaigns transformed our business. We saw immediate results in both online orders and in-store visits across all our locations.',
                image: 'https://images.pexels.com/photos/262978/pexels-photo-262978.jpeg?auto=compress&cs=tinysrgb&w=800&h=400&dpr=2'
            },
            'tech-social': {
                title: 'Tech Startup Viral Campaign',
                client: 'InnovateTech Solutions',
                industry: 'Technology & SaaS',
                duration: '3 months',
                challenge: 'InnovateTech Solutions needed to build brand awareness and generate buzz for their new SaaS platform to attract investors and early adopters.',
                strategy: 'We developed a viral social media campaign combining thought leadership content, influencer partnerships, and strategic community engagement.',
                results: [
                    '2M+ impressions generated',
                    '50K+ new followers acquired',
                    'Brand awareness increased by 400%',
                    'Lead generation improved by 250%',
                    'Secured $500K in Series A funding'
                ],
                testimonial: 'The viral social media campaign they created for us was phenomenal. It helped us secure our Series A funding and establish our brand in the market.',
                image: 'https://images.pixabay.com/photo/2017/01/14/12/59/iceland-1979445_1280.jpg?auto=compress&cs=tinysrgb&w=800&h=400&dpr=2'
            }
        };

        caseStudyButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const projectId = btn.dataset.project;
                const data = caseStudyData[projectId];

                if (data) {
                    modalTitle.textContent = data.title;
                    modalContent.innerHTML = `
                        <div class="space-y-6">
                            <img src="${data.image}" alt="${data.title}" class="w-full h-64 object-cover rounded-lg">
                            
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <h4 class="font-semibold text-text-primary mb-2">Client</h4>
                                    <p class="text-text-secondary">${data.client}</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-text-primary mb-2">Industry</h4>
                                    <p class="text-text-secondary">${data.industry}</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-text-primary mb-2">Duration</h4>
                                    <p class="text-text-secondary">${data.duration}</p>
                                </div>
                            </div>

                            <div>
                                <h4 class="font-semibold text-text-primary mb-3">Challenge</h4>
                                <p class="text-text-secondary">${data.challenge}</p>
                            </div>

                            <div>
                                <h4 class="font-semibold text-text-primary mb-3">Strategy</h4>
                                <p class="text-text-secondary">${data.strategy}</p>
                            </div>

                            <div>
                                <h4 class="font-semibold text-text-primary mb-3">Results</h4>
                                <ul class="space-y-2">
                                    ${data.results.map(result => `<li class="flex items-center text-text-secondary"><svg class="w-5 h-5 text-success mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>${result}</li>`).join('')}
                                </ul>
                            </div>

                            <div class="bg-primary-50 p-6 rounded-lg">
                                <h4 class="font-semibold text-text-primary mb-3">Client Testimonial</h4>
                                <blockquote class="text-text-secondary italic">"${data.testimonial}"</blockquote>
                            </div>

                            <div class="text-center">
                                <a href="contact.html" class="btn-primary">Start Your Project</a>
                            </div>
                        </div>
                    `;
                    modal.classList.remove('hidden');
                }
            });
        });

        closeModal.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });

        // Load more functionality
        const loadMoreBtn = document.getElementById('load-more-btn');
        let currentlyVisible = 6;

        loadMoreBtn.addEventListener('click', () => {
            const hiddenItems = Array.from(portfolioItems).slice(currentlyVisible, currentlyVisible + 3);
            hiddenItems.forEach(item => {
                item.style.display = 'block';
            });
            currentlyVisible += 3;

            if (currentlyVisible >= portfolioItems.length) {
                loadMoreBtn.style.display = 'none';
            }
        });

        // Initially hide items beyond the first 6
        portfolioItems.forEach((item, index) => {
            if (index >= 6) {
                item.style.display = 'none';
            }
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

        // Initialize
        updateResultCounts();
    </script>
<script id="dhws-dataInjector" src="../public/dhws-data-injector.js"></script>
</body>
</html>