<x-layout>
    <x-frontend.jumbotron>
        <x-slot name="title">{{ __('messages.kode_etik_bisnis') }}</x-slot>
        <x-slot name="subtitle">Pedoman Perilaku dan Etika Insan Pelindo Multi Terminal</x-slot>
    </x-frontend.jumbotron>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 -mt-16 relative z-20">
        <div class="clay-card p-8 sm:p-12 md:p-14 bg-white relative overflow-hidden border-2 border-white flex flex-col md:flex-row gap-10 md:gap-14 items-center">
            <div class="w-full md:w-1/2">
                <div class="clay-card p-3 bg-white border-2 border-white overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1554774853-719586f82d77?auto=format&fit=crop&w=800&q=80" 
                         alt="Kode Etik Bisnis" 
                         class="rounded-2xl w-full h-auto object-cover shadow-inner">
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <div class="inline-block mb-3">
                    <span class="clay-badge shadow-sm">Code of Conduct</span>
                </div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0F243C] mb-6 tracking-tight">Integritas dan Profesionalisme</h2>
                <div class="prose prose-lg text-slate-700 font-normal leading-relaxed space-y-4">
                    <p>Kode Etik Bisnis (Code of Conduct) merupakan pedoman perilaku bagi seluruh Insan Pelindo Multi Terminal dalam berinteraksi dengan pemangku kepentingan (stakeholders). Kami meyakini bahwa integritas adalah landasan utama dalam menjalankan bisnis kepelabuhanan yang berkelanjutan.</p>
                    <p>Nilai-nilai inti (Core Values) <strong>AKHLAK</strong> - Amanah, Kompeten, Harmonis, Loyal, Adaptif, dan Kolaboratif menjadi kompas moral kami. Kami berkomitmen untuk:</p>
                    <ul class="space-y-2.5 mt-4 text-slate-800 font-medium">
                        <li class="flex items-start">
                            <span class="w-5 h-5 rounded-full bg-[#E8F4FA] text-[#0066AE] flex items-center justify-center mr-3 mt-0.5 flex-shrink-0 text-xs font-bold shadow-sm">✓</span>
                            <span>Menghindari segala bentuk benturan kepentingan.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-5 h-5 rounded-full bg-[#E8F4FA] text-[#0066AE] flex items-center justify-center mr-3 mt-0.5 flex-shrink-0 text-xs font-bold shadow-sm">✓</span>
                            <span>Menolak segala bentuk suap, gratifikasi, dan korupsi.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-5 h-5 rounded-full bg-[#E8F4FA] text-[#0066AE] flex items-center justify-center mr-3 mt-0.5 flex-shrink-0 text-xs font-bold shadow-sm">✓</span>
                            <span>Menjaga kerahasiaan informasi perusahaan.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-5 h-5 rounded-full bg-[#E8F4FA] text-[#0066AE] flex items-center justify-center mr-3 mt-0.5 flex-shrink-0 text-xs font-bold shadow-sm">✓</span>
                            <span>Berkompetisi secara sehat dan beretika.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-layout>
