@props(['title', 'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80'])

<x-frontend.jumbotron :backgroundImage="$image">
    <x-slot name="title">{{ $title }}</x-slot>
</x-frontend.jumbotron>
