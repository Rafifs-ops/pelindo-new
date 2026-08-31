<x-layout>
    <x-frontend.jumbotron>
        <x-slot name="title">{{ __('messages.rups') }}</x-slot>
        <x-slot name="subtitle">Rapat Umum Pemegang Saham PT Pelindo Multi Terminal</x-slot>
    </x-frontend.jumbotron>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 -mt-16 relative z-20">
        <div class="clay-card p-8 sm:p-12 bg-white relative overflow-hidden border-2 border-white">
            <div class="inline-block mb-3">
                <span class="clay-badge shadow-sm">Dokumen Keputusan</span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0F243C] mb-6 tracking-tight">Risalah & Keputusan RUPS</h2>
            
            <div class="overflow-x-auto rounded-2xl border border-slate-100 shadow-[inset_0_2px_4px_rgba(0,0,0,0.02)]">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gradient-to-r from-[#E8F4FA] to-[#F0F6FA] text-[#0066AE]">
                            <th class="py-4 px-6 font-extrabold text-sm uppercase tracking-wider border-b border-slate-200/60">No</th>
                            <th class="py-4 px-6 font-extrabold text-sm uppercase tracking-wider border-b border-slate-200/60">Tahun</th>
                            <th class="py-4 px-6 font-extrabold text-sm uppercase tracking-wider border-b border-slate-200/60">Judul Dokumen RUPS</th>
                            <th class="py-4 px-6 font-extrabold text-sm uppercase tracking-wider border-b border-slate-200/60 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach($documents as $index => $doc)
                        <tr class="hover:bg-[#F8FCFF] transition-colors">
                            <td class="py-4 px-6 text-slate-500 font-semibold">{{ $index + 1 }}</td>
                            <td class="py-4 px-6 text-slate-600 font-bold">
                                <span class="clay-badge text-xs">{{ $doc->year }}</span>
                            </td>
                            <td class="py-4 px-6 font-bold text-[#0F243C]">{{ $doc->title }}</td>
                            <td class="py-4 px-6 text-right">
                                <button class="clay-btn-primary py-2 px-5 text-xs font-bold">
                                    <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    {{ __('messages.download') }}
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
