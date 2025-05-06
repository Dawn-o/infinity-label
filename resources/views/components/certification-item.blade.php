@props(['name', 'icon', 'delay' => 0])

<div class="group p-5 bg-light rounded-lg border border-accent hover:border-secondary hover:shadow-md transition-all flex flex-col items-center justify-center text-center" data-aos="zoom-in" data-aos-delay="{{ $delay }}">
    <div class="w-16 h-16 mb-4 bg-accent/30 group-hover:bg-accent/50 rounded-full flex items-center justify-center transition-all">
        <i class="fas fa-{{ $icon }} text-2xl text-secondary"></i>
    </div>
    <span class="font-medium text-dark/90">{{ $name }}</span>
</div>
