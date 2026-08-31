@props(['article'])

<article class="clay-card-interactive group bg-white overflow-hidden flex flex-col md:flex-row border-2 border-white">
    <div class="md:w-1/3 h-52 md:h-auto relative overflow-hidden bg-slate-200">
        <img src="{{ $article->image_url ?? 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&w=800&q=80' }}" 
             alt="{{ $article->title }}" 
             class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-105">
        <div class="absolute inset-0 bg-[#0F243C]/10 group-hover:bg-transparent transition-colors duration-500"></div>
    </div>
    <div class="p-6 sm:p-8 md:w-2/3 flex flex-col justify-center">
        <div class="inline-flex items-center text-xs font-extrabold text-[#0066AE] bg-[#E8F4FA] px-3.5 py-1 rounded-full mb-3 self-start shadow-sm border border-white">
            <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            {{ \Carbon\Carbon::parse($article->date)->translatedFormat('d F Y') }}
        </div>
        <h2 class="text-xl sm:text-2xl font-extrabold text-[#0F243C] mb-3 group-hover:text-[#0066AE] transition-colors leading-snug">
            {{ $article->title }}
        </h2>
        <p class="text-slate-600 mb-6 line-clamp-2 leading-relaxed text-sm sm:text-base font-normal">
            {{ $article->content }}
        </p>
        <div>
            <a href="{{ route('media.detail', $article->id) }}" 
               class="clay-btn-secondary py-2.5 px-6 text-xs sm:text-sm font-bold">
                <span>Baca Selengkapnya</span>
                <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>
    </div>
</article>
