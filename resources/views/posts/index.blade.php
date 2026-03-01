<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Posts</h2>
    </x-slot>

    <div class="max-w-5xl mx-auto py-6">

        @auth
            <a href="{{ route('posts.create') }}"
               class="px-4 py-2 bg-blue-600 text-white rounded">
                Crear nuevo post
            </a>
        @endauth

        <div class="mt-6 space-y-4">
            @foreach ($posts as $post)
                <div class="p-4 border rounded">
                    <h3 class="text-xl font-bold">
                        <a href="{{ route('posts.show', $post) }}">
                            {{ $post->title }}
                        </a>
                    </h3>
                    <p class="text-sm text-gray-500">
                        Publicado por {{ $post->user->name }} • {{ $post->created_at->diffForHumans() }}
                    </p>
                </div>
            @endforeach
        </div>

        <div class="mt-6">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
