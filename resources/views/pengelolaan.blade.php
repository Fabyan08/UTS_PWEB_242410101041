@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@section('content')

    <div id="toast-container" class="fixed bottom-6 right-6 z-[9999] flex flex-col gap-3 pointer-events-none"></div>

    <div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div>
            <h2 class="text-2xl font-bold text-white">Kelola Cerita</h2>
            <p class="text-sm text-gray-400 mt-1">Atur, moderasi, dan kelola semua Cerita yang masuk.</p>
        </div>
        <button onclick="openAddModal()"
            class="bg-primary hover:bg-primaryHover text-white px-5 py-2.5 rounded-lg font-semibold transition-all shadow-[0_4px_15px_rgba(109,40,217,0.4)] flex items-center gap-2 text-sm">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Tulis Cerita Baru
        </button>
    </div>

    <div class="glass-panel p-4 rounded-xl mb-6 flex flex-col md:flex-row gap-4">
        <div class="flex-1 relative group">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-500 group-focus-within:text-white transition-colors" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <input type="text"
                class="w-full pl-10 pr-4 py-2.5 bg-white/5 border border-white/10 rounded-lg text-sm text-white placeholder-gray-500 focus:outline-none focus:border-white focus:ring-1 focus:ring-white transition-all"
                placeholder="Cari judul cerita, penulis, atau kata kunci...">
        </div>
        <div class="flex gap-3">
            <select
                class="bg-slate-900 border border-white/10 text-gray-300 text-sm rounded-lg focus:ring-white focus:border-white block p-2.5 focus:outline-none appearance-none cursor-pointer pr-8 relative">
                <option value="">Semua Kategori</option>
                <option value="urban-legend">Urban Legend</option>
                <option value="penampakan">Penampakan</option>
            </select>
            <select
                class="bg-slate-900 border border-white/10 text-gray-300 text-sm rounded-lg focus:ring-white focus:border-white block p-2.5 focus:outline-none appearance-none cursor-pointer pr-8">
                <option value="">Semua Status</option>
                <option value="terpublikasi">Terpublikasi</option>
                <option value="menunggu">Menunggu Review</option>
                <option value="ditolak">Ditolak</option>
            </select>
        </div>
    </div>

    <div class="glass-panel rounded-xl overflow-hidden border border-white/5">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse whitespace-nowrap">
                <thead>
                    <tr class="bg-black/20 text-xs uppercase tracking-wider text-gray-400 border-b border-white/5">
                        <th class="p-4 font-semibold">Cerita</th>
                        <th class="p-4 font-semibold">Kategori</th>
                        <th class="p-4 font-semibold">Status</th>
                        <th class="p-4 font-semibold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-300 divide-y divide-white/5">

                    @foreach ($cerita as $data)
                        <tr class="hover:bg-white/[0.02] transition-all duration-300 transform"
                            id="row-{{ $data['id'] }}">
                            <td class="p-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 rounded bg-purple-900/40 border border-purple-500/20 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-purple-400" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-white">{{ $data['judul'] }}</p>
                                        <p class="text-xs text-gray-500">
                                            Oleh: <span class="text-white">{{ $data['penulis'] }}</span>
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-4">
                                <span
                                    class="bg-white/5 px-2.5 py-1 rounded-md text-xs border border-white/10 text-gray-300">
                                    {{ $data['kategori'] }}
                                </span>
                            </td>
                            <td class="p-4 status-cell">
                                @if ($data['status'] == 'menunggu')
                                    <span
                                        class="inline-flex items-center gap-1.5 bg-yellow-500/10 text-yellow-500 border border-yellow-500/20 px-2.5 py-1 rounded-full text-xs font-medium">
                                        <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 animate-pulse"></span>
                                        Menunggu
                                    </span>
                                @elseif($data['status'] == 'terpublikasi')
                                    <span
                                        class="inline-flex items-center gap-1.5 bg-green-500/10 text-green-400 border border-green-500/20 px-2.5 py-1 rounded-full text-xs font-medium">
                                        <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                        Terpublikasi
                                    </span>
                                @endif
                            </td>
                            <td class="p-4 text-right">
                                <div class="flex items-center justify-end gap-2 action-cell">

                                    <button
                                        onclick="openDetailModal(
                                            {{ json_encode($data['judul']) }},
                                            {{ json_encode($data['penulis']) }},
                                            {{ json_encode($data['kategori']) }},
                                            {{ json_encode($data['status']) }},
                                            {{ json_encode(
                                                $data['status'] == 'menunggu'
                                                    ? 'bg-yellow-500/10 text-yellow-500 border-yellow-500/20'
                                                    : 'bg-green-500/10 text-green-400 border-green-500/20',
                                            ) }},
                                            {{ json_encode($data['isi']) }}
                                        )">
                                        <div
                                            class="p-1.5 text-gray-400 hover:text-green-400 transition-colors bg-white/5 hover:bg-white/10 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                            </svg>
                                        </div>
                                    </button>

                                    @if ($data['status'] == 'menunggu')
                                        <button onclick="approveStory(this)"
                                            class="p-1.5 text-gray-400 hover:text-green-400 transition-colors bg-white/5 hover:bg-white/10 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                                <path
                                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                                            </svg>
                                        </button>

                                        <button onclick="rejectStory(this)"
                                            class="p-1.5 text-gray-400 hover:text-red-400 transition-colors bg-white/5 hover:bg-white/10 rounded">
                                            ✖
                                        </button>
                                    @else
                                        <button
                                            onclick="openEditModal('{{ $data['judul'] }}','{{ $data['kategori'] }}','...')"
                                            class="p-1.5 text-gray-400 hover:text-blue-400 transition-colors bg-white/5 hover:bg-white/10 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                            </svg>
                                        </button>

                                        <button onclick="deleteStory(this)"
                                            class="p-1.5 text-gray-400 hover:text-red-400 transition-colors bg-white/5 hover:bg-white/10 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                            </svg>
                                        </button>
                                    @endif

                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    @include('components.dashboard.modal')


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.body.appendChild(document.getElementById('detailModal'));
            document.body.appendChild(document.getElementById('editModal'));
            document.body.appendChild(document.getElementById('addModal'));
        });


        // modal tambah
        function openAddModal() {
            document.getElementById('addTitle').value = '';
            document.getElementById('addCategory').value = '';
            document.getElementById('addContent').value = '';

            const modal = document.getElementById('addModal');
            const modalContent = document.getElementById('addModalContent');

            modal.classList.remove('hidden');
            setTimeout(() => {
                modalContent.classList.remove('scale-95', 'opacity-0');
                modalContent.classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function closeAddModal() {
            const modal = document.getElementById('addModal');
            const modalContent = document.getElementById('addModalContent');
            modalContent.classList.remove('scale-100', 'opacity-100');
            modalContent.classList.add('scale-95', 'opacity-0');
            setTimeout(() => modal.classList.add('hidden'), 300);
        }

        // modal detail
        function openDetailModal(title, author, category, status, statusClasses, content) {
            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalAuthor').innerText = author;
            document.getElementById('modalCategory').innerText = category;

            const statusBadge = document.getElementById('modalStatus');
            statusBadge.innerText = status;
            statusBadge.className = `px-2.5 py-1 rounded-md text-xs font-medium border ${statusClasses}`;
            document.getElementById('modalBody').innerHTML = content;

            const modal = document.getElementById('detailModal');
            const modalContent = document.getElementById('modalContent');
            modal.classList.remove('hidden');
            setTimeout(() => {
                modalContent.classList.remove('scale-95', 'opacity-0');
                modalContent.classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function closeDetailModal() {
            const modal = document.getElementById('detailModal');
            const modalContent = document.getElementById('modalContent');
            modalContent.classList.remove('scale-100', 'opacity-100');
            modalContent.classList.add('scale-95', 'opacity-0');
            setTimeout(() => modal.classList.add('hidden'), 300);
        }

        // modal edit
        function openEditModal(title, category, content) {
            document.getElementById('editTitle').value = title;
            document.getElementById('editCategory').value = category;
            document.getElementById('editContent').value = content;

            const modal = document.getElementById('editModal');
            const modalContent = document.getElementById('editModalContent');
            modal.classList.remove('hidden');
            setTimeout(() => {
                modalContent.classList.remove('scale-95', 'opacity-0');
                modalContent.classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function closeEditModal() {
            const modal = document.getElementById('editModal');
            const modalContent = document.getElementById('editModalContent');
            modalContent.classList.remove('scale-100', 'opacity-100');
            modalContent.classList.add('scale-95', 'opacity-0');
            setTimeout(() => modal.classList.add('hidden'), 300);
        }

        function saveEdit() {
            closeEditModal();
            showToast('Cerita berhasil diperbarui!', 'success');
        }

        function showToast(message, type = 'success') {
            const container = document.getElementById('toast-container');
            const toast = document.createElement('div');
            const colorClass = type === 'success' ? 'bg-green-500/20 text-green-400 border-green-500/50' :
                'bg-red-500/20 text-red-400 border-red-500/50';
            toast.className =
                `glass-panel px-4 py-3 rounded-lg border flex items-center gap-2 transform transition-all translate-y-full opacity-0 ${colorClass}`;

            const icon = type === 'success' ?
                `<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>` :
                `<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>`;
            toast.innerHTML = `${icon} <span class="text-sm font-medium">${message}</span>`;

            container.appendChild(toast);
            requestAnimationFrame(() => toast.classList.remove('translate-y-full', 'opacity-0'));
            setTimeout(() => {
                toast.classList.add('translate-y-full', 'opacity-0');
                setTimeout(() => toast.remove(), 300);
            }, 3000);
        }

        function approveStory(button) {
            const row = button.closest('tr');
            const statusCell = row.querySelector('.status-cell');
            statusCell.innerHTML =
                `<span class="inline-flex items-center gap-1.5 bg-green-500/10 text-green-400 border border-green-500/20 px-2.5 py-1 rounded-full text-xs font-medium"><span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Terpublikasi</span>`;

            const actionCell = row.querySelector('.action-cell');
            const btnBaca = actionCell.children[0].outerHTML;
            actionCell.innerHTML = btnBaca + `
                <button onclick="openEditModal('Nyanyian Sinden di Tengah Malam', 'Urban Legend', 'Tepat pukul 2 pagi...')" class="p-1.5 text-gray-400 hover:text-blue-400 transition-colors bg-white/5 hover:bg-white/10 rounded" title="Edit Cerita">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                </button>
                <button onclick="deleteStory(this)" class="p-1.5 text-gray-400 hover:text-red-400 transition-colors bg-white/5 hover:bg-white/10 rounded" title="Hapus Permanen">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                </button>
            `;
            showToast('Cerita berhasil ditarik ke portal utama!', 'success');
        }

        function rejectStory(button) {
            const row = button.closest('tr');
            row.classList.add('opacity-0', 'scale-[0.98]');
            setTimeout(() => {
                row.remove();
                showToast('Cerita ditolak dan dibakar menjadi abu.', 'error');
            }, 300);
        }

        function deleteStory(button) {
            if (confirm('Apakah Anda yakin ingin melenyapkan Cerita ini selamanya?')) {
                const row = button.closest('tr');
                row.classList.add('opacity-0', 'scale-[0.98]');
                setTimeout(() => {
                    row.remove();
                    showToast('Cerita telah dilenyapkan dari dunia nyata.', 'error');
                }, 300);
            }
        }
    </script>
@endsection
