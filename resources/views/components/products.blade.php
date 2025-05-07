<section id="products"
    class="py-20 sm:py-24 lg:py-32 bg-gradient-to-b from-accent/10 to-accent/5 relative overflow-hidden">
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
            <p class="mt-4 max-w-3xl mx-auto text-dark/80 text-lg">Discover our range of premium organic coconut
                products,
                crafted with care and expertise.</p>
        </div>

        <!-- Enhanced filter navigation design -->
        <div class="flex justify-center mb-12 overflow-x-auto pb-2" data-aos="fade-up" data-aos-delay="100">
            <div class="inline-flex bg-white/90 backdrop-blur-md rounded-2xl p-2 shadow-lg border border-accent/10">
                <!-- Coconut Products button with enhanced styling -->
                <button
                    class="px-7 py-3 rounded-xl bg-gradient-to-r from-primary to-primary/90 text-white font-medium text-sm transition-all duration-300 shadow-md hover:shadow-lg relative overflow-hidden filter-btn active group"
                    data-filter="coconut">
                    <!-- Decorative animated background element -->
                    <span
                        class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>

                    <!-- Icon with subtle animation -->
                    <span
                        class="inline-flex items-center justify-center bg-white/20 rounded-full w-6 h-6 mr-2 transform transition-transform duration-300 group-hover:scale-110">
                        <i class="fas fa-leaf text-white text-xs"></i>
                    </span>

                    <span class="relative">Coconut Products</span>

                    <!-- Active indicator dot -->
                    <span
                        class="absolute -bottom-0.5 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-white rounded-full"></span>
                </button>

                <!-- Separator -->
                <div class="w-px h-8 bg-accent/10 self-center mx-1.5"></div>

                <!-- Charcoal Products button with enhanced styling -->
                <button
                    class="px-7 py-3 rounded-xl text-dark/80 hover:text-dark font-medium text-sm transition-all duration-300 hover:bg-accent/5 filter-btn group"
                    data-filter="charcoal">
                    <!-- Icon with enhanced styling -->
                    <span
                        class="inline-flex items-center justify-center bg-secondary/10 rounded-full w-6 h-6 mr-2 transform transition-transform duration-300 group-hover:scale-110">
                        <i class="fas fa-fire text-secondary text-xs"></i>
                    </span>

                    <span>Charcoal Products</span>

                    <!-- Hidden active indicator that shows when active -->
                    <span
                        class="absolute -bottom-0.5 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-secondary rounded-full opacity-0 transition-opacity"></span>
                </button>
            </div>
        </div>

        <!-- Enhanced horizontal product slider with working pagination -->
        <div class="relative px-4 py-8 mx-auto max-w-[calc(100%-2rem)]" data-aos="fade-up">
            <!-- Enhanced left arrow navigation button -->
            <button
                class="absolute -left-3 lg:-left-8 top-1/2 transform -translate-y-1/2 z-10 bg-gradient-to-r from-white to-white/95 hover:from-white hover:to-white shadow-lg hover:shadow-xl rounded-full w-12 h-12 lg:w-14 lg:h-14 flex items-center justify-center text-primary transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary/30 border border-accent/10 backdrop-blur-sm group"
                id="slide-arrow-prev">
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
                <div class="flex transition-all duration-700 ease-out" id="product-slider">
                    <!-- Product cards with category attributes for filtering -->
                    <div class="flex-shrink-0 md:space-x-6 w-full md:w-96 transform transition-all duration-500 product-item"
                        data-category="coconut">
                        <x-product-card title="Coconut Water"
                            image="{{ asset('assets/images/products/Coconut Water.png') }}" class="h-full mobile-card" />
                    </div>

                    <div class="flex-shrink-0 w-80 md:w-96 product-item" data-category="coconut">
                        <x-product-card title="Coconut Milk for Beverage"
                            image="{{ asset('assets/images/products/Coconut Milk for Beverage.png') }}"
                            class="h-full" />
                    </div>

                    <div class="flex-shrink-0 w-80 md:w-96 product-item" data-category="coconut">
                        <x-product-card title="Coconut Milk for Cooking"
                            image="{{ asset('assets/images/products/Coconut Milk for Cooking.png') }}" class="h-full" />
                    </div>

                    <div class="flex-shrink-0 w-80 md:w-96 product-item" data-category="coconut">
                        <x-product-card title="Coconut Flour"
                            image="{{ asset('assets/images/products/Coconut Flour.png') }}" class="h-full" />
                    </div>

                    <div class="flex-shrink-0 w-80 md:w-96 product-item" data-category="coconut">
                        <x-product-card title="Coconut Desiccated"
                            image="{{ asset('assets/images/products/Coconut Desiccated.png') }}" class="h-full" />
                    </div>

                    <div class="flex-shrink-0 w-80 md:w-96 product-item" data-category="coconut">
                        <x-product-card title="Coconut Chips"
                            image="{{ asset('assets/images/products/Coconut Chips.png') }}" class="h-full" />
                    </div>

                    <!-- Add charcoal products (you can replace these with actual charcoal product images) -->
                    <div class="flex-shrink-0 w-80 md:w-96 product-item" data-category="charcoal">
                        <x-product-card title="BBQ Charcoal"
                            image="{{ asset('assets/images/products/Coconut Water.png') }}" class="h-full" />
                    </div>

                    <div class="flex-shrink-0 w-80 md:w-96 product-item" data-category="charcoal">
                        <x-product-card title="Charcoal Briquettes"
                            image="{{ asset('assets/images/products/Coconut Milk for Beverage.png') }}"
                            class="h-full" />
                    </div>
                </div>
            </div>

            <!-- Enhanced right arrow navigation button -->
            <button
                class="absolute -right-3 lg:-right-8 top-1/2 transform -translate-y-1/2 z-10 bg-gradient-to-l from-white to-white/95 hover:from-white hover:to-white shadow-lg hover:shadow-xl rounded-full w-12 h-12 lg:w-14 lg:h-14 flex items-center justify-center text-primary transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary/30 border border-accent/10 backdrop-blur-sm group"
                id="slide-arrow-next">
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
                <button
                    class="w-3 h-3 rounded-full bg-primary shadow-md transition-all duration-300 focus:outline-none"
                    data-index="0" aria-label="Page 1"></button>
                <button
                    class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300 focus:outline-none"
                    data-index="1" aria-label="Page 2"></button>
                <button
                    class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300 focus:outline-none"
                    data-index="2" aria-label="Page 3"></button>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const sliderContainer = document.getElementById('product-slider-container');
                const slider = document.getElementById('product-slider');
                const prevButton = document.getElementById('slide-arrow-prev');
                const nextButton = document.getElementById('slide-arrow-next');
                const paginationDots = document.getElementById('slider-pagination').querySelectorAll('button');
                const filterButtons = document.querySelectorAll('.filter-btn');
                const productItems = document.querySelectorAll('.product-item');

                // Variables for slider functionality
                const slideWidth = 384; // width of each slide + margin (w-96)
                let currentPosition = 0;
                let currentPage = 0;
                let totalPages = 3; // Will be recalculated based on visible products
                let productsPerPage = 2;

                // Filter functionality
                filterButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        // Update button styles for enhanced design
                        filterButtons.forEach(btn => {
                            // Remove active state styling
                            btn.classList.remove('active');
                            btn.classList.remove('bg-gradient-to-r', 'from-primary',
                                'to-primary/90', 'text-white', 'shadow-md');
                            btn.classList.add('text-dark/80', 'hover:text-dark');

                            // Reset icon styling
                            const iconContainer = btn.querySelector('span:first-of-type');
                            if (iconContainer) {
                                if (btn.getAttribute('data-filter') === 'coconut') {
                                    iconContainer.classList.remove('bg-white/20');
                                    iconContainer.classList.add('bg-primary/10');

                                    // Reset icon color
                                    const icon = iconContainer.querySelector('i');
                                    if (icon) {
                                        icon.classList.remove('text-white');
                                        icon.classList.add('text-primary');
                                    }
                                }
                            }

                            // Hide the indicator dot
                            const indicatorDot = btn.querySelector('span:last-of-type');
                            if (indicatorDot) {
                                indicatorDot.classList.add('opacity-0');
                            }
                        });

                        // Set active state styling for clicked button
                        this.classList.add('active');
                        this.classList.add('bg-gradient-to-r', 'from-primary', 'to-primary/90',
                            'text-white', 'shadow-md');
                        this.classList.remove('text-dark/80', 'hover:text-dark');

                        // Update icon styling for active state
                        const activeIconContainer = this.querySelector('span:first-of-type');
                        if (activeIconContainer) {
                            if (this.getAttribute('data-filter') === 'coconut') {
                                activeIconContainer.classList.add('bg-white/20');
                                activeIconContainer.classList.remove('bg-primary/10');

                                // Update icon color
                                const icon = activeIconContainer.querySelector('i');
                                if (icon) {
                                    icon.classList.add('text-white');
                                    icon.classList.remove('text-primary');
                                }
                            } else if (this.getAttribute('data-filter') === 'charcoal') {
                                activeIconContainer.classList.add('bg-secondary/20');
                                activeIconContainer.classList.remove('bg-secondary/10');
                            }
                        }

                        // Show the indicator dot
                        const activeIndicatorDot = this.querySelector('span:last-of-type');
                        if (activeIndicatorDot) {
                            activeIndicatorDot.classList.remove('opacity-0');
                        }

                        // Filter functionality
                        const filterValue = this.getAttribute('data-filter');

                        // Filter products
                        let visibleCount = 0;
                        productItems.forEach(item => {
                            const category = item.getAttribute('data-category');
                            if (category === filterValue) {
                                item.style.display = '';
                                item.classList.remove('hidden');
                                visibleCount++;
                            } else {
                                item.style.display = 'none';
                                item.classList.add('hidden');
                            }
                        });

                        // Reset slider position
                        currentPosition = 0;
                        currentPage = 0;

                        // Recalculate total pages based on visible products
                        totalPages = Math.ceil(visibleCount / productsPerPage);

                        // Update pagination dots
                        updatePaginationDots();

                        // Update slider
                        updateSliderPosition();
                        updateActiveDot();
                        updateButtonStates();
                    });
                });

                // Function to update pagination dots based on visible products
                function updatePaginationDots() {
                    const paginationContainer = document.getElementById('slider-pagination');
                    paginationContainer.innerHTML = ''; // Clear existing dots

                    for (let i = 0; i < totalPages; i++) {
                        const dot = document.createElement('button');
                        dot.classList.add('w-3', 'h-3', 'rounded-full', 'transition-all', 'duration-300',
                            'focus:outline-none');
                        dot.setAttribute('data-index', i);
                        dot.setAttribute('aria-label', `Page ${i + 1}`);

                        if (i === currentPage) {
                            dot.classList.add('bg-primary', 'transform', 'scale-110', 'shadow-md');
                        } else {
                            dot.classList.add('bg-gray-300', 'hover:bg-gray-400');
                        }

                        dot.addEventListener('click', () => {
                            currentPage = i;
                            currentPosition = -slideWidth * currentPage * productsPerPage;
                            updateSliderPosition();
                            updateActiveDot();
                            updateButtonStates();
                        });

                        paginationContainer.appendChild(dot);
                    }
                }

                // Previous button click
                prevButton.addEventListener('click', () => {
                    if (currentPage > 0) {
                        currentPage--;
                        currentPosition = -slideWidth * currentPage * productsPerPage;
                        updateSliderPosition();
                        updateActiveDot();
                        updateButtonStates();
                    }
                });

                // Next button click
                nextButton.addEventListener('click', () => {
                    if (currentPage < totalPages - 1) {
                        currentPage++;
                        currentPosition = -slideWidth * currentPage * productsPerPage;
                        updateSliderPosition();
                        updateActiveDot();
                        updateButtonStates();
                    }
                });

                // Enhanced function to determine products per page based on screen width
                function getProductsPerPage() {
                    return window.innerWidth < 768 ? 1 : 2;
                }
                
                // Update slider position for better mobile handling
                function updateSliderPosition() {
                    if (window.innerWidth < 768) {
                        // For mobile: use container width for smooth scrolling
                        const containerWidth = sliderContainer.offsetWidth;
                        slider.style.transform = `translateX(-${currentPage * containerWidth}px)`;
                    } else {
                        // For desktop: use fixed slide width
                        slider.style.transform = `translateX(${currentPosition}px)`;
                    }
                }

                // Update active dot indicator
                function updateActiveDot() {
                    const dots = document.getElementById('slider-pagination').querySelectorAll('button');
                    dots.forEach((dot, index) => {
                        if (index === currentPage) {
                            dot.classList.remove('bg-gray-300');
                            dot.classList.add('bg-primary', 'transform', 'scale-110');
                        } else {
                            dot.classList.remove('bg-primary', 'transform', 'scale-110');
                            dot.classList.add('bg-gray-300');
                        }
                    });
                }

                // Update button states (disabled when at the ends)
                function updateButtonStates() {
                    // Reset states
                    prevButton.classList.remove('opacity-50', 'cursor-not-allowed');
                    nextButton.classList.remove('opacity-50', 'cursor-not-allowed');

                    // Apply disabled states
                    if (currentPage === 0) {
                        prevButton.classList.add('opacity-50', 'cursor-not-allowed');
                    }

                    if (currentPage === totalPages - 1 || totalPages === 0) {
                        nextButton.classList.add('opacity-50', 'cursor-not-allowed');
                    }
                }

                // Enhanced window resize handler
                window.addEventListener('resize', function() {
                    // Update products per page
                    productsPerPage = getProductsPerPage();
                    
                    // Recalculate visible pages
                    const visibleItems = document.querySelectorAll('.product-item:not(.hidden)');
                    totalPages = Math.ceil(visibleItems.length / productsPerPage);
                    
                    // Make sure current page is still valid
                    if (currentPage >= totalPages) {
                        currentPage = totalPages - 1;
                    }
                    
                    // Update slider position
                    updateSliderPosition();
                    updatePaginationDots();
                    updateActiveDot();
                    updateButtonStates();
                });

                // Initialize the slider
                updatePaginationDots();
                updateButtonStates();

                // Initialize with only coconut products showing
                const initializeCoconutFilter = () => {
                    // Filter products to show only coconut
                    let visibleCount = 0;
                    productItems.forEach(item => {
                        const category = item.getAttribute('data-category');
                        if (category === 'coconut') {
                            item.style.display = '';
                            item.classList.remove('hidden');
                            visibleCount++;
                        } else {
                            item.style.display = 'none';
                            item.classList.add('hidden');
                        }
                    });

                    // Set coconut button as active
                    filterButtons.forEach(btn => {
                        if (btn.getAttribute('data-filter') === 'coconut') {
                            // Apply active styling
                            btn.classList.add('active', 'bg-gradient-to-r', 'from-primary', 'to-primary/90',
                                'text-white', 'shadow-md');
                            btn.classList.remove('text-dark/80', 'hover:text-dark');

                            // Style the icon container
                            const iconContainer = btn.querySelector('span:first-of-type');
                            if (iconContainer) {
                                iconContainer.classList.add('bg-white/20');
                                iconContainer.classList.remove('bg-primary/10');

                                // Update icon color
                                const icon = iconContainer.querySelector('i');
                                if (icon) {
                                    icon.classList.add('text-white');
                                    icon.classList.remove('text-primary');
                                }
                            }

                            // Show the indicator dot
                            const indicatorDot = btn.querySelector('span:last-of-type');
                            if (indicatorDot) {
                                indicatorDot.classList.remove('opacity-0');
                            }
                        }
                    });

                    // Recalculate total pages
                    totalPages = Math.ceil(visibleCount / productsPerPage);

                    // Update pagination
                    updatePaginationDots();

                    // Reset position
                    currentPosition = 0;
                    currentPage = 0;
                    updateSliderPosition();
                    updateActiveDot();
                    updateButtonStates();
                };

                // Call function on page load
                initializeCoconutFilter();

                // Touch swipe support
                let touchStartX = 0;
                let touchEndX = 0;

                slider.addEventListener('touchstart', e => {
                    touchStartX = e.changedTouches[0].screenX;
                });

                slider.addEventListener('touchend', e => {
                    touchEndX = e.changedTouches[0].screenX;
                    handleSwipe();
                });

                function handleSwipe() {
                    const swipeThreshold = 50;
                    if (touchStartX - touchEndX > swipeThreshold) {
                        // Swipe left - next
                        nextButton.click();
                    } else if (touchEndX - touchStartX > swipeThreshold) {
                        // Swipe right - previous
                        prevButton.click();
                    }
                }
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
