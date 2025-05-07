<header class="fixed w-full z-50 transition-all duration-300" id="main-header" x-data="headerComponent">
    <div class="bg-white/95 backdrop-blur-md shadow-sm transition-all duration-300" 
         :class="{'header-scrolled': scrolled, 'shadow-md': scrolled}">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 lg:px-12">
            <x-desktop-header />
            <x-mobile-header />
        </div>
        <div
            class="bg-gradient-to-r from-primary via-secondary to-primary bg-size-200 animate-gradient-x py-1.5 md:py-2 text-white text-xs md:text-sm text-center shadow-md relative overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute top-0 left-1/4 w-1.5 h-12 bg-white/10 -rotate-45 transform animate-meteor"></div>
                <div class="absolute top-0 left-1/2 w-1 h-10 bg-white/10 -rotate-45 transform animate-meteor"
                    style="animation-delay: 1.2s"></div>
                <div class="absolute top-0 left-3/4 w-1 h-8 bg-white/10 -rotate-45 transform animate-meteor"
                    style="animation-delay: 0.6s"></div>
            </div>
            <div
                class="relative max-w-7xl mx-auto px-4 sm:px-6 md:px-8 lg:px-12 flex flex-wrap md:flex-nowrap items-center justify-center md:space-x-2">
                <span class="animate-pulse text-yellow-200 mr-1.5">🚀</span>
                <span class="font-semibold tracking-wide text-center md:text-left">Ready to elevate your brand? Get a
                    <span class="text-yellow-200">FREE</span> consultation!</span>
                <span
                    class="inline-block mt-1 md:mt-0 ml-0 md:ml-2 px-2 py-0.5 bg-white/20 rounded-full text-xs font-bold tracking-wider animate-bounce">TODAY</span>
            </div>
        </div>
    </div>
</header>

<style>
    .header-scrolled {
        @apply bg-opacity-100;
    }

    /* Smooth appearance of active indicator */
    .active-nav-link {
        @apply text-secondary after:w-2/3;
    }

    @keyframes gradient-x {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }

    @keyframes meteor {
        0% {
            transform: translateY(-100%) translateX(-100%) rotate(-45deg);
        }

        100% {
            transform: translateY(200%) translateX(200%) rotate(-45deg);
        }
    }

    .animate-gradient-x {
        animation: gradient-x 10s ease infinite;
    }

    .bg-size-200 {
        background-size: 200% 200%;
    }

    .animate-meteor {
        animation: meteor 5s linear infinite;
    }
</style>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('headerComponent', () => ({
            scrolled: false,
            isMenuOpen: false,
            
            init() {
                this.checkScroll();
                
                window.addEventListener('scroll', () => this.checkScroll());
                
                // Setup menu link click handlers
                this.$nextTick(() => {
                    const mobileMenu = document.getElementById('mobile-menu');
                    const menuLinks = mobileMenu.querySelectorAll('a');
                    menuLinks.forEach(link => {
                        link.addEventListener('click', () => this.closeMenu());
                    });
                });
            },
            
            checkScroll() {
                this.scrolled = window.scrollY > 100;
                
                if (this.isMenuOpen) {
                    this.closeMenu();
                }
            },
            
            toggleMenu(event) {
                event.stopPropagation();
                
                if (this.isMenuOpen) {
                    this.closeMenu();
                } else {
                    this.openMenu();
                }
            },
            
            openMenu() {
                if (this.isMenuOpen) return;
                
                const mobileMenu = document.getElementById('mobile-menu');
                const menuBar1 = document.getElementById('menu-bar-1');
                const menuBar2 = document.getElementById('menu-bar-2');
                const menuBar3 = document.getElementById('menu-bar-3');
                
                // Animate hamburger to X - preserving original animation
                menuBar1.style.transform = 'rotate(45deg)';
                menuBar1.style.top = '50%';
                menuBar1.style.marginTop = '-1px';
                menuBar2.style.opacity = '0';
                menuBar3.style.transform = 'rotate(-45deg)';
                menuBar3.style.bottom = '50%';
                menuBar3.style.marginBottom = '-1px';
                
                // Show the menu with animation
                mobileMenu.classList.remove('hidden');
                mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
                
                // Add outside click detection
                setTimeout(() => {
                    document.addEventListener('click', this.handleOutsideClick.bind(this));
                    document.addEventListener('touchstart', this.handleOutsideClick.bind(this));
                }, 100);
                
                this.isMenuOpen = true;
            },
            
            closeMenu() {
                if (!this.isMenuOpen) return;
                
                const mobileMenu = document.getElementById('mobile-menu');
                const menuBar1 = document.getElementById('menu-bar-1');
                const menuBar2 = document.getElementById('menu-bar-2');
                const menuBar3 = document.getElementById('menu-bar-3');
                
                // Animate hamburger back to normal
                menuBar1.style.transform = '';
                menuBar1.style.top = '0';
                menuBar2.style.opacity = '1';
                menuBar3.style.transform = '';
                menuBar3.style.bottom = '0';
                
                // Hide menu with animation
                mobileMenu.style.maxHeight = '0px';
                mobileMenu.classList.add('hidden');
                
                // Remove outside click detection
                document.removeEventListener('click', this.handleOutsideClick.bind(this));
                document.removeEventListener('touchstart', this.handleOutsideClick.bind(this));
                
                this.isMenuOpen = false;
            },
            
            handleOutsideClick(event) {
                const menuButton = document.getElementById('mobile-menu-button');
                const mobileMenu = document.getElementById('mobile-menu');
                
                if (this.isMenuOpen && !mobileMenu.contains(event.target) && 
                    event.target !== menuButton && !menuButton.contains(event.target)) {
                    this.closeMenu();
                }
            }
        }));
    });
</script>
