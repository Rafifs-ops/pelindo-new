<x-layout>
    <x-frontend.jumbotron>
        <x-slot name="title">{{ __('messages.ppid') }}</x-slot>
        <x-slot name="subtitle">Pejabat Pengelola Informasi dan Dokumentasi</x-slot>
    </x-frontend.jumbotron>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 -mt-16 relative z-20">
        <div class="clay-card p-8 sm:p-12 bg-white relative overflow-hidden border-2 border-white mb-12">
            <div class="inline-block mb-3">
                <span class="clay-badge shadow-sm">Keterbukaan Informasi</span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0F243C] mb-4 tracking-tight">Informasi Publik</h2>
            <div class="prose prose-lg max-w-none text-slate-700 mb-10 leading-relaxed font-normal">
                <p>Dalam rangka mewujudkan tata kelola perusahaan yang baik dan transparan, PT Pelindo Multi Terminal menyediakan akses informasi publik sesuai dengan undang-undang Keterbukaan Informasi Publik. PPID kami berdedikasi untuk memberikan layanan informasi yang akurat, terpercaya, dan mudah diakses oleh seluruh lapisan masyarakat.</p>
            </div>
            
            <h3 class="text-xl sm:text-2xl font-extrabold text-[#0F243C] mb-6 tracking-tight flex items-center">
                <span class="w-3 h-3 rounded-full bg-[#0066AE] mr-3"></span>
                Daftar Dokumen Publik
            </h3>
            <div class="overflow-x-auto rounded-2xl border border-slate-100 shadow-[inset_0_2px_4px_rgba(0,0,0,0.02)]">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gradient-to-r from-[#E8F4FA] to-[#F0F6FA] text-[#0066AE]">
                            <th class="py-4 px-6 font-extrabold text-sm uppercase tracking-wider border-b border-slate-200/60">No</th>
                            <th class="py-4 px-6 font-extrabold text-sm uppercase tracking-wider border-b border-slate-200/60">Kategori</th>
                            <th class="py-4 px-6 font-extrabold text-sm uppercase tracking-wider border-b border-slate-200/60">Judul Dokumen</th>
                            <th class="py-4 px-6 font-extrabold text-sm uppercase tracking-wider border-b border-slate-200/60 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr class="hover:bg-[#F8FCFF] transition-colors">
                            <td class="py-4 px-6 text-slate-500 font-semibold">1</td>
                            <td class="py-4 px-6">
                                <span class="clay-badge text-xs">Informasi Berkala</span>
                            </td>
                            <td class="py-4 px-6 font-bold text-[#0F243C]">Ringkasan Laporan Akses Informasi Publik Tahunan</td>
                            <td class="py-4 px-6 text-right">
                                <button class="clay-btn-primary py-2 px-5 text-xs font-bold">
                                    <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    {{ __('messages.download') }}
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-[#F8FCFF] transition-colors">
                            <td class="py-4 px-6 text-slate-500 font-semibold">2</td>
                            <td class="py-4 px-6">
                                <span class="clay-badge text-xs">Regulasi</span>
                            </td>
                            <td class="py-4 px-6 font-bold text-[#0F243C]">Peraturan KIP No. 1 Tahun 2021</td>
                            <td class="py-4 px-6 text-right">
                                <button class="clay-btn-primary py-2 px-5 text-xs font-bold">
                                    <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    {{ __('messages.download') }}
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-[#F8FCFF] transition-colors">
                            <td class="py-4 px-6 text-slate-500 font-semibold">3</td>
                            <td class="py-4 px-6">
                                <span class="clay-badge text-xs">Informasi Serta Merta</span>
                            </td>
                            <td class="py-4 px-6 font-bold text-[#0F243C]">Prosedur Peringatan Dini Bencana Area Pelabuhan</td>
                            <td class="py-4 px-6 text-right">
                                <button class="clay-btn-primary py-2 px-5 text-xs font-bold">
                                    <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    {{ __('messages.download') }}
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
