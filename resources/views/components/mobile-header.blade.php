<div class="lg:hidden">
    <!-- Mobile Header Row -->
    <div class="flex items-center justify-between h-16">
        <!-- Logo Area - Enhanced with the same effects as desktop -->
        <a href="#" class="group flex items-center space-x-2 transition-all duration-300">
            <div class="relative h-9 w-9 overflow-visible">
                <!-- Background shape with subtle animation -->
                <div
                    class="absolute inset-0 bg-gradient-to-r from-secondary to-primary rounded-lg transform rotate-6 transition-all duration-300 group-hover:rotate-12 group-hover:scale-110 shadow-md">
                </div>
                <!-- Logo letter with counter-rotation -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <span
                        class="text-white font-bold text-lg transform -rotate-6 transition-all duration-300 group-hover:-rotate-0"><svg
                            class="w-8 h-8 text-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor"
                                d="M20.288 9.463a4.856 4.856 0 0 0-4.336-2.3 4.586 4.586 0 0 0-3.343 1.767c.071.116.148.226.212.347l.879 1.652.134-.254a2.71 2.71 0 0 1 2.206-1.519 2.845 2.845 0 1 1 0 5.686 2.708 2.708 0 0 1-2.205-1.518L13.131 12l-1.193-2.26a4.709 4.709 0 0 0-3.89-2.581 4.845 4.845 0 1 0 0 9.682 4.586 4.586 0 0 0 3.343-1.767c-.071-.116-.148-.226-.212-.347l-.879-1.656-.134.254a2.71 2.71 0 0 1-2.206 1.519 2.855 2.855 0 0 1-2.559-1.369 2.825 2.825 0 0 1 0-2.946 2.862 2.862 0 0 1 2.442-1.374h.121a2.708 2.708 0 0 1 2.205 1.518l.7 1.327 1.193 2.26a4.709 4.709 0 0 0 3.89 2.581h.209a4.846 4.846 0 0 0 4.127-7.378z" />
                        </svg></span>
                </div>
                <!-- Added glow effect on hover to match desktop -->
                <div
                    class="absolute inset-0 bg-secondary/30 rounded-lg blur-md -z-10 opacity-0 group-hover:opacity-70 transition-opacity duration-300 scale-110">
                </div>
            </div>
            <div class="flex flex-col">
                <span
                    class="text-xl font-bold tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary">Infinity
                    Label</span>
                <!-- Added OEM PARTNER text to match desktop -->
                <span class="text-[10px] text-dark/70 tracking-wider font-medium">OEM PARTNER</span>
            </div>
        </a>

        <!-- Enhanced Mobile Menu Button with animation -->
        <button id="mobile-menu-button" @click="toggleMenu($event)"
            class="group flex flex-col items-center justify-center w-10 h-10 relative z-50 focus:outline-none">
            <div class="relative w-6 h-5">
                <span
                    class="absolute top-0 left-0 w-full h-0.5 bg-secondary rounded-full transition-all duration-300 group-hover:bg-primary"
                    id="menu-bar-1"></span>
                <span
                    class="absolute top-1/2 left-0 -translate-y-1/2 w-full h-0.5 bg-secondary rounded-full transition-all duration-300 group-hover:bg-primary"
                    id="menu-bar-2"></span>
                <span
                    class="absolute bottom-0 left-0 w-full h-0.5 bg-secondary rounded-full transition-all duration-300 group-hover:bg-primary"
                    id="menu-bar-3"></span>
            </div>
        </button>
    </div>

    <!-- Enhanced Mobile Navigation Menu -->
    <div class="hidden lg:hidden bg-white/95 backdrop-blur-sm border-t border-accent/20 shadow-lg max-h-0 overflow-hidden transition-all duration-300"
        id="mobile-menu">
        <div class="px-4 py-3 space-y-1">
            <!-- Added icons and enhanced hover effects -->
            <a href="#home"
                class="flex items-center py-3 px-4 text-dark hover:text-secondary font-medium rounded-lg hover:bg-accent/20 transition-all relative overflow-hidden group">
                <i class="fas fa-home w-6 text-secondary group-hover:scale-110 transition-transform duration-300"></i>
                <span class="ml-3 relative z-10 transition-transform duration-300 group-hover:translate-x-1">Home</span>
            </a>
            <a href="#about"
                class="flex items-center py-3 px-4 text-dark hover:text-secondary font-medium rounded-lg hover:bg-accent/20 transition-all relative overflow-hidden group">
                <i
                    class="fas fa-info-circle w-6 text-secondary group-hover:scale-110 transition-transform duration-300"></i>
                <span
                    class="ml-3 relative z-10 transition-transform duration-300 group-hover:translate-x-1">About</span>
            </a>
            <a href="#purpose"
                class="flex items-center py-3 px-4 text-dark hover:text-secondary font-medium rounded-lg hover:bg-accent/20 transition-all relative overflow-hidden group">
                <i
                    class="fas fa-bullseye w-6 text-secondary group-hover:scale-110 transition-transform duration-300"></i>
                <span
                    class="ml-3 relative z-10 transition-transform duration-300 group-hover:translate-x-1">Purpose</span>
            </a>
            <a href="#vision-mission"
                class="flex items-center py-3 px-4 text-dark hover:text-secondary font-medium rounded-lg hover:bg-accent/20 transition-all relative overflow-hidden group">
                <i class="fas fa-eye w-6 text-secondary group-hover:scale-110 transition-transform duration-300"></i>
                <span class="ml-3 relative z-10 transition-transform duration-300 group-hover:translate-x-1">Vision &
                    Mission</span>
            </a>
            <a href="#products"
                class="flex items-center py-3 px-4 text-dark hover:text-secondary font-medium rounded-lg hover:bg-accent/20 transition-all relative overflow-hidden group">
                <i class="fas fa-box w-6 text-secondary group-hover:scale-110 transition-transform duration-300"></i>
                <span
                    class="ml-3 relative z-10 transition-transform duration-300 group-hover:translate-x-1">Products</span>
            </a>
            <a href="#certifications"
                class="flex items-center py-3 px-4 text-dark hover:text-secondary font-medium rounded-lg hover:bg-accent/20 transition-all relative overflow-hidden group">
                <i
                    class="fas fa-certificate w-6 text-secondary group-hover:scale-110 transition-transform duration-300"></i>
                <span
                    class="ml-3 relative z-10 transition-transform duration-300 group-hover:translate-x-1">Certifications</span>
            </a>

            <!-- Enhanced Contact Button to match desktop style -->
            <div class="pt-2 pb-1">
                <a href="#contact"
                    class="block py-3 px-4 mt-2 text-center text-white bg-gradient-to-r from-secondary to-primary rounded-lg font-semibold shadow-md transition-all transform hover:shadow-lg active:scale-98 relative overflow-hidden group">
                    <div
                        class="absolute inset-0 w-full h-full bg-white/10 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    </div>
                    <span class="relative flex items-center justify-center">
                        Let's Connect
                        <i
                            class="fas fa-handshake ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
