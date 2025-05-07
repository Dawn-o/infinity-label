<section id="products"
    class="py-20 sm:py-24 lg:py-32 bg-gradient-to-b from-accent/10 to-accent/5 relative overflow-hidden"
    x-data="productSlider">
    <!-- Enhanced top diagonal divider -->
    <div class="absolute top-0 left-0 w-full h-24 bg-white" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0 30%);">
    </div>

    <!-- Decorative elements -->
    <div class="absolute top-40 left-0 w-72 h-72 bg-primary/5 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-20 right-0 w-80 h-80 bg-secondary/5 rounded-full blur-3xl -z-10"></div>
    <div class="absolute top-1/4 right-1/4 w-6 h-6 bg-accent/20 rounded-full"></div>
    <div class="absolute bottom-1/3 left-1/5 w-4 h-4 bg-primary/20 rounded-full"></div>

    <!-- Subtle pattern overlay -->
    <div class="absolute inset-0 bg-pattern opacity-[0.03] -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Enhanced section header -->
        <div class="text-center mb-16 md:mb-20" data-aos="fade-up">
            <div class="inline-flex items-center mb-3 py-1.5 px-4 bg-accent/20 rounded-full">
                <div class="w-2 h-2 bg-accent rounded-full mr-2 animate-pulse"></div>
                <span class="text-secondary font-semibold text-sm uppercase tracking-wider">What We Offer</span>
            </div>
            <h2
                class="text-3xl md:text-4xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary via-primary to-secondary mt-3 mb-4">
                Our Products</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary to-secondary rounded-full mx-auto mb-5"></div>
            <p class="mt-4 max-w-3xl mx-auto text-dark/80 text-lg">Discover our range of premium organic products,
                crafted with care and expertise.</p>
        </div>

        <!-- Enhanced filter navigation design with Alpine.js -->
        <div class="flex justify-center mb-12 overflow-x-auto pb-2" data-aos="fade-up" data-aos-delay="100">
            <div class="inline-flex bg-white/90 backdrop-blur-md rounded-2xl p-2 shadow-lg border border-accent/10">
                <!-- Coconut Products button with enhanced styling -->
                <button
                    :class="{'bg-gradient-to-r from-primary to-primary/90 text-white shadow-md': activeFilter === 'coconut', 
                            'text-dark/80 hover:text-dark hover:bg-accent/5': activeFilter !== 'coconut'}"
                    class="px-7 py-3 rounded-xl font-medium text-sm transition-all duration-300 relative overflow-hidden filter-btn group"
                    @click="filterProducts('coconut')">
                    <!-- Decorative animated background element -->
                    <span
                        class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>

                    <!-- Icon with subtle animation -->
                    <span
                        :class="{'bg-white/20': activeFilter === 'coconut', 'bg-primary/10': activeFilter !== 'coconut'}"
                        class="inline-flex items-center justify-center rounded-full w-6 h-6 mr-2 transform transition-transform duration-300 group-hover:scale-110">
                        <i 
                            :class="{'text-white': activeFilter === 'coconut', 'text-primary': activeFilter !== 'coconut'}"
                            class="fas fa-leaf text-xs"></i>
                    </span>

                    <span class="relative">Coconut Products</span>

                    <!-- Active indicator dot -->
                    <span
                        :class="{'opacity-100': activeFilter === 'coconut', 'opacity-0': activeFilter !== 'coconut'}"
                        class="absolute -bottom-0.5 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-white rounded-full transition-opacity"></span>
                </button>

                <!-- Separator -->
                <div class="w-px h-8 bg-accent/10 self-center mx-1.5"></div>

                <!-- Charcoal Products button with enhanced styling -->
                <button
                    :class="{'bg-gradient-to-r from-primary to-primary/90 text-white shadow-md': activeFilter === 'charcoal', 
                            'text-dark/80 hover:text-dark hover:bg-accent/5': activeFilter !== 'charcoal'}"
                    class="px-7 py-3 rounded-xl font-medium text-sm transition-all duration-300 relative overflow-hidden filter-btn group"
                    @click="filterProducts('charcoal')">
                    <!-- Icon with enhanced styling -->
                    <span
                        :class="{'bg-secondary/20': activeFilter === 'charcoal', 'bg-secondary/10': activeFilter !== 'charcoal'}"
                        class="inline-flex items-center justify-center rounded-full w-6 h-6 mr-2 transform transition-transform duration-300 group-hover:scale-110">
                        <i 
                            :class="{'text-white': activeFilter === 'charcoal', 'text-secondary': activeFilter !== 'charcoal'}"
                            class="fas fa-fire text-xs"></i>
                    </span>

                    <span class="relative">Charcoal Products</span>

                    <!-- Active indicator dot -->
                    <span
                        :class="{'opacity-100': activeFilter === 'charcoal', 'opacity-0': activeFilter !== 'charcoal'}"
                        class="absolute -bottom-0.5 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-secondary rounded-full transition-opacity"></span>
                </button>
            </div>
        </div>

        <!-- Enhanced horizontal product slider with Alpine.js -->
        <div class="relative px-4 py-8 mx-auto max-w-[calc(100%-2rem)]" data-aos="fade-up">
            <!-- Enhanced left arrow navigation button -->
            <button
                @click="prevPage"
                :class="{'opacity-50 cursor-not-allowed': currentPage === 0}"
                class="absolute -left-3 lg:-left-8 top-1/2 transform -translate-y-1/2 z-10 bg-gradient-to-r from-white to-white/95 hover:from-white hover:to-white shadow-lg hover:shadow-xl rounded-full w-12 h-12 lg:w-14 lg:h-14 flex items-center justify-center text-primary transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary/30 border border-accent/10 backdrop-blur-sm group">
                <!-- Improved left arrow icon with better shape and styling -->
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 lg:h-6 lg:w-6 text-primary/80 group-hover:text-primary transition-all duration-300 transform group-hover:-translate-x-0.5"
                    viewBox="0 0 24 24" fill="none">
                    <path d="M19 12H5M12 19L5 12L12 5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <span class="sr-only">Previous Products</span>
                <span
                    class="absolute inset-0 rounded-full bg-primary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
            </button>

            <!-- Improved scrollable product container with enhanced mobile styling -->
            <div class="overflow-hidden rounded-xl" id="product-slider-container">
                <div class="flex transition-all duration-700 ease-out" id="product-slider" 
                    :style="{ transform: `translateX(${sliderPosition}px)` }"
                    @touchstart="handleTouchStart"
                    @touchend="handleTouchEnd">
                    
                    <!-- Coconut Products -->
                    <div class="flex-shrink-0 md:space-x-6 w-full md:w-96 transform transition-all duration-500 product-item"
                        x-show="activeFilter === 'coconut'" data-category="coconut">
                        <x-product-card title="Coconut Water"
                            image="{{ asset('assets/images/products/Coconut Water.png') }}" class="h-full mobile-card" />
                    </div>

                    <div class="flex-shrink-0 w-80 md:w-96 product-item" x-show="activeFilter === 'coconut'" data-category="coconut">
                        <x-product-card title="Coconut Milk for Beverage"
                            image="{{ asset('assets/images/products/Coconut Milk for Beverage.png') }}"
                            class="h-full" />
                    </div>

                    <div class="flex-shrink-0 w-80 md:w-96 product-item" x-show="activeFilter === 'coconut'" data-category="coconut">
                        <x-product-card title="Coconut Milk for Cooking"
                            image="{{ asset('assets/images/products/Coconut Milk for Cooking.png') }}" class="h-full" />
                    </div>

                    <div class="flex-shrink-0 w-80 md:w-96 product-item" x-show="activeFilter === 'coconut'" data-category="coconut">
                        <x-product-card title="Coconut Flour"
                            image="{{ asset('assets/images/products/Coconut Flour.png') }}" class="h-full" />
                    </div>

                    <div class="flex-shrink-0 w-80 md:w-96 product-item" x-show="activeFilter === 'coconut'" data-category="coconut">
                        <x-product-card title="Coconut Desiccated"
                            image="{{ asset('assets/images/products/Coconut Desiccated.png') }}" class="h-full" />
                    </div>

                    <div class="flex-shrink-0 w-80 md:w-96 product-item" x-show="activeFilter === 'coconut'" data-category="coconut">
                        <x-product-card title="Coconut Chips"
                            image="{{ asset('assets/images/products/Coconut Chips.png') }}" class="h-full" />
                    </div>

                    <!-- Charcoal Products -->
                    <div class="flex-shrink-0 w-80 md:w-96 product-item" x-show="activeFilter === 'charcoal'" data-category="charcoal">
                        <x-product-card title="BBQ Charcoal"
                            image="{{ asset('assets/images/products/Coconut Water.png') }}" class="h-full" />
                    </div>

                    <div class="flex-shrink-0 w-80 md:w-96 product-item" x-show="activeFilter === 'charcoal'" data-category="charcoal">
                        <x-product-card title="Charcoal Briquettes"
                            image="{{ asset('assets/images/products/Coconut Milk for Beverage.png') }}"
                            class="h-full" />
                    </div>
                </div>
            </div>

            <!-- Enhanced right arrow navigation button -->
            <button
                @click="nextPage"
                :class="{'opacity-50 cursor-not-allowed': currentPage >= totalPages - 1}"
                class="absolute -right-3 lg:-right-8 top-1/2 transform -translate-y-1/2 z-10 bg-gradient-to-l from-white to-white/95 hover:from-white hover:to-white shadow-lg hover:shadow-xl rounded-full w-12 h-12 lg:w-14 lg:h-14 flex items-center justify-center text-primary transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary/30 border border-accent/10 backdrop-blur-sm group">
                <!-- Improved right arrow icon with better shape and styling -->
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 lg:h-6 lg:w-6 text-primary/80 group-hover:text-primary transition-all duration-300 transform group-hover:translate-x-0.5"
                    viewBox="0 0 24 24" fill="none">
                    <path d="M5 12H19M12 5L19 12L12 19" stroke="currentColor" stroke-width="2.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span class="sr-only">Next Products</span>
                <span
                    class="absolute inset-0 rounded-full bg-primary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
            </button>

            <!-- Enhanced slider pagination dots with active states -->
            <div class="flex justify-center mt-8 space-x-3" id="slider-pagination">
                <template x-for="(page, index) in totalPages" :key="index">
                    <button
                        @click="goToPage(index)"
                        :class="{'bg-primary transform scale-110 shadow-md': currentPage === index, 'bg-gray-300 hover:bg-gray-400': currentPage !== index}"
                        class="w-3 h-3 rounded-full transition-all duration-300 focus:outline-none"
                        :aria-label="`Page ${index + 1}`"></button>
                </template>
            </div>
        </div>

        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('productSlider', () => ({
                    // State variables
                    activeFilter: 'coconut',
                    currentPage: 0,
                    sliderPosition: 0,
                    touchStartX: 0,
                    touchEndX: 0,
                    productsPerPage: 2,
                    
                    // Product data - you would typically fetch this from your backend
                    products: [
                        { title: 'Coconut Water', image: '{{ asset('assets/images/products/Coconut Water.png') }}', category: 'coconut' },
                        { title: 'Coconut Milk for Beverage', image: '{{ asset('assets/images/products/Coconut Milk for Beverage.png') }}', category: 'coconut' },
                        { title: 'Coconut Milk for Cooking', image: '{{ asset('assets/images/products/Coconut Milk for Cooking.png') }}', category: 'coconut' },
                        { title: 'Coconut Flour', image: '{{ asset('assets/images/products/Coconut Flour.png') }}', category: 'coconut' },
                        { title: 'Coconut Desiccated', image: '{{ asset('assets/images/products/Coconut Desiccated.png') }}', category: 'coconut' },
                        { title: 'Coconut Chips', image: '{{ asset('assets/images/products/Coconut Chips.png') }}', category: 'coconut' },
                        { title: 'BBQ Charcoal', image: '{{ asset('assets/images/products/Coconut Water.png') }}', category: 'charcoal' },
                        { title: 'Charcoal Briquettes', image: '{{ asset('assets/images/products/Coconut Milk for Beverage.png') }}', category: 'charcoal' },
                    ],
                    
                    // Computed properties
                    get visibleProducts() {
                        return this.products.filter(product => product.category === this.activeFilter);
                    },
                    
                    get totalPages() {
                        return Math.ceil(this.visibleProducts.length / this.productsPerPage);
                    },
                    
                    // Initialization
                    init() {
                        this.updateProductsPerPage();
                        
                        // Add resize event listener
                        window.addEventListener('resize', () => {
                            this.updateProductsPerPage();
                            this.updateSliderPosition();
                        });
                    },
                    
                    // Methods
                    filterProducts(category) {
                        this.activeFilter = category;
                        this.currentPage = 0;
                        this.updateSliderPosition();
                    },
                    
                    prevPage() {
                        if (this.currentPage > 0) {
                            this.currentPage--;
                            this.updateSliderPosition();
                        }
                    },
                    
                    nextPage() {
                        if (this.currentPage < this.totalPages - 1) {
                            this.currentPage++;
                            this.updateSliderPosition();
                        }
                    },
                    
                    goToPage(pageIndex) {
                        this.currentPage = pageIndex;
                        this.updateSliderPosition();
                    },
                    
                    updateProductsPerPage() {
                        this.productsPerPage = window.innerWidth < 768 ? 1 : 2;
                        
                        // Make sure current page is still valid
                        if (this.currentPage >= this.totalPages) {
                            this.currentPage = Math.max(0, this.totalPages - 1);
                        }
                    },
                    
                    updateSliderPosition() {
                        const slideWidth = 384; // width of each slide + margin (w-96)
                        
                        if (window.innerWidth < 768) {
                            // For mobile: use container width
                            const containerWidth = document.getElementById('product-slider-container').offsetWidth;
                            this.sliderPosition = -this.currentPage * containerWidth;
                        } else {
                            // For desktop: use fixed slide width
                            this.sliderPosition = -slideWidth * this.currentPage * this.productsPerPage;
                        }
                    },
                    
                    // Touch handlers for swipe support
                    handleTouchStart(e) {
                        this.touchStartX = e.changedTouches[0].screenX;
                    },
                    
                    handleTouchEnd(e) {
                        this.touchEndX = e.changedTouches[0].screenX;
                        this.handleSwipe();
                    },
                    
                    handleSwipe() {
                        const swipeThreshold = 50;
                        if (this.touchStartX - this.touchEndX > swipeThreshold) {
                            // Swipe left - next
                            this.nextPage();
                        } else if (this.touchEndX - this.touchStartX > swipeThreshold) {
                            // Swipe right - previous
                            this.prevPage();
                        }
                    }
                }));
            });
        </script>
    </div>

    <!-- Bottom wave divider -->
    <div class="absolute bottom-0 left-0 w-full">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" fill="#ffffff" preserveAspectRatio="none"
            class="w-full h-8 sm:h-12">
            <path
                d="M0,32L80,42.7C160,53,320,75,480,69.3C640,64,800,32,960,26.7C1120,21,1280,43,1360,53.3L1440,64L1440,100L1360,100C1280,100,1120,100,960,100C800,100,640,100,480,100C320,100,160,100,80,100L0,100Z">
            </path>
        </svg>
    </div>
</section>

<style>
    .bg-pattern {
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0  0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    /* Mobile-optimized product slider styling */
    #product-slider-container {
        width: 100%;
    }
    
    #product-slider {
        width: 100%;
    }
    
    .product-item {
        padding: 0.5rem;
    }
    
    @media (max-width: 767px) {
        /* Mobile specific styling */
        #product-slider {
            gap: 0;
        }
        
        .product-item {
            width: 100% !important;
            max-width: 100%;
            padding: 0.25rem;
        }
        
        /* Enhanced styling for mobile cards */
        .mobile-card {
            margin: 0 auto;
            max-width: 320px;
        }
        
        /* Add custom shadows and highlighting */
        .mobile-card .card {
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
        
        /* Improved touch targets */
        #slide-arrow-prev, #slide-arrow-next {
            width: 44px;
            height: 44px;
        }
    }
    
    @media (min-width: 768px) {
        #product-slider {
            gap: 2rem;
        }
        
        .product-item {
            width: 384px;
            padding: 0;
        }
    }

    /* Additional mobile enhancement for slider dots */
    @media (max-width: 767px) {
        #slider-pagination button {
            width: 10px;
            height: 10px;
            margin: 0 6px;
        }
    }
</style>
