@extends('layouts.dashboard.app')

@section('title', 'Profile')

@section('content')

    <div class="flex-1 overflow-y-auto p-4 sm:p-6 md:p-8 relative z-0">


        <div class="glass-panel rounded-2xl overflow-hidden mb-6 md:mb-8 border border-white/5">

            <div class="h-32 md:h-48 bg-gradient-to-r from-[#20134a] via-black to-[#0b071a] relative overflow-hidden">

                <div class="absolute inset-0 opacity-20"
                    style="background-image: url('data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noiseFilter%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.65%22 numOctaves=%223%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noiseFilter)%22/%3E%3C/svg%3E');">
                </div>
            </div>

            <div class="px-6 md:px-8 pb-6 md:pb-8 relative">
                <div class="flex flex-col md:flex-row items-center md:items-end justify-between gap-6 -mt-16 md:-mt-20">

                    <div class="flex flex-col md:flex-row items-center md:items-end gap-4 md:gap-6 w-full md:w-auto">
                        <div class="relative group cursor-pointer">
                            <img src="https://ui-avatars.com/api/?name={{ session('username') }}&background=382396&color=fff&size=150"
                                alt="Avatar"
                                class="w-28 h-28 md:w-36 md:h-36 rounded-full border-4 border-bgDark shadow-[0_0_20px_rgba(109,40,217,0.4)] object-cover bg-black relative z-10">

                            <div
                                class="absolute inset-0 bg-black/60 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity z-20 border-4 border-transparent">
                                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="text-center md:text-left mb-2">
                            <h2 class="text-2xl md:text-3xl font-bold text-white">{{ session('username') }}</h2>
                            <p
                                class="text-white text-sm md:text-base font-medium flex items-center justify-center md:justify-start gap-2 mt-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Penjaga Arsip
                            </p>
                        </div>
                    </div>


                    <div class="w-full md:w-auto">
                        <button
                            class="w-full cursor-pointer md:w-auto bg-dark-400 border-2 border-white text-white px-6 py-2.5 rounded-xl font-semibold transition-all flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                            </svg>
                            Simpan Perubahan
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">


            <div class="lg:col-span-2 glass-panel p-6 md:p-8 rounded-2xl border border-white/5 h-fit">
                <h3 class="text-xl font-bold text-white mb-6 border-b border-white/10 pb-4">Identitas Astral</h3>

                <form class="space-y-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                        <div class="space-y-1.5 group">
                            <label
                                class="text-sm font-medium text-gray-400 group-focus-within:text-white transition-colors">Nama
                                Panggilan</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <input type="text"
                                    class="w-full pl-10 pr-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-white focus:ring-1 focus:ring-white transition-all"
                                    value="{{ session('username') }}">
                            </div>
                        </div>


                        <div class="space-y-1.5 group">
                            <label
                                class="text-sm font-medium text-gray-400 group-focus-within:text-white transition-colors">Email
                                Ritual</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <input type="email"
                                    class="w-full pl-10 pr-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-white focus:ring-1 focus:ring-white transition-all"
                                    value="{{ session('username') }}@gmail.com">
                            </div>
                        </div>
                    </div>


                    <div class="space-y-1.5 group">
                        <label
                            class="text-sm font-medium text-gray-400 group-focus-within:text-white transition-colors">Perbarui
                            Mantra Sandi</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input type="password"
                                class="w-full pl-10 pr-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-white focus:ring-1 focus:ring-white transition-all"
                                placeholder="Biarkan kosong jika tidak ingin mengubah sandi">
                        </div>
                    </div>


                    <div class="space-y-1.5 group pt-2">
                        <label
                            class="text-sm font-medium text-gray-400 group-focus-within:text-white transition-colors">Mantra
                            Pribadi (Bio)</label>
                        <textarea rows="4"
                            class="w-full p-4 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-white focus:ring-1 focus:ring-white transition-all resize-none"
                            placeholder="Tuliskan kata-kata misterius tentang dirimu...">Pengumpul cerita-cerita yang tidak pernah ingin didengar orang lain sebelum tidur.</textarea>
                        <p class="text-xs text-gray-500 text-right">Tersisa 150 karakter</p>
                    </div>
                </form>
            </div>


            <div class="space-y-6 md:space-y-8">

                <div class="glass-panel p-6 rounded-2xl border border-white/5">
                    <h3 class="text-lg font-bold text-white mb-4 border-b border-white/10 pb-3">Jejak Perjalanan</h3>

                    <div class="space-y-4">

                        <div class="flex items-center justify-between p-3 bg-white/5 rounded-xl border border-white/5">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-purple-900/30 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-purple-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">leksi
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-400">Arsip Ditulis</p>
                                    <p class="font-bold text-white text-lg">66</p>
                                </div>
                            </div>
                        </div>


                        <div class="flex items-center justify-between p-3 bg-white/5 rounded-xl border border-white/5">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-red-900/30 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-red-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-400">Korban Ketakutan (Likes)</p>
                                    <p class="font-bold text-white text-lg">1,024</p>
                                </div>
                            </div>
                        </div>


                        <div class="flex items-center justify-between p-3 bg-white/5 rounded-xl border border-white/5">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-green-900/30 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-green-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-400">Saksi Mata (Views)</p>
                                    <p class="font-bold text-white text-lg">13.5K</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    @endsection
