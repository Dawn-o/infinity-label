<header class="fixed w-full z-50 transition-all duration-300" id="main-header">
    <div class="bg-white/95 backdrop-blur-md shadow-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 lg:px-12">
            <x-desktop-header />
            <x-mobile-header />
        </div>
        <div class="bg-gradient-to-r from-primary via-secondary to-primary bg-size-200 animate-gradient-x py-1.5 md:py-2 text-white text-xs md:text-sm text-center shadow-md relative overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute top-0 left-1/4 w-1.5 h-12 bg-white/10 -rotate-45 transform animate-meteor"></div>
                <div class="absolute top-0 left-1/2 w-1 h-10 bg-white/10 -rotate-45 transform animate-meteor" style="animation-delay: 1.2s"></div>
                <div class="absolute top-0 left-3/4 w-1 h-8 bg-white/10 -rotate-45 transform animate-meteor" style="animation-delay: 0.6s"></div>
            </div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 md:px-8 lg:px-12 flex flex-wrap md:flex-nowrap items-center justify-center md:space-x-2">
                <span class="animate-pulse text-yellow-200 mr-1.5">🚀</span>
                <span class="font-semibold tracking-wide text-center md:text-left">Ready to elevate your brand? Get a <span class="text-yellow-200">FREE</span> consultation!</span>
                <span class="inline-block mt-1 md:mt-0 ml-0 md:ml-2 px-2 py-0.5 bg-white/20 rounded-full text-xs font-bold tracking-wider animate-bounce">TODAY</span>
            </div>
        </div>
    </div>
</header>

<x-partials.header-styles />
<x-partials.header-scripts />
