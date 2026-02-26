@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4">
        @foreach ($posts as $post)
            <article class="mb-8">
                <h2 class="text-xl font-bold">{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
                <a href="{{ route('posts.show', $post) }}" class="text-blue-500">Leer más...</a>
            </article>
        @endforeach
    </div>
@endsection
