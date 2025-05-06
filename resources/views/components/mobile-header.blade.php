<div class="md:hidden">
    <!-- Mobile Header Row -->
    <div class="flex items-center justify-between h-16">
        <!-- Logo Area - Enhanced with the same effects as desktop -->
        <a href="#" class="group flex items-center space-x-2 transition-all duration-300">
            <div class="relative h-9 w-9 overflow-visible">
                <!-- Background shape with subtle animation -->
                <div class="absolute inset-0 bg-gradient-to-r from-secondary to-primary rounded-lg transform rotate-6 transition-all duration-300 group-hover:rotate-12 group-hover:scale-110 shadow-md"></div>
                <!-- Logo letter with counter-rotation -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="text-white font-bold text-lg transform -rotate-6 transition-all duration-300 group-hover:-rotate-0">Y</span>
                </div>
                <!-- Added glow effect on hover to match desktop -->
                <div class="absolute inset-0 bg-secondary/30 rounded-lg blur-md -z-10 opacity-0 group-hover:opacity-70 transition-opacity duration-300 scale-110"></div>
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-bold tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary">Yobe.</span>
                <!-- Added OEM PARTNER text to match desktop -->
                <span class="text-[10px] text-dark/70 tracking-wider font-medium">OEM PARTNER</span>
            </div>
        </a>
        
        <!-- Enhanced Mobile Menu Button with animation -->
        <button type="button" class="relative p-2 text-primary rounded-lg hover:bg-accent/20 transition-all focus:outline-none focus:ring-2 focus:ring-secondary/20 group" id="mobile-menu-button" aria-label="Open menu">
            <div class="relative w-6 h-5">
                <span class="absolute top-0 left-0 w-full h-0.5 bg-secondary rounded-full transition-all duration-300 group-hover:bg-primary" id="menu-bar-1"></span>
                <span class="absolute top-1/2 left-0 -translate-y-1/2 w-full h-0.5 bg-secondary rounded-full transition-all duration-300 group-hover:bg-primary" id="menu-bar-2"></span>
                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-secondary rounded-full transition-all duration-300 group-hover:bg-primary" id="menu-bar-3"></span>
            </div>
        </button>
    </div>

    <!-- Enhanced Mobile Navigation Menu -->
    <div class="hidden md:hidden bg-white/95 backdrop-blur-sm border-t border-accent/20 shadow-lg max-h-0 overflow-hidden transition-all duration-300" id="mobile-menu">
        <div class="px-4 py-3 space-y-1">
            <!-- Added icons and enhanced hover effects -->
            <a href="#home" class="flex items-center py-3 px-4 text-dark hover:text-secondary font-medium rounded-lg hover:bg-accent/20 transition-all relative overflow-hidden group">
                <i class="fas fa-home w-6 text-secondary group-hover:scale-110 transition-transform duration-300"></i>
                <span class="ml-3 relative z-10 transition-transform duration-300 group-hover:translate-x-1">Home</span>
            </a>
            <a href="#about" class="flex items-center py-3 px-4 text-dark hover:text-secondary font-medium rounded-lg hover:bg-accent/20 transition-all relative overflow-hidden group">
                <i class="fas fa-info-circle w-6 text-secondary group-hover:scale-110 transition-transform duration-300"></i>
                <span class="ml-3 relative z-10 transition-transform duration-300 group-hover:translate-x-1">About</span>
            </a>
            <a href="#purpose" class="flex items-center py-3 px-4 text-dark hover:text-secondary font-medium rounded-lg hover:bg-accent/20 transition-all relative overflow-hidden group">
                <i class="fas fa-bullseye w-6 text-secondary group-hover:scale-110 transition-transform duration-300"></i>
                <span class="ml-3 relative z-10 transition-transform duration-300 group-hover:translate-x-1">Purpose</span>
            </a>
            <a href="#vision-mission" class="flex items-center py-3 px-4 text-dark hover:text-secondary font-medium rounded-lg hover:bg-accent/20 transition-all relative overflow-hidden group">
                <i class="fas fa-eye w-6 text-secondary group-hover:scale-110 transition-transform duration-300"></i>
                <span class="ml-3 relative z-10 transition-transform duration-300 group-hover:translate-x-1">Vision & Mission</span>
            </a>
            <a href="#products" class="flex items-center py-3 px-4 text-dark hover:text-secondary font-medium rounded-lg hover:bg-accent/20 transition-all relative overflow-hidden group">
                <i class="fas fa-box w-6 text-secondary group-hover:scale-110 transition-transform duration-300"></i>
                <span class="ml-3 relative z-10 transition-transform duration-300 group-hover:translate-x-1">Products</span>
            </a>
            <a href="#certifications" class="flex items-center py-3 px-4 text-dark hover:text-secondary font-medium rounded-lg hover:bg-accent/20 transition-all relative overflow-hidden group">
                <i class="fas fa-certificate w-6 text-secondary group-hover:scale-110 transition-transform duration-300"></i>
                <span class="ml-3 relative z-10 transition-transform duration-300 group-hover:translate-x-1">Certifications</span>
            </a>
            
            <!-- Enhanced Contact Button to match desktop style -->
            <div class="pt-2 pb-1">
                <a href="#contact" class="block py-3 px-4 mt-2 text-center text-white bg-gradient-to-r from-secondary to-primary rounded-lg font-semibold shadow-md transition-all transform hover:shadow-lg active:scale-98 relative overflow-hidden group">
                    <div class="absolute inset-0 w-full h-full bg-white/10 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                    <span class="relative flex items-center justify-center">
                        Let's Connect
                        <i class="fas fa-handshake ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>