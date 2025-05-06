<header class="fixed w-full z-50 transition-all duration-300" id="main-header">
    <div class="bg-white/95 backdrop-blur-md shadow-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            <div class="flex items-center justify-between h-16 md:h-20">
                <!-- Logo Area -->
                <a href="#" class="group flex items-center space-x-2 transition-all duration-300 hover:opacity-80">
                    <div class="relative h-10 w-10">
                        <div class="absolute inset-0 bg-gradient-to-r from-secondary to-primary rounded-lg transform rotate-6 transition-all duration-300 group-hover:rotate-12"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="text-white font-bold text-xl transform -rotate-6 transition-all duration-300 group-hover:-rotate-0">Y</span>
                        </div>
                    </div>
                    <div class="text-2xl font-bold tracking-tight">
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary">Yobe.</span>
                    </div>
                </a>
                
                <!-- Mobile menu button -->
                <button type="button" class="md:hidden p-2 text-primary rounded-lg hover:bg-accent/20 transition-colors focus:outline-none focus:ring-2 focus:ring-secondary/20" id="mobile-menu-button" aria-label="Open menu">
                    <x-icons.menu class="h-6 w-6" />
                </button>
                
                <!-- Desktop navigation -->
                <nav class="hidden md:flex space-x-1">
                    <a href="#home" class="px-4 py-2 text-dark hover:text-secondary rounded-lg transition-all font-medium hover:bg-accent/20 relative after:absolute after:bottom-1 after:left-1/2 after:-translate-x-1/2 after:w-0 after:h-0.5 after:bg-secondary after:transition-all hover:after:w-2/3">Home</a>
                    <a href="#about" class="px-4 py-2 text-dark hover:text-secondary rounded-lg transition-all font-medium hover:bg-accent/20 relative after:absolute after:bottom-1 after:left-1/2 after:-translate-x-1/2 after:w-0 after:h-0.5 after:bg-secondary after:transition-all hover:after:w-2/3">About</a>
                    <a href="#purpose" class="px-4 py-2 text-dark hover:text-secondary rounded-lg transition-all font-medium hover:bg-accent/20 relative after:absolute after:bottom-1 after:left-1/2 after:-translate-x-1/2 after:w-0 after:h-0.5 after:bg-secondary after:transition-all hover:after:w-2/3">Purpose</a>
                    <a href="#vision-mission" class="px-4 py-2 text-dark hover:text-secondary rounded-lg transition-all font-medium hover:bg-accent/20 relative after:absolute after:bottom-1 after:left-1/2 after:-translate-x-1/2 after:w-0 after:h-0.5 after:bg-secondary after:transition-all hover:after:w-2/3">Vision</a>
                    <a href="#products" class="px-4 py-2 text-dark hover:text-secondary rounded-lg transition-all font-medium hover:bg-accent/20 relative after:absolute after:bottom-1 after:left-1/2 after:-translate-x-1/2 after:w-0 after:h-0.5 after:bg-secondary after:transition-all hover:after:w-2/3">Products</a>
                    <a href="#certifications" class="px-4 py-2 text-dark hover:text-secondary rounded-lg transition-all font-medium hover:bg-accent/20 relative after:absolute after:bottom-1 after:left-1/2 after:-translate-x-1/2 after:w-0 after:h-0.5 after:bg-secondary after:transition-all hover:after:w-2/3">Certifications</a>
                    <a href="#contact" class="ml-2 px-5 py-2 text-white bg-secondary rounded-lg transition-all font-medium shadow-sm hover:shadow-md hover:bg-primary transform hover:-translate-y-0.5 focus:ring-2 focus:ring-secondary/50 focus:outline-none">Contact Us</a>
                </nav>
            </div>
        </div>
    </div>
    
    <!-- Mobile navigation -->
    <div class="hidden md:hidden bg-white border-t border-accent/20 shadow-lg max-h-0 overflow-hidden transition-all duration-300" id="mobile-menu">
        <div class="px-6 py-4 space-y-2">
            <a href="#home" class="block py-3 px-4 text-dark hover:text-secondary font-medium rounded-lg hover:bg-accent/20 transition-colors">Home</a>
            <a href="#about" class="block py-3 px-4 text-dark hover:text-secondary font-medium rounded-lg hover:bg-accent/20 transition-colors">About</a>
            <a href="#purpose" class="block py-3 px-4 text-dark hover:text-secondary font-medium rounded-lg hover:bg-accent/20 transition-colors">Purpose</a>
            <a href="#vision-mission" class="block py-3 px-4 text-dark hover:text-secondary font-medium rounded-lg hover:bg-accent/20 transition-colors">Vision & Mission</a>
            <a href="#products" class="block py-3 px-4 text-dark hover:text-secondary font-medium rounded-lg hover:bg-accent/20 transition-colors">Products</a>
            <a href="#certifications" class="block py-3 px-4 text-dark hover:text-secondary font-medium rounded-lg hover:bg-accent/20 transition-colors">Certifications</a>
            <a href="#contact" class="block py-3 px-4 mt-4 text-center text-white bg-secondary rounded-lg font-medium shadow-sm hover:bg-primary transition-colors">Contact Us</a>
        </div>
    </div>
</header>

<script>
    // Scroll behavior for header
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('main-header');
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                header.classList.add('header-scrolled');
                header.querySelector('div').classList.add('shadow-md');
            } else {
                header.classList.remove('header-scrolled');
                header.querySelector('div').classList.remove('shadow-md');
            }
        });
        
        // Improved mobile menu toggle with animation
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', function() {
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
                setTimeout(() => {
                    mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
                }, 10);
            } else {
                mobileMenu.style.maxHeight = '0px';
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                }, 300);
            }
        });
    });
</script>

<style>
    .header-scrolled {
        @apply bg-opacity-100;
    }
    
    /* Smooth appearance of active indicator */
    .active-nav-link {
        @apply text-secondary after:w-2/3;
    }
</style>
