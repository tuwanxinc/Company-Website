@extends('layouts.app')

@section('title', 'Tuwanx - Custom Fashion Marketplace')

@section('progress-bar')
    <!-- Progress Bar -->
    <div class="progress-bar">
        <div class="progress" id="progress"></div>
    </div>
@endsection

@section('navigation')
    <div class="hidden md:flex space-x-8">
        <a href="#home" class="nav-link active-nav">Home</a>
        <a href="#how-it-works" class="nav-link">How It Works</a>
        <a href="#designers" class="nav-link">Designers</a>
        <a href="#features" class="nav-link">Features</a>
        <a href="#testimonials" class="nav-link">Testimonials</a>
        <a href="#download" class="nav-link">Download</a>
    </div>
    <div class="hidden md:flex items-center space-x-4">
        <a href="https://app.tuwanx.com/login" class="btn-outline px-4 py-2 rounded-full font-medium">Log In</a>
        <a href="https://app.tuwanx.com/register" class="btn-gold px-4 py-2 rounded-full font-medium">Sign Up</a>
    </div>
@endsection

@section('mobile-menu')
    <div class="container mx-auto px-6 py-8 mt-16">
        <div class="flex flex-col space-y-8">
            <a href="#home" class="text-2xl font-semibold py-2 border-b border-gray-100">Home</a>
            <a href="#how-it-works" class="text-2xl font-semibold py-2 border-b border-gray-100">How It Works</a>
            <a href="#designers" class="text-2xl font-semibold py-2 border-b border-gray-100">Designers</a>
            <a href="#features" class="text-2xl font-semibold py-2 border-b border-gray-100">Features</a>
            <a href="#testimonials" class="text-2xl font-semibold py-2 border-b border-gray-100">Testimonials</a>
            <a href="#download" class="text-2xl font-semibold py-2 border-b border-gray-100">Download</a>
            <div class="flex flex-col space-y-4 pt-4">
                <a href="https://app.tuwanx.com/login" class="btn-outline px-4 py-3 rounded-full font-medium text-lg text-center">Log In</a>
                <a href="https://app.tuwanx.com/register" class="btn-gold px-4 py-3 rounded-full font-medium text-lg text-center">Sign Up</a>
            </div>
        </div>
    </div>
@endsection

@section('section-indicator')
    <!-- Section Indicator -->
    <div class="section-indicator hidden md:block">
        <div class="indicator-dot active" data-section="home"></div>
        <div class="indicator-dot" data-section="how-it-works"></div>
        <div class="indicator-dot" data-section="designers"></div>
        <div class="indicator-dot" data-section="features"></div>
        <div class="indicator-dot" data-section="testimonials"></div>
        <div class="indicator-dot" data-section="download"></div>
    </div>
@endsection

@section('content')
    <!-- Sections -->
    <!-- Section 1: Hero -->
    <section id="home" class="section flex items-center gradient-bg relative overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-tuwanx-gold/10 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center relative z-10">
            <div class="md:w-1/2 mb-10 md:mb-0 fade-in">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Custom Fashion, <span class="text-gradient">Made for You</span></h1>
                <p class="text-lg text-gray-600 mb-8">Connect with talented fashion designers to create unique, personalized clothing for your special moments.</p>
                <div class="flex space-x-4">
                    <button class="btn-gold px-6 py-3 rounded-lg font-semibold text-lg">Find Designers</button>
                    <button class="btn-outline px-6 py-3 rounded-lg font-semibold text-lg">Learn More</button>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center fade-in floating-element">
                <div class="relative">
                    <div class="w-80 h-80 bg-tuwanx-gold/20 rounded-full absolute -top-10 -left-10 z-0"></div>
                    <div class="w-80 h-80 bg-tuwanx-gold/10 rounded-full absolute -bottom-10 -right-10 z-0"></div>
                    <img src="{{ asset('assets/wireframe-4.png') }}" alt="Custom Fashion" class="relative z-10 rounded-3xl voluminous-shadow w-full max-w-md">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 2: How It Works -->
    <section id="how-it-works" class="section bg-white relative overflow-hidden">
        <div class="absolute top-20 -left-20 w-60 h-60 bg-tuwanx-gold/5 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 fade-in">How <span class="text-gradient">Tuwanx</span> Works</h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 fade-in">
                    <img src="{{ asset('assets/wireframe-2.png') }}" alt="How It Works" class="rounded-3xl voluminous-shadow w-full">
                </div>
                <div class="md:w-1/2 md:pl-12 fade-in">
                    <div class="mb-10 p-6 bg-white rounded-2xl card-shadow">
                        <div class="flex items-center mb-4">
                            <div class="bg-gradient-to-br from-tuwanx-gold to-tuwanx-gold/80 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold mr-4 gold-glow">1</div>
                            <h3 class="text-xl font-semibold">Discover Designers</h3>
                        </div>
                        <p class="text-gray-600">Browse through our curated list of talented fashion designers, view their portfolios, and find the perfect match for your style.</p>
                    </div>
                    <div class="mb-10 p-6 bg-white rounded-2xl card-shadow">
                        <div class="flex items-center mb-4">
                            <div class="bg-gradient-to-br from-tuwanx-gold to-tuwanx-gold/80 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold mr-4 gold-glow">2</div>
                            <h3 class="text-xl font-semibold">Chat & Customize</h3>
                        </div>
                        <p class="text-gray-600">Communicate directly with designers to discuss your vision, share inspiration, and finalize design details.</p>
                    </div>
                    <div class="mb-10 p-6 bg-white rounded-2xl card-shadow">
                        <div class="flex items-center mb-4">
                            <div class="bg-gradient-to-br from-tuwanx-gold to-tuwanx-gold/80 text-white rounded-full w-12 h-12 flex items-center justify-center font-bold mr-4 gold-glow">3</div>
                            <h3 class="text-xl font-semibold">Receive Your Outfit</h3>
                        </div>
                        <p class="text-gray-600">Track the progress of your custom piece and receive your perfectly tailored outfit via delivery or pickup.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 3: Designers -->
    <section id="designers" class="section gradient-bg relative overflow-hidden">
        <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-tuwanx-gold/5 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 fade-in">Meet Our <span class="text-gradient">Talented Designers</span></h2>
            <p class="text-lg text-gray-600 text-center mb-16 max-w-2xl mx-auto fade-in">From established fashion houses to emerging talents, our platform connects you with diverse creative professionals.</p>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 fade-in">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-white p-6 rounded-2xl card-shadow">
                            <div class="feature-icon mx-auto">
                                <i class="fas fa-palette text-tuwanx-gold text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-center mb-2">Creative Vision</h3>
                            <p class="text-gray-600 text-center">Designers with unique artistic perspectives</p>
                        </div>
                        <div class="bg-white p-6 rounded-2xl card-shadow">
                            <div class="feature-icon mx-auto">
                                <i class="fas fa-award text-tuwanx-gold text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-center mb-2">Top notch Artisans</h3>
                            <p class="text-gray-600 text-center">Attention to detail and premium materials</p>
                        </div>
                        <div class="bg-white p-6 rounded-2xl card-shadow">
                            <div class="feature-icon mx-auto">
                                <i class="fas fa-comments text-tuwanx-gold text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-center mb-2">Direct Chatting</h3>
                            <p class="text-gray-600 text-center">Collaborate directly with your designer</p>
                        </div>
                        <div class="bg-white p-6 rounded-2xl card-shadow">
                            <div class="feature-icon mx-auto">
                                <i class="fas fa-clock text-tuwanx-gold text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-center mb-2">On-Time Delivery</h3>
                            <p class="text-gray-600 text-center">Reliable timelines for your special events</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 md:pl-12 fade-in floating-element">
                    <img src="{{ asset('assets/fashion-designers.png') }}" alt="Fashion Designers" class="rounded-3xl voluminous-shadow w-full">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 4: Features -->
    <section id="features" class="section bg-white relative overflow-hidden">
        <div class="absolute top-40 -right-40 w-80 h-80 bg-tuwanx-gold/5 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 fade-in">Powerful <span class="text-gradient">Features</span></h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 fade-in floating-element">
                    <img src="{{ asset('assets/app-features.png') }}" alt="App Features" class="rounded-3xl voluminous-shadow w-full">
                </div>
                <div class="md:w-1/2 md:pl-12 fade-in">
                    <div class="mb-8 p-6 bg-white rounded-2xl card-shadow">
                        <h3 class="text-2xl font-semibold mb-4 flex items-center">
                            <i class="fas fa-comment-dots text-tuwanx-gold mr-3"></i>
                            Seamless Communication
                        </h3>
                        <p class="text-gray-600">Our integrated chat system allows you to communicate directly with designers, share images, and discuss details in real-time.</p>
                    </div>
                    <div class="mb-8 p-6 bg-white rounded-2xl card-shadow">
                        <h3 class="text-2xl font-semibold mb-4 flex items-center">
                            <i class="fas fa-chart-line text-tuwanx-gold mr-3"></i>
                            Progress Tracking
                        </h3>
                        <p class="text-gray-600">Stay updated on your custom piece with our progress tracking feature, from initial sketches to final fittings.</p>
                    </div>
                    <div class="mb-8 p-6 bg-white rounded-2xl card-shadow">
                        <h3 class="text-2xl font-semibold mb-4 flex items-center">
                            <i class="fas fa-shield-alt text-tuwanx-gold mr-3"></i>
                            Secure Payments
                        </h3>
                        <p class="text-gray-600">Our secure payment system ensures your transactions are protected, with funds released only when you're satisfied.</p>
                    </div>
                    <div class="p-6 bg-white rounded-2xl card-shadow">
                        <h3 class="text-2xl font-semibold mb-4 flex items-center">
                            <i class="fas fa-shipping-fast text-tuwanx-gold mr-3"></i>
                            Delivery Options
                        </h3>
                        <p class="text-gray-600">Choose between home delivery or local pickup based on your convenience and location.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 5: Testimonials -->
    <section id="testimonials" class="section gradient-bg relative overflow-hidden">
        <div class="absolute -top-20 -left-20 w-80 h-80 bg-tuwanx-gold/5 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 fade-in">What Our <span class="text-gradient">Customers Say</span></h2>
            <p class="text-lg text-gray-600 text-center mb-16 max-w-2xl mx-auto fade-in">Hear from customers who found their perfect custom outfits through Tuwanx.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-3xl card-shadow fade-in">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-tuwanx-gold to-tuwanx-gold/80 rounded-full flex items-center justify-center text-white font-bold mr-4 gold-glow">S</div>
                        <div>
                            <h4 class="font-semibold">Sarah Johnson</h4>
                            <p class="text-gray-500 text-sm">Wedding Dress</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"My wedding dress was everything I dreamed of and more! The designer understood my vision perfectly and created a masterpiece."</p>
                    <div class="flex text-tuwanx-gold mt-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-3xl card-shadow fade-in">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-tuwanx-gold to-tuwanx-gold/80 rounded-full flex items-center justify-center text-white font-bold mr-4 gold-glow">M</div>
                        <div>
                            <h4 class="font-semibold">Michael Torres</h4>
                            <p class="text-gray-500 text-sm">Custom Suit</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"The attention to detail on my custom suit was incredible. I received so many compliments at my brother's wedding!"</p>
                    <div class="flex text-tuwanx-gold mt-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-3xl card-shadow fade-in">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-tuwanx-gold to-tuwanx-gold/80 rounded-full flex items-center justify-center text-white font-bold mr-4 gold-glow">J</div>
                        <div>
                            <h4 class="font-semibold">Jessica Lee</h4>
                            <p class="text-gray-500 text-sm">Evening Gown</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"I was hesitant about ordering custom clothing online, but Tuwanx made the process so easy and the result was stunning!"</p>
                    <div class="flex text-tuwanx-gold mt-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 6: Download -->
    <section id="download" class="section bg-white relative overflow-hidden">
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-tuwanx-gold/5 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-6">
            <div class="bg-gradient-to-r from-tuwanx-gold/10 to-tuwanx-gold/5 rounded-3xl p-8 md:p-12 max-w-4xl mx-auto voluminous-shadow fade-in">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-8 md:mb-0">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4">Get the <span class="text-gradient">Tuwanx App</span></h2>
                        <p class="text-lg text-gray-600 mb-6">Download our app to discover designers, create custom requests, and track your orders on the go.</p>
                        <div class="flex space-x-4">
                            <button class="bg-black text-white px-6 py-3 rounded-xl font-medium flex items-center voluminous-shadow hover:transform hover:-translate-y-1 transition-transform">
                                <i class="fab fa-apple text-2xl mr-2"></i>
                                <div class="text-left">
                                    <div class="text-xs">Download on the</div>
                                    <div class="text-lg">App Store</div>
                                </div>
                            </button>
                            <button class="bg-black text-white px-6 py-3 rounded-xl font-medium flex items-center voluminous-shadow hover:transform hover:-translate-y-1 transition-transform">
                                <i class="fab fa-google-play text-xl mr-2"></i>
                                <div class="text-left">
                                    <div class="text-xs">Get it on</div>
                                    <div class="text-lg">Google Play</div>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="md:w-1/2 flex justify-center floating-element">
                        <img src="{{ asset('assets/app-screen.png') }}" alt="Mobile App" class="w-64 rounded-3xl voluminous-shadow">
                    </div>
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
        });
        
        // Close mobile menu when clicking on a link
        const mobileMenuLinks = document.querySelectorAll('#mobileMenu a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', function() {
                hamburger.classList.remove('open');
                mobileMenu.classList.remove('open');
            });
        });
        
        // Scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const fadeInObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });
            
            fadeElements.forEach(element => {
                fadeInObserver.observe(element);
            });
            
            // Progress bar
            const progressBar = document.getElementById('progress');
            
            window.addEventListener('scroll', function() {
                const windowHeight = window.innerHeight;
                const documentHeight = document.documentElement.scrollHeight - windowHeight;
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                const scrollPercent = (scrollTop / documentHeight) * 100;
                
                progressBar.style.width = scrollPercent + '%';
                
                // Update section indicator
                const sections = document.querySelectorAll('section');
                const indicatorDots = document.querySelectorAll('.indicator-dot');
                
                let currentSection = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 100;
                    const sectionHeight = section.clientHeight;
                    
                    if (scrollTop >= sectionTop && scrollTop < sectionTop + sectionHeight) {
                        currentSection = section.getAttribute('id');
                    }
                });
                
                indicatorDots.forEach(dot => {
                    dot.classList.remove('active');
                    if (dot.getAttribute('data-section') === currentSection) {
                        dot.classList.add('active');
                    }
                });
                
                // Update navigation
                const navLinks = document.querySelectorAll('.nav-link');
                navLinks.forEach(link => {
                    link.classList.remove('active-nav');
                    if (link.getAttribute('href') === `#${currentSection}`) {
                        link.classList.add('active-nav');
                    }
                });
            });
            
            // Section indicator click
            const indicatorDots = document.querySelectorAll('.indicator-dot');
            indicatorDots.forEach(dot => {
                dot.addEventListener('click', function() {
                    const sectionId = this.getAttribute('data-section');
                    const section = document.getElementById(sectionId);
                    
                    if (section) {
                        window.scrollTo({
                            top: section.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Navigation click
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const sectionId = this.getAttribute('href').substring(1);
                    const section = document.getElementById(sectionId);
                    
                    if (section) {
                        window.scrollTo({
                            top: section.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
@endsection
