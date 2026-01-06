@extends('layouts.page')

@section('title', 'Privacy Policy - Tuwanx')

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
    
    .gradient-bg {
        background: linear-gradient(135deg, rgba(212, 175, 55, 0.08) 0%, rgba(255, 255, 255, 0) 50%, rgba(212, 175, 55, 0.04) 100%);
    }
    
    .text-gradient {
        background: linear-gradient(135deg, #D4AF37, #b8941f);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
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
    
    .nav-link {
        position: relative;
    }
    
    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -5px;
        left: 0;
        background-color: #D4AF37;
        transition: width 0.3s ease;
    }
    
    .nav-link:hover::after {
        width: 100%;
    }
    
    .active-nav::after {
        width: 100%;
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
    
    .toc-link {
        transition: all 0.2s ease;
        border-left: 3px solid transparent;
    }
    
    .toc-link:hover, .toc-link.active {
        border-left-color: #D4AF37;
        background-color: rgba(212, 175, 55, 0.05);
    }
    
    .section-anchor {
        scroll-margin-top: 120px;
    }
    
    .policy-content h2 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-top: 2.5rem;
        margin-bottom: 1rem;
        color: #00171F;
    }
    
    .policy-content h3 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-top: 2rem;
        margin-bottom: 0.75rem;
        color: #00171F;
    }
    
    .policy-content p {
        margin-bottom: 1rem;
        line-height: 1.6;
        color: #4B5563;
    }
    
    .policy-content ul {
        margin-bottom: 1rem;
        padding-left: 1.5rem;
    }
    
    .policy-content li {
        margin-bottom: 0.5rem;
        line-height: 1.6;
        color: #4B5563;
    }
    
    .highlight-box {
        background-color: rgba(212, 175, 55, 0.05);
        border-left: 4px solid #D4AF37;
        padding: 1.5rem;
        margin: 1.5rem 0;
        border-radius: 0 8px 8px 0;
    }
    
    .info-category {
        background-color: rgba(212, 175, 55, 0.05);
        border-radius: 8px;
        padding: 1.5rem;
        margin: 1.5rem 0;
    }
    
    .info-category h4 {
        font-weight: 600;
        color: #00171F;
        margin-bottom: 0.75rem;
        font-size: 1.1rem;
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero-padding gradient-bg relative overflow-hidden">
    <div class="absolute -top-20 -right-20 w-40 h-40 xs:w-60 xs:h-60 md:w-80 md:h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-20 -left-20 w-40 h-40 xs:w-60 xs:h-60 md:w-80 md:h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
    
    <div class="container mx-auto px-4 xs:px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-responsive md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6">Privacy <span class="text-gradient">Policy</span></h1>
            <p class="text-base xs:text-lg md:text-xl text-gray-600 mb-6 md:mb-10">Learn how we collect, use, and protect your personal information.</p>
            <div class="flex flex-col xs:flex-row justify-center space-y-3 xs:space-y-0 xs:space-x-4 btn-group-responsive">
                <a href="#toc" class="btn-gold px-5 py-3 rounded-lg font-semibold text-base btn-responsive">Table of Contents</a>
                <a href="#contact" class="btn-outline px-5 py-3 rounded-lg font-semibold text-base btn-responsive">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4 xs:px-6">
        <div class="flex flex-col lg:flex-row gap-8 md:gap-12">
            <!-- Table of Contents -->
            <div class="lg:w-1/4 mb-8 lg:mb-0">
                <div class="sticky top-32 bg-white rounded-2xl p-6 voluminous-shadow" id="toc">
                    <h2 class="text-xl font-bold mb-4 text-tuwanx-black">Table of Contents</h2>
                    <nav class="space-y-2">
                        <a href="#introduction" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">Introduction</a>
                        <a href="#information-collected" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">1. Information We Collect</a>
                        <a href="#information-use" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">2. How We Use Your Information</a>
                        <a href="#information-sharing" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">3. How We Share Your Information</a>
                        <a href="#cookies" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">4. Cookies and Tracking</a>
                        <a href="#your-rights" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">5. Your Choices and Rights</a>
                        <a href="#data-security" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">6. Data Security</a>
                        <a href="#data-retention" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">7. Data Retention</a>
                        <a href="#children-privacy" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">8. Children's Privacy</a>
                        <a href="#international-transfers" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">9. International Data Transfers</a>
                        <a href="#advertising" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">10. Advertising and Marketing</a>
                        <a href="#third-party-links" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">11. Third-Party Links</a>
                        <a href="#policy-changes" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">12. Changes to this Policy</a>
                        <a href="#contact" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">13. Contact Us</a>
                    </nav>
                </div>
            </div>
            
            <!-- Policy Content -->
            <div class="lg:w-3/4">
                <div class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 voluminous-shadow">
                    <!-- Introduction -->
                    <div class="mb-8 pb-6 border-b border-gray-200">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-4">
                            <h2 class="text-2xl font-bold text-tuwanx-black">Tuwanx Privacy Policy</h2>
                            <div class="mt-2 md:mt-0">
                                <span class="inline-block bg-tuwanx-gold/10 text-tuwanx-gold text-sm font-medium px-3 py-1 rounded-full">
                                    Effective: October 15, 2025
                                </span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Tuwanx ("we," "our," or "us") values your privacy. This Privacy Policy explains how we collect, use, share, and protect your information when you use our website, mobile app, and related services (collectively, the "Platform").</p>
                        
                        <div class="highlight-box">
                            <p class="font-semibold text-tuwanx-black">By using Tuwanx, you agree to the practices described in this Privacy Policy. If you do not agree, please do not use our Platform.</p>
                        </div>
                    </div>
                    
                    <!-- Policy Content -->
                    <div class="policy-content">
                        <!-- Section 1 -->
                        <div id="information-collected" class="section-anchor mb-8">
                            <h2>1. Information We Collect</h2>
                            <p class="mb-4">We collect information to provide, improve, and secure our services:</p>
                            
                            <div class="info-category">
                                <h4>a. Information You Provide</h4>
                                <ul>
                                    <li>Account details: Name, email address, phone number, password, username, fashion store name, etc.</li>
                                    <li>Profile information: Bio, profile picture, style preferences, fashion interests.</li>
                                    <li>Transactions: Payment information, shipping details, billing addresses.</li>
                                    <li>Uploaded content: Designs, fashion products, posts, messages, reviews, and feedback.</li>
                                    <li>Identity verification (if required): Government ID, tax identification, or other compliance-related data.</li>
                                </ul>
                            </div>
                            
                            <div class="info-category">
                                <h4>b. Automatically Collected Information</h4>
                                <ul>
                                    <li>Device data: IP address, device type, operating system, browser type.</li>
                                    <li>Usage data: Pages visited, features used, time spent, clicks, and search activity.</li>
                                    <li>Cookies & similar technologies: To improve your browsing experience, personalize content, and measure ad performance.</li>
                                </ul>
                            </div>
                            
                            <div class="info-category">
                                <h4>c. Third-Party Information</h4>
                                <ul>
                                    <li>Information from payment providers, shipping partners, or social media logins (if you connect your account).</li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Section 2 -->
                        <div id="information-use" class="section-anchor mb-8">
                            <h2>2. How We Use Your Information</h2>
                            <p class="mb-4">We use your information to:</p>
                            <ul>
                                <li>Provide, operate, and improve the Tuwanx Platform.</li>
                                <li>Facilitate purchases, sales, and payments.</li>
                                <li>Personalize your fashion recommendations and feed.</li>
                                <li>Communicate with you (updates, promotions, support).</li>
                                <li>Ensure compliance with laws and prevent fraud, counterfeits, or abuse.</li>
                                <li>Conduct analytics and research to enhance user experience.</li>
                                <li>Show you relevant ads and sponsored content.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 3 -->
                        <div id="information-sharing" class="section-anchor mb-8">
                            <h2>3. How We Share Your Information</h2>
                            <p class="mb-4">We do not sell your personal information. However, we may share it in the following cases:</p>
                            <ul>
                                <li><strong>With other users:</strong> Your profile, store name, and uploaded designs may be visible to buyers/sellers.</li>
                                <li><strong>With service providers:</strong> Payment processors, shipping carriers, cloud storage providers, analytics and advertising partners.</li>
                                <li><strong>With legal authorities:</strong> If required by law, regulation, or to protect safety and rights.</li>
                                <li><strong>With business partners:</strong> In case of a merger, acquisition, or restructuring of Tuwanx.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 4 -->
                        <div id="cookies" class="section-anchor mb-8">
                            <h2>4. Cookies and Tracking Technologies</h2>
                            <p class="mb-4">We use cookies, pixels, and similar tools to:</p>
                            <ul>
                                <li>Keep you logged in.</li>
                                <li>Remember preferences.</li>
                                <li>Deliver personalized content.</li>
                                <li>Measure engagement and advertising effectiveness.</li>
                            </ul>
                            <p class="mt-4">You can manage cookie preferences in your browser or device settings.</p>
                        </div>
                        
                        <!-- Section 5 -->
                        <div id="your-rights" class="section-anchor mb-8">
                            <h2>5. Your Choices and Rights</h2>
                            <p class="mb-4">Depending on your location (e.g., EU/EEA, UK, California, Nigeria), you may have the right to:</p>
                            <ul>
                                <li>Access the personal information we hold about you.</li>
                                <li>Correct or update inaccurate information.</li>
                                <li>Delete your information (subject to legal and transactional requirements).</li>
                                <li>Restrict or object to how we process your data.</li>
                                <li>Export your data in a portable format.</li>
                                <li>Opt out of marketing emails or targeted advertising.</li>
                            </ul>
                            <p class="mt-4">Requests can be made via <a href="mailto:privacy@tuwanx.com" class="text-tuwanx-gold hover:underline">privacy@tuwanx.com</a>.</p>
                        </div>
                        
                        <!-- Section 6 -->
                        <div id="data-security" class="section-anchor mb-8">
                            <h2>6. Data Security</h2>
                            <ul>
                                <li>We use encryption, firewalls, and security monitoring to protect your data.</li>
                                <li>However, no system is 100% secure. You use Tuwanx at your own risk.</li>
                                <li>We encourage you to use strong passwords and keep login details confidential.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 7 -->
                        <div id="data-retention" class="section-anchor mb-8">
                            <h2>7. Data Retention</h2>
                            <ul>
                                <li>We retain your personal data as long as your account is active, or as needed for transactions, legal, and tax purposes.</li>
                                <li>Deleted accounts are purged within 90 days, except where legal obligations require retention.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 8 -->
                        <div id="children-privacy" class="section-anchor mb-8">
                            <h2>8. Children's Privacy</h2>
                            <ul>
                                <li>Tuwanx is not directed at children under 13 (or under the age of digital consent in your region).</li>
                                <li>We do not knowingly collect personal data from minors.</li>
                                <li>If we learn we have collected such data, we will delete it.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 9 -->
                        <div id="international-transfers" class="section-anchor mb-8">
                            <h2>9. International Data Transfers</h2>
                            <ul>
                                <li>Tuwanx operates globally.</li>
                                <li>Your information may be transferred to and processed in countries outside your home jurisdiction.</li>
                                <li>Where required, we implement safeguards (such as Standard Contractual Clauses) to protect international transfers.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 10 -->
                        <div id="advertising" class="section-anchor mb-8">
                            <h2>10. Advertising and Marketing</h2>
                            <ul>
                                <li>We may show you personalized ads based on your fashion interests and activity on Tuwanx.</li>
                                <li>You can opt out of marketing communications anytime by following the unsubscribe link in emails or adjusting your account settings.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 11 -->
                        <div id="third-party-links" class="section-anchor mb-8">
                            <h2>11. Third-Party Links</h2>
                            <ul>
                                <li>Tuwanx may link to third-party websites, apps, or fashion marketplaces.</li>
                                <li>We are not responsible for their privacy practices. Please review their policies separately.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 12 -->
                        <div id="policy-changes" class="section-anchor mb-8">
                            <h2>12. Changes to this Privacy Policy</h2>
                            <p>We may update this Privacy Policy periodically.</p>
                            <ul>
                                <li>If changes are significant, we will notify you (via email, app notification, or banner).</li>
                                <li>Continued use after updates means you accept the revised policy.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 13 -->
                        <div id="contact" class="section-anchor">
                            <h2>13. Contact Us</h2>
                            <p>If you have questions, requests, or complaints about this Privacy Policy, contact us at:</p>
                            <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                                <p class="font-medium">Email: <a href="mailto:privacy@tuwanx.com" class="text-tuwanx-gold hover:underline">privacy@tuwanx.com</a></p>
                                <p class="font-medium mt-2">Address: Delaware, United States</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Table of Contents highlighting
    const sections = document.querySelectorAll('.section-anchor');
    const tocLinks = document.querySelectorAll('.toc-link');
    
    // Highlight active section in TOC
    function highlightActiveSection() {
        let currentSection = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 150;
            const sectionHeight = section.clientHeight;
            
            if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                currentSection = section.getAttribute('id');
            }
        });
        
        tocLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${currentSection}`) {
                link.classList.add('active');
            }
        });
    }
    
    // Initial call
    highlightActiveSection();
    
    // Update on scroll
    window.addEventListener('scroll', highlightActiveSection);
    
    // Smooth scrolling for TOC links
    tocLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                window.scrollTo({
                    top: targetSection.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>
@endsection
