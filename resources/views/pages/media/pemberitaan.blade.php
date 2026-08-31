<x-layout>
    <x-shared.page-header :title="__('messages.pemberitaan')" />
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="space-y-8">
            @foreach($articles as $article)
                <x-media.article-list-item :article="$article" />
            @endforeach
        </div>
    </div>
</x-layout>
