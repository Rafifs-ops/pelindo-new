<x-layout>
    <x-frontend.jumbotron>
        <x-slot name="title">{{ __('messages.manajemen') }}</x-slot>
        <x-slot name="subtitle">Dewan Direksi dan Manajemen PT Pelindo Multi Terminal</x-slot>
    </x-frontend.jumbotron>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 -mt-16 relative z-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($directors as $director)
            <div class="clay-card-interactive overflow-hidden group bg-white border-2 border-white flex flex-col">
                <div class="h-72 overflow-hidden relative bg-slate-100">
                    <img src="{{ $director->image_url }}" 
                         alt="{{ $director->name }}" 
                         class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500 transform group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0F243C]/60 via-transparent to-transparent opacity-60 group-hover:opacity-20 transition-opacity"></div>
                </div>
                <div class="p-6 sm:p-7 relative bg-white flex-grow flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-1.5 bg-[#0066AE] mb-3.5 rounded-full shadow-sm"></div>
                        <h3 class="text-xl font-extrabold text-[#0F243C] mb-1.5 group-hover:text-[#0066AE] transition-colors leading-snug">{{ $director->name }}</h3>
                        <p class="text-[#0066AE] font-bold text-sm">{{ $director->position }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
