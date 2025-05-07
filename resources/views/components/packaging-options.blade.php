<section id="packaging"
    class="py-20 sm:py-24 lg:py-32 bg-gradient-to-b from-accent/10 to-accent/5 relative overflow-hidden"
    x-data="packagingOptions">
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
        <!-- Enhanced section header with table view toggle button -->
        <div class="text-center mb-16 md:mb-20" data-aos="fade-up">
            <div class="inline-flex items-center mb-3 py-1.5 px-4 bg-accent/20 rounded-full">
                <div class="w-2 h-2 bg-accent rounded-full mr-2 animate-pulse"></div>
                <span class="text-secondary font-semibold text-sm uppercase tracking-wider">Packaging Solutions</span>
            </div>
            <h2
                class="text-3xl md:text-4xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary via-primary to-secondary mt-3 mb-4">
                Available Packaging Options</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary to-secondary rounded-full mx-auto mb-5"></div>
            <p class="mt-4 max-w-3xl mx-auto text-dark/80 text-lg">Choose from our versatile range of packaging
                solutions to match your brand requirements and market preferences.</p>

            <!-- Alpine.js toggle button -->
            <button @click="toggleView()"
                class="mt-4 inline-flex items-center gap-2 px-4 py-2 bg-white border border-primary/20 hover:bg-primary/5 text-primary rounded-lg shadow-sm transition-all duration-300 text-sm font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
                <span x-text="isTableView ? 'View as Cards' : 'View as Table'"></span>
            </button>
        </div>

        <!-- Container with both slider and table views -->
        <div class="relative px-4 py-8 mx-auto max-w-[calc(100%-2rem)]" data-aos="fade-up">
            <!-- Navigation arrows - visible only in slider mode -->
            <button
                @click="prevPage()"
                x-show="!isTableView"
                :class="{'opacity-50 cursor-not-allowed': currentPage === 0}"
                class="absolute -left-3 lg:-left-8 top-1/2 transform -translate-y-1/2 z-10 bg-gradient-to-r from-white to-white/95 hover:from-white hover:to-white shadow-lg hover:shadow-xl rounded-full w-12 h-12 lg:w-14 lg:h-14 flex items-center justify-center text-primary transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary/30 border border-accent/10 backdrop-blur-sm group">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 lg:h-6 lg:w-6 text-primary/80 group-hover:text-primary transition-all duration-300 transform group-hover:-translate-x-0.5"
                    viewBox="0 0 24 24" fill="none">
                    <path d="M19 12H5M12 19L5 12L12 5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <span class="sr-only">Previous Options</span>
                <span
                    class="absolute inset-0 rounded-full bg-primary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
            </button>

            <!-- Packaging container - removed background -->
            <div class="rounded-xl overflow-hidden" id="pkg-view-container">
                <!-- Slider view -->
                <div id="slider-view" x-show="!isTableView" class="overflow-hidden">
                    <div class="flex transition-all duration-700 ease-out" id="pkg-slider"
                         :style="{ transform: `translateX(${sliderPosition}px)` }"
                         @touchstart="handleTouchStart($event)"
                         @touchend="handleTouchEnd($event)">
                        @php
                            $packagingData = config('packaging-data');

                            $packageIcons = [
                                'pet' =>
                                    '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>',
                                'tetra_pak' =>
                                    '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>',
                                'sleek_can' =>
                                    '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>',
                                'aluminum_can' =>
                                    '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8"></path></svg>',
                                'tin_can' =>
                                    '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>',
                                'carnation_can' =>
                                    '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>',
                                'bulk' =>
                                    '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>',
                            ];

                            $packageStyles = [
                                'pet' =>
                                    'bg-secondary/10 text-secondary border-secondary/20 hover:bg-secondary hover:text-white',
                                'tetra_pak' =>
                                    'bg-secondary/10 text-secondary border-secondary/20 hover:bg-secondary hover:text-white',
                                'sleek_can' =>
                                    'bg-secondary/10 text-secondary border-secondary/20 hover:bg-secondary hover:text-white',
                                'aluminum_can' =>
                                    'bg-secondary/10 text-secondary border-secondary/20 hover:bg-secondary hover:text-white',
                                'tin_can' =>
                                    'bg-secondary/10 text-secondary border-secondary/20 hover:bg-secondary hover:text-white',
                                'carnation_can' =>
                                    'bg-secondary/10 text-secondary border-secondary/20 hover:bg-secondary hover:text-white',
                                'bulk' =>
                                    'bg-secondary/10 text-secondary border-secondary/20 hover:bg-secondary hover:text-white',
                            ];
                        @endphp

                        @foreach ($packagingData as $index => $item)
                            <div class="pkg-card flex-shrink-0 md:space-x-6 w-full md:w-96 transform transition-all duration-500"
                                data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                                <div
                                    class="bg-white/95 backdrop-filter backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl border border-accent/10 overflow-hidden h-full transition-all duration-300 hover:-translate-y-1 group">
                                    <!-- Card header with fixed height -->
                                    <div
                                        class="bg-gradient-to-r from-primary/10 via-transparent to-secondary/10 p-5 border-b border-accent/10 relative h-24 flex items-center">
                                        <!-- Background pattern for the header -->
                                        <div class="absolute inset-0 opacity-10 bg-pattern-grid"></div>

                                        <h3 class="font-bold text-primary text-lg flex items-center gap-3 w-full">
                                            <div
                                                class="flex-shrink-0 w-10 h-10 flex items-center justify-center rounded-full bg-gradient-to-r from-primary to-secondary text-white text-lg shadow-md group-hover:scale-110 transition-transform duration-300">
                                                {{ $index + 1 }}
                                            </div>
                                            <span
                                                class="group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-primary group-hover:to-secondary transition-all duration-300 line-clamp-2">{{ $item['product'] }}</span>
                                        </h3>
                                    </div>

                                    <!-- Card body with packaging options - removed scrolling -->
                                    <div class="p-5">
                                        <div class="flex flex-col gap-3">
                                            @foreach (['pet', 'tetra_pak', 'sleek_can', 'aluminum_can', 'tin_can', 'carnation_can', 'bulk'] as $pkgKey)
                                                <div class="transition-all duration-300 w-full">
                                                    @if ($item[$pkgKey] != '-')
                                                        <!-- Available packaging option -->
                                                        <div
                                                            class="relative bg-white hover:bg-gradient-to-br hover:from-white hover:to-primary/5 p-3 rounded-xl border {{ explode(' ', $packageStyles[$pkgKey])[2] }} transition-all duration-300 hover:shadow-md group flex items-center gap-3">
                                                            <!-- Icon container with enhanced styling -->
                                                            <div
                                                                class="flex-shrink-0 {{ explode(' ', $packageStyles[$pkgKey])[0] }} {{ explode(' ', $packageStyles[$pkgKey])[1] }} rounded-full p-2.5 border {{ explode(' ', $packageStyles[$pkgKey])[2] }} transition-all duration-300 {{ explode(' ', $packageStyles[$pkgKey])[3] }} {{ explode(' ', $packageStyles[$pkgKey])[4] }}">
                                                                {!! $packageIcons[$pkgKey] !!}
                                                            </div>

                                                            <div class="flex-grow">
                                                                <div
                                                                    class="text-xs font-semibold uppercase tracking-wider {{ explode(' ', $packageStyles[$pkgKey])[1] }}/70">
                                                                    {{ str_replace('_', ' ', $pkgKey) }}</div>
                                                                <div
                                                                    class="font-medium text-dark/90 group-hover:text-dark/100">
                                                                    {{ $item[$pkgKey] }}</div>
                                                            </div>

                                                            <!-- Visual indicator for package type -->
                                                            <div
                                                                class="absolute -bottom-0.5 right-4 h-1 w-8 rounded-t-lg {{ explode(' ', $packageStyles[$pkgKey])[0] }}/50 opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    @else
                                                        <!-- Not available packaging option -->
                                                        <div
                                                            class="relative bg-gray-50 p-3 rounded-xl border border-gray-200 opacity-75 flex items-center gap-3">
                                                            <!-- Desaturated icon container -->
                                                            <div
                                                                class="flex-shrink-0 bg-gray-100 text-gray-400 rounded-full p-2.5 border border-gray-200">
                                                                {!! $packageIcons[$pkgKey] !!}
                                                            </div>

                                                            <div class="flex-grow">
                                                                <div
                                                                    class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                                                                    {{ str_replace('_', ' ', $pkgKey) }}</div>
                                                                <div class="font-medium text-gray-500">Not Available
                                                                </div>
                                                            </div>

                                                            <!-- Unavailable indicator icon -->
                                                            <div class="flex-shrink-0 text-gray-300">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Table view -->
                <div id="table-view" x-show="isTableView" class="p-4 overflow-x-auto">
                    <table class="w-full border-collapse border border-accent/10 shadow-sm rounded-lg overflow-hidden">
                        <thead>
                            <tr class="bg-gradient-to-r from-primary/10 via-accent/5 to-secondary/10">
                                <th
                                    class="text-center py-4 px-5 text-left text-xs font-bold text-primary uppercase tracking-wider border-b-2 border-accent/20">
                                    Product
                                </th>
                                @foreach (['pet', 'tetra_pak', 'sleek_can', 'aluminum_can', 'tin_can', 'carnation_can', 'bulk'] as $index => $pkgKey)
                                    <th
                                        class="py-4 px-3 text-center text-xs font-bold text-primary uppercase tracking-wider border-b-2 border-accent/20">
                                        <div class="flex flex-col items-center justify-center">
                                            <span>{{ str_replace('_', ' ', $pkgKey) }}</span>
                                        </div>
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-accent/10">
                            @foreach ($packagingData as $index => $item)
                                <tr
                                    class="hover:bg-accent/5 transition-colors {{ $index % 2 == 0 ? 'bg-white' : 'bg-gray-50' }}">
                                    <td
                                        class="px-5 py-3.5 text-sm font-semibold text-primary whitespace-normal align-middle border-r border-accent/5">
                                        <div class="flex items-center gap-3 justify-center">
                                            <div
                                                class="flex-shrink-0 w-7 h-7 flex items-center justify-center rounded-full bg-gradient-to-r from-primary/80 to-secondary/80 text-white text-xs font-bold">
                                                {{ $index + 1 }}
                                            </div>
                                            <span>{{ $item['product'] }}</span>
                                        </div>
                                    </td>
                                    @foreach (['pet', 'tetra_pak', 'sleek_can', 'aluminum_can', 'tin_can', 'carnation_can', 'bulk'] as $pkgKey)
                                        <td
                                            class="px-3 py-3.5 text-sm whitespace-normal align-middle text-center {{ $loop->last ? '' : 'border-r border-accent/5' }}">
                                            @if ($item[$pkgKey] != '-')
                                                <div
                                                    class="font-medium text-gray-900 px-2 py-1 bg-{{ in_array($pkgKey, ['pet', 'tetra_pak']) ? 'primary' : (in_array($pkgKey, ['sleek_can', 'aluminum_can', 'tin_can', 'carnation_can']) ? 'secondary' : 'accent') }}/5 rounded-lg inline-block min-w-[80px]">
                                                    {{ $item[$pkgKey] }}
                                                </div>
                                            @else
                                                <span class="text-gray-400 inline-block">—</span>
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot class="bg-gradient-to-r from-primary/5 via-transparent to-secondary/5">
                            <tr>
                                <td colspan="{{ count(['pet', 'tetra_pak', 'sleek_can', 'aluminum_can', 'tin_can', 'carnation_can', 'bulk']) + 1 }}"
                                    class="px-5 py-3 text-xs text-gray-500">
                                    <div class="flex items-center justify-between">
                                        <span>{{ count($packagingData) }} products available</span>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <!-- Right arrow - visible only in slider mode -->
            <button
                @click="nextPage()"
                x-show="!isTableView"
                :class="{'opacity-50 cursor-not-allowed': currentPage >= totalPages - 1}"
                class="absolute -right-3 lg:-right-8 top-1/2 transform -translate-y-1/2 z-10 bg-gradient-to-l from-white to-white/95 hover:from-white hover:to-white shadow-lg hover:shadow-xl rounded-full w-12 h-12 lg:w-14 lg:h-14 flex items-center justify-center text-primary transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary/30 border border-accent/10 backdrop-blur-sm group">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 lg:h-6 lg:w-6 text-primary/80 group-hover:text-primary transition-all duration-300 transform group-hover:translate-x-0.5"
                    viewBox="0 0 24 24" fill="none">
                    <path d="M5 12H19M12 5L19 12L12 19" stroke="currentColor" stroke-width="2.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span class="sr-only">Next Options</span>
                <span
                    class="absolute inset-0 rounded-full bg-primary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
            </button>

            <!-- Enhanced slider pagination dots with Alpine.js -->
            <div class="flex justify-center mt-8 space-x-3" x-show="!isTableView">
                <template x-for="(page, index) in totalPages" :key="index">
                    <button
                        @click="goToPage(index)"
                        :class="{'bg-primary transform scale-110 shadow-md': currentPage === index, 'bg-gray-300 hover:bg-gray-400': currentPage !== index}"
                        class="w-3 h-3 rounded-full transition-all duration-300 focus:outline-none"
                        :aria-label="`Page ${index + 1}`">
                    </button>
                </template>
            </div>
        </div>

        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('packagingOptions', () => ({
                    // State variables
                    isTableView: false,
                    currentPage: 0,
                    sliderPosition: 0,
                    touchStartX: 0,
                    touchEndX: 0,
                    itemsPerPage: 2,
                    totalItems: {{ count($packagingData ?? []) }},
                    
                    // Computed property for total pages
                    get totalPages() {
                        return Math.ceil(this.totalItems / this.itemsPerPage);
                    },
                    
                    // Initialization
                    init() {
                        this.updateItemsPerPage();
                        
                        // Add resize handler
                        window.addEventListener('resize', () => {
                            this.updateItemsPerPage();
                            this.updateSliderPosition();
                        });
                    },
                    
                    // Toggle between card and table views
                    toggleView() {
                        this.isTableView = !this.isTableView;
                        if (!this.isTableView) {
                            // Reset to first page when switching back to slider
                            this.currentPage = 0;
                            this.updateSliderPosition();
                        }
                    },
                    
                    // Navigation methods
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
                    
                    // Update items per page based on screen size
                    updateItemsPerPage() {
                        this.itemsPerPage = window.innerWidth < 768 ? 1 : 2;
                        
                        // Make sure current page is still valid
                        if (this.currentPage >= this.totalPages) {
                            this.currentPage = Math.max(0, this.totalPages - 1);
                        }
                    },
                    
                    // Update slider position
                    updateSliderPosition() {
                        const slideWidth = 384; // width of each slide + margin (w-96)
                        
                        if (window.innerWidth < 768) {
                            // For mobile: use container width
                            const containerWidth = document.getElementById('slider-view').offsetWidth;
                            this.sliderPosition = -this.currentPage * containerWidth;
                        } else {
                            // For desktop: use fixed slide width
                            this.sliderPosition = -slideWidth * this.currentPage * this.itemsPerPage;
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

    .bg-pattern-grid {
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0.05) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(0, 0, 0, 0.05) 1px, transparent 1px);
        background-size: 20px 20px;
    }

    @keyframes float-slow {

        0%,
        100% {
            transform: translateY(0) scale(1);
        }

        50% {
            transform: translateY(-15px) scale(1.05);
        }
    }

    .animate-float-slow {
        animation: float-slow 18s ease-in-out infinite;
    }

    /* Mobile-optimized slider styling */
    #pkg-slider-container {
        width: 100%;
    }

    #pkg-slider {
        width: 100%;
    }

    .pkg-card {
        padding: 0.5rem;
    }

    @media (max-width: 767px) {

        /* Mobile specific styling */
        #pkg-slider {
            gap: 0;
        }

        .pkg-card {
            width: 100% !important;
            max-width: 100%;
            padding: 0.25rem;
        }

        /* Improved touch targets */
        #pkg-arrow-prev,
        #pkg-arrow-next {
            width: 44px;
            height: 44px;
        }

        #pkg-pagination button {
            width: 10px;
            height: 10px;
            margin: 0 6px;
        }
    }

    @media (min-width: 768px) {
        #pkg-slider {
            gap: 2rem;
        }

        .pkg-card {
            width: 384px;
            padding: 0;
        }
    }

    /* Hide scrollbar */
    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>
