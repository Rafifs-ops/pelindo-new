<x-layout>
    <x-frontend.jumbotron>
        <x-slot name="title">{{ __('messages.branch') }}</x-slot>
        <x-slot name="subtitle">Daftar Cabang Pelabuhan & Terminal di Seluruh Indonesia</x-slot>
    </x-frontend.jumbotron>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 -mt-16 relative z-20" x-data="{ filter: 'All' }">
        <!-- Tactile Clay Filter Pills -->
        <div class="flex flex-wrap gap-3 mb-10 justify-center">
            <button @click="filter = 'All'" 
                    :class="{'clay-btn-primary text-white shadow-md': filter === 'All', 'clay-btn-secondary text-slate-700': filter !== 'All'}" 
                    class="px-6 py-2.5 rounded-full font-extrabold text-xs sm:text-sm transition-all duration-300">
                Semua Branch
            </button>
            <button @click="filter = 'PT Pelabuhan Tanjung Priok'" 
                    :class="{'clay-btn-primary text-white shadow-md': filter === 'PT Pelabuhan Tanjung Priok', 'clay-btn-secondary text-slate-700': filter !== 'PT Pelabuhan Tanjung Priok'}" 
                    class="px-6 py-2.5 rounded-full font-extrabold text-xs sm:text-sm transition-all duration-300">
                PTP Nonpetikemas
            </button>
            <button @click="filter = 'PT Indonesia Kendaraan Terminal'" 
                    :class="{'clay-btn-primary text-white shadow-md': filter === 'PT Indonesia Kendaraan Terminal', 'clay-btn-secondary text-slate-700': filter !== 'PT Indonesia Kendaraan Terminal'}" 
                    class="px-6 py-2.5 rounded-full font-extrabold text-xs sm:text-sm transition-all duration-300">
                IKT
            </button>
            <button @click="filter = 'PT Terminal Curah Utama'" 
                    :class="{'clay-btn-primary text-white shadow-md': filter === 'PT Terminal Curah Utama', 'clay-btn-secondary text-slate-700': filter !== 'PT Terminal Curah Utama'}" 
                    class="px-6 py-2.5 rounded-full font-extrabold text-xs sm:text-sm transition-all duration-300">
                TCU
            </button>
        </div>

        <!-- Branch Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($branches as $branch)
            <div x-show="filter === 'All' || filter === '{{ $branch->parent_company }}'" 
                 class="clay-card-interactive group bg-white overflow-hidden flex flex-col border-2 border-white">
                <div class="h-44 overflow-hidden relative bg-slate-100">
                    <img src="{{ $branch->image_url }}" 
                         alt="{{ $branch->name }}" 
                         class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-[#0F243C]/10 group-hover:bg-transparent transition-colors duration-500"></div>
                </div>
                <div class="p-6 flex flex-col flex-grow relative justify-between">
                    <div>
                        <span class="inline-block px-3 py-1 bg-[#E8F4FA] text-[#0066AE] rounded-full text-[10px] font-extrabold mb-3 uppercase tracking-wider self-start shadow-sm border border-white">
                            {{ $branch->parent_company }}
                        </span>
                        <h3 class="text-lg font-extrabold text-[#0F243C] mb-2 leading-snug group-hover:text-[#0066AE] transition-colors">{{ $branch->name }}</h3>
                    </div>
                    
                    <div class="mt-4 pt-4 flex justify-between items-center border-t border-slate-100">
                        <span class="text-xs text-slate-500 font-semibold flex items-center">
                            <svg class="w-3.5 h-3.5 mr-1 text-[#0066AE]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            Kota
                        </span>
                        <a href="{{ route('layanan.branch.detail', $branch->id) }}" 
                           class="clay-btn-secondary py-1.5 px-4 text-xs font-bold">
                            <span>Detail</span>
                            <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
