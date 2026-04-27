    <div id="addModal" class="fixed inset-0 z-[9999] flex items-center justify-center hidden">
        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm transition-opacity" onclick="closeAddModal()"></div>
        <div id="addModalContent"
            class="glass-panel relative w-full max-w-2xl max-h-[90vh] overflow-hidden rounded-2xl border border-white/10 p-6 sm:p-8 m-4 flex flex-col transform transition-all scale-95 opacity-0 duration-300 shadow-[0_0_40px_rgba(0,0,0,0.8)]">
            <button onclick="closeAddModal()"
                class="absolute top-4 right-4 text-gray-400 hover:text-white bg-white/5 hover:bg-red-500/20 p-2 rounded-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
            <div class="mb-6">
                <h3 class="text-xl font-bold text-white mb-1 flex items-center gap-2">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Cerita Baru
                </h3>
                <p class="text-sm text-gray-400">Tuangkan kisah horor baru ke dalam arsip ini.</p>
            </div>
            <div class="overflow-y-auto pr-2 custom-scrollbar flex-1 mb-6 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-1">Judul Cerita</label>
                    <input type="text" id="addTitle" placeholder="Masukkan judul yang mengerikan..."
                        class="w-full px-4 py-2.5 bg-black/40 border border-white/10 rounded-lg text-sm text-white focus:outline-none focus:border-white transition-colors">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-1">Kategori Cerita</label>
                    <select id="addCategory"
                        class="w-full px-4 py-2.5 bg-black border border-white/10 rounded-lg text-sm text-white focus:outline-none focus:border-white transition-colors appearance-none">
                        <option value="" disabled selected>Pilih Kategori...</option>
                        <option value="Urban Legend">Urban Legend</option>
                        <option value="Penampakan">Penampakan</option>
                        <option value="Kerasukan">Kerasukan</option>
                        <option value="Mitos">Mitos / Mistis</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-1">Isi Cerita</label>
                    <textarea id="addContent" rows="6" placeholder="Malam itu sangat sunyi..."
                        class="w-full px-4 py-2.5 bg-black/40 border border-white/10 rounded-lg text-sm text-white focus:outline-none focus:border-white transition-colors resize-none"></textarea>
                </div>
            </div>
            <div class="flex justify-end gap-3 border-t border-white/5 pt-5 mt-auto">
                <button onclick="closeAddModal()"
                    class="px-4 py-2 text-sm cursor-pointer text-gray-400 hover:text-white hover:bg-white/5 rounded-lg transition-colors">Batal</button>
                <button
                    class="px-5 cursor-pointer py-2 text-sm bg-primary hover:bg-primaryHover text-white rounded-lg transition-colors font-medium flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Simpan ke Arsip
                </button>
            </div>
        </div>
    </div>

    <div id="detailModal" class="fixed inset-0 z-[9999] flex items-center justify-center hidden">
        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm transition-opacity" onclick="closeDetailModal()">
        </div>
        <div id="modalContent"
            class="glass-panel relative w-full max-w-3xl max-h-[90vh] overflow-hidden rounded-2xl border border-white/10 p-6 sm:p-8 m-4 flex flex-col transform transition-all scale-95 opacity-0 duration-300 shadow-[0_0_40px_rgba(0,0,0,0.8)]">
            <button onclick="closeDetailModal()"
                class="absolute top-4 right-4 text-gray-400 hover:text-white bg-white/5 hover:bg-red-500/20 p-2 rounded-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
            <div class="mb-6 pr-8">
                <div class="flex items-center gap-2 mb-3">
                    <span id="modalCategory"
                        class="bg-primary/20 text-white px-2.5 py-1 rounded-md text-xs border border-primary/30 font-medium tracking-wide">Kategori</span>
                    <span id="modalStatus"
                        class="px-2.5 py-1 rounded-md text-xs font-medium border border-white/10">Status</span>
                </div>
                <h3 id="modalTitle" class="text-2xl font-bold text-white mb-1">Judul Cerita</h3>
                <p class="text-sm text-gray-400">Tercatat oleh: <span id="modalAuthor"
                        class="text-gray-200 font-medium">Penulis</span></p>
            </div>
            <div class="overflow-y-auto pr-2 custom-scrollbar flex-1 mb-6">
                <div class="p-5 rounded-xl bg-black/40 border border-white/5 text-gray-300 text-sm leading-relaxed"
                    id="modalBody"></div>
            </div>
            <div class="flex justify-end gap-3 border-t border-white/5 pt-5 mt-auto">
                <button onclick="closeDetailModal()"
                    class="px-4 py-2 text-sm text-gray-400 hover:text-white hover:bg-white/5 rounded-lg transition-colors">Tutup
                    Cerita</button>
            </div>
        </div>
    </div>

    <div id="editModal" class="fixed inset-0 z-[9999] flex items-center justify-center hidden">
        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm transition-opacity" onclick="closeEditModal()"></div>
        <div id="editModalContent"
            class="glass-panel relative w-full max-w-2xl max-h-[90vh] overflow-hidden rounded-2xl border border-white/10 p-6 sm:p-8 m-4 flex flex-col transform transition-all scale-95 opacity-0 duration-300 shadow-[0_0_40px_rgba(0,0,0,0.8)]">
            <button onclick="closeEditModal()"
                class="absolute top-4 right-4 text-gray-400 hover:text-white bg-white/5 hover:bg-red-500/20 p-2 rounded-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
            <div class="mb-6">
                <h3 class="text-xl font-bold text-white mb-1 flex items-center gap-2">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Modifikasi Cerita
                </h3>
            </div>
            <div class="overflow-y-auto pr-2 custom-scrollbar flex-1 mb-6 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-1">Judul Cerita</label>
                    <input type="text" id="editTitle"
                        class="w-full px-4 py-2.5 bg-black/40 border border-white/10 rounded-lg text-sm text-white focus:outline-none focus:border-white transition-colors">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-1">Kategori Cerita</label>
                    <select id="editCategory"
                        class="w-full px-4 py-2.5 bg-black border border-white/10 rounded-lg text-sm text-white focus:outline-none focus:border-white transition-colors appearance-none">
                        <option value="Urban Legend">Urban Legend</option>
                        <option value="Penampakan">Penampakan</option>
                        <option value="Mitos">Mitos / Mistis</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-1">Isi Cerita</label>
                    <textarea id="editContent" rows="6"
                        class="w-full px-4 py-2.5 bg-black/40 border border-white/10 rounded-lg text-sm text-white focus:outline-none focus:border-white transition-colors resize-none"></textarea>
                </div>
            </div>
            <div class="flex justify-end gap-3 border-t border-white/5 pt-5 mt-auto">
                <button onclick="closeEditModal()"
                    class="px-4 py-2 text-sm text-gray-400 hover:text-white hover:bg-white/5 rounded-lg transition-colors">Batal</button>
                <button onclick="saveEdit()"
                    class="px-5 py-2 text-sm bg-primary hover:bg-primaryHover text-white rounded-lg transition-colors font-medium flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Simpan Perubahan
                </button>
            </div>
        </div>
    </div>
