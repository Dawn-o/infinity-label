<section id="home" 
    class="relative overflow-hidden min-h-screen flex items-center py-28 md:py-24 lg:py-0 lg:pt-36"
    x-data="heroComponent()">
    <!-- Dynamic background with animated elements -->
    <div class="absolute inset-0 -z-10">
        <!-- Custom animated background -->
        <div class="absolute inset-0 bg-dark/5"></div>

        <!-- Responsive geometric shapes -->
        <div class="absolute top-0 left-0 w-full h-full">
            <div
                class="absolute top-[10%] sm:top-[20%] left-[2%] sm:left-[5%] w-32 h-32 sm:w-40 sm:h-40 lg:w-64 lg:h-64 bg-primary/10 rounded-3xl rotate-12 blur-xl">
            </div>
            <div
                class="absolute bottom-[10%] sm:bottom-[15%] right-[5%] sm:right-[10%] w-20 h-20 sm:w-28 sm:h-28 lg:w-48 lg:h-48 bg-secondary/15 rounded-full blur-lg">
            </div>
            <div
                class="absolute top-[40%] sm:top-[50%] right-[15%] sm:right-[25%] w-16 h-16 sm:w-24 sm:h-24 bg-accent/10 rotate-45 blur-md">
            </div>
        </div>

        <!-- Abstract vector lines -->
        <svg class="absolute inset-0 w-full h-full opacity-20" viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path d="M0,1000 C300,800 400,600 800,600 L1000,600 L1000,1000 Z" fill="url(#gradient1)" />
            <path d="M1000,0 C700,200 600,400 200,400 L0,400 L0,0 Z" fill="url(#gradient2)" />
            <defs>
                <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="var(--color-primary)" stop-opacity="0.1" />
                    <stop offset="100%" stop-color="var(--color-secondary)" stop-opacity="0.05" />
                </linearGradient>
                <linearGradient id="gradient2" x1="100%" y1="100%" x2="0%" y2="0%">
                    <stop offset="0%" stop-color="var(--color-secondary)" stop-opacity="0.1" />
                    <stop offset="100%" stop-color="var(--color-accent)" stop-opacity="0.05" />
                </linearGradient>
            </defs>
        </svg>

        <!-- Animated particles -->
        <div id="particles-js" class="absolute inset-0" x-ref="particles"></div>
    </div>

    <!-- Asymmetric content layout - responsive container -->
    <div class="container mx-auto px-4 sm:px-6 relative z-10">
        <!-- Responsive grid layout - Fixed grid structure -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-y-8 md:gap-y-12 lg:gap-x-8 items-center">
            <!-- Left content area - improved responsive spacing -->
            <div class="lg:col-span-5 lg:col-start-2 relative z-10 order-1 mt-8 sm:mt-10 lg:mt-0">
                <!-- Badge with responsive sizing -->
                <div class="overflow-hidden">
                    <div class="animate-slideUp">
                        <div class="inline-flex items-center mb-3 sm:mb-4 bg-dark/5 rounded-full pl-1 pr-4 py-1">
                            <span
                                class="flex h-5 sm:h-6 w-5 sm:w-6 items-center justify-center bg-primary rounded-full mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 sm:h-3.5 w-3 sm:w-3.5 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <span class="text-xs font-semibold tracking-wide uppercase">Premium OEM
                                Partner</span>
                        </div>
                    </div>
                </div>

                <!-- Responsive heading with better scale and text-wrapping fix -->
                <div class="overflow-hidden mb-3 sm:mb-4">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold leading-tight sm:leading-none animate-slideUp"
                        style="animation-delay:0.15s">
                        <span class="block pb-1">Redefining</span>
                        <div class="relative inline-block w-full">
                            <span
                                class="relative z-10 bg-clip-text text-transparent bg-gradient-to-br from-primary via-secondary to-accent whitespace-normal tracking-tight sm:tracking-normal word-spacing-tight">Manufacturing</span>
                            <span class="absolute -inset-1 bg-dark/5 -z-10 transform -skew-y-3 rounded-md"></span>
                        </div>
                        <span class="block pt-1">Excellence</span>
                    </h1>
                </div>

                <!-- Responsive description text -->
                <div class="overflow-hidden mb-6 sm:mb-8">
                    <p class="text-base sm:text-lg md:text-xl text-dark/70 animate-slideUp leading-relaxed"
                        style="animation-delay:0.3s">
                        Breaking industry norms with cutting-edge technology and innovation to deliver unmatched quality
                        for global brands.
                    </p>
                </div>

                <!-- Responsive buttons with mobile-friendly design -->
                <div class="grid grid-cols-12 gap-2 sm:gap-3 mb-6 sm:mb-8">
                    <div class="col-span-8 overflow-hidden">
                        <div class="animate-slideUp" style="animation-delay:0.4s">
                            <a href="#contact"
                                class="group w-full relative inline-flex items-center justify-center bg-primary hover:bg-primary/90 text-white py-3 sm:py-3.5 px-4 sm:px-6 rounded-lg overflow-hidden transition-all duration-300 touch-action-manipulation">
                                <div
                                    class="absolute inset-0 w-0 bg-white transition-all duration-500 ease-out group-hover:w-full group-active:w-full opacity-10">
                                </div>
                                <span class="relative font-medium text-sm sm:text-base">Partner With Us</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 sm:h-5 w-4 sm:w-5 ml-1.5 sm:ml-2 relative transform transition-transform duration-300 group-hover:translate-x-1 group-active:translate-x-1"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-span-4 overflow-hidden">
                        <div class="animate-slideUp" style="animation-delay:0.45s">
                            <a href="#about"
                                class="w-full inline-flex items-center justify-center border-2 border-primary/20 text-primary py-3 sm:py-3.5 px-0 rounded-lg hover:bg-primary/5 transition-all duration-300 touch-action-manipulation">
                                <span class="sr-only">Learn More</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 sm:h-6 w-5 sm:w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Responsive tagline card (now visible on all screen sizes) -->
                <div class="block overflow-hidden mb-8">
                    <div class="animate-slideUp" style="animation-delay:0.5s">
                        <div
                            class="relative bg-gradient-to-br from-white/80 to-dark/5 backdrop-blur-md rounded-xl p-4 sm:p-5 overflow-hidden group">
                            <!-- Responsive decorative elements -->
                            <div
                                class="absolute -top-10 -right-10 w-24 sm:w-32 h-24 sm:h-32 bg-primary/10 rounded-full blur-xl">
                            </div>
                            <div
                                class="absolute -bottom-8 -left-8 w-20 sm:w-24 h-20 sm:h-24 bg-secondary/10 rounded-full blur-lg">
                            </div>

                            <!-- Responsive tagline typography -->
                            <div class="relative">
                                <div class="flex items-center mb-2 sm:mb-3"></div>
                                <span
                                    class="inline-block w-6 sm:w-8 h-1 bg-gradient-to-r from-primary to-secondary rounded-full mr-2 sm:mr-3"></span>
                                <h3 class="text-lg sm:text-xl font-bold text-dark/90 tracking-tight">
                                    <span class="text-primary">Trusted</span> OEM Partner
                                </h3>
                            </div>

                            <p class="text-sm sm:text-base md:text-lg font-medium text-dark/80 mb-3 sm:mb-4 max-w-md">
                                For International Retail & Supermarket Brands
                            </p>

                            <!-- Mobile-optimized feature grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-3 mt-3 sm:mt-4">
                                <!-- Premium Quality - mobile friendly -->
                                <div
                                    class="feature-item bg-white/50 backdrop-filter backdrop-blur-sm rounded-lg p-2.5 sm:p-3 transition-all duration-300 hover:shadow-md hover:bg-white/80 hover:scale-[1.02] sm:hover:scale-105 hover:-translate-y-1 touch-action-manipulation">
                                    <div class="flex items-center">
                                        <div
                                            class="mr-2.5 sm:mr-3 flex-shrink-0 w-8 sm:w-10 h-8 sm:h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 sm:h-5 w-4 sm:w-5 text-primary" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-dark/90 text-sm sm:text-base">Premium Quality
                                            </h4>
                                            <p class="text-2xs sm:text-xs text-dark/60">Industry-leading standards</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Global Distribution - mobile friendly -->
                                <div
                                    class="feature-item bg-white/50 backdrop-filter backdrop-blur-sm rounded-lg p-2.5 sm:p-3 transition-all duration-300 hover:shadow-md hover:bg-white/80 hover:scale-[1.02] sm:hover:scale-105 hover:-translate-y-1 touch-action-manipulation">
                                    <div class="flex items-center">
                                        <div
                                            class="mr-2.5 sm:mr-3 flex-shrink-0 w-8 sm:w-10 h-8 sm:h-10 rounded-full bg-secondary/10 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 sm:h-5 w-4 sm:w-5 text-secondary" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M6.625 2.655A9 9 0 0119 11a1 1 0 11-2 0 7 7 0 00-9.625-6.492 1 1 0 11-.75-1.853zM4.662 4.959A1 1 0 014.75 6.37 6.97 6.97 0 003 11a1 1 0 11-2 0 8.97 8.97 0 012.25-5.953 1 1 0 011.412-.088z"
                                                    clip-rule="evenodd" />
                                                <path fill-rule="evenodd"
                                                    d="M5 11a5 5 0 1110 0 1 1 0 11-2 0 3 3 0 10-6 0c0 1.677-.345 3.276-.968 4.729a1 1 0 11-1.838-.789A9.964 9.964 0 005 11z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-dark/90 text-sm sm:text-base">Global
                                                Distribution</h4>
                                            <p class="text-2xs sm:text-xs text-dark/60">Worldwide logistics network</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Customer Focused - mobile friendly -->
                                <div
                                    class="feature-item col-span-1 sm:col-span-2 bg-white/50 backdrop-filter backdrop-blur-sm rounded-lg p-2.5 sm:p-3 transition-all duration-300 hover:shadow-md hover:bg-white/80 hover:scale-[1.02] sm:hover:scale-105 hover:-translate-y-1 touch-action-manipulation">
                                    <div class="flex items-center">
                                        <div
                                            class="mr-2.5 sm:mr-3 flex-shrink-0 w-8 sm:w-10 h-8 sm:h-10 rounded-full bg-accent/10 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 sm:h-5 w-4 sm:w-5 text-accent" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path
                                                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-dark/90 text-sm sm:text-base">Customer
                                                Focused</h4>
                                            <p class="text-2xs sm:text-xs text-dark/60">Tailored to your needs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side decorative element - moved inside grid -->
            <div class="lg:col-span-1 hidden lg:block order-3">
                <div class="h-40 w-px bg-gradient-to-b from-transparent via-primary/20 to-transparent mx-auto"></div>
            </div>

            <!-- Responsive right media showcase area - moved inside grid -->
            <div class="lg:col-span-6 order-3 lg:order-2 relative">
                <!-- Responsive image container with better mobile height -->
                <div class="relative h-64 md:h-[28rem] lg:h-[32rem] transform perspective">
                    <!-- Main hero image with responsive sizing -->
                    <div
                        class="absolute top-0 right-0 w-full lg:w-5/6 h-full z-30 transform translate-y-3 sm:translate-y-6 lg:translate-x-4 animate-float-slow">
                        <div
                            class="relative w-full h-full overflow-hidden rounded-xl sm:rounded-2xl shadow-lg sm:shadow-2xl">
                            <div
                                class="absolute inset-0 bg-gradient-to-tr from-primary/20 to-transparent opacity-60 mix-blend-overlay z-10">
                            </div>
                            <img src="{{ asset('assets/images/Advanced Manufacturing.jpg') }}"
                                alt="Advanced Manufacturing"
                                class="w-full h-full object-cover scale-110 animate-kenburns">
                            <!-- Custom interactive overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/40 to-transparent z-20"></div>
                        </div>
                    </div>

                    <!-- Responsive floating accent elements - Hide on very small screens -->
                    <div class="absolute top-1/4 left-0 w-32 xs:w-36 sm:w-40 h-32 xs:h-36 sm:h-40 z-50 transform -translate-x-1/4 animate-float lg:block hidden"
                        style="animation-delay: 0.5s">
                        <div
                            class="w-full h-full bg-secondary/10 backdrop-blur-md rounded-3xl shadow-lg border border-white/20 p-3 sm:p-4 flex flex-col items-center justify-center">
                            <!-- Certificate SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 sm:h-12 w-8 sm:w-12 text-secondary/80"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="mt-2 sm:mt-3 text-center">
                                <span class="font-bold text-xs sm:text-sm text-dark/80">Trusted</span>
                                <span class="block text-2xs sm:text-xs text-dark/60">OEM Partner</span>
                            </div>
                            <div class="mt-1.5 sm:mt-2 flex">
                                <div class="h-1 sm:h-1.5 w-1 sm:w-1.5 bg-green-500 rounded-full mr-1"></div>
                                <div class="h-1 sm:h-1.5 w-1 sm:w-1.5 bg-blue-500 rounded-full mr-1"></div>
                                <div class="h-1 sm:h-1.5 w-1 sm:w-1.5 bg-red-500 rounded-full"></div>
                            </div>
                        </div>
                    </div>

                    <div class="absolute bottom-6 xs:bottom-8 sm:bottom-10 left-6 xs:left-8 sm:left-10 z-50 transform rotate-6 animate-float lg:block hidden"
                        style="animation-delay: 1s">
                        <div
                            class="bg-white/90 backdrop-blur-md rounded-lg xs:rounded-xl shadow-md xs:shadow-lg p-2 xs:p-2.5 sm:p-3 max-w-[125px] xs:max-w-[140px] sm:max-w-[150px]">
                            <div class="flex items-center space-x-2">
                                <div
                                    class="flex-shrink-0 w-8 h-8 rounded-full bg-accent/20 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-accent"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs font-medium">Customized for your brand</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive scroll indicator -->
    <div
        class="absolute bottom-4 sm:bottom-6 md:bottom-8 lg:bottom:12 left-1/2 transform -translate-x-1/2 flex flex-col items-center">
        <span class="text-2xs sm:text-xs text-dark/50 mb-1 sm:mb-2">Scroll to discover</span>
        <div class="w-5 sm:w-6 h-8 sm:h-9 border-2 border-dark/30 rounded-full flex items-center justify-center">
            <div class="w-1 sm:w-1.5 h-1 sm:h-1.5 bg-primary rounded-full animate-scrollBounce"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('heroComponent', () => ({
            isMobile: window.innerWidth < 768,
            counters: [],
            
            init() {
                // Initialize particles when component loads
                this.initParticles();
                
                // Set up counters
                this.$nextTick(() => {
                    this.counters = document.querySelectorAll('.counter-value');
                    this.setupCounters();
                });
                
                // Handle resize events
                this.$watch('isMobile', () => this.initParticles());
                window.addEventListener('resize', () => {
                    this.isMobile = window.innerWidth < 768;
                });
            },
            
            initParticles() {
                if (typeof particlesJS !== 'undefined' && this.$refs.particles) {
                    particlesJS("particles-js", {
                        particles: {
                            number: {
                                value: this.isMobile ? 8 : 15, // Fewer particles on mobile
                                density: {
                                    enable: true,
                                    value_area: this.isMobile ? 600 : 800
                                }
                            },
                            color: {
                                value: "#cccccc"
                            },
                            shape: {
                                type: "circle"
                            },
                            opacity: {
                                value: 0.2,
                                random: true
                            },
                            size: {
                                value: this.isMobile ? 2 : 3, // Smaller particles on mobile
                                random: true
                            },
                            line_linked: {
                                enable: false
                            },
                            move: {
                                enable: true,
                                speed: this.isMobile ? 0.8 : 1, // Slower on mobile
                                direction: "none",
                                random: true,
                                out_mode: "out"
                            }
                        }
                    });
                }
            },
            
            setupCounters() {
                if ('IntersectionObserver' in window) {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                this.animateCounter(entry.target);
                                observer.unobserve(entry.target);
                            }
                        });
                    }, { threshold: 0.5 });
                    
                    this.counters.forEach(counter => observer.observe(counter));
                } else {
                    // Fallback for browsers without IntersectionObserver
                    this.counters.forEach(counter => this.animateCounter(counter));
                }
            },
            
            animateCounter(element) {
                const target = parseInt(element.getAttribute('data-count'));
                let count = 0;
                const increment = target / 40;
                
                const updateCount = () => {
                    if (count < target) {
                        count += increment;
                        element.textContent = Math.ceil(count);
                        requestAnimationFrame(updateCount);
                    } else {
                        element.textContent = target;
                    }
                };
                
                requestAnimationFrame(updateCount);
            }
        }));
    });
</script>

<style>
    /* Perspective effect */
    .perspective {
        perspective: 1000px;
    }

    /* Animation keyframes */
    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    @keyframes float-slow {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }
    }

    @keyframes kenburns {
        0% {
            transform: scale(1) translate(0);
        }

        50% {
            transform: scale(1.03) translate(-5px, -5px);
        }

        100% {
            transform: scale(1) translate(0);
        }
    }

    @keyframes scrollBounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-6px);
        }

        60% {
            transform: translateY(-3px);
        }
    }

    /* Animation classes */
    .animate-slideUp {
        animation: slideUp 0.7s ease-out forwards;
        opacity: 0;
    }

    .animate-float {
        animation: float 4s ease-in-out infinite;
    }

    .animate-float-slow {
        animation: float-slow 6s ease-in-out infinite;
    }

    .animate-kenburns {
        animation: kenburns 15s ease-in-out infinite;
    }

    .animate-scrollBounce {
        animation: scrollBounce 2s infinite;
    }

    /* Extra small size utility class */
    @media (max-width: 475px) {
        .text-2xs {
            font-size: 0.65rem;
            line-height: 1rem;
        }
    }

    /* Extra small screens utilities */
    @media screen and (min-width: 475px) {
        .xs\:h-80 {
            height: 20rem;
        }

        .xs\:h-36 {
            height: 9rem;
        }

        .xs\:w-36 {
            width: 9rem;
        }

        .xs\:bottom-8 {
            bottom: 2rem;
        }

        .xs\:left-8 {
            left: 2rem;
        }

        .xs\:p-2\.5 {
            padding: 0.625rem;
        }

        .xs\:rounded-xl {
            border-radius: 0.75rem;
        }

        .xs\:shadow-lg {
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .xs\:max-w-\[140px\] {
            max-width: 140px;
        }

        .xs\:block {
            display: block;
        }

        .xs\:flex {
            display: flex;
        }
    }

    /* Touch optimization */
    .touch-action-manipulation {
        touch-action: manipulation;
    }
</style>
