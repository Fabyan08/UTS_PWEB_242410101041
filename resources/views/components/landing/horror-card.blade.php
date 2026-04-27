@props(['image', 'category', 'title', 'description', 'extraClass' => ''])

<div
    class="group relative h-[450px] md:h-[550px] rounded-2xl overflow-hidden cursor-pointer border border-white/10 {{ $extraClass }}">
    <img src="{{ $image }}"
        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100"
        alt="{{ $title }}">
    <div class="absolute inset-0 bg-gradient-to-t from-bgDark via-bgDark/40 to-transparent"></div>

    <div
        class="absolute inset-x-0 bottom-0 p-8 transform transition-transform duration-500 translate-y-4 group-hover:translate-y-0">
        <span class="text-accent text-xs font-bold tracking-[0.2em] uppercase mb-2 block">{{ $category }}</span>
        <h3 class="font-display text-4xl text-white uppercase mb-2">{{ $title }}</h3>
        <p
            class="text-gray-400 text-sm font-light leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
            {{ $description }}
        </p>

        <div
            class="mt-6 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-200">
            <button
                class="bg-accent text-white px-5 py-2 rounded-full text-xs font-bold tracking-widest uppercase flex items-center gap-2">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z" />
                </svg> Baca
            </button>
            <button
                class="w-8 h-8 rounded-full border border-white/30 flex items-center justify-center text-white hover:bg-white/10">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                </svg>
            </button>
        </div>
    </div>
</div>
