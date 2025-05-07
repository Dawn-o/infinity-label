<section id="certifications" class="py-24 bg-white relative overflow-hidden">
    <div class="absolute top-20 right-0 w-96 h-96 bg-accent/30 rounded-full blur-3xl -z-10"></div>
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-block mb-3 py-1 px-3 bg-accent/50 rounded-full">
                <span class="text-secondary font-semibold text-sm">Quality Standards</span>
            </div>
            <h2 class="text-3xl font-bold text-primary">Our Certifications</h2>
            <p class="mt-4 max-w-2xl mx-auto text-dark/80">We pride ourselves on meeting and exceeding the highest
                industry standards. Our
                products are certified by leading regulatory bodies worldwide.</p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6 sm:gap-8">
            <!-- Certification images with tooltips -->
            <div class="certification-item relative group" data-aos="fade-up" x-data="{ tooltip: false }">
                <img src="{{ asset('assets/images/certifications/aco certified organic.png') }}"
                    alt="ACO Certified Organic" class="w-full h-32 object-contain mx-auto transition-all">

                <!-- Tooltip -->
                <div class="tooltip-container">
                    <div @mouseenter="tooltip = true" @mouseleave="tooltip = false"
                        class="absolute inset-0 cursor-pointer flex items-center justify-center">
                        <div x-show="tooltip" x-transition.opacity.duration.150ms class="tooltip-content">
                            <h4 class="font-semibold text-sm">ACO Certified Organic</h4>
                            <p class="text-xs mt-1">Australian Certified Organic ensures products are grown and
                                processed without synthetic chemicals.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="certification-item relative group" data-aos="fade-up" data-aos-delay="50"
                x-data="{ tooltip: false }">
                <img src="{{ asset('assets/images/certifications/no artificial color.jpg') }}"
                    alt="No Artificial Colors" class="w-full h-32 object-contain mx-auto transition-all">

                <!-- Tooltip -->
                <div class="tooltip-container">
                    <div @mouseenter="tooltip = true" @mouseleave="tooltip = false"
                        class="absolute inset-0 cursor-pointer flex items-center justify-center">
                        <div x-show="tooltip" x-transition.opacity.duration.150ms class="tooltip-content">
                            <h4 class="font-semibold text-sm">No Artificial Colors</h4>
                            <p class="text-xs mt-1">Our products contain no synthetic dyes or artificial coloring
                                agents.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="certification-item relative group" data-aos="fade-up" data-aos-delay="100"
                x-data="{ tooltip: false }">
                <img src="{{ asset('assets/images/certifications/no artificial flavors.jpg') }}"
                    alt="No Artificial Flavors" class="w-full h-32 object-contain mx-auto transition-all">

                <!-- Tooltip -->
                <div class="tooltip-container">
                    <div @mouseenter="tooltip = true" @mouseleave="tooltip = false"
                        class="absolute inset-0 cursor-pointer flex items-center justify-center">
                        <div x-show="tooltip" x-transition.opacity.duration.150ms class="tooltip-content">
                            <h4 class="font-semibold text-sm">No Artificial Flavors</h4>
                            <p class="text-xs mt-1">Our products contain only natural flavors without synthetic
                                additives.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="certification-item relative group" data-aos="fade-up" data-aos-delay="150"
                x-data="{ tooltip: false }">
                <img src="{{ asset('assets/images/certifications/usda organic.png') }}" alt="USDA Organic"
                    class="w-full h-32 object-contain mx-auto transition-all">

                <!-- Tooltip -->
                <div class="tooltip-container">
                    <div @mouseenter="tooltip = true" @mouseleave="tooltip = false"
                        class="absolute inset-0 cursor-pointer flex items-center justify-center">
                        <div x-show="tooltip" x-transition.opacity.duration.150ms class="tooltip-content">
                            <h4 class="font-semibold text-sm">USDA Organic</h4>
                            <p class="text-xs mt-1">USDA Organic certification ensures products are grown and processed
                                according to federal guidelines.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="certification-item relative group" data-aos="fade-up" data-aos-delay="200"
                x-data="{ tooltip: false }">
                <img src="{{ asset('assets/images/certifications/kosher.jpg') }}" alt="Kosher"
                    class="w-full h-32 object-contain mx-auto transition-all">

                <!-- Tooltip -->
                <div class="tooltip-container">
                    <div @mouseenter="tooltip = true" @mouseleave="tooltip = false"
                        class="absolute inset-0 cursor-pointer flex items-center justify-center">
                        <div x-show="tooltip" x-transition.opacity.duration.150ms class="tooltip-content">
                            <h4 class="font-semibold text-sm">Kosher</h4>
                            <p class="text-xs mt-1">Kosher certification ensures products conform to Jewish dietary
                                laws.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="certification-item relative group" data-aos="fade-up" data-aos-delay="250"
                x-data="{ tooltip: false }">
                <img src="{{ asset('assets/images/certifications/non gmo.png') }}" alt="Non GMO"
                    class="w-full h-32 object-contain mx-auto transition-all">

                <!-- Tooltip -->
                <div class="tooltip-container">
                    <div @mouseenter="tooltip = true" @mouseleave="tooltip = false"
                        class="absolute inset-0 cursor-pointer flex items-center justify-center">
                        <div x-show="tooltip" x-transition.opacity.duration.150ms class="tooltip-content">
                            <h4 class="font-semibold text-sm">Non GMO</h4>
                            <p class="text-xs mt-1">Non-GMO certification ensures products are free from genetically
                                modified organisms.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="certification-item relative group" data-aos="fade-up" x-data="{ tooltip: false }">
                <img src="{{ asset('assets/images/certifications/gmp.png') }}" alt="GMP"
                    class="w-full h-32 object-contain mx-auto transition-all">

                <!-- Tooltip -->
                <div class="tooltip-container">
                    <div @mouseenter="tooltip = true" @mouseleave="tooltip = false"
                        class="absolute inset-0 cursor-pointer flex items-center justify-center">
                        <div x-show="tooltip" x-transition.opacity.duration.150ms class="tooltip-content">
                            <h4 class="font-semibold text-sm">GMP</h4>
                            <p class="text-xs mt-1">Good Manufacturing Practice (GMP) certification ensures products
                                are consistently produced and controlled according to quality standards.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="certification-item relative group" data-aos="fade-up" data-aos-delay="50"
                x-data="{ tooltip: false }">
                <img src="{{ asset('assets/images/certifications/haccp.jpg') }}" alt="HACCP"
                    class="w-full h-32 object-contain mx-auto transition-all">

                <!-- Tooltip -->
                <div class="tooltip-container">
                    <div @mouseenter="tooltip = true" @mouseleave="tooltip = false"
                        class="absolute inset-0 cursor-pointer flex items-center justify-center">
                        <div x-show="tooltip" x-transition.opacity.duration.150ms class="tooltip-content">
                            <h4 class="font-semibold text-sm">HACCP</h4>
                            <p class="text-xs mt-1">Hazard Analysis and Critical Control Points (HACCP) certification
                                ensures products are safe for consumption.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="certification-item relative group" data-aos="fade-up" data-aos-delay="100"
                x-data="{ tooltip: false }">
                <img src="{{ asset('assets/images/certifications/vegan.png') }}" alt="Vegan"
                    class="w-full h-32 object-contain mx-auto transition-all">

                <!-- Tooltip -->
                <div class="tooltip-container">
                    <div @mouseenter="tooltip = true" @mouseleave="tooltip = false"
                        class="absolute inset-0 cursor-pointer flex items-center justify-center">
                        <div x-show="tooltip" x-transition.opacity.duration.150ms class="tooltip-content">
                            <h4 class="font-semibold text-sm">Vegan</h4>
                            <p class="text-xs mt-1">Vegan certification ensures products do not contain any animal
                                ingredients or by-products.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="certification-item relative group" data-aos="fade-up" data-aos-delay="150"
                x-data="{ tooltip: false }">
                <img src="{{ asset('assets/images/certifications/bpa free.jpg') }}" alt="BPA Free"
                    class="w-full h-32 object-contain mx-auto transition-all">

                <!-- Tooltip -->
                <div class="tooltip-container">
                    <div @mouseenter="tooltip = true" @mouseleave="tooltip = false"
                        class="absolute inset-0 cursor-pointer flex items-center justify-center">
                        <div x-show="tooltip" x-transition.opacity.duration.150ms class="tooltip-content">
                            <h4 class="font-semibold text-sm">BPA Free</h4>
                            <p class="text-xs mt-1">BPA Free certification ensures products do not contain Bisphenol A,
                                a harmful industrial chemical.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="certification-item relative group" data-aos="fade-up" data-aos-delay="200"
                x-data="{ tooltip: false }">
                <img src="{{ asset('assets/images/certifications/halal.jpg') }}" alt="Halal"
                    class="w-full h-32 object-contain mx-auto transition-all">

                <!-- Tooltip -->
                <div class="tooltip-container">
                    <div @mouseenter="tooltip = true" @mouseleave="tooltip = false"
                        class="absolute inset-0 cursor-pointer flex items-center justify-center">
                        <div x-show="tooltip" x-transition.opacity.duration.150ms class="tooltip-content">
                            <h4 class="font-semibold text-sm">Halal</h4>
                            <p class="text-xs mt-1">Halal certification ensures products conform to Islamic dietary
                                laws.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="certification-item relative group" data-aos="fade-up" data-aos-delay="250"
                x-data="{ tooltip: false }">
                <img src="{{ asset('assets/images/certifications/fda.jpg') }}" alt="FDA"
                    class="w-full h-32 object-contain mx-auto transition-all">

                <!-- Tooltip -->
                <div class="tooltip-container">
                    <div @mouseenter="tooltip = true" @mouseleave="tooltip = false"
                        class="absolute inset-0 cursor-pointer flex items-center justify-center">
                        <div x-show="tooltip" x-transition.opacity.duration.150ms class="tooltip-content">
                            <h4 class="font-semibold text-sm">FDA</h4>
                            <p class="text-xs mt-1">FDA certification ensures products meet the standards set by the
                                U.S. Food and Drug Administration.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="certification-item relative group" data-aos="fade-up" x-data="{ tooltip: false }">
                <img src="{{ asset('assets/images/certifications/brc.jpg') }}" alt="BRC"
                    class="w-full h-32 object-contain mx-auto transition-all">

                <!-- Tooltip -->
                <div class="tooltip-container">
                    <div @mouseenter="tooltip = true" @mouseleave="tooltip = false"
                        class="absolute inset-0 cursor-pointer flex items-center justify-center">
                        <div x-show="tooltip" x-transition.opacity.duration.150ms class="tooltip-content">
                            <h4 class="font-semibold text-sm">BRC</h4>
                            <p class="text-xs mt-1">BRC certification ensures products meet the standards set by the
                                British Retail Consortium.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tooltip styles -->
    <style>
        .certification-item {
            background-color: white;
            border-radius: 1rem;
            padding: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
            border: 1px solid rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .certification-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            border-color: rgba(var(--color-primary-rgb), 0.2);
        }

        .certification-item img {
            filter: grayscale(20%);
            opacity: 0.9;
            transition: all 0.3s ease;
        }

        .certification-item:hover img {
            filter: grayscale(0%);
            opacity: 1;
        }

        /* Tooltip styling */
        .tooltip-container {
            position: absolute;
            inset: 0;
            z-index: 10;
        }

        .tooltip-content {
            position: absolute;
            bottom: calc(100% + 10px);
            left: 50%;
            transform: translateX(-50%);
            background: white;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            width: max-content;
            max-width: 200px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            border: 1px solid rgba(var(--color-primary-rgb), 0.1);
            text-align: center;
        }

        .tooltip-content:after {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -8px;
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 8px solid white;
        }

        /* Mobile optimization - horizontal scrolling experience */
        @media (max-width: 640px) {
            #certifications .grid {
                grid-template-columns: repeat(3, 200px);
                grid-gap: 1rem;
                padding-bottom: 1rem;
                overflow-x: auto;
                scroll-snap-type: x mandatory;
                scrollbar-width: none;
                /* Firefox */
                -ms-overflow-style: none;
                /* IE/Edge */
            }

            #certifications .grid::-webkit-scrollbar {
                display: none;
                /* Chrome/Safari/Opera */
            }

            .certification-item {
                scroll-snap-align: center;
            }
        }
    </style>
</section>
