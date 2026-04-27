<nav id="navbar" class="fixed w-full z-50 transition-all duration-300 py-6 px-6 md:px-16 border-b border-white/0">
    <div class="max-w-[1400px] mx-auto flex items-center justify-between">
        <a href="#" class="flex items-center gap-2 group">
            <span
                class="font-display text-3xl tracking-widest text-white group-hover:text-accent transition-colors">ARSIP<span
                    class="text-accent group-hover:text-white">HOROR</span></span>
        </a>

        <div class="hidden md:flex items-center gap-10">
            <a href="#tentang"
                class="text-xs font-semibold tracking-widest uppercase text-gray-400 hover:text-white transition-colors">Tentang</a>

            <a href="/login"
                class="text-xs font-bold tracking-widest uppercase bg-accent hover:bg-accentHover px-6 py-2.5 rounded-full transition-all text-white shadow-[0_0_20px_rgba(217,56,30,0.3)]">
                MASUK PORTAL
            </a>
        </div>

        <button class="md:hidden cursor-pointer text-white"
            onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>

    <div id="mobile-menu"
        class="hidden md:hidden absolute top-full left-0 w-full glass-dark border-b border-white/5 py-6 px-6 flex flex-col gap-6 text-center">
        <a href="#tentang" class="text-sm font-semibold tracking-widest uppercase text-gray-300">Tentang</a>
        <a href="/login" class="text-accent text-sm font-bold tracking-widest uppercase mt-2">MASUK</a>
    </div>
</nav>
