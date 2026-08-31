<x-layout>
    <x-frontend.jumbotron>
        <x-slot name="title">{{ __('messages.laporan') }}</x-slot>
        <x-slot name="subtitle">Laporan Tahunan dan Keterbukaan Informasi Keuangan</x-slot>
    </x-frontend.jumbotron>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 -mt-16 relative z-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($reports as $report)
                <x-investor.report-card :report="$report" />
            @endforeach
        </div>
    </div>
</x-layout>
