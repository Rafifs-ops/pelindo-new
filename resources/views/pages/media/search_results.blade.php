<x-layout>
    <x-frontend.jumbotron>
        <x-slot name="title">{{ __('messages.search_results') }}</x-slot>
        <x-slot name="subtitle">Menampilkan hasil pencarian untuk: "{{ $q }}"</x-slot>
    </x-frontend.jumbotron>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 -mt-16 relative z-20">
        @if($articles->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($articles as $article)
                <div class="clay-card-interactive group bg-white overflow-hidden flex flex-col border-2 border-white">
                    <div class="h-52 overflow-hidden relative bg-slate-100">
                        <img src="{{ $article->image_url ?? 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&w=600&q=80' }}" 
                             alt="{{ $article->title }}" 
                             class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-[#0F243C]/10 group-hover:bg-transparent transition-colors duration-500"></div>
                    </div>
                    <div class="p-6 sm:p-7 flex flex-col flex-grow justify-between">
                        <div>
                            <span class="inline-block px-3 py-1 bg-[#E8F4FA] text-[#0066AE] rounded-full text-xs font-extrabold mb-3 uppercase tracking-wider shadow-sm border border-white">
                                {{ $article->type == 'press_release' ? 'Siaran Pers' : 'Berita Media' }}
                            </span>
                            <h3 class="text-xl font-extrabold text-[#0F243C] mb-2 line-clamp-2 leading-snug group-hover:text-[#0066AE] transition-colors">{{ $article->title }}</h3>
                            <p class="text-slate-500 text-xs font-semibold mb-3">{{ \Carbon\Carbon::parse($article->date)->translatedFormat('d F Y') }}</p>
                            <p class="text-slate-600 text-sm line-clamp-3 mb-6 leading-relaxed font-normal">{{ $article->content }}</p>
                        </div>
                        <div class="pt-4 border-t border-slate-100">
                            <a href="{{ route('media.detail', $article->id) }}" class="inline-flex items-center text-sm font-extrabold text-[#0066AE] group-hover:text-[#00528C] transition-colors">
                                <span>{{ __('messages.read_more') }}</span>
                                <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-20 clay-card bg-white p-12 max-w-xl mx-auto border-2 border-white">
                <div class="w-20 h-20 bg-[#E8F4FA] rounded-3xl flex items-center justify-center text-slate-400 mx-auto mb-6 shadow-inner">
                    <svg class="w-10 h-10 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-2xl font-extrabold text-[#0F243C] mb-2">Tidak ada hasil ditemukan</h3>
                <p class="text-slate-500 font-normal">Coba gunakan kata kunci pencarian yang lain.</p>
            </div>
        @endif
    </div>
</x-layout>
