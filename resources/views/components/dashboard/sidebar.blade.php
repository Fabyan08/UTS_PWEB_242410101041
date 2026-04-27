  <div id="mobile-overlay"
      class="fixed cursor-pointer inset-0 bg-black/50 backdrop-blur-sm z-30 hidden md:hidden transition-opacity"
      onclick="toggleMenu()"></div>
  <aside id="sidebar"
      class="w-64 kaca border-r border-white/5 flex flex-col justify-between fixed md:relative z-40 h-screen transition-transform duration-300 ease-in-out -translate-x-full md:translate-x-0">
      <div>
          <div class="h-20 flex items-center px-8 border-b border-white/5">
              <img src="{{ asset('img/hantu.png') }}" alt="Logo" class="w-8 mr-3">
              <h1 class="font-bold text-lg tracking-wider text-gray-100">ARSIP HOROR</h1>
          </div>
          <nav class="p-4 space-y-2 mt-4">
              <a href="{{ route('dashboard') }}"
                  class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all
                {{ request()->routeIs('dashboard')
                    ? 'bg-primary/20 text-white border border-primary/30'
                    : 'text-gray-400 hover:text-white hover:bg-white/5' }}">

                  <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                  </svg>

                  <span class="font-medium text-sm">Dashboard Utama</span>
              </a>

              <a href="{{ route('pengelolaan') }}"
                  class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all
                {{ request()->routeIs('pengelolaan')
                    ? 'bg-primary/20 text-white border border-primary/30'
                    : 'text-gray-400 hover:text-white hover:bg-white/5' }}">

                  <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                  </svg>

                  <span class="font-medium text-sm">Kelola Cerita</span>
              </a>
          </nav>
      </div>
      <div class="p-4 border-t border-white/5">
          <a href="{{ route('logout') }}"
              class="flex items-center gap-3 px-4 py-3 text-red-400 hover:text-red-300 hover:bg-red-500/10 rounded-xl transition-all">
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
              </svg>
              <span class="font-medium text-sm">Keluar Portal</span>
          </a>
      </div>
  </aside>
