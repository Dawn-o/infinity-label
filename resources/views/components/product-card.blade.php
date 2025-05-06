@props(['title', 'description', 'image', 'tags' => [], 'delay' => 0])

<div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all group" data-aos="fade-up" data-aos-delay="{{ $delay }}">
    <div class="h-48 bg-cover bg-center" style="background-image: url('{{ $image }}');">
        <div class="w-full h-full bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
            <h3 class="text-xl font-semibold text-white">{{ $title }}</h3>
        </div>
    </div>
    <div class="p-6 border-t border-accent/30">
        <p class="text-dark/80">{{ $description }}</p>
        <div class="mt-6 flex justify-between items-center">
            <div class="flex space-x-2">
                @foreach($tags as $tag)
                <span class="px-3 py-1 text-xs bg-accent/20 text-secondary rounded-full">{{ $tag }}</span>
                @endforeach
            </div>
            <a href="#" class="text-secondary hover:text-primary transition-colors"><i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</div>
