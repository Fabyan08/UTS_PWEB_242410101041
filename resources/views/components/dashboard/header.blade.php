     <header class="h-20 kaca border-b border-white/5 px-4 md:px-8 flex items-center justify-between z-10 relative">
         <div class="flex items-center gap-4">
             <button onclick="toggleMenu()"
                 class="md:hidden p-2 text-gray-400 hover:text-white focus:outline-none rounded-lg hover:bg-white/5 transition-colors">
                 <svg id="burger-icon" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                 </svg>
                 <svg id="close-icon" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                 </svg>
             </button>

             <h2 class="text-xl font-semibold text-gray-100 hidden sm:block">Selamat datang,
                 {{ session('username') }}.</h2>
         </div>

         <div class="flex items-center gap-6">
             <a href="{{ route('profile') }}"
                 class="flex items-center gap-3 pl-4 md:pl-6 border-l border-white/10 cursor-pointer">
                 <img src="https://ui-avatars.com/api/?name={{ session('username') }}&background=382396&color=fff"
                     alt="Admin" class="w-9 h-9 rounded-full border border-primary/50">
                 <div class="hidden sm:block text-sm">
                     <p class="font-semibold text-gray-200">{{ session('username') }}</p>
                     <p class="text-xs text-gray-500">Pencerita horor</p>
                 </div>
             </a>
         </div>
     </header>
