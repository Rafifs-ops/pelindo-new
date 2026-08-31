<x-layout>
    <x-frontend.jumbotron>
        <x-slot name="title">{{ __('messages.anggaran_dasar') }}</x-slot>
        <x-slot name="subtitle">Jadwal dan Pelaksanaan Rapat Direksi PT Pelindo Multi Terminal</x-slot>
    </x-frontend.jumbotron>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 -mt-16 relative z-20">
        <div class="clay-card p-8 sm:p-12 bg-white relative overflow-hidden border-2 border-white">
            <div class="inline-block mb-3">
                <span class="clay-badge shadow-sm">Agenda Korporasi</span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0F243C] mb-4 tracking-tight">Rencana Pelaksanaan Rapat Direksi</h2>
            <p class="text-slate-600 mb-8 leading-relaxed font-normal max-w-3xl text-base sm:text-lg">
                Rapat Direksi merupakan forum pengambilan keputusan tertinggi bagi Direksi yang diadakan secara berkala untuk mengevaluasi kinerja perusahaan, merumuskan strategi, dan mengambil keputusan-keputusan penting terkait kegiatan operasional dan bisnis perusahaan.
            </p>
            
            <div class="overflow-x-auto rounded-2xl border border-slate-100 shadow-[inset_0_2px_4px_rgba(0,0,0,0.02)]">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gradient-to-r from-[#E8F4FA] to-[#F0F6FA] text-[#0066AE]">
                            <th class="py-4 px-6 font-extrabold text-sm uppercase tracking-wider border-b border-slate-200/60">No</th>
                            <th class="py-4 px-6 font-extrabold text-sm uppercase tracking-wider border-b border-slate-200/60">Agenda</th>
                            <th class="py-4 px-6 font-extrabold text-sm uppercase tracking-wider border-b border-slate-200/60">Tanggal Pelaksanaan</th>
                            <th class="py-4 px-6 font-extrabold text-sm uppercase tracking-wider border-b border-slate-200/60">Lokasi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach($meetings as $index => $meeting)
                        <tr class="hover:bg-[#F8FCFF] transition-colors">
                            <td class="py-4 px-6 text-slate-500 font-semibold">{{ $index + 1 }}</td>
                            <td class="py-4 px-6 font-bold text-[#0F243C]">{{ $meeting->agenda }}</td>
                            <td class="py-4 px-6 text-slate-600 font-medium">{{ \Carbon\Carbon::parse($meeting->date)->translatedFormat('d F Y') }}</td>
                            <td class="py-4 px-6 text-slate-600 font-medium">
                                <span class="inline-flex items-center">
                                    <svg class="w-4 h-4 mr-1.5 text-[#0066AE]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    {{ $meeting->location }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
