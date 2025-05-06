<section id="packaging" class="py-20 sm:py-24 lg:py-32 bg-white relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute inset-0 bg-gradient-to-br from-white via-accent/5 to-white/90 -z-10"></div>
    <div class="absolute inset-0 opacity-[0.02] bg-pattern-dots -z-10"></div>

    <!-- Floating elements for visual interest -->
    <div class="absolute top-20 right-10 w-64 h-64 bg-primary/5 rounded-full blur-3xl -z-10 animate-pulse-slow"></div>
    <div class="absolute bottom-20 left-10 w-72 h-72 bg-secondary/5 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-12">
        <!-- Section header -->
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
        </div>
            
        <!-- EXCITING CARD-BASED PACKAGING SHOWCASE -->
        <div class="relative" data-aos="fade-up" data-aos-delay="100">
            <!-- Enhanced animated background elements -->
            <div class="absolute inset-x-0 -top-10 h-64 bg-gradient-to-r from-primary/5 via-transparent to-secondary/5 blur-3xl -z-10 animate-pulse-slow"></div>
            <div class="absolute inset-x-0 -bottom-20 h-48 bg-gradient-to-r from-secondary/5 via-accent/5 to-primary/5 blur-3xl -z-10 animate-float-slow"></div>
            
            <!-- Horizontal scrollable packaging cards with navigation arrows -->
            <div class="relative mt-8" id="packaging-container">
                <!-- Left navigation arrow -->
                <button id="scroll-left" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white text-primary rounded-full shadow-lg border border-accent/10 w-12 h-12 flex items-center justify-center backdrop-blur-sm transition-all duration-300 -translate-x-6 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                
                <!-- Horizontal scrollable container -->
                <div class="overflow-x-auto hide-scrollbar py-4 px-12" id="packaging-scroll-container">
                    <div class="flex gap-6 min-w-max" id="packaging-grid">
                        @php
                            $packagingData = config('packaging-data');
                            $packageIcons = [
                                'pet' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>',
                                'tetra_pak' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>',
                                'sleek_can' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>',
                                'aluminum_can' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8"></path></svg>',
                                'tin_can' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>',
                                'carnation_can' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>',
                                'bulk' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>',
                            ];
                            $packageTypes = [
                                'pet' => 'bottle',
                                'tetra_pak' => 'bottle',
                                'sleek_can' => 'can',
                                'aluminum_can' => 'can',
                                'tin_can' => 'can',
                                'carnation_can' => 'can',
                                'bulk' => 'bulk',
                            ];
                            
                            // Enhanced styling options for package types
                            $packageStyles = [
                                'pet' => 'bg-primary/10 text-primary border-primary/20 hover:bg-primary hover:text-white',
                                'tetra_pak' => 'bg-primary/10 text-primary border-primary/20 hover:bg-primary hover:text-white',
                                'sleek_can' => 'bg-secondary/10 text-secondary border-secondary/20 hover:bg-secondary hover:text-white',
                                'aluminum_can' => 'bg-secondary/10 text-secondary border-secondary/20 hover:bg-secondary hover:text-white',
                                'tin_can' => 'bg-secondary/10 text-secondary border-secondary/20 hover:bg-secondary hover:text-white',
                                'carnation_can' => 'bg-secondary/10 text-secondary border-secondary/20 hover:bg-secondary hover:text-white',
                                'bulk' => 'bg-accent/10 text-accent border-accent/20 hover:bg-accent hover:text-white',
                            ];
                        @endphp
                        
                        @foreach($packagingData as $index => $item)
                        <div class="packaging-card flex-shrink-0 w-96 bg-white/95 backdrop-filter backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl border border-accent/10 overflow-hidden transform transition-all duration-300 hover:-translate-y-1.5 group" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                            <!-- Enhanced card header -->
                            <div class="bg-gradient-to-r from-primary/10 via-transparent to-secondary/10 p-5 border-b border-accent/10 relative">
                                <!-- Background pattern for the header -->
                                <div class="absolute inset-0 opacity-10 bg-pattern-grid"></div>
                                
                                <h3 class="font-bold text-primary text-lg flex items-center gap-3">
                                    <div class="flex-shrink-0 w-10 h-10 flex items-center justify-center rounded-full bg-gradient-to-r from-primary to-secondary text-white text-lg shadow-md group-hover:scale-110 transition-transform duration-300">
                                        {{ $index + 1 }}
                                    </div>
                                    <span class="group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-primary group-hover:to-secondary transition-all duration-300">{{ $item['product'] }}</span>
                                </h3>
                            </div>
                            
                            <!-- Card body with packaging options in a vertical layout -->
                            <div class="p-5 h-[440px] overflow-y-auto hide-scrollbar">
                                <div class="flex flex-col gap-3">
                                    @foreach(['pet', 'tetra_pak', 'sleek_can', 'aluminum_can', 'tin_can', 'carnation_can', 'bulk'] as $pkgKey)
                                        <div class="packaging-option transition-all duration-300 w-full" data-type="{{ $packageTypes[$pkgKey] }}">
                                            @if($item[$pkgKey] != '-')
                                                <!-- Available packaging option -->
                                                <div class="relative bg-white hover:bg-gradient-to-br hover:from-white hover:to-primary/5 p-3 rounded-xl border {{ explode(' ', $packageStyles[$pkgKey])[2] }} transition-all duration-300 hover:shadow-md group flex items-center gap-3">
                                                    <!-- Icon container with enhanced styling -->
                                                    <div class="flex-shrink-0 {{ explode(' ', $packageStyles[$pkgKey])[0] }} {{ explode(' ', $packageStyles[$pkgKey])[1] }} rounded-full p-2.5 border {{ explode(' ', $packageStyles[$pkgKey])[2] }} transition-all duration-300 {{ explode(' ', $packageStyles[$pkgKey])[3] }} {{ explode(' ', $packageStyles[$pkgKey])[4] }}">
                                                        {!! $packageIcons[$pkgKey] !!}
                                                    </div>
                                                    
                                                    <div class="flex-grow">
                                                        <div class="text-xs font-semibold uppercase tracking-wider {{ explode(' ', $packageStyles[$pkgKey])[1] }}/70">{{ str_replace('_', ' ', $pkgKey) }}</div>
                                                        <div class="font-medium text-dark/90 group-hover:text-dark/100">{{ $item[$pkgKey] }}</div>
                                                    </div>
                                                    
                                                    <!-- Visual indicator for package type -->
                                                    <div class="absolute -bottom-0.5 right-4 h-1 w-8 rounded-t-lg {{ explode(' ', $packageStyles[$pkgKey])[0] }}/50 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                                </div>
                                            @else
                                                <!-- Not available packaging option -->
                                                <div class="relative bg-gray-50 p-3 rounded-xl border border-gray-200 opacity-75 flex items-center gap-3">
                                                    <!-- Desaturated icon container -->
                                                    <div class="flex-shrink-0 bg-gray-100 text-gray-400 rounded-full p-2.5 border border-gray-200">
                                                        {!! $packageIcons[$pkgKey] !!}
                                                    </div>
                                                    
                                                    <div class="flex-grow">
                                                        <div class="text-xs font-semibold uppercase tracking-wider text-gray-400">{{ str_replace('_', ' ', $pkgKey) }}</div>
                                                        <div class="font-medium text-gray-500">Not Available</div>
                                                    </div>
                                                    
                                                    <!-- Unavailable indicator icon -->
                                                    <div class="flex-shrink-0 text-gray-300">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Right navigation arrow -->
                <button id="scroll-right" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white text-primary rounded-full shadow-lg border border-accent/10 w-12 h-12 flex items-center justify-center backdrop-blur-sm transition-all duration-300 translate-x-6 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- Add progress indicator dots -->
                <div class="flex justify-center mt-6 gap-2" id="scroll-dots">
                    <!-- Will be dynamically populated via JS -->
                </div>
            </div>
        </div>
        
        <!-- Interactive packaging key -->
        <div class="mt-12 flex flex-wrap justify-center gap-3" data-aos="fade-up" data-aos-delay="200">
            <div class="bg-white/80 backdrop-blur-sm px-5 py-3 rounded-xl shadow-md border border-accent/10">
                <div class="text-center mb-3 text-primary/70 font-semibold">Packaging Types Key</div>
                <div class="flex flex-wrap gap-3 justify-center">
                    <div class="flex items-center gap-2 bg-primary/5 px-3 py-1.5 rounded-full">
                        <span class="w-3 h-3 bg-primary rounded-full"></span>
                        <span class="text-sm text-primary/80">Bottles</span>
                    </div>
                    <div class="flex items-center gap-2 bg-secondary/5 px-3 py-1.5 rounded-full">
                        <span class="w-3 h-3 bg-secondary rounded-full"></span>
                        <span class="text-sm text-secondary/80">Cans</span>
                    </div>
                    <div class="flex items-center gap-2 bg-accent/5 px-3 py-1.5 rounded-full">
                        <span class="w-3 h-3 bg-accent rounded-full"></span>
                        <span class="text-sm text-accent/80">Bulk</span>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Horizontal scrolling functionality
                const scrollContainer = document.getElementById('packaging-scroll-container');
                const scrollLeftBtn = document.getElementById('scroll-left');
                const scrollRightBtn = document.getElementById('scroll-right');
                const packagingItems = document.querySelectorAll('.packaging-card');
                const dotsContainer = document.getElementById('scroll-dots');
                
                // Calculate how many dots we need
                const cardWidth = 384; // 96*4 - width + gap
                const containerWidth = scrollContainer.clientWidth;
                const visibleCards = Math.floor(containerWidth / cardWidth);
                const totalScrollWidth = scrollContainer.scrollWidth;
                const numDots = Math.ceil(packagingItems.length / visibleCards);
                
                // Create progress dots
                for (let i = 0; i < numDots; i++) {
                    const dot = document.createElement('button');
                    dot.classList.add('w-2.5', 'h-2.5', 'rounded-full', 'bg-gray-300', 'hover:bg-gray-400', 'transition-all');
                    if (i === 0) {
                        dot.classList.remove('bg-gray-300');
                        dot.classList.add('bg-primary');
                    }
                    dot.setAttribute('data-index', i);
                    dot.addEventListener('click', () => {
                        const scrollAmount = i * containerWidth;
                        scrollContainer.scrollTo({
                            left: scrollAmount,
                            behavior: 'smooth'
                        });
                    });
                    dotsContainer.appendChild(dot);
                }
                
                // Scroll left button
                scrollLeftBtn.addEventListener('click', () => {
                    scrollContainer.scrollBy({
                        left: -containerWidth,
                        behavior: 'smooth'
                    });
                });
                
                // Scroll right button
                scrollRightBtn.addEventListener('click', () => {
                    scrollContainer.scrollBy({
                        left: containerWidth,
                        behavior: 'smooth'
                    });
                });
                
                // Update active dot based on scroll position
                scrollContainer.addEventListener('scroll', () => {
                    const scrollPosition = scrollContainer.scrollLeft;
                    const activeDotIndex = Math.floor(scrollPosition / containerWidth);
                    
                    const dots = dotsContainer.querySelectorAll('button');
                    dots.forEach((dot, index) => {
                        if (index === activeDotIndex) {
                            dot.classList.remove('bg-gray-300');
                            dot.classList.add('bg-primary');
                        } else {
                            dot.classList.remove('bg-primary');
                            dot.classList.add('bg-gray-300');
                        }
                    });
                    
                    // Show/hide scroll buttons based on scroll position
                    if (scrollPosition <= 0) {
                        scrollLeftBtn.classList.add('opacity-50', 'cursor-not-allowed');
                    } else {
                        scrollLeftBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                    }
                    
                    if (scrollPosition >= totalScrollWidth - containerWidth - 10) {
                        scrollRightBtn.classList.add('opacity-50', 'cursor-not-allowed');
                    } else {
                        scrollRightBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                    }
                });
            });
        </script>
    </div>
</section>

<style>
    .bg-pattern-dots {
        background-image: radial-gradient(circle, rgba(0, 0, 0, 0.1) 1px, transparent 1px);
        background-size: 24px 24px;
    }

    @keyframes pulse-slow {

        0%,
        100% {
            opacity: 0.6;
            transform: scale(1);
        }

        50% {
            opacity: 0.8;
            transform: scale(1.05);
        }
    }

    .animate-pulse-slow {
        animation: pulse-slow 8s cubic-bezier(0.4, 0, 0.6, 1) infinite;
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
