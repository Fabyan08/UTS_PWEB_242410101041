@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@section('content')

    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
        <div>
            <h3 class="text-2xl font-bold text-white">Ringkasan Portal</h3>
            <p class="text-gray-400 text-sm mt-1">Pantau aktivitas entitas dan cerita yang beredar.</p>
        </div>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div
            class="kaca p-6 rounded-2xl border border-white/10 flex items-center gap-4 hover:border-primary/50 transition-colors">
            <div class="w-12 h-12 rounded-full bg-purple-500/20 flex items-center justify-center text-purple-400">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                    </path>
                </svg>
            </div>
            <div>
                <p class="text-gray-400 text-sm font-medium">Total Arsip Horor</p>
                <h4 class="text-2xl font-bold text-white">{{ $stats['arsip'] }}</h4>
            </div>
        </div>
        <div
            class="kaca p-6 rounded-2xl border border-white/10 flex items-center gap-4 hover:border-red-500/50 transition-colors">
            <div class="w-12 h-12 rounded-full bg-red-500/20 flex items-center justify-center text-red-400">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                    </path>
                </svg>
            </div>
            <div>
                <p class="text-gray-400 text-sm font-medium">Korban Membaca</p>
                <h4 class="text-2xl font-bold text-white">{{ $stats['korban'] }}</h4>
            </div>
        </div>
        <div
            class="kaca p-6 rounded-2xl border border-white/10 flex items-center gap-4 hover:border-blue-500/50 transition-colors">
            <div class="w-12 h-12 rounded-full bg-blue-500/20 flex items-center justify-center text-blue-400">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                </svg>
            </div>
            <div>
                <p class="text-gray-400 text-sm font-medium">Penulis Cerita</p>
                <h4 class="text-2xl font-bold text-white">{{ $stats['penulis'] }}</h4>
            </div>
        </div>
    </div>

    <div class="kaca rounded-2xl border border-white/10 p-10 overflow-hidden">
        <div class="flex justify-between items-end mb-6 mt-4">
            <div>
                <h3 class="font-bold text-xl text-white">Catatan Horor Terbaru</h3>
                <p class="text-xs text-gray-500 mt-1">Berkas-berkas yang baru saja ditarik dari portal.</p>
            </div>
            <a href="{{ route('pengelolaan') }}"
                class="text-white text-sm hover:text-white transition-colors flex items-center gap-1">
                Lihat semua <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                    </path>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

            @foreach ($cerita as $data)
                <div
                    class="kaca rounded-2xl p-6 border border-white/5 hover:border-primary/50 transition-all duration-300 group relative flex flex-col justify-between min-h-[220px] overflow-hidden">

                    <div>
                        <div class="flex justify-between items-start mb-4">
                            <span
                                class="text-xs font-semibold px-3 py-1 rounded-full bg-primary/20 text-white border border-primary/30">
                                {{ $data['kategori'] }}
                            </span>


                        </div>
                        <h4 class="text-lg font-bold text-gray-100 mb-2">
                            {{ $data['judul'] }}
                        </h4>
                        <p class="text-sm text-gray-400 line-clamp-2">
                            "{{ $data['isi'] }}"
                        </p>
                    </div>
                    <div class="mt-6 flex justify-between items-center border-t border-white/5 pt-4">
                        <div class="flex items-center gap-3">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($data['penulis']) }}"
                                class="w-8 h-8 rounded-full border border-white/10">

                            <div class="text-xs">
                                <p class="text-gray-200 font-medium">{{ $data['penulis'] }}</p>
                                <p class="text-gray-500">{{ $data['waktu'] }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>

@endsection
