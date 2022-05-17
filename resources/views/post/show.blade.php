<x-layout>
    <x-slot name="title">
        posts-site.com
    </x-slot>

    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->id }}: {{ $post->title }}</h2>
            <div>
                {{ $post->text }}
            </div>
        </div>
    @endforeach
</x-layout>
