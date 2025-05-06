@props(['title', 'image' => [], 'delay' => 0])

<div {{ $attributes->merge(['class' => 'bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 group border border-accent/5']) }}
    data-aos="fade-up" data-aos-delay="{{ $delay }}">
    <div class="relative h-[32rem] overflow-hidden">
        <!-- Background image with zoom effect on hover -->
        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 ease-in-out group-hover:scale-110"
            style="background-image: url('{{ $image }}');"></div>

        <!-- Enhanced overlay gradient with improved transition -->
        <div
            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500">
        </div>

        <!-- Decorative corner accent -->
        <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-bl from-white/20 to-transparent"></div>

        <!-- Improved title presentation -->
        <div
            class="absolute bottom-0 left-0 w-full p-6 transform transition-transform duration-500 group-hover:translate-y-0">
            <!-- Title with decorative element -->
            <div class="flex items-center">
                <div
                    class="w-1 h-12 bg-accent rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>
                <h3 class="text-xl font-bold text-white group-hover:text-white/95 transition-colors">{{ $title }}
                </h3>
            </div>

            <!-- Subtle divider line that extends on hover -->
            <div class="w-12 h-0.5 bg-white/30 mt-3 group-hover:w-24 transition-all duration-500 rounded-full"></div>
        </div>
    </div>
</div>
