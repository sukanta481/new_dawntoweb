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
    <title>Contact Us - DigitalAgency Pro | Get Your Free Consultation</title>
    <meta name="description" content="Contact DigitalAgency Pro for expert digital marketing services. Get a free consultation, request a quote, or speak with our team about your project needs." />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<!-- <script type="module" src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Fdigitalage5654back.builtwithrocket.new&_be=https%3A%2F%2Fapplication.rocket.new&_v=0.1.6"></script> -->
</head>
<body class="bg-background text-text-primary">
    <?php include __DIR__ . '/../partials/header.php'; ?>
    <nav class="bg-white shadow-md">


    <!-- Hero Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="fade-in">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-text-primary mb-6 text-balance">
                    Let's Grow Your Business
                    <span class="text-primary">Together</span>
                </h1>
                <p class="text-xl md:text-2xl text-text-secondary mb-8 max-w-3xl mx-auto text-balance">
                    Ready to transform your digital presence? Get in touch with our experts for a free consultation and discover how we can help you achieve your goals.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="#contact-form" class="btn-primary text-lg px-8 py-4 min-touch-target">
                        Start Your Project
                    </a>
                    <a href="#contact-info" class="btn-secondary text-lg px-8 py-4 min-touch-target">
                        View Contact Info
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Service-Specific Inquiry Buttons -->
    <section class="py-12 bg-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8 fade-in">
                <h2 class="text-2xl md:text-3xl font-bold text-text-primary mb-4">
                    Quick Service Inquiries
                </h2>
                <p class="text-lg text-text-secondary">
                    Select your service of interest for a tailored consultation
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 fade-in-delayed">
                <button class="service-inquiry-btn card p-6 text-center hover:shadow-custom-lg transition-custom-normal" data-service="SEO Optimization">
                    <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-text-primary mb-2">SEO Services</h3>
                    <p class="text-sm text-text-secondary">Boost your search rankings</p>
                </button>

                <button class="service-inquiry-btn card p-6 text-center hover:shadow-custom-lg transition-custom-normal" data-service="PPC Advertising">
                    <div class="w-12 h-12 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-text-primary mb-2">PPC Campaigns</h3>
                    <p class="text-sm text-text-secondary">Maximize your ad ROI</p>
                </button>

                <button class="service-inquiry-btn card p-6 text-center hover:shadow-custom-lg transition-custom-normal" data-service="Social Media Marketing">
                    <div class="w-12 h-12 bg-success/10 rounded-full flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-text-primary mb-2">Social Media</h3>
                    <p class="text-sm text-text-secondary">Engage your audience</p>
                </button>

                <button class="service-inquiry-btn card p-6 text-center hover:shadow-custom-lg transition-custom-normal" data-service="Web Development">
                    <div class="w-12 h-12 bg-secondary/10 rounded-full flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-text-primary mb-2">Web Development</h3>
                    <p class="text-sm text-text-secondary">Build stunning websites</p>
                </button>
            </div>
        </div>
    </section>

    <!-- Main Contact Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="fade-in" id="contact-form">
                    <div class="card p-8">
                        <h2 class="text-3xl font-bold text-text-primary mb-6">Get Your Free Consultation</h2>
                        <p class="text-text-secondary mb-8">
                            Fill out the form below and we'll get back to you within 24 hours with a customized strategy for your business.
                        </p>

                        <form id="main-contact-form" class="space-y-6">
                            <!-- Name and Email Row -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-text-primary mb-2">Full Name *</label>
                                    <input type="text" id="name" name="name" required class="form-input w-full" placeholder="Enter your full name" />
                                    <div class="error-message hidden text-error text-sm mt-1"></div>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-text-primary mb-2">Email Address *</label>
                                    <input type="email" id="email" name="email" required class="form-input w-full" placeholder="your@email.com" />
                                    <div class="error-message hidden text-error text-sm mt-1"></div>
                                </div>
                            </div>

                            <!-- Phone and Company Row -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-text-primary mb-2">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" class="form-input w-full" placeholder="+91 81000 12345" />
                                    <div class="error-message hidden text-error text-sm mt-1"></div>
                                </div>
                                <div>
                                    <label for="company" class="block text-sm font-medium text-text-primary mb-2">Company Name</label>
                                    <input type="text" id="company" name="company" class="form-input w-full" placeholder="Your Company" />
                                    <div class="error-message hidden text-error text-sm mt-1"></div>
                                </div>
                            </div>

                            <!-- Service Interest -->
                            <div>
                                <label for="service" class="block text-sm font-medium text-text-primary mb-2">Service of Interest *</label>
                                <select id="service" name="service" required class="form-input w-full">
                                    <option value>Select a service</option>
                                    <option value="SEO Optimization">SEO Optimization</option>
                                    <option value="PPC Advertising">PPC Advertising</option>
                                    <option value="Social Media Marketing">Social Media Marketing</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Content Marketing">Content Marketing</option>
                                    <option value="Email Marketing">Email Marketing</option>
                                    <option value="Multiple Services">Multiple Services</option>
                                    <option value="Not Sure">Not Sure - Need Consultation</option>
                                </select>
                                <div class="error-message hidden text-error text-sm mt-1"></div>
                            </div>

                            <!-- Budget Range -->
                            <div>
                                <label for="budget" class="block text-sm font-medium text-text-primary mb-2">Project Budget Range</label>
                                <select id="budget" name="budget" class="form-input w-full">
                                    <option value>Select budget range</option>
                                    <option value="Under $5,000">Under $5,000</option>
                                    <option value="$5,000 - $10,000">$5,000 - $10,000</option>
                                    <option value="$10,000 - $25,000">$10,000 - $25,000</option>
                                    <option value="$25,000 - $50,000">$25,000 - $50,000</option>
                                    <option value="$50,000+">$50,000+</option>
                                    <option value="Prefer to discuss">Prefer to discuss</option>
                                </select>
                                <div class="error-message hidden text-error text-sm mt-1"></div>
                            </div>

                            <!-- Message -->
                            <div>
                                <label for="message" class="block text-sm font-medium text-text-primary mb-2">Project Details *</label>
                                <textarea id="message" name="message" rows="5" required class="form-input w-full resize-none" placeholder="Tell us about your project, goals, and any specific requirements..."></textarea>
                                <div class="error-message hidden text-error text-sm mt-1"></div>
                                <div class="text-sm text-text-secondary mt-1">
                                    <span id="char-count">0</span>/500 characters
                                </div>
                            </div>

                            <!-- Newsletter Signup -->
                            <div class="flex items-start space-x-3">
                                <input type="checkbox" id="newsletter" name="newsletter" class="mt-1 h-4 w-4 text-primary border-border rounded focus:ring-primary" />
                                <label for="newsletter" class="text-sm text-text-secondary">
                                    Subscribe to our newsletter for digital marketing tips and industry insights
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <div>
                                <button type="submit" class="btn-primary w-full text-lg py-4 min-touch-target" id="submit-btn">
                                    <span class="submit-text">Send Message</span>
                                    <span class="loading-text hidden">Sending...</span>
                                </button>
                            </div>

                            <!-- Success Message -->
                            <div id="success-message" class="hidden status-success p-4 rounded-lg">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="font-medium">Message sent successfully!</span>
                                </div>
                                <p class="mt-2 text-sm">We'll get back to you within 24 hours.</p>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="fade-in-delayed" id="contact-info">
                    <div class="space-y-8">
                        <!-- Contact Details -->
                        <div class="card p-8">
                            <h3 class="text-2xl font-bold text-text-primary mb-6">Get in Touch</h3>
                            
                            <div class="space-y-6">
                                <!-- Address -->
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-text-primary mb-1">Office Address</h4>
                                        <p class="text-text-secondary">
                                            225/h/304 Bagmari Road<br />
                                            Kolkata - 700054, <br />
                                            West Bengal, India
                                        </p>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 bg-accent/10 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-text-primary mb-1">Phone Numbers</h4>
                                        <p class="text-text-secondary">
                                            Main: <a href="tel:+15551234567" class="text-primary hover:text-primary-700">(555) 123-4567</a><br />
                                            Sales: <a href="tel:+15551234568" class="text-primary hover:text-primary-700">(555) 123-4568</a><br />
                                            Support: <a href="tel:+15551234569" class="text-primary hover:text-primary-700">(555) 123-4569</a>
                                        </p>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 bg-success/10 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-text-primary mb-1">Email Addresses</h4>
                                        <p class="text-text-secondary">
                                            General: <a href="mailto:hello@digitalagencypro.com" class="text-primary hover:text-primary-700">hello@digitalagencypro.com</a><br />
                                            Sales: <a href="mailto:sales@digitalagencypro.com" class="text-primary hover:text-primary-700">sales@digitalagencypro.com</a><br />
                                            Support: <a href="mailto:support@digitalagencypro.com" class="text-primary hover:text-primary-700">support@digitalagencypro.com</a>
                                        </p>
                                    </div>
                                </div>

                                <!-- Business Hours -->
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 bg-secondary/10 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-text-primary mb-1">Business Hours</h4>
                                        <p class="text-text-secondary">
                                            Monday - Friday: 9:00 AM - 6:00 PM EST<br />
                                            Saturday: 10:00 AM - 4:00 PM EST<br />
                                            Sunday: Closed<br />
                                            <span class="text-sm text-accent">24/7 Emergency Support Available</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media Links -->
                        <div class="card p-8">
                            <h3 class="text-xl font-bold text-text-primary mb-4">Follow Us</h3>
                            <p class="text-text-secondary mb-6">Stay connected for the latest updates and insights</p>
                            
                            <div class="flex space-x-4">
                                <a href="#" class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-custom-normal min-touch-target">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-custom-normal min-touch-target">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-custom-normal min-touch-target">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-custom-normal min-touch-target">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Map Section -->
    <section class="py-16 bg-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">
                    Visit Our Office
                </h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">
                    Located in the heart of Kolkata, we're easily accessible by public transportation and offer convenient parking.
                </p>
            </div>

            <div class="card overflow-hidden fade-in-delayed">
                <!-- Map Placeholder -->
                <div class="relative h-96 bg-secondary-100 flex items-center justify-center">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-primary/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-text-primary mb-2">Interactive Map</h3>
                        <p class="text-text-secondary mb-4">225/h/304 Bagmari Road, Kolkata - 700054, West Bengal, India</p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="https://www.google.com/maps/place/Bagmari,+Kolkata,+West+Bengal+700067/@22.5867262,88.385401,766m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3a02766cbe8f5451:0xdd0a25b12f0ad8c3!8m2!3d22.5867213!4d88.3879759!16s%2Fg%2F11hz2fcrpl?entry=ttu&g_ep=EgoyMDI1MDgxMy4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn-primary">
                                Get Directions
                            </a>
                            <button class="btn-secondary" onclick="showMapDetails()">
                                View Details
                            </button>
                        </div>
                    </div>
                    
                    <!-- Custom Map Marker -->
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <div class="w-8 h-8 bg-primary rounded-full border-4 border-white shadow-custom-lg animate-pulse"></div>
                    </div>
                </div>

                <!-- Map Information -->
                <div class="p-6 bg-white">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="w-12 h-12 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 8a2 2 0 100-4 2 2 0 000 4zm0 0v4m0-10V9a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2V9a2 2 0 00-2-2z"/>
                                </svg>
                            </div>
                            <h4 class="font-semibold text-text-primary mb-1">Parking Available</h4>
                            <p class="text-sm text-text-secondary">Free parking for visitors</p>
                        </div>
                        <div class="text-center">
                            <div class="w-12 h-12 bg-success/10 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h4 class="font-semibold text-text-primary mb-1">Public Transit</h4>
                            <p class="text-sm text-text-secondary">2 blocks from subway</p>
                        </div>
                        <div class="text-center">
                            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                            <h4 class="font-semibold text-text-primary mb-1">Modern Office</h4>
                            <p class="text-sm text-text-secondary">Professional meeting spaces</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">
                    Frequently Asked Questions
                </h2>
                <p class="text-lg text-text-secondary">
                    Get quick answers to common questions about our services and process
                </p>
            </div>

            <div class="space-y-4 fade-in-delayed">
                <!-- FAQ Item 1 -->
                <div class="card">
                    <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" data-target="faq-1">
                        <span class="font-semibold text-text-primary">How long does it take to see results from digital marketing?</span>
                        <svg class="w-5 h-5 text-text-secondary transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="faq-1" class="faq-content hidden px-6 pb-4">
                        <p class="text-text-secondary">
                            Results vary depending on the service and your current situation. SEO typically shows initial improvements in 3-6 months, while PPC campaigns can generate leads within days. Social media growth is usually visible within 2-3 months of consistent posting and engagement.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="card">
                    <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" data-target="faq-2">
                        <span class="font-semibold text-text-primary">What's included in your digital marketing packages?</span>
                        <svg class="w-5 h-5 text-text-secondary transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="faq-2" class="faq-content hidden px-6 pb-4">
                        <p class="text-text-secondary">
                            Our packages are customized based on your needs but typically include strategy development, implementation, ongoing optimization, monthly reporting, and dedicated account management. We also provide competitor analysis, keyword research, content creation, and performance tracking.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="card">
                    <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" data-target="faq-3">
                        <span class="font-semibold text-text-primary">Do you work with small businesses or just large corporations?</span>
                        <svg class="w-5 h-5 text-text-secondary transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="faq-3" class="faq-content hidden px-6 pb-4">
                        <p class="text-text-secondary">
                            We work with businesses of all sizes, from startups and small local businesses to large enterprises. Our strategies are scalable and tailored to fit your budget and goals, whether you're just starting out or looking to expand your existing digital presence.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="card">
                    <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" data-target="faq-4">
                        <span class="font-semibold text-text-primary">How do you measure and report on campaign performance?</span>
                        <svg class="w-5 h-5 text-text-secondary transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="faq-4" class="faq-content hidden px-6 pb-4">
                        <p class="text-text-secondary">
                            We provide detailed monthly reports with key metrics like website traffic, conversion rates, lead generation, ROI, and ranking improvements. You'll also have access to a client dashboard for real-time performance tracking and regular strategy calls to discuss results and optimizations.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="card">
                    <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" data-target="faq-5">
                        <span class="font-semibold text-text-primary">What makes your agency different from competitors?</span>
                        <svg class="w-5 h-5 text-text-secondary transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="faq-5" class="faq-content hidden px-6 pb-4">
                        <p class="text-text-secondary">
                            Our data-driven approach, transparent reporting, and dedicated account management set us apart. We focus on long-term partnerships rather than short-term contracts, provide custom strategies for each client, and maintain constant communication throughout the process. Plus, we offer a satisfaction guarantee on all our services.
                        </p>
                    </div>
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

        // Service inquiry buttons
        const serviceInquiryButtons = document.querySelectorAll('.service-inquiry-btn');
        const serviceSelect = document.getElementById('service');

        serviceInquiryButtons.forEach(button => {
            button.addEventListener('click', () => {
                const service = button.getAttribute('data-service');
                serviceSelect.value = service;
                document.getElementById('contact-form').scrollIntoView({ behavior: 'smooth' });
                serviceSelect.focus();
            });
        });

        // Form validation and submission
        const mainContactForm = document.getElementById('main-contact-form');
        const submitBtn = document.getElementById('submit-btn');
        const successMessage = document.getElementById('success-message');
        const messageTextarea = document.getElementById('message');
        const charCount = document.getElementById('char-count');

        // Character counter
        messageTextarea.addEventListener('input', () => {
            const count = messageTextarea.value.length;
            charCount.textContent = count;
            
            if (count > 500) {
                charCount.classList.add('text-error');
                messageTextarea.value = messageTextarea.value.substring(0, 500);
                charCount.textContent = '500';
            } else {
                charCount.classList.remove('text-error');
            }
        });

        // Real-time validation
        function validateField(field) {
            // Find an error container near the field, if any
            const container = field.closest('div') || field.parentNode;
            const errorDiv = container ? container.querySelector('.error-message') : null;
            let isValid = true;
            let errorMessage = '';

            if (field.hasAttribute('required') && !String(field.value || '').trim()) {
                isValid = false;
                errorMessage = 'This field is required';
            } else if (field.type === 'email' && field.value) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(field.value)) {
                    isValid = false;
                    errorMessage = 'Please enter a valid email address';
                }
            } else if (field.type === 'tel' && field.value) {
                const phoneDigits = (field.value || '').replace(/\D/g, '');
                const phoneRegex = /^[1-9]\d{5,15}$/; // basic sanity: 6-16 digits, not starting with 0
                if (!phoneRegex.test(phoneDigits)) {
                    isValid = false;
                    errorMessage = 'Please enter a valid phone number';
                }
            }

            // Visual updates (guard when errorDiv absent, e.g., checkboxes)
            if (isValid) {
                if (errorDiv) errorDiv.classList.add('hidden');
                field.classList.remove('border-error');
                field.classList.add('border-success');
            } else {
                if (errorDiv) {
                    errorDiv.textContent = errorMessage;
                    errorDiv.classList.remove('hidden');
                }
                field.classList.remove('border-success');
                field.classList.add('border-error');
            }
            return isValid;
        }

        // Add validation listeners
        const formFields = Array.from(mainContactForm.querySelectorAll('input, select, textarea')).filter(el => el.type !== 'checkbox');
        formFields.forEach(field => {
            field.addEventListener('blur', () => validateField(field));
            field.addEventListener('input', () => {
                if (field.classList.contains('border-error')) {
                    validateField(field);
                }
            });
        });

        
        // Form submission
        mainContactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            let isFormValid = true;
            formFields.forEach(field => { if (!validateField(field)) isFormValid = false; });
            if (!isFormValid) return;

            submitBtn.disabled = true;
            submitBtn.querySelector('.submit-text').classList.add('hidden');
            submitBtn.querySelector('.loading-text').classList.remove('hidden');

            try {
                const formData = new FormData(mainContactForm);
                const payload = {
                    name: formData.get('name') || '',
                    email: formData.get('email') || '',
                    phone: formData.get('phone') || '',
                    message: formData.get('message') || ''
                };
                const res = await fetch('../api/contact_submit.php', {
                    method: 'POST',
                    headers: {'Content-Type': 'application/json'},
                    body: JSON.stringify(payload)
                });
                const data = await res.json();
                if (data.ok) {
                    successMessage.classList.remove('hidden');
                    mainContactForm.reset();
                    charCount.textContent = '0';
                    formFields.forEach(field => field.classList.remove('border-success', 'border-error'));
                    successMessage.scrollIntoView({ behavior: 'smooth' });
                } else {
                    alert(data.error || 'There was an error sending your message.');
                }
            } catch (err) {
                alert('Network error. Please try again.');
            } finally {
                submitBtn.disabled = false;
                submitBtn.querySelector('.submit-text').classList.remove('hidden');
                submitBtn.querySelector('.loading-text').classList.add('hidden');
            }
        });

        // FAQ functionality

        const faqButtons = document.querySelectorAll('.faq-button');
        
        faqButtons.forEach(button => {
            button.addEventListener('click', () => {
                const targetId = button.getAttribute('data-target');
                const content = document.getElementById(targetId);
                const icon = button.querySelector('svg');
                
                // Close all other FAQ items
                faqButtons.forEach(otherButton => {
                    if (otherButton !== button) {
                        const otherTargetId = otherButton.getAttribute('data-target');
                        const otherContent = document.getElementById(otherTargetId);
                        const otherIcon = otherButton.querySelector('svg');
                        
                        otherContent.classList.add('hidden');
                        otherIcon.classList.remove('rotate-180');
                    }
                });
                
                // Toggle current FAQ item
                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });

        // Map details function
        function showMapDetails() {
            alert('Map Details:\n\n123 Business Avenue, Suite 100\nNew York, NY 10001\n\nNearby Landmarks:\n- Central Park (0.5 miles)\n- Times Square (0.8 miles)\n- Grand Central (0.3 miles)\n\nParking: Free visitor parking available\nPublic Transit: 2 blocks from subway station');
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
    </script>
<!-- dhws-data-injector disabled: was 404 in local env -->
</body>
</html>