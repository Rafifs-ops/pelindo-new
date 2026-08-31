<x-layout>
    <x-frontend.jumbotron>
        <x-slot name="title">{{ __('messages.program_pjsl') }}</x-slot>
        <x-slot name="subtitle">Program Tanggung Jawab Sosial dan Lingkungan (TJSL)</x-slot>
    </x-frontend.jumbotron>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 -mt-16 relative z-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Program Pendidikan -->
            <div class="clay-card-interactive group bg-white overflow-hidden border-2 border-white flex flex-col justify-between">
                <div>
                    <div class="h-52 overflow-hidden relative bg-slate-100">
                        <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=600&q=80" 
                             alt="Pendidikan" 
                             class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-[#0F243C]/10 group-hover:bg-transparent transition-colors duration-500"></div>
                    </div>
                    <div class="p-7">
                        <div class="w-10 h-1.5 bg-[#0066AE] mb-4 rounded-full"></div>
                        <h3 class="text-xl font-extrabold text-[#0F243C] mb-3 group-hover:text-[#0066AE] transition-colors leading-snug">Program Peduli Pendidikan</h3>
                        <p class="text-slate-600 text-sm leading-relaxed font-normal">Berkomitmen untuk mencerdaskan kehidupan bangsa melalui pemberian beasiswa, bantuan fasilitas pendidikan, dan program literasi maritim bagi generasi muda di sekitar area pelabuhan.</p>
                    </div>
                </div>
            </div>

            <!-- Program Lingkungan -->
            <div class="clay-card-interactive group bg-white overflow-hidden border-2 border-white flex flex-col justify-between">
                <div>
                    <div class="h-52 overflow-hidden relative bg-slate-100">
                        <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=600&q=80" 
                             alt="Lingkungan" 
                             class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-[#0F243C]/10 group-hover:bg-transparent transition-colors duration-500"></div>
                    </div>
                    <div class="p-7">
                        <div class="w-10 h-1.5 bg-[#0066AE] mb-4 rounded-full"></div>
                        <h3 class="text-xl font-extrabold text-[#0F243C] mb-3 group-hover:text-[#0066AE] transition-colors leading-snug">Program Peduli Lingkungan</h3>
                        <p class="text-slate-600 text-sm leading-relaxed font-normal">Menginisiasi pelestarian ekosistem darat dan laut, rehabilitasi mangrove, serta pengelolaan sampah terpadu (Bank Sampah) demi mewujudkan pelabuhan berwawasan lingkungan (Green Port).</p>
                    </div>
                </div>
            </div>

            <!-- Program UMK -->
            <div class="clay-card-interactive group bg-white overflow-hidden border-2 border-white flex flex-col justify-between">
                <div>
                    <div class="h-52 overflow-hidden relative bg-slate-100">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=600&q=80" 
                             alt="UMK" 
                             class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-[#0F243C]/10 group-hover:bg-transparent transition-colors duration-500"></div>
                    </div>
                    <div class="p-7">
                        <div class="w-10 h-1.5 bg-[#0066AE] mb-4 rounded-full"></div>
                        <h3 class="text-xl font-extrabold text-[#0F243C] mb-3 group-hover:text-[#0066AE] transition-colors leading-snug">Program Peduli UMK</h3>
                        <p class="text-slate-600 text-sm leading-relaxed font-normal">Pemberdayaan Usaha Mikro dan Kecil melalui bantuan permodalan, pembinaan manajemen usaha, dan sertifikasi untuk meningkatkan daya saing produk lokal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
