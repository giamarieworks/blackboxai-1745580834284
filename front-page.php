<?php get_header(); ?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="hero-section bg-gradient-to-r from-secondary to-primary text-white py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="hero-content">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                        We will show you<br>
                        the way to Success
                    </h1>
                    <p class="text-xl mb-8">
                        GYNTEKBUSINESS identifies specific problems, frustrations, and unmet needs that our clients face everyday. We begin with a thorough client discovery assessment.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#services" class="btn-primary bg-white text-primary hover:bg-accent hover:text-white">
                            Learn More
                        </a>
                        <a href="#contact" class="btn-primary border-2 border-white hover:bg-white hover:text-primary">
                            Contact Us
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="<?php echo get_theme_mod('hero_image', get_template_directory_uri() . '/assets/images/hero-image.png'); ?>" 
                         alt="GYNTEKBUSINESS Hero" 
                         class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Services</h2>
                <p class="text-xl text-gray-600">Comprehensive AI-powered solutions for your business growth</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Business Planning -->
                <div class="service-card p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <div class="icon-box mb-4 text-primary">
                        <i class="fas fa-chart-line text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Business Planning</h3>
                    <p class="text-gray-600">Tailored strategies to align with client goals and drive sustainable growth.</p>
                </div>

                <!-- Market Research -->
                <div class="service-card p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <div class="icon-box mb-4 text-primary">
                        <i class="fas fa-search text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Market Research</h3>
                    <p class="text-gray-600">Data-driven insights to inform decision-making and competitive analysis.</p>
                </div>

                <!-- Marketing Planning -->
                <div class="service-card p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <div class="icon-box mb-4 text-primary">
                        <i class="fas fa-bullhorn text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Marketing Planning</h3>
                    <p class="text-gray-600">Strategic campaigns designed to maximize ROI and market presence.</p>
                </div>

                <!-- Analytics -->
                <div class="service-card p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <div class="icon-box mb-4 text-primary">
                        <i class="fas fa-chart-bar text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Analytics & Tracking</h3>
                    <p class="text-gray-600">Advanced tools to measure and optimize business performance.</p>
                </div>

                <!-- Content Creation -->
                <div class="service-card p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <div class="icon-box mb-4 text-primary">
                        <i class="fas fa-pen-fancy text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Content Creation</h3>
                    <p class="text-gray-600">Engaging social media content and automation for consistent engagement.</p>
                </div>

                <!-- Legal Compliance -->
                <div class="service-card p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <div class="icon-box mb-4 text-primary">
                        <i class="fas fa-shield-alt text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Legal Compliance</h3>
                    <p class="text-gray-600">Automated solutions to ensure businesses remain protected and compliant.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="pricing-section py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Pricing Plans</h2>
                <p class="text-xl text-gray-600">Choose the perfect plan for your business needs</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Dare the Dream -->
                <div class="pricing-card bg-white rounded-lg shadow-lg p-8">
                    <h3 class="text-2xl font-bold mb-4">Dare the Dream</h3>
                    <div class="price-tag mb-6">
                        <span class="text-4xl font-bold">$297</span>
                        <span class="text-gray-600">setup</span>
                        <p class="text-gray-600">+$99/month</p>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary mr-2"></i>
                            Basic AI Integration
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary mr-2"></i>
                            Essential Automation
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary mr-2"></i>
                            Standard Support
                        </li>
                    </ul>
                    <a href="#contact" class="btn-primary block text-center">Get Started</a>
                </div>

                <!-- Pathways -->
                <div class="pricing-card bg-white rounded-lg shadow-lg p-8">
                    <h3 class="text-2xl font-bold mb-4">Pathways</h3>
                    <div class="price-tag mb-6">
                        <span class="text-4xl font-bold">$1,497</span>
                        <span class="text-gray-600">setup</span>
                        <p class="text-gray-600">+$297/month</p>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary mr-2"></i>
                            Advanced AI Tools
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary mr-2"></i>
                            Custom Automation
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary mr-2"></i>
                            Priority Support
                        </li>
                    </ul>
                    <a href="#contact" class="btn-primary block text-center">Get Started</a>
                </div>

                <!-- Boss Earner -->
                <div class="pricing-card bg-white rounded-lg shadow-lg p-8 transform scale-105 border-2 border-primary">
                    <div class="absolute top-0 right-0 bg-primary text-white px-4 py-1 rounded-bl-lg">Popular</div>
                    <h3 class="text-2xl font-bold mb-4">Boss Earner</h3>
                    <div class="price-tag mb-6">
                        <span class="text-4xl font-bold">$2,197</span>
                        <span class="text-gray-600">setup</span>
                        <p class="text-gray-600">+$497/month</p>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary mr-2"></i>
                            Enterprise AI Suite
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary mr-2"></i>
                            Full Automation
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary mr-2"></i>
                            24/7 Premium Support
                        </li>
                    </ul>
                    <a href="#contact" class="btn-primary block text-center">Get Started</a>
                </div>

                <!-- Dividends Stacker -->
                <div class="pricing-card bg-white rounded-lg shadow-lg p-8">
                    <h3 class="text-2xl font-bold mb-4">Dividends Stacker</h3>
                    <div class="price-tag mb-6">
                        <span class="text-4xl font-bold">$3,497</span>
                        <span class="text-gray-600">setup</span>
                        <p class="text-gray-600">+$697/month</p>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary mr-2"></i>
                            Custom AI Development
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary mr-2"></i>
                            Advanced Integration
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-primary mr-2"></i>
                            Dedicated Support Team
                        </li>
                    </ul>
                    <a href="#contact" class="btn-primary block text-center">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials-section py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Customers Love What We Do</h2>
                <p class="text-xl text-gray-600">See what our clients say about our services</p>
            </div>

            <div class="testimonials-slider">
                <!-- Testimonial cards will be dynamically populated -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="contact-info">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Have Questions?</h2>
                    <p class="text-xl text-gray-600 mb-8">We're here to help. Contact us for any inquiries about our services.</p>
                    
                    <div class="space-y-6">
                        <?php if (get_theme_mod('contact_phone')) : ?>
                            <div class="flex items-center">
                                <i class="fas fa-phone-alt text-2xl text-primary mr-4"></i>
                                <div>
                                    <h3 class="text-lg font-bold">Phone</h3>
                                    <p class="text-gray-600"><?php echo esc_html(get_theme_mod('contact_phone')); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if (get_theme_mod('contact_email')) : ?>
                            <div class="flex items-center">
                                <i class="fas fa-envelope text-2xl text-primary mr-4"></i>
                                <div>
                                    <h3 class="text-lg font-bold">Email</h3>
                                    <p class="text-gray-600"><?php echo esc_html(get_theme_mod('contact_email')); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if (get_theme_mod('contact_address')) : ?>
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt text-2xl text-primary mr-4 mt-1"></i>
                                <div>
                                    <h3 class="text-lg font-bold">Address</h3>
                                    <p class="text-gray-600"><?php echo nl2br(esc_html(get_theme_mod('contact_address'))); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="contact-form bg-white rounded-lg shadow-lg p-8">
                    <?php echo do_shortcode('[contact-form-7 id="' . get_theme_mod('contact_form_id') . '" title="Contact Form"]'); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
