<x-layout>
    <x-frontend.jumbotron>
        <x-slot name="title">{{ __('messages.layanan') }}</x-slot>
        <x-slot name="subtitle">Jenis-jenis Layanan Kepelabuhanan Terpadu</x-slot>
    </x-frontend.jumbotron>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 -mt-16 relative z-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Stevedoring -->
            <div class="clay-card-interactive group bg-white overflow-hidden border-2 border-white flex flex-col">
                <div class="h-60 overflow-hidden relative bg-slate-100">
                    <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=800&q=80" 
                         alt="Stevedoring" 
                         class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-[#0F243C]/10 group-hover:bg-transparent transition-colors duration-500"></div>
                </div>
                <div class="p-8 relative flex-grow flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-1 bg-[#0066AE] mb-4 rounded-full"></div>
                        <h3 class="text-2xl font-extrabold text-[#0F243C] mb-3 group-hover:text-[#0066AE] transition-colors leading-snug">Stevedoring</h3>
                        <p class="text-slate-600 leading-relaxed font-normal text-base">Kegiatan membongkar muatan dari kapal ke dermaga atau memuat muatan komoditas dari dermaga ke dalam kapal.</p>
                    </div>
                </div>
            </div>

            <!-- Cargodoring -->
            <div class="clay-card-interactive group bg-white overflow-hidden border-2 border-white flex flex-col">
                <div class="h-60 overflow-hidden relative bg-slate-100">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=800&q=80" 
                         alt="Cargodoring" 
                         class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-[#0F243C]/10 group-hover:bg-transparent transition-colors duration-500"></div>
                </div>
                <div class="p-8 relative flex-grow flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-1 bg-[#0066AE] mb-4 rounded-full"></div>
                        <h3 class="text-2xl font-extrabold text-[#0F243C] mb-3 group-hover:text-[#0066AE] transition-colors leading-snug">Cargodoring</h3>
                        <p class="text-slate-600 leading-relaxed font-normal text-base">Kegiatan melepaskan barang dari tali atau jala-jala (ex tackle) di dermaga dan mengangkut dari dermaga ke gudang atau lapangan penumpukan, selanjutnya menyusun di gudang atau lapangan penumpukan barang atau sebaliknya.</p>
                    </div>
                </div>
            </div>

            <!-- Receiving Delivery -->
            <div class="clay-card-interactive group bg-white overflow-hidden border-2 border-white flex flex-col">
                <div class="h-60 overflow-hidden relative bg-slate-100">
                    <img src="https://images.unsplash.com/photo-1541888086925-0c13d3cb99df?auto=format&fit=crop&w=800&q=80" 
                         alt="Receiving Delivery" 
                         class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-[#0F243C]/10 group-hover:bg-transparent transition-colors duration-500"></div>
                </div>
                <div class="p-8 relative flex-grow flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-1 bg-[#0066AE] mb-4 rounded-full"></div>
                        <h3 class="text-2xl font-extrabold text-[#0F243C] mb-3 group-hover:text-[#0066AE] transition-colors leading-snug">Receiving & Delivery</h3>
                        <p class="text-slate-600 leading-relaxed font-normal text-base">Receiving merupakan kegiatan menerima muatan dari luar area pelabuhan sampai tersusun di lapangan penumpukan. Delivery adalah kegiatan memindahkan muatan dari lapangan penumpukan dan menyerahkannya sampai tersusun di atas kendaraan.</p>
                    </div>
                </div>
            </div>

            <!-- Layanan Lainnya -->
            <div class="clay-card-interactive group bg-white overflow-hidden border-2 border-white flex flex-col">
                <div class="h-60 overflow-hidden relative bg-slate-100">
                    <img src="https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?auto=format&fit=crop&w=800&q=80" 
                         alt="Layanan Lainnya" 
                         class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-[#0F243C]/10 group-hover:bg-transparent transition-colors duration-500"></div>
                </div>
                <div class="p-8 relative flex-grow flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-1 bg-[#0066AE] mb-4 rounded-full"></div>
                        <h3 class="text-2xl font-extrabold text-[#0F243C] mb-3 group-hover:text-[#0066AE] transition-colors leading-snug">Layanan Lainnya</h3>
                        <p class="text-slate-600 leading-relaxed font-normal text-base">Merupakan jasa layanan yang menunjang kegiatan yang ada di pelabuhan yang meliputi pemeriksaan karantina, pemeriksaan bea cukai, dan lain sebagainya.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layout>
