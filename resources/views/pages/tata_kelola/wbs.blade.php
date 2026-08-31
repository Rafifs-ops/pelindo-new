<x-layout>
    <x-frontend.jumbotron>
        <x-slot name="title">{{ __('messages.wbs') }}</x-slot>
        <x-slot name="subtitle">Whistle Blowing System PT Pelindo Multi Terminal</x-slot>
    </x-frontend.jumbotron>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 -mt-16 relative z-20 text-center">
        <div class="clay-card p-8 sm:p-12 md:p-16 bg-white relative overflow-hidden border-2 border-white max-w-4xl mx-auto mb-10">
            <div class="inline-block mb-4">
                <span class="clay-badge shadow-sm">Kanal Pengaduan Resmi</span>
            </div>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-[#0F243C] mb-6 tracking-tight">
                Kami Bersih dari Praktik Pelanggaran Hukum
            </h2>
            <p class="text-base sm:text-lg text-slate-700 max-w-2xl mx-auto mb-10 leading-relaxed font-normal">
                Sistem Pelaporan Pelanggaran (Whistle Blowing System) merupakan saluran resmi yang disediakan bagi Anda yang memiliki informasi dan ingin melaporkan suatu perbuatan berindikasi pelanggaran yang terjadi di lingkungan PT Pelindo Multi Terminal.
            </p>
            
            <!-- Clay Banner Frame -->
            <div class="relative rounded-3xl overflow-hidden shadow-[12px_20px_40px_rgba(0,102,174,0.15)] group border-2 border-white">
                <img src="https://images.unsplash.com/photo-1533745848184-3db07256e163?auto=format&fit=crop&w=1200&q=80" 
                     alt="WBS Banner" 
                     class="w-full h-[320px] sm:h-[380px] object-cover transform group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-[#0F243C]/95 via-[#0066AE]/75 to-[#0F243C]/60 flex flex-col items-center justify-center p-6 sm:p-10">
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-3xl flex items-center justify-center text-white mb-4 border border-white/40 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    </div>
                    <h3 class="text-xl sm:text-3xl font-extrabold text-white mb-3 text-center leading-tight drop-shadow-sm">Laporkan Indikasi Pelanggaran!</h3>
                    <p class="text-slate-100 mb-8 text-center max-w-lg text-sm sm:text-base font-normal leading-relaxed">Identitas Anda kami rahasiakan. Mari bersama ciptakan lingkungan kerja yang bersih dan berintegritas.</p>
                    <a href="#" class="clay-btn-accent py-3.5 px-10 text-sm sm:text-base font-bold shadow-xl">
                        Lapor Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
