<header class="fixed w-full z-50 transition-all duration-300" id="main-header" x-data="headerComponent">
    <!-- Glass morphism header with enhanced depth effect -->
    <div class="bg-white/90 backdrop-blur-lg shadow-sm transition-all duration-500 border-b border-white/20"
        :class="{ 'header-scrolled shadow-xl border-b-0': scrolled, 'hover:bg-white/95': !scrolled }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 lg:px-12">
            <x-desktop-header />
            <x-mobile-header />
        </div>
        <!-- Enhanced announcement banner with better animation effects -->
        <div
            class="bg-gradient-to-r from-primary via-secondary to-primary bg-size-200 animate-gradient-x py-1.5 md:py-2.5 text-white text-xs md:text-sm text-center shadow-md relative overflow-hidden">
            <!-- Enhanced meteor animations -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute top-0 left-1/5 w-1.5 h-12 bg-white/20 -rotate-45 transform animate-meteor"></div>
                <div class="absolute top-0 left-2/5 w-2 h-14 bg-white/15 -rotate-45 transform animate-meteor-slow"
                    style="animation-delay: 1.2s"></div>
                <div class="absolute top-0 left-3/5 w-1 h-10 bg-white/20 -rotate-45 transform animate-meteor"
                    style="animation-delay: 0.6s"></div>
                <div class="absolute top-0 left-4/5 w-1.5 h-16 bg-white/15 -rotate-45 transform animate-meteor-slow"
                    style="animation-delay: 1.8s"></div>

                <!-- Added subtle particle effects -->
                <div class="hidden md:block absolute inset-0">
                    <div class="absolute top-1/4 left-1/3 w-1 h-1 bg-white/30 rounded-full animate-float-particle">
                    </div>
                    <div class="absolute top-3/4 left-2/3 w-1.5 h-1.5 bg-white/20 rounded-full animate-float-particle"
                        style="animation-delay: 1s; animation-duration: 3s;"></div>
                    <div class="absolute top-1/2 left-1/5 w-1 h-1 bg-white/30 rounded-full animate-float-particle"
                        style="animation-delay: 1.5s; animation-duration: 3.5s;"></div>
                </div>
            </div>

            <!-- Enhanced content with better typography and animations -->
            <div
                class="relative max-w-7xl mx-auto px-4 sm:px-6 md:px-8 lg:px-12 flex flex-wrap md:flex-nowrap items-center justify-center md:space-x-3">
                <!-- Icon with glow effect -->
                <span class="relative animate-pulse text-yellow-100 mr-2">
                    <span class="absolute inset-0 animate-ping-slow bg-yellow-200/30 rounded-full"></span>
                    🚀
                </span>

                <span class="font-semibold tracking-wide text-center md:text-left">Ready to elevate your brand? Get a
                    <span class="relative inline-block">
                        <span class="relative z-10 text-yellow-100 font-bold px-1">FREE</span>
                        <span class="absolute inset-0 bg-white/20 rounded-md -skew-y-3 animate-pulse-slow"></span>
                    </span> consultation!
                </span>

                <!-- Enhanced CTA badge -->
                <span
                    class="inline-block mt-1 md:mt-0 ml-0 md:ml-2 px-3 py-0.5 bg-white/20 hover:bg-white/30 rounded-full text-xs font-bold tracking-wider animate-bounce-gentle cursor-pointer transition-all duration-300">
                    TODAY
                </span>
            </div>
        </div>
    </div>
</header>

<style>
    /* Enhanced header styling */
    .header-scrolled {
        @apply bg-opacity-100 bg-white;
        box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.1);
        transform: translateY(0);
    }

    /* Improved indicator for active nav links */
    .active-nav-link {
        @apply text-secondary relative font-medium;
        text-shadow: 0 0 1px rgba(14, 131, 136, 0.1);
    }

    .active-nav-link:after {
        content: '';
        @apply absolute bottom-0 left-0 h-0.5 w-0 bg-gradient-to-r from-secondary to-primary rounded-full transition-all duration-300 transform -translate-x-1/2 left-1/2;
        width: 60%;
    }

    /* Enhanced animation keyframes */
    @keyframes gradient-x {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    @keyframes meteor {
        0% {
            transform: translateY(-100%) translateX(-100%) rotate(-45deg);
            opacity: 1;
        }

        70% {
            opacity: 1;
        }

        100% {
            transform: translateY(200%) translateX(200%) rotate(-45deg);
            opacity: 0;
        }
    }

    @keyframes meteor-slow {
        0% {
            transform: translateY(-100%) translateX(-100%) rotate(-45deg);
            opacity: 0.7;
        }

        70% {
            opacity: 0.7;
        }

        100% {
            transform: translateY(250%) translateX(250%) rotate(-45deg);
            opacity: 0;
        }
    }

    @keyframes bounce-gentle {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-3px);
        }
    }

    @keyframes ping-slow {
        0% {
            transform: scale(1);
            opacity: 0.8;
        }

        70% {
            transform: scale(1.8);
            opacity: 0;
        }

        100% {
            transform: scale(1);
            opacity: 0;
        }
    }

    @keyframes pulse-slow {

        0%,
        100% {
            opacity: 0.6;
        }

        50% {
            opacity: 1;
        }
    }

    @keyframes float-particle {

        0%,
        100% {
            transform: translateY(0) translateX(0);
        }

        25% {
            transform: translateY(-5px) translateX(3px);
        }

        50% {
            transform: translateY(0) translateX(5px);
        }

        75% {
            transform: translateY(5px) translateX(2px);
        }
    }

    /* Enhanced animation classes */
    .animate-gradient-x {
        animation: gradient-x 8s ease infinite;
    }

    .bg-size-200 {
        background-size: 200% 200%;
    }

    .animate-meteor {
        animation: meteor 5s linear infinite;
    }

    .animate-meteor-slow {
        animation: meteor-slow 7s linear infinite;
    }

    .animate-bounce-gentle {
        animation: bounce-gentle 2s ease-in-out infinite;
    }

    .animate-ping-slow {
        animation: ping-slow 2s cubic-bezier(0, 0, 0.2, 1) infinite;
    }

    .animate-pulse-slow {
        animation: pulse-slow 2s ease-in-out infinite;
    }

    .animate-float-particle {
        animation: float-particle 4s ease-in-out infinite;
    }

    /* Additional positioning utilities */
    .left-1\/5 {
        left: 20%;
    }

    .left-2\/5 {
        left: 40%;
    }

    .left-3\/5 {
        left: 60%;
    }

    .left-4\/5 {
        left: 80%;
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
                    document.addEventListener('touchstart', this.handleOutsideClick.bind(
                        this));
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
