@extends('layouts.page')

@section('title', 'Contact Us - Tuwanx')

@section('active-contact', 'active-nav font-semibold text-tuwanx-gold')

@section('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
    
    * {
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Inter', sans-serif;
        scroll-behavior: smooth;
        overflow-x: hidden;
    }
    
    .card-shadow {
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    
    .voluminous-shadow {
        box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.15);
    }
    
    .btn-gold {
        background: linear-gradient(135deg, #D4AF37, #b8941f);
        color: white;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(212, 175, 55, 0.25);
    }
    
    .btn-gold:hover {
        background: linear-gradient(135deg, #b8941f, #a3821b);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(212, 175, 55, 0.35);
    }
    
    .btn-outline {
        border: 2px solid #D4AF37;
        color: #D4AF37;
        transition: all 0.3s ease;
        background: rgba(255, 255, 255, 0.9);
    }
    
    .btn-outline:hover {
        background-color: #D4AF37;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(212, 175, 55, 0.25);
    }
    
    .feature-icon {
        background: linear-gradient(135deg, rgba(212, 175, 55, 0.15), rgba(212, 175, 55, 0.05));
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 16px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
    }
    
    @media (min-width: 768px) {
        .feature-icon {
            width: 70px;
            height: 70px;
        }
    }
    
    @media (min-width: 1024px) {
        .feature-icon {
            width: 80px;
            height: 80px;
        }
    }
    
    .floating-element {
        animation: float 6s ease-in-out infinite;
    }
    
    @keyframes float {
        0% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-12px);
        }
        100% {
            transform: translateY(0px);
        }
    }
    
    .gradient-bg {
        background: linear-gradient(135deg, rgba(212, 175, 55, 0.08) 0%, rgba(255, 255, 255, 0) 50%, rgba(212, 175, 55, 0.04) 100%);
    }
    
    .text-gradient {
        background: linear-gradient(135deg, #D4AF37, #b8941f);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .gold-glow {
        box-shadow: 0 0 15px rgba(212, 175, 55, 0.25);
    }
    
    .contact-form input, .contact-form textarea {
        transition: all 0.3s ease;
    }
    
    .contact-form input:focus, .contact-form textarea:focus {
        border-color: #D4AF37;
        box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.15);
    }
    
    .mobile-menu {
        transform: translateX(100%);
        transition: transform 0.4s ease;
    }
    
    .mobile-menu.open {
        transform: translateX(0);
    }
    
    .hamburger {
        width: 26px;
        height: 18px;
        position: relative;
        cursor: pointer;
        z-index: 60;
    }
    
    .hamburger span {
        display: block;
        position: absolute;
        height: 2px;
        width: 100%;
        background: #00171F;
        border-radius: 3px;
        opacity: 1;
        left: 0;
        transform: rotate(0deg);
        transition: .25s ease-in-out;
    }
    
    .hamburger span:nth-child(1) {
        top: 0px;
    }
    
    .hamburger span:nth-child(2) {
        top: 8px;
    }
    
    .hamburger span:nth-child(3) {
        top: 16px;
    }
    
    .hamburger.open span:nth-child(1) {
        top: 8px;
        transform: rotate(135deg);
        background: #00171F;
    }
    
    .hamburger.open span:nth-child(2) {
        opacity: 0;
        left: -30px;
    }
    
    .hamburger.open span:nth-child(3) {
        top: 8px;
        transform: rotate(-135deg);
        background: #00171F;
    }
    
    .faq-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }
    
    .faq-item.active .faq-content {
        max-height: 500px;
    }
    
    .faq-item.active .faq-icon {
        transform: rotate(180deg);
    }
    
    /* Responsive adjustments */
    @media (max-width: 475px) {
        .container {
            padding-left: 1rem;
            padding-right: 1rem;
        }
        
        .btn-responsive {
            width: 100%;
            margin-bottom: 0.75rem;
        }
        
        .btn-group-responsive {
            flex-direction: column;
        }
    }
    
    @media (max-width: 640px) {
        .section-padding {
            padding-top: 5rem;
            padding-bottom: 3rem;
        }
        
        .hero-padding {
            padding-top: 7rem;
            padding-bottom: 3rem;
        }
        
        .text-responsive {
            font-size: 1.75rem;
            line-height: 2.25rem;
        }
        
        .text-lg-responsive {
            font-size: 1.125rem;
        }
    }
    
    @media (min-width: 641px) and (max-width: 1023px) {
        .section-padding {
            padding-top: 6rem;
            padding-bottom: 4rem;
        }
        
        .hero-padding {
            padding-top: 8rem;
            padding-bottom: 4rem;
        }
        
        .text-responsive {
            font-size: 2.25rem;
            line-height: 2.5rem;
        }
    }
    
    @media (min-width: 1024px) {
        .section-padding {
            padding-top: 7rem;
            padding-bottom: 5rem;
        }
        
        .hero-padding {
            padding-top: 9rem;
            padding-bottom: 5rem;
        }
        
        .text-responsive {
            font-size: 3rem;
            line-height: 1;
        }
    }
</style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-padding gradient-bg relative overflow-hidden">
        <div class="absolute -top-20 -right-20 w-40 h-40 xs:w-60 xs:h-60 md:w-80 md:h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 -left-20 w-40 h-40 xs:w-60 xs:h-60 md:w-80 md:h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-4 xs:px-6 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-responsive md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6">Get In <span class="text-gradient">Touch</span></h1>
                <p class="text-base xs:text-lg md:text-xl text-gray-600 mb-6 md:mb-10">We're here to help you create the perfect custom fashion experience. Reach out to us with any questions or concerns.</p>
                <div class="flex flex-col xs:flex-row justify-center space-y-3 xs:space-y-0 xs:space-x-4 btn-group-responsive">
                    <a href="#contact-form" class="btn-gold px-5 py-3 rounded-lg font-semibold text-base btn-responsive">Send a Message</a>
                    <a href="#contact-info" class="btn-outline px-5 py-3 rounded-lg font-semibold text-base btn-responsive">Contact Info</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info Section -->
    <section class="section-padding bg-white" id="contact-form">
        <div class="container mx-auto px-4 xs:px-6">
            <div class="flex flex-col lg:flex-row gap-8 md:gap-12">
                <!-- Contact Form -->
                <div class="lg:w-1/2">
                    <div class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 voluminous-shadow">
                        <h2 class="text-2xl md:text-3xl font-bold mb-2">Send Us a <span class="text-gradient">Message</span></h2>
                        <p class="text-gray-600 mb-6 md:mb-8">Fill out the form below and we'll get back to you as soon as possible.</p>
                        
                        <form action="{{ route('contact.submit') }}" method="POST" class="contact-form space-y-4 md:space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                                <div>
                                    <label for="first-name" class="block text-gray-700 font-medium mb-2">First Name</label>
                                    <input type="text" id="first-name" name="first_name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" placeholder="Your first name" required>
                                </div>
                                <div>
                                    <label for="last-name" class="block text-gray-700 font-medium mb-2">Last Name</label>
                                    <input type="text" id="last-name" name="last_name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" placeholder="Your last name" required>
                                </div>
                            </div>
                            
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" placeholder="your.email@example.com" required>
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                                <input type="text" id="subject" name="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" placeholder="What is this regarding?" required>
                            </div>
                            
                            <div>
                                <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                                <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" placeholder="Tell us how we can help you..." required></textarea>
                            </div>
                            
                            <div class="flex items-start">
                                <input type="checkbox" id="newsletter" name="newsletter" class="h-4 w-4 mt-1 text-tuwanx-gold focus:ring-tuwanx-gold border-gray-300 rounded">
                                <label for="newsletter" class="ml-2 block text-sm text-gray-700">
                                    I'd like to receive updates about new designers and features
                                </label>
                            </div>
                            
                            <button type="submit" class="btn-gold w-full py-3 md:py-4 rounded-lg font-semibold text-base md:text-lg">
                                Send Message <i class="ml-2 fas fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Contact Information -->
                <div class="lg:w-1/2" id="contact-info">
                    <div class="bg-gradient-to-br from-tuwanx-gold/5 to-tuwanx-gold/10 rounded-2xl md:rounded-3xl p-6 md:p-8 h-full voluminous-shadow">
                        <h2 class="text-2xl md:text-3xl font-bold mb-6 md:mb-8">Contact <span class="text-gradient">Information</span></h2>
                        
                        <div class="space-y-6 md:space-y-8">
                            <!-- Email -->
                            <div class="flex items-start">
                                <div class="feature-icon flex-shrink-0">
                                    <i class="fas fa-envelope text-tuwanx-gold text-xl md:text-2xl"></i>
                                </div>
                                <div class="ml-4 md:ml-6">
                                    <h3 class="text-lg md:text-xl font-semibold mb-2">Email Us</h3>
                                    <p class="text-gray-600 mb-2 text-sm md:text-base">Send us an email anytime and we'll respond as soon as possible.</p>
                                    <a href="mailto:support@tuwanx.com" class="text-tuwanx-gold font-medium text-base md:text-lg hover:underline break-all">support@tuwanx.com</a>
                                </div>
                            </div>
                            
                            <!-- Address -->
                            <div class="flex items-start">
                                <div class="feature-icon flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-tuwanx-gold text-xl md:text-2xl"></i>
                                </div>
                                <div class="ml-4 md:ml-6">
                                    <h3 class="text-lg md:text-xl font-semibold mb-2">Our Office</h3>
                                    <p class="text-gray-600 mb-2 text-sm md:text-base">Visit our headquarters or send us mail.</p>
                                    <address class="text-gray-700 not-italic text-sm md:text-base">
                                        Tuwanx Inc.<br>
                                        123 Fashion Avenue<br>
                                        Wilmington, Delaware 19801<br>
                                        United States
                                    </address>
                                </div>
                            </div>
                            
                            <!-- Social Media -->
                            <div class="flex items-start">
                                <div class="feature-icon flex-shrink-0">
                                    <i class="fas fa-share-alt text-tuwanx-gold text-xl md:text-2xl"></i>
                                </div>
                                <div class="ml-4 md:ml-6">
                                    <h3 class="text-lg md:text-xl font-semibold mb-4">Follow Us</h3>
                                    <div class="flex space-x-3 md:space-x-4">
                                        <a href="https://www.facebook.com/profile.php?id=61583297275195" target="_blank" rel="noopener" class="w-10 h-10 md:w-12 md:h-12 bg-white rounded-full flex items-center justify-center text-gray-700 hover:bg-tuwanx-gold hover:text-white transition-all card-shadow">
                                            <i class="fab fa-facebook-f text-sm md:text-base"></i>
                                        </a>
                                        <a href="https://www.instagram.com/tuwanxinc/" target="_blank" rel="noopener" class="w-10 h-10 md:w-12 md:h-12 bg-white rounded-full flex items-center justify-center text-gray-700 hover:bg-tuwanx-gold hover:text-white transition-all card-shadow">
                                            <i class="fab fa-instagram text-sm md:text-base"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section-padding gradient-bg relative overflow-hidden">
        <div class="absolute -top-20 -right-20 w-40 h-40 xs:w-60 xs:h-60 md:w-80 md:h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-4 xs:px-6">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center mb-4">Frequently Asked <span class="text-gradient">Questions</span></h2>
                <p class="text-base md:text-lg text-gray-600 text-center mb-10 md:mb-16 max-w-2xl mx-auto">Find quick answers to common questions about Tuwanx and our services.</p>
                
                <div class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 voluminous-shadow">
                    <div class="space-y-4 md:space-y-6">
                        <div class="faq-item border-b border-gray-200 pb-4 md:pb-6">
                            <button class="flex justify-between items-center w-full text-left font-semibold text-base md:text-lg faq-button">
                                <span>How do I find the right designer for my project?</span>
                                <i class="fas fa-chevron-down text-tuwanx-gold faq-icon transition-transform"></i>
                            </button>
                            <div class="faq-content mt-3 md:mt-4 text-gray-600 text-sm md:text-base">
                                <p>You can browse designer profiles, view their portfolios, and filter by style, specialty, and customer ratings. Our matching algorithm also suggests designers based on your project requirements.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item border-b border-gray-200 pb-4 md:pb-6">
                            <button class="flex justify-between items-center w-full text-left font-semibold text-base md:text-lg faq-button">
                                <span>What is the typical timeline for a custom clothing order?</span>
                                <i class="fas fa-chevron-down text-tuwanx-gold faq-icon transition-transform"></i>
                            </button>
                            <div class="faq-content mt-3 md:mt-4 text-gray-600 text-sm md:text-base">
                                <p>Timelines vary based on complexity, but most orders take 2-4 weeks from initial consultation to delivery. Rush options may be available for an additional fee.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item border-b border-gray-200 pb-4 md:pb-6">
                            <button class="flex justify-between items-center w-full text-left font-semibold text-base md:text-lg faq-button">
                                <span>How does the payment process work?</span>
                                <i class="fas fa-chevron-down text-tuwanx-gold faq-icon transition-transform"></i>
                            </button>
                            <div class="faq-content mt-3 md:mt-4 text-gray-600 text-sm md:text-base">
                                <p>We use a secure escrow system. You'll pay 50% upfront to start the project, and the remaining 50% upon completion and approval. This ensures both parties are protected.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item border-b border-gray-200 pb-4 md:pb-6">
                            <button class="flex justify-between items-center w-full text-left font-semibold text-base md:text-lg faq-button">
                                <span>What if I'm not satisfied with the final product?</span>
                                <i class="fas fa-chevron-down text-tuwanx-gold faq-icon transition-transform"></i>
                            </button>
                            <div class="faq-content mt-3 md:mt-4 text-gray-600 text-sm md:text-base">
                                <p>We have a satisfaction guarantee. If you're not happy with the result, we'll work with the designer to make revisions or provide a refund according to our policy.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <button class="flex justify-between items-center w-full text-left font-semibold text-base md:text-lg faq-button">
                                <span>Do you offer international shipping?</span>
                                <i class="fas fa-chevron-down text-tuwanx-gold faq-icon transition-transform"></i>
                            </button>
                            <div class="faq-content mt-3 md:mt-4 text-gray-600 text-sm md:text-base">
                                <p>Yes, we work with designers worldwide and offer international shipping. Shipping costs and times vary by location and will be calculated at checkout.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 md:mt-10 text-center">
                        <p class="text-gray-600 text-sm md:text-base">Still have questions? <a href="#contact-form" class="text-tuwanx-gold font-medium hover:underline">Contact our support team</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="section-padding bg-white">
        <div class="container mx-auto px-4 xs:px-6">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center mb-4">Find Us in <span class="text-gradient">Delaware</span></h2>
            <p class="text-base md:text-lg text-gray-600 text-center mb-8 md:mb-12 max-w-2xl mx-auto">Our headquarters are located in the heart of Wilmington, Delaware.</p>
            
            <div class="bg-gradient-to-br from-tuwanx-gold/5 to-tuwanx-gold/10 rounded-2xl md:rounded-3xl p-6 md:p-8 voluminous-shadow">
                <div class="h-64 sm:h-80 md:h-96 rounded-xl md:rounded-2xl overflow-hidden relative">
                    <!-- Map Placeholder - In a real implementation, you would embed a Google Map here -->
                    <div class="absolute inset-0 bg-gray-200 flex items-center justify-center">
                        <div class="text-center p-4">
                            <i class="fas fa-map-marked-alt text-tuwanx-gold text-3xl md:text-5xl mb-3 md:mb-4"></i>
                            <p class="text-gray-700 font-medium text-sm md:text-base">Interactive Map of Our Delaware Location</p>
                            <p class="text-gray-600 mt-1 md:mt-2 text-xs md:text-sm">123 Fashion Avenue, Wilmington, DE 19801</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-6 md:mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                    <div class="bg-white p-4 md:p-6 rounded-xl md:rounded-2xl card-shadow text-center">
                        <i class="fas fa-clock text-tuwanx-gold text-xl md:text-2xl mb-3 md:mb-4"></i>
                        <h3 class="font-semibold text-sm md:text-base mb-2">Business Hours</h3>
                        <p class="text-gray-600 text-xs md:text-sm">Mon - Fri: 9AM - 6PM EST</p>
                        <p class="text-gray-600 text-xs md:text-sm">Sat: 10AM - 4PM EST</p>
                    </div>
                    
                    <div class="bg-white p-4 md:p-6 rounded-xl md:rounded-2xl card-shadow text-center">
                        <i class="fas fa-users text-tuwanx-gold text-xl md:text-2xl mb-3 md:mb-4"></i>
                        <h3 class="font-semibold text-sm md:text-base mb-2">Support Team</h3>
                        <p class="text-gray-600 text-xs md:text-sm">Available via email, chat, and phone during business hours</p>
                    </div>
                    
                    <div class="bg-white p-4 md:p-6 rounded-xl md:rounded-2xl card-shadow text-center">
                        <i class="fas fa-shipping-fast text-tuwanx-gold text-xl md:text-2xl mb-3 md:mb-4"></i>
                        <h3 class="font-semibold text-sm md:text-base mb-2">Response Time</h3>
                        <p class="text-gray-600 text-xs md:text-sm">We typically respond to inquiries within 24 hours</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding gradient-bg relative overflow-hidden">
        <div class="absolute -bottom-20 -right-20 w-40 h-40 xs:w-60 xs:h-60 md:w-80 md:h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-4 xs:px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4 md:mb-6">Ready to Create Your <span class="text-gradient">Custom Fashion</span>?</h2>
                <p class="text-base md:text-lg lg:text-xl text-gray-600 mb-6 md:mb-10">Join thousands of customers who have discovered the perfect custom clothing experience with Tuwanx.</p>
                <div class="flex flex-col xs:flex-row justify-center space-y-3 xs:space-y-0 xs:space-x-4 btn-group-responsive">
                    <button class="btn-gold px-6 py-3 md:px-8 md:py-4 rounded-lg font-semibold text-base md:text-lg btn-responsive">Start Your Project</button>
                    <button class="btn-outline px-6 py-3 md:px-8 md:py-4 rounded-lg font-semibold text-base md:text-lg btn-responsive">Browse Designers</button>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    // Mobile menu functionality
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    
    hamburger.addEventListener('click', function() {
        this.classList.toggle('open');
        mobileMenu.classList.toggle('open');
        
        // Prevent body scroll when menu is open
        if (mobileMenu.classList.contains('open')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = 'auto';
        }
    });
    
    // Close mobile menu when clicking on a link
    const mobileMenuLinks = document.querySelectorAll('#mobileMenu a');
    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', function() {
            hamburger.classList.remove('open');
            mobileMenu.classList.remove('open');
            document.body.style.overflow = 'auto';
        });
    });
    
    // FAQ accordion functionality
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const button = item.querySelector('.faq-button');
        
        button.addEventListener('click', function() {
            // Close all other FAQ items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current FAQ item
            item.classList.toggle('active');
        });
    });
    
    // Form submission
    const contactForm = document.querySelector('.contact-form');
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Simple form validation
        const firstName = document.getElementById('first-name').value;
        const lastName = document.getElementById('last-name').value;
        const email = document.getElementById('email').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;
        
        if (!firstName || !lastName || !email || !subject || !message) {
            alert('Please fill in all required fields.');
            return;
        }
        
        // In a real implementation, you would send the form data to a server here
        alert('Thank you for your message! We will get back to you soon.');
        contactForm.reset();
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        const isClickInsideMenu = mobileMenu.contains(event.target);
        const isClickOnHamburger = hamburger.contains(event.target);
        
        if (!isClickInsideMenu && !isClickOnHamburger && mobileMenu.classList.contains('open')) {
            hamburger.classList.remove('open');
            mobileMenu.classList.remove('open');
            document.body.style.overflow = 'auto';
        }
    });
</script>
@endsection
