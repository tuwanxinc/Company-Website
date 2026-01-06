@extends('layouts.page')

@section('title', 'Terms and Conditions - Tuwanx')

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
    
    .terms-content h2 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-top: 2.5rem;
        margin-bottom: 1rem;
        color: #00171F;
    }
    
    .terms-content h3 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-top: 2rem;
        margin-bottom: 0.75rem;
        color: #00171F;
    }
    
    .terms-content p {
        margin-bottom: 1rem;
        line-height: 1.6;
        color: #4B5563;
    }
    
    .terms-content ul {
        margin-bottom: 1rem;
        padding-left: 1.5rem;
    }
    
    .terms-content li {
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
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero-padding gradient-bg relative overflow-hidden">
    <div class="absolute -top-20 -right-20 w-40 h-40 xs:w-60 xs:h-60 md:w-80 md:h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-20 -left-20 w-40 h-40 xs:w-60 xs:h-60 md:w-80 md:h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
    
    <div class="container mx-auto px-4 xs:px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-responsive md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6">Terms of <span class="text-gradient">Use</span></h1>
            <p class="text-base xs:text-lg md:text-xl text-gray-600 mb-6 md:mb-10">Please read these terms carefully before using the Tuwanx platform.</p>
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
                        <a href="#eligibility" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">1. Eligibility</a>
                        <a href="#accounts" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">2. Accounts and Registration</a>
                        <a href="#use" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">3. Use of the Platform</a>
                        <a href="#content" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">4. Content and Intellectual Property</a>
                        <a href="#buying-selling" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">5. Buying and Selling</a>
                        <a href="#payments" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">6. Payments and Fees</a>
                        <a href="#technology" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">7. Technology and Platform Access</a>
                        <a href="#community" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">8. Community Standards</a>
                        <a href="#privacy" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">9. Privacy</a>
                        <a href="#third-party" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">10. Third-Party Services</a>
                        <a href="#termination" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">11. Termination</a>
                        <a href="#disclaimers" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">12. Disclaimers</a>
                        <a href="#liability" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">13. Limitation of Liability</a>
                        <a href="#indemnification" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">14. Indemnification</a>
                        <a href="#dispute" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">15. Dispute Resolution</a>
                        <a href="#changes" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">16. Changes to Terms</a>
                        <a href="#contact" class="block py-2 px-3 toc-link text-sm text-gray-700 hover:text-tuwanx-gold">17. Contact Us</a>
                    </nav>
                </div>
            </div>
            
            <!-- Terms Content -->
            <div class="lg:w-3/4">
                <div class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 voluminous-shadow">
                    <!-- Introduction -->
                    <div class="mb-8 pb-6 border-b border-gray-200">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-4">
                            <h2 class="text-2xl font-bold text-tuwanx-black">Tuwanx Terms of Use</h2>
                            <div class="mt-2 md:mt-0">
                                <span class="inline-block bg-tuwanx-gold/10 text-tuwanx-gold text-sm font-medium px-3 py-1 rounded-full">
                                    Effective: October 15, 2025
                                </span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Welcome to Tuwanx ("Tuwanx," "we," "our," or "us"). Tuwanx is a global fashion and technology platform that allows users to create, discover, buy, sell, and share fashion items and digital content. By accessing or using Tuwanx's services, applications, website(s), and mobile app (collectively, the "Platform"), you agree to these Terms of Use ("Terms"). Please read them carefully.</p>
                        
                        <div class="highlight-box">
                            <p class="font-semibold text-tuwanx-black">If you do not agree to these Terms, you must not use the Platform.</p>
                        </div>
                    </div>
                    
                    <!-- Terms Content -->
                    <div class="terms-content">
                        <!-- Section 1 -->
                        <div id="eligibility" class="section-anchor mb-8">
                            <h2>1. Eligibility</h2>
                            <ul>
                                <li>You must be at least 18 years old (or the age of majority in your jurisdiction) to create an account.</li>
                                <li>If you are between 13 and 18, you may use Tuwanx only with parental/guardian supervision.</li>
                                <li>By using the Platform, you represent that you are legally able to enter into these Terms.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 2 -->
                        <div id="accounts" class="section-anchor mb-8">
                            <h2>2. Accounts and Registration</h2>
                            <ul>
                                <li>You must create a Tuwanx account to access certain features (such as buying, selling, or uploading designs).</li>
                                <li>You are responsible for maintaining the confidentiality of your login credentials.</li>
                                <li>You agree to provide accurate, current, and complete information during registration and to update it as needed.</li>
                                <li>We may suspend or terminate accounts that violate these Terms or contain misleading information.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 3 -->
                        <div id="use" class="section-anchor mb-8">
                            <h2>3. Use of the Platform</h2>
                            <ul>
                                <li>You agree to use Tuwanx lawfully, respectfully, and only for intended purposes.</li>
                                <li>Prohibited activities include:
                                    <ul class="mt-2 ml-4">
                                        <li>Uploading or selling counterfeit, stolen, or prohibited fashion items.</li>
                                        <li>Violating intellectual property rights of others (including copyrighted designs, brand logos, and trademarks).</li>
                                        <li>Posting harmful, hateful, defamatory, or misleading content.</li>
                                        <li>Circumventing fees, payment systems, or security protections.</li>
                                        <li>Scraping, reverse-engineering, or exploiting Tuwanx's technology.</li>
                                    </ul>
                                </li>
                                <li>We may monitor activity for compliance, but responsibility for your content and actions rests with you.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 4 -->
                        <div id="content" class="section-anchor mb-8">
                            <h2>4. Content and Intellectual Property</h2>
                            <ul>
                                <li>You retain ownership of the content, designs, and fashion items you upload to Tuwanx.</li>
                                <li>By posting, you grant Tuwanx a non-exclusive, worldwide, royalty-free, sublicensable license to host, display, use, reproduce, and distribute your content solely for operating, promoting, and improving the Platform.</li>
                                <li>You must not post content you don't have the rights to.</li>
                                <li>Tuwanx's trademarks, brand identity, logos, software, and services remain our exclusive property and may not be copied or misused.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 5 -->
                        <div id="buying-selling" class="section-anchor mb-8">
                            <h2>5. Buying and Selling on Tuwanx</h2>
                            <h3>Sellers:</h3>
                            <ul>
                                <li>Must comply with fashion industry standards, labeling laws, and applicable e-commerce regulations.</li>
                                <li>Must describe items accurately, set clear pricing, and honor shipping timelines.</li>
                                <li>Are solely responsible for ensuring their products are original, authentic, and safe.</li>
                            </ul>
                            
                            <h3>Buyers:</h3>
                            <ul>
                                <li>Agree to review item descriptions before purchasing.</li>
                                <li>Acknowledge that all purchases are binding, subject to seller policies, and governed by Tuwanx's payment system.</li>
                            </ul>
                            
                            <h3>Transactions:</h3>
                            <ul>
                                <li>Payments are processed securely through Tuwanx's authorized third-party providers.</li>
                                <li>Tuwanx may charge service fees for certain transactions.</li>
                                <li>Refunds and cancellations are subject to our Refund Policy.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 6 -->
                        <div id="payments" class="section-anchor mb-8">
                            <h2>6. Payments and Fees</h2>
                            <ul>
                                <li>Users agree to pay all fees and charges associated with their transactions.</li>
                                <li>Sellers authorize Tuwanx to deduct applicable commissions, transaction fees, and service charges.</li>
                                <li>Payments may be withheld temporarily if fraud, disputes, or compliance checks are suspected.</li>
                                <li>Currency conversions, bank fees, and applicable taxes are the responsibility of the user.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 7 -->
                        <div id="technology" class="section-anchor mb-8">
                            <h2>7. Technology and Platform Access</h2>
                            <ul>
                                <li>Tuwanx grants you a limited, non-transferable license to use our apps and services for personal or commercial fashion activities.</li>
                                <li>You may not:
                                    <ul class="mt-2 ml-4">
                                        <li>Modify or distribute our code, software, or APIs without permission.</li>
                                        <li>Use bots or automated tools to exploit the Platform.</li>
                                        <li>Interfere with or disrupt Tuwanx's systems.</li>
                                    </ul>
                                </li>
                                <li>We may update features, discontinue services, or restrict access at any time.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 8 -->
                        <div id="community" class="section-anchor mb-8">
                            <h2>8. Community Standards</h2>
                            <p>To keep Tuwanx safe, users agree to:</p>
                            <ul>
                                <li>Treat other community members respectfully.</li>
                                <li>Avoid offensive, discriminatory, or illegal conduct.</li>
                                <li>Refrain from infringing upon third-party intellectual property or fashion design rights.</li>
                                <li>Report violations promptly.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 9 -->
                        <div id="privacy" class="section-anchor mb-8">
                            <h2>9. Privacy</h2>
                            <p>Your use of Tuwanx is also governed by our Privacy Policy, which explains how we collect, use, and protect your information.</p>
                        </div>
                        
                        <!-- Section 10 -->
                        <div id="third-party" class="section-anchor mb-8">
                            <h2>10. Third-Party Services</h2>
                            <ul>
                                <li>Tuwanx may integrate with payment providers, shipping carriers, or third-party apps.</li>
                                <li>We are not responsible for their terms, practices, or performance.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 11 -->
                        <div id="termination" class="section-anchor mb-8">
                            <h2>11. Termination</h2>
                            <p>We may suspend or terminate accounts:</p>
                            <ul>
                                <li>For violations of these Terms, fraud, abuse, or illegal activity.</li>
                                <li>Upon request by law enforcement or regulators.</li>
                                <li>At your request (by deactivating your account).</li>
                            </ul>
                        </div>
                        
                        <!-- Section 12 -->
                        <div id="disclaimers" class="section-anchor mb-8">
                            <h2>12. Disclaimers</h2>
                            <ul>
                                <li>Tuwanx provides its services "as is" and "as available."</li>
                                <li>We make no guarantees about:
                                    <ul class="mt-2 ml-4">
                                        <li>Availability or uninterrupted access.</li>
                                        <li>Accuracy of user content or product listings.</li>
                                        <li>The outcome of buyer-seller interactions.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Section 13 -->
                        <div id="liability" class="section-anchor mb-8">
                            <h2>13. Limitation of Liability</h2>
                            <p>To the maximum extent permitted by law:</p>
                            <ul>
                                <li>Tuwanx shall not be liable for indirect, incidental, special, consequential, or punitive damages.</li>
                                <li>Our total liability for claims related to your use of the Platform will not exceed the greater of (i) $100 USD or (ii) the fees you paid to Tuwanx in the past 6 months.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 14 -->
                        <div id="indemnification" class="section-anchor mb-8">
                            <h2>14. Indemnification</h2>
                            <p>You agree to indemnify and hold harmless Tuwanx, its affiliates, employees, and partners from any claims, losses, damages, or expenses arising out of your:</p>
                            <ul>
                                <li>Content or products you list,</li>
                                <li>Use of the Platform,</li>
                                <li>Violation of these Terms, or</li>
                                <li>Infringement of rights.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 15 -->
                        <div id="dispute" class="section-anchor mb-8">
                            <h2>15. Dispute Resolution</h2>
                            <ul>
                                <li><strong>Governing Law:</strong> These Terms are governed by the laws of Delaware, United States unless otherwise required by local law.</li>
                                <li><strong>Arbitration:</strong> Disputes will be resolved by binding arbitration, unless prohibited by law.</li>
                                <li><strong>Class Action Waiver:</strong> You waive the right to participate in class action lawsuits against Tuwanx.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 16 -->
                        <div id="changes" class="section-anchor mb-8">
                            <h2>16. Changes to Terms</h2>
                            <p>We may update these Terms from time to time.</p>
                            <ul>
                                <li>Changes will be effective upon posting on the Platform.</li>
                                <li>Continued use after changes constitutes acceptance.</li>
                            </ul>
                        </div>
                        
                        <!-- Section 17 -->
                        <div id="contact" class="section-anchor">
                            <h2>17. Contact Us</h2>
                            <p>If you have questions about these Terms, contact us at:</p>
                            <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                                <p class="font-medium">Email: <a href="mailto:legal@tuwanx.com" class="text-tuwanx-gold hover:underline">legal@tuwanx.com</a></p>
                                <p class="font-medium mt-2">Address: Delaware, USA</p>
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
