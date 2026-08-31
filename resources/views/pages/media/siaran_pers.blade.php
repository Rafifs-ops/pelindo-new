<x-layout>
    <x-shared.page-header :title="__('messages.siaran_pers')" />
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($articles as $article)
                <x-media.article-card :article="$article" />
            @endforeach
        </div>
    </div>
</x-layout>
