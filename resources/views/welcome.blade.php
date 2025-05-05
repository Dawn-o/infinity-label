<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Yobe - Your Own Brand Expert. Premium Organic Coconut Products Manufacturer">
    <title>Yobe - Your Own Brand Expert</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#2E4F4F',
                        'secondary': '#0E8388',
                        'accent': '#CBE4DE',
                        'light': '#F9F9F9',
                        'dark': '#2C3333',
                    },
                    fontFamily: {
                        'sans': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Add AOS for scroll animations -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        /* Blob shape */
        .blob {
            border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%;
            animation: morph 8s ease-in-out infinite;
        }
        @keyframes morph {
            0% { border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%; }
            25% { border-radius: 55% 45% 30% 70% / 55% 30% 70% 45%; }
            50% { border-radius: 30% 70% 55% 45% / 30% 65% 35% 70%; }
            75% { border-radius: 65% 35% 35% 65% / 40% 60% 40% 60%; }
            100% { border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%; }
        }
        .circular-image {
            clip-path: circle(50% at 50% 50%);
        }
    </style>
</head>

<body class="bg-light text-dark font-sans antialiased">
    <!-- Header with fixed navigation -->
    <header class="fixed w-full bg-white/95 backdrop-blur-sm z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            <div class="flex items-center justify-between h-16 md:h-20">
                <div class="flex items-center space-x-2">
                    <div class="h-9 w-9 bg-gradient-to-br from-secondary to-primary rounded-lg flex items-center justify-center rotate-12 transform transition-transform group-hover:rotate-0">
                        <span class="text-white font-bold text-xl -rotate-12 transform transition-transform group-hover:rotate-0">Y</span>
                    </div>
                    <div class="text-2xl font-bold text-primary tracking-tight group">
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary">Yobe.</span>
                    </div>
                </div>
                
                <!-- Mobile menu button -->
                <button type="button" class="md:hidden p-2 text-dark rounded-lg hover:bg-accent/50 transition-colors" id="mobile-menu-button">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                
                <!-- Desktop navigation -->
                <nav class="hidden md:flex space-x-1">
                    <a href="#home" class="px-4 py-2 text-dark hover:text-secondary hover:bg-accent/30 rounded-lg transition-all font-medium">Home</a>
                    <a href="#about" class="px-4 py-2 text-dark hover:text-secondary hover:bg-accent/30 rounded-lg transition-all font-medium">About</a>
                    <a href="#history" class="px-4 py-2 text-dark hover:text-secondary hover:bg-accent/30 rounded-lg transition-all font-medium">History</a>
                    <a href="#vision-mission" class="px-4 py-2 text-dark hover:text-secondary hover:bg-accent/30 rounded-lg transition-all font-medium">Vision & Mission</a>
                    <a href="#products" class="px-4 py-2 text-dark hover:text-secondary hover:bg-accent/30 rounded-lg transition-all font-medium">Products</a>
                    <a href="#certifications" class="px-4 py-2 text-dark hover:text-secondary hover:bg-accent/30 rounded-lg transition-all font-medium">Certifications</a>
                </nav>
            </div>
        </div>
        
        <!-- Mobile navigation -->
        <div class="hidden md:hidden bg-white border-t border-accent/50" id="mobile-menu">
            <div class="px-6 py-3 space-y-1">
                <a href="#home" class="block py-2 px-3 text-dark font-medium rounded-lg hover:bg-accent/30 transition-colors">Home</a>
                <a href="#about" class="block py-2 px-3 text-dark font-medium rounded-lg hover:bg-accent/30 transition-colors">About</a>
                <a href="#history" class="block py-2 px-3 text-dark font-medium rounded-lg hover:bg-accent/30 transition-colors">History</a>
                <a href="#vision-mission" class="block py-2 px-3 text-dark font-medium rounded-lg hover:bg-accent/30 transition-colors">Vision & Mission</a>
                <a href="#products" class="block py-2 px-3 text-dark font-medium rounded-lg hover:bg-accent/30 transition-colors">Products</a>
                <a href="#certifications" class="block py-2 px-3 text-dark font-medium rounded-lg hover:bg-accent/30 transition-colors">Certifications</a>
            </div>
        </div>
    </header>

    <!-- Hero Section with Background Design -->
    <section id="home" class="relative pt-32 pb-24 md:pt-40 md:pb-32 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-accent/40 to-light z-0"></div>
        <!-- Decorative Circles -->
        <div class="absolute top-20 left-10 w-64 h-64 bg-secondary/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-80 h-80 bg-primary/10 rounded-full blur-3xl"></div>
        
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 text-center relative z-10">
            <div data-aos="fade-up" data-aos-duration="1000">
                <div class="inline-block mb-6">
                    <div class="blob mx-auto mb-8 w-28 h-28 md:w-36 md:h-36 bg-gradient-to-br from-secondary to-primary flex items-center justify-center">
                        <span class="text-white text-4xl md:text-5xl font-bold">Y</span>
                    </div>
                </div>
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-4 leading-tight">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary">Yobe</span>
                </h1>
                <p class="text-xl md:text-2xl text-secondary font-light mb-5">Your Own Brand Expert</p>
                <p class="max-w-2xl mx-auto text-dark/80 mb-10">Premium organic coconut products crafted with care for superior quality and sustainability</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#products" class="inline-block px-8 py-3.5 bg-secondary text-white font-medium rounded-lg shadow-sm hover:shadow-lg transition-all transform hover:-translate-y-1 focus:ring-2 focus:ring-secondary/50 focus:outline-none">
                        <span>Discover Products</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <a href="#about" class="inline-block px-8 py-3.5 bg-white text-secondary border border-secondary font-medium rounded-lg hover:bg-accent/20 transition-all transform hover:-translate-y-1 focus:ring-2 focus:ring-secondary/50 focus:outline-none">
                        <span>Learn More</span>
                        <i class="fas fa-info-circle ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Wave Divider -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120" fill="#ffffff">
                <path fill-opacity="1" d="M0,96L48,85.3C96,75,192,53,288,48C384,43,480,53,576,69.3C672,85,768,107,864,101.3C960,96,1056,64,1152,48C1248,32,1344,32,1392,32L1440,32L1440,120L1392,120C1344,120,1248,120,1152,120C1056,120,960,120,864,120C768,120,672,120,576,120C480,120,384,120,288,120C192,120,96,120,48,120L0,120Z"></path>
            </svg>
        </div>
    </section>

    <!-- About Section with Image -->
    <section id="about" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="w-full md:w-1/2" data-aos="fade-right">
                    <div class="relative">
                        <div class="absolute -top-6 -left-6 w-24 h-24 bg-accent rounded-lg -z-10"></div>
                        <div class="w-full h-72 md:h-96 bg-secondary/20 rounded-lg overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1581375074612-d1fd0e661aeb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Coconut Processing" class="w-full h-full object-cover" />
                        </div>
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-secondary/30 rounded-lg -z-10"></div>
                    </div>
                </div>
                
                <div class="w-full md:w-1/2" data-aos="fade-left" data-aos-delay="100">
                    <div class="inline-block mb-3 py-1 px-3 bg-accent/30 rounded-full">
                        <span class="text-secondary font-semibold text-sm">About Us</span>
                    </div>
                    <h2 class="text-3xl font-bold text-primary mb-6">The Yobe Story</h2>
                    <div class="space-y-4 text-dark/80 leading-relaxed">
                        <p>At Yobe, we are dedicated to producing the highest quality coconut products using sustainable and
                            organic farming practices. Our state-of-the-art manufacturing facility combines traditional wisdom with
                            modern technology to preserve the natural goodness of coconuts.</p>
                        <p>We work directly with local farmers to ensure fair trade practices and maintain the
                            highest standards of quality from farm to table. Our commitment to sustainability extends throughout our supply chain.</p>
                        <p>With over two decades of experience in coconut processing, we've perfected our techniques
                            to maximize nutrition, flavor, and purity in every product we offer.</p>
                    </div>
                    <div class="mt-8 flex items-center space-x-6">
                        <div class="flex items-center">
                            <i class="fas fa-leaf text-secondary text-xl mr-2"></i>
                            <span class="font-medium">100% Organic</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-globe-americas text-secondary text-xl mr-2"></i>
                            <span class="font-medium">Eco-friendly</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- History Section Redesigned -->
    <section id="history" class="py-24 bg-accent/20 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full -mr-32 -mt-32"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-secondary/5 rounded-full -ml-32 -mb-32"></div>
        
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="inline-block mb-3 py-1 px-3 bg-accent/50 rounded-full">
                    <span class="text-secondary font-semibold text-sm">Our Journey</span>
                </div>
                <h2 class="text-3xl font-bold text-primary">Our History</h2>
            </div>
            
            <div class="relative">
                <!-- Vertical Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-secondary/30"></div>
                
                <div class="space-y-16">
                    <div class="flex flex-col md:flex-row items-center" data-aos="fade-up">
                        <div class="md:w-1/2 md:pr-12 md:text-right">
                            <div class="mb-2 text-xl font-semibold text-secondary">2000</div>
                            <h3 class="text-2xl font-bold mb-3">The Beginning</h3>
                            <p class="text-dark/80">Founded by a family of coconut farmers, Yobe began as a small-scale operation focused on
                                bringing traditional coconut products to local markets.</p>
                        </div>
                        <div class="mx-auto my-6 md:my-0 w-12 h-12 bg-secondary rounded-full flex items-center justify-center z-10 shadow-lg">
                            <i class="fas fa-seedling text-white"></i>
                        </div>
                        <div class="md:w-1/2 md:pl-12 md:text-left"></div>
                    </div>
                    
                    <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="md:w-1/2 md:pr-12 md:text-right"></div>
                        <div class="mx-auto my-6 md:my-0 w-12 h-12 bg-secondary rounded-full flex items-center justify-center z-10 shadow-lg">
                            <i class="fas fa-ship text-white"></i>
                        </div>
                        <div class="md:w-1/2 md:pl-12 md:text-left">
                            <div class="mb-2 text-xl font-semibold text-secondary">2005</div>
                            <h3 class="text-2xl font-bold mb-3">Global Expansion</h3>
                            <p class="text-dark/80">We expanded our operations to include international exports, recognizing the global demand for
                                high-quality, organic coconut products.</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="md:w-1/2 md:pr-12 md:text-right">
                            <div class="mb-2 text-xl font-semibold text-secondary">2010</div>
                            <h3 class="text-2xl font-bold mb-3">Innovation</h3>
                            <p class="text-dark/80">We invested in cutting-edge processing technology that allowed us to maintain the nutritional
                                integrity of our products while meeting international safety standards.</p>
                        </div>
                        <div class="mx-auto my-6 md:my-0 w-12 h-12 bg-secondary rounded-full flex items-center justify-center z-10 shadow-lg">
                            <i class="fas fa-flask text-white"></i>
                        </div>
                        <div class="md:w-1/2 md:pl-12 md:text-left"></div>
                    </div>
                    
                    <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="md:w-1/2 md:pr-12 md:text-right"></div>
                        <div class="mx-auto my-6 md:my-0 w-12 h-12 bg-secondary rounded-full flex items-center justify-center z-10 shadow-lg">
                            <i class="fas fa-trophy text-white"></i>
                        </div>
                        <div class="md:w-1/2 md:pl-12 md:text-left">
                            <div class="mb-2 text-xl font-semibold text-secondary">Today</div>
                            <h3 class="text-2xl font-bold mb-3">Industry Leader</h3>
                            <p class="text-dark/80">Yobe is a leading manufacturer of premium coconut products, distributing to over 30
                                countries worldwide while maintaining our core values of quality, sustainability, and integrity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section id="vision-mission" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="inline-block mb-3 py-1 px-3 bg-accent/50 rounded-full">
                    <span class="text-secondary font-semibold text-sm">Our Purpose</span>
                </div>
                <h2 class="text-3xl font-bold text-primary">Vision & Mission</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-4xl mx-auto">
                <div class="bg-gradient-to-br from-white to-accent/10 p-8 rounded-xl shadow-sm border border-accent hover:shadow-lg transition-all transform hover:-translate-y-1" data-aos="fade-right">
                    <div class="mb-6 w-16 h-16 bg-accent/30 rounded-full flex items-center justify-center">
                        <i class="fas fa-eye text-2xl text-secondary"></i>
                    </div>
                    <h3 class="text-2xl mb-4 text-primary font-semibold">Our Vision</h3>
                    <p class="text-dark/80">To be the world's most trusted provider of organic coconut products, known for exceptional
                        quality, innovation, and environmental stewardship.</p>
                </div>
                <div class="bg-gradient-to-br from-white to-accent/10 p-8 rounded-xl shadow-sm border border-accent hover:shadow-lg transition-all transform hover:-translate-y-1" data-aos="fade-left" data-aos-delay="100">
                    <div class="mb-6 w-16 h-16 bg-accent/30 rounded-full flex items-center justify-center">
                        <i class="fas fa-bullseye text-2xl text-secondary"></i>
                    </div>
                    <h3 class="text-2xl mb-4 text-primary font-semibold">Our Mission</h3>
                    <p class="text-dark/80">We strive to deliver the purest coconut products while supporting sustainable agriculture,
                        empowering local communities, and promoting healthy living through nature's perfect food.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section with Enhanced Cards -->
    <section id="products" class="py-24 bg-accent/20 relative">
        <div class="absolute top-0 left-0 w-full h-20 bg-white" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0 0);"></div>
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="inline-block mb-3 py-1 px-3 bg-accent/50 rounded-full">
                    <span class="text-secondary font-semibold text-sm">What We Offer</span>
                </div>
                <h2 class="text-3xl font-bold text-primary">Our Products</h2>
                <p class="mt-4 max-w-2xl mx-auto text-dark/80">Discover our range of premium organic coconut products, crafted with care and expertise.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all group" data-aos="fade-up">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1544681280-d365c24676bd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                        <div class="w-full h-full bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                            <h3 class="text-xl font-semibold text-white">Coconut Water</h3>
                        </div>
                    </div>
                    <div class="p-6 border-t border-accent/30">
                        <p class="text-dark/80">Refreshing, naturally sweet coconut water harvested from young green coconuts,
                            packed with electrolytes and essential nutrients.</p>
                        <div class="mt-6 flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="px-3 py-1 text-xs bg-accent/20 text-secondary rounded-full">Organic</span>
                                <span class="px-3 py-1 text-xs bg-accent/20 text-secondary rounded-full">No Sugar</span>
                            </div>
                            <a href="#" class="text-secondary hover:text-primary transition-colors"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all group" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1624426835917-5e5205e74afe?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                        <div class="w-full h-full bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                            <h3 class="text-xl font-semibold text-white">Coconut Milk for Beverage</h3>
                        </div>
                    </div>
                    <div class="p-6 border-t border-accent/30">
                        <p class="text-dark/80">Smooth, creamy coconut milk perfect for smoothies, coffee, and as a dairy
                            alternative in your favorite drinks.</p>
                        <div class="mt-6 flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="px-3 py-1 text-xs bg-accent/20 text-secondary rounded-full">Dairy-free</span>
                                <span class="px-3 py-1 text-xs bg-accent/20 text-secondary rounded-full">Vegan</span>
                            </div>
                            <a href="#" class="text-secondary hover:text-primary transition-colors"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all group" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1598983062516-0520362fca51?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                        <div class="w-full h-full bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                            <h3 class="text-xl font-semibold text-white">Coconut Milk for Cooking</h3>
                        </div>
                    </div>
                    <div class="p-6 border-t border-accent/30">
                        <p class="text-dark/80">Rich, full-bodied coconut milk ideal for curries, soups, sauces, and desserts,
                            bringing authentic flavor to your culinary creations.</p>
                        <div class="mt-6 flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="px-3 py-1 text-xs bg-accent/20 text-secondary rounded-full">Creamy</span>
                                <span class="px-3 py-1 text-xs bg-accent/20 text-secondary rounded-full">Natural</span>
                            </div>
                            <a href="#" class="text-secondary hover:text-primary transition-colors"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- More product cards with same enhanced structure -->
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all group" data-aos="fade-up">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1589733955941-5eeaf752f6dd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                        <div class="w-full h-full bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                            <h3 class="text-xl font-semibold text-white">Coconut Flour</h3>
                        </div>
                    </div>
                    <div class="p-6 border-t border-accent/30">
                        <p class="text-dark/80">Gluten-free, high-fiber coconut flour, perfect for baking and cooking, offering a
                            nutritious alternative to conventional flours.</p>
                        <div class="mt-6 flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="px-3 py-1 text-xs bg-accent/20 text-secondary rounded-full">Gluten-free</span>
                                <span class="px-3 py-1 text-xs bg-accent/20 text-secondary rounded-full">High-fiber</span>
                            </div>
                            <a href="#" class="text-secondary hover:text-primary transition-colors"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all group" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1599856567835-8f648deaa3ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                        <div class="w-full h-full bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                            <h3 class="text-xl font-semibold text-white">Coconut Desiccated</h3>
                        </div>
                    </div>
                    <div class="p-6 border-t border-accent/30">
                        <p class="text-dark/80">Finely grated, dried coconut meat, ideal for baking, cooking, and as a topping for
                            desserts and breakfast dishes.</p>
                        <div class="mt-6 flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="px-3 py-1 text-xs bg-accent/20 text-secondary rounded-full">Unsweetened</span>
                                <span class="px-3 py-1 text-xs bg-accent/20 text-secondary rounded-full">Versatile</span>
                            </div>
                            <a href="#" class="text-secondary hover:text-primary transition-colors"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all group" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1604347625367-ec52e11b75f7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                        <div class="w-full h-full bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                            <h3 class="text-xl font-semibold text-white">Coconut Chips</h3>
                        </div>
                    </div>
                    <div class="p-6 border-t border-accent/30">
                        <p class="text-dark/80">Crunchy, lightly sweetened coconut chips, a perfect healthy snack option that's
                            both satisfying and nutritious.</p>
                        <div class="mt-6 flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="px-3 py-1 text-xs bg-accent/20 text-secondary rounded-full">Crunchy</span>
                                <span class="px-3 py-1 text-xs bg-accent/20 text-secondary rounded-full">Low Sugar</span>
                            </div>
                            <a href="#" class="text-secondary hover:text-primary transition-colors"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section Redesigned -->
    <section id="certifications" class="py-24 bg-white relative overflow-hidden">
        <div class="absolute top-20 right-0 w-96 h-96 bg-accent/30 rounded-full blur-3xl -z-10"></div>
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="inline-block mb-3 py-1 px-3 bg-accent/50 rounded-full">
                    <span class="text-secondary font-semibold text-sm">Quality Standards</span>
                </div>
                <h2 class="text-3xl font-bold text-primary">Our Certifications</h2>
                <p class="mt-4 max-w-2xl mx-auto text-dark/80">We pride ourselves on meeting and exceeding the highest industry standards. Our
                    products are certified by leading regulatory bodies worldwide.</p>
            </div>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6">
                <div class="group p-5 bg-light rounded-lg border border-accent hover:border-secondary hover:shadow-md transition-all flex flex-col items-center justify-center text-center" data-aos="zoom-in">
                    <div class="w-16 h-16 mb-4 bg-accent/30 group-hover:bg-accent/50 rounded-full flex items-center justify-center transition-all">
                        <i class="fas fa-check-circle text-2xl text-secondary"></i>
                    </div>
                    <span class="font-medium text-dark/90">ACO Certified Organic</span>
                </div>
                <div class="group p-5 bg-light rounded-lg border border-accent hover:border-secondary hover:shadow-md transition-all flex flex-col items-center justify-center text-center" data-aos="zoom-in" data-aos-delay="50">
                    <div class="w-16 h-16 mb-4 bg-accent/30 group-hover:bg-accent/50 rounded-full flex items-center justify-center transition-all">
                        <i class="fas fa-ban text-2xl text-secondary"></i>
                    </div>
                    <span class="font-medium text-dark/90">No Artificial Colors & Flavors</span>
                </div>
                <!-- More certification items with icons -->
                <div class="group p-5 bg-light rounded-lg border border-accent hover:border-secondary hover:shadow-md transition-all flex flex-col items-center justify-center text-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="w-16 h-16 mb-4 bg-accent/30 group-hover:bg-accent/50 rounded-full flex items-center justify-center transition-all">
                        <i class="fas fa-award text-2xl text-secondary"></i>
                    </div>
                    <span class="font-medium text-dark/90">USDA Organic</span>
                </div>
                <div class="group p-5 bg-light rounded-lg border border-accent hover:border-secondary hover:shadow-md transition-all flex flex-col items-center justify-center text-center" data-aos="zoom-in" data-aos-delay="150">
                    <div class="w-16 h-16 mb-4 bg-accent/30 group-hover:bg-accent/50 rounded-full flex items-center justify-center transition-all">
                        <i class="fas fa-star text-2xl text-secondary"></i>
                    </div>
                    <span class="font-medium text-dark/90">Kosher</span>
                </div>
                <div class="group p-5 bg-light rounded-lg border border-accent hover:border-secondary hover:shadow-md transition-all flex flex-col items-center justify-center text-center" data-aos="zoom-in" data-aos-delay="200">
                    <div class="w-16 h-16 mb-4 bg-accent/30 group-hover:bg-accent/50 rounded-full flex items-center justify-center transition-all">
                        <i class="fas fa-dna text-2xl text-secondary"></i>
                    </div>
                    <span class="font-medium text-dark/90">Non GMO</span>
                </div>
                <div class="group p-5 bg-light rounded-lg border border-accent hover:border-secondary hover:shadow-md transition-all flex flex-col items-center justify-center text-center" data-aos="zoom-in" data-aos-delay="250">
                    <div class="w-16 h-16 mb-4 bg-accent/30 group-hover:bg-accent/50 rounded-full flex items-center justify-center transition-all">
                        <i class="fas fa-tasks text-2xl text-secondary"></i>
                    </div>
                    <span class="font-medium text-dark/90">GMP</span>
                </div>
                <div class="group p-5 bg-light rounded-lg border border-accent hover:border-secondary hover:shadow-md transition-all flex flex-col items-center justify-center text-center" data-aos="zoom-in">
                    <div class="w-16 h-16 mb-4 bg-accent/30 group-hover:bg-accent/50 rounded-full flex items-center justify-center transition-all">
                        <i class="fas fa-shield-alt text-2xl text-secondary"></i>
                    </div>
                    <span class="font-medium text-dark/90">HACCP</span>
                </div>
                <div class="group p-5 bg-light rounded-lg border border-accent hover:border-secondary hover:shadow-md transition-all flex flex-col items-center justify-center text-center" data-aos="zoom-in" data-aos-delay="50">
                    <div class="w-16 h-16 mb-4 bg-accent/30 group-hover:bg-accent/50 rounded-full flex items-center justify-center transition-all">
                        <i class="fas fa-leaf text-2xl text-secondary"></i>
                    </div>
                    <span class="font-medium text-dark/90">Vegan</span>
                </div>
                <div class="group p-5 bg-light rounded-lg border border-accent hover:border-secondary hover:shadow-md transition-all flex flex-col items-center justify-center text-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="w-16 h-16 mb-4 bg-accent/30 group-hover:bg-accent/50 rounded-full flex items-center justify-center transition-all">
                        <i class="fas fa-wine-bottle text-2xl text-secondary"></i>
                    </div>
                    <span class="font-medium text-dark/90">BPA Free</span>
                </div>
                <div class="group p-5 bg-light rounded-lg border border-accent hover:border-secondary hover:shadow-md transition-all flex flex-col items-center justify-center text-center" data-aos="zoom-in" data-aos-delay="150">
                    <div class="w-16 h-16 mb-4 bg-accent/30 group-hover:bg-accent/50 rounded-full flex items-center justify-center transition-all">
                        <i class="fas fa-moon text-2xl text-secondary"></i>
                    </div>
                    <span class="font-medium text-dark/90">Halal</span>
                </div>
                <div class="group p-5 bg-light rounded-lg border border-accent hover:border-secondary hover:shadow-md transition-all flex flex-col items-center justify-center text-center" data-aos="zoom-in" data-aos-delay="200">
                    <div class="w-16 h-16 mb-4 bg-accent/30 group-hover:bg-accent/50 rounded-full flex items-center justify-center transition-all">
                        <i class="fas fa-file-medical-alt text-2xl text-secondary"></i>
                    </div>
                    <span class="font-medium text-dark/90">FDA</span>
                </div>
                <div class="group p-5 bg-light rounded-lg border border-accent hover:border-secondary hover:shadow-md transition-all flex flex-col items-center justify-center text-center" data-aos="zoom-in" data-aos-delay="250">
                    <div class="w-16 h-16 mb-4 bg-accent/30 group-hover:bg-accent/50 rounded-full flex items-center justify-center transition-all">
                        <i class="fas fa-certificate text-2xl text-secondary"></i>
                    </div>
                    <span class="font-medium text-dark/90">BRC</span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact & CTA Section (New) -->
    <section id="contact" class="relative py-24 bg-gradient-to-br from-primary to-secondary text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -ml-48 -mt-48"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full -mr-48 -mb-48"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-10">
                <div class="md:w-1/2" data-aos="fade-right">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to experience the best of organic coconut products?</h2>
                    <p class="mb-8 text-white/80">Connect with us today to learn more about our products and how we can help your business grow with premium quality coconut offerings.</p>
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-white"></i>
                            </div>
                            <div>
                                <p class="text-sm text-white/70">Email us at</p>
                                <p class="font-medium">contact@yobe.com</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-phone text-white"></i>
                            </div>
                            <div>
                                <p class="text-sm text-white/70">Call us at</p>
                                <p class="font-medium">+1 (234) 567-8900</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="md:w-1/2 bg-white p-8 rounded-xl shadow-lg" data-aos="fade-left">
                    <h3 class="text-xl font-semibold text-primary mb-6">Send us a message</h3>
                    <form>
                        <div class="mb-4">
                            <input type="text" placeholder="Your Name" class="w-full px-4 py-3 rounded-lg border border-accent/50 focus:border-secondary focus:outline-none focus:ring-1 focus:ring-secondary/50 text-dark">
                        </div>
                        <div class="mb-4">
                            <input type="email" placeholder="Your Email" class="w-full px-4 py-3 rounded-lg border border-accent/50 focus:border-secondary focus:outline-none focus:ring-1 focus:ring-secondary/50 text-dark">
                        </div>
                        <div class="mb-6">
                            <textarea placeholder="Your Message" rows="4" class="w-full px-4 py-3 rounded-lg border border-accent/50 focus:border-secondary focus:outline-none focus:ring-1 focus:ring-secondary/50 text-dark"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-secondary hover:bg-primary text-white py-3 px-6 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-secondary/50">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-16 bg-dark text-white">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="h-10 w-10 bg-gradient-to-br from-secondary to-primary rounded-lg flex items-center justify-center rotate-12">
                            <span class="text-white font-bold text-xl -rotate-12">Y</span>
                        </div>
                        <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-secondary to-accent">Yobe.</span>
                    </div>
                    <p class="text-white/70 mb-6">Your Own Brand Expert in premium organic coconut products.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-secondary transition-colors">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-secondary transition-colors">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-secondary transition-colors">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-secondary transition-colors">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-6">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="#home" class="text-white/70 hover:text-secondary transition-colors">Home</a></li>
                        <li><a href="#about" class="text-white/70 hover:text-secondary transition-colors">About</a></li>
                        <li><a href="#products" class="text-white/70 hover:text-secondary transition-colors">Products</a></li>
                        <li><a href="#certifications" class="text-white/70 hover:text-secondary transition-colors">Certifications</a></li>
                        <li><a href="#contact" class="text-white/70 hover:text-secondary transition-colors">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-6">Products</h3>
                    <ul class="space-y-3">
                        <li><a href="#products" class="text-white/70 hover:text-secondary transition-colors">Coconut Water</a></li>
                        <li><a href="#products" class="text-white/70 hover:text-secondary transition-colors">Coconut Milk</a></li>
                        <li><a href="#products" class="text-white/70 hover:text-secondary transition-colors">Coconut Flour</a></li>
                        <li><a href="#products" class="text-white/70 hover:text-secondary transition-colors">Desiccated Coconut</a></li>
                        <li><a href="#products" class="text-white/70 hover:text-secondary transition-colors">Coconut Chips</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-6">Contact</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1.5 mr-3 text-secondary"></i>
                            <span class="text-white/70">123 Coconut Road, Tropical City, TC 56789</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-3 text-secondary"></i>
                            <span class="text-white/70">+1 (234) 567-8900</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-secondary"></i>
                            <span class="text-white/70">contact@yobe.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="pt-8 border-t border-white/10 text-center">
                <p class="text-white/50 text-sm">© 2025 Yobe. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Initialize AOS animations -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true
        });
        
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
        
        // Active navigation highlighting
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('nav a');
            
            window.addEventListener('scroll', function() {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (scrollY >= (sectionTop - 100)) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('text-secondary', 'bg-accent/30');
                    if (link.getAttribute('href').substring(1) === current) {
                        link.classList.add('text-secondary', 'bg-accent/30');
                    }
                });
            });
        });
    </script>
</body>

</html>
