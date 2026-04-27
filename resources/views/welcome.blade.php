@extends('layouts.app')

@section('title', 'ARSIP HOROR | Mimpi Buruk Menanti')

@section('content')
    <header class="relative min-h-screen flex items-center pt-20 overflow-hidden bg-bgDark">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/hero.jpg') }}" class="w-full h-full object-cover object-top opacity-40 grayscale-[30%]"
                alt="Rumah Angker">
            <div class="absolute inset-0 bg-gradient-to-r from-bgDark via-bgDark/80 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-bgDark via-transparent to-bgDark/60"></div>
        </div>

        <div
            class="absolute left-6 md:left-12 top-1/2 -translate-y-1/2 z-20 flex flex-col items-center gap-6 hidden lg:flex opacity-50">
            <div class="w-[1px] h-20 bg-white/30"></div>
            <span class="text-[10px] font-medium tracking-[0.3em] text-white uppercase -rotate-90 whitespace-nowrap">Volume
                I</span>
            <div class="flex flex-col gap-2 mt-8">
                <div class="w-1.5 h-1.5 rounded-full bg-accent"></div>
                <div class="w-1.5 h-1.5 rounded-full bg-white/30"></div>
                <div class="w-1.5 h-1.5 rounded-full bg-white/30"></div>
            </div>
            <div class="w-[1px] h-20 bg-white/30 mt-6"></div>
        </div>

        <div
            class="relative z-10 max-w-[1400px] mx-auto w-full px-6 md:px-24 flex flex-col md:flex-row items-center justify-between gap-12">
            <div class="w-full md:w-3/5">
                <p class="text-accent font-semibold tracking-[0.2em] text-xs md:text-sm mb-4 uppercase">Bila Nyalimu Cukup
                </p>
                <h1 class="font-display text-7xl md:text-[130px] leading-[0.85] text-white mb-6 uppercase drop-shadow-2xl">
                    CERITA HOROR<br>
                    <span class="text-gray-300">MENCEKAM</span>
                </h1>

                <div class="glass-dark p-6 md:p-8 rounded-2xl max-w-xl mt-8 border-y-0 border-r-0 rounded-l-none">
                    <h3 class="text-accent font-bold text-xs tracking-[0.15em] mb-3 uppercase">Rasakan Kengerian Terdalam
                    </h3>
                    <p class="text-gray-400 text-sm md:text-base leading-relaxed mb-8 font-light">
                        Selamat datang di arsip cerita horor yang akan menguji kengerianmu. Langkahkan kaki ke dunia
                        bayangan, di mana setiap cerita menyimpan penampakannya sendiri. Beranikah kamu membaca apa yang
                        menanti di dalam?
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/login"
                            class="bg-accent hover:bg-accentHover text-center px-8 py-3.5 rounded-full text-white text-sm font-bold tracking-widest uppercase transition-colors">
                            Baca Sekarang
                        </a>
                        <a href="#teror"
                            class="border border-white/30 hover:bg-white/5 text-center px-8 py-3.5 rounded-full text-white text-sm font-bold tracking-widest uppercase transition-colors">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="tentang" class="py-24 px-6 md:px-16 relative z-10 bg-bgDark border-t border-white/5">
        <div class="max-w-[1400px] mx-auto">
            <div class="mb-16 md:mb-24 relative">
                <h2 class="font-display text-6xl md:text-8xl text-white uppercase leading-none relative z-10">
                    YANG MENANTIMU <span class="text-outline">DI SINI</span>
                </h2>
                <p class="text-xs md:text-sm text-gray-400 font-semibold tracking-[0.2em] uppercase mt-4">Masuki alam di
                    mana ketakutan menjelma menjadi nyata.</p>

                <div
                    class="absolute -top-12 left-0 font-display text-[150px] md:text-[200px] text-white/[0.02] leading-none pointer-events-none z-0">
                    TEROR
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10">
                @foreach ($data as $dt)
                    <x-landing.horror-card image="{{ asset($dt['image']) }}" category="{{ $dt['category'] }}"
                        title="{{ $dt['title'] }}" description="{{ $dt['description'] }}"
                        extraClass="{{ $loop->iteration == 2 ? 'md:-translate-y-8' : '' }}" />
                @endforeach
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            window.addEventListener('scroll', () => {
                const nav = document.getElementById('navbar');
                if (window.scrollY > 50) {
                    nav.classList.add('glass-dark', 'border-b', 'border-white/5');
                    nav.classList.remove('border-white/0', 'py-6');
                    nav.classList.add('py-4');
                } else {
                    nav.classList.remove('glass-dark', 'border-b', 'border-white/5');
                    nav.classList.add('border-white/0', 'py-6');
                    nav.classList.remove('py-4');
                }
            });
        </script>
    @endpush
@endsection
