<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">{{ $post->title }}</h2>
    </x-slot>

    <div class="max-w-4xl mx-auto py-6">

        <p class="text-gray-600 mb-4">
            Publicado por {{ $post->user->name }} • {{ $post->created_at->format('d/m/Y') }}
        </p>

        <div class="prose max-w-none">
            {!! nl2br(e($post->content)) !!}
        </div>

        @auth
            @can('update', $post)
                <div class="mt-4 flex gap-2">
                    <a href="{{ route('posts.edit', $post) }}"
                       class="px-3 py-2 bg-yellow-500 text-white rounded">
                        Editar
                    </a>

                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="px-3 py-2 bg-red-600 text-white rounded">
                            Eliminar
                        </button>
                    </form>
                </div>
            @endcan
        @endauth

        <hr class="my-6">

        <h3 class="text-lg font-semibold mb-4">Comentarios</h3>

        @foreach ($post->comments as $comment)
            <div class="border p-3 rounded mb-3">
                <p>{{ $comment->content }}</p>
                <p class="text-sm text-gray-500">
                    Por {{ $comment->user->name }} • {{ $comment->created_at->diffForHumans() }}
                </p>

                @can('update', $comment)
                    <a href="{{ route('comments.edit', $comment) }}"
                       class="text-blue-600 text-sm">Editar</a>
                @endcan

                @can('delete', $comment)
                    <form action="{{ route('comments.destroy', $comment) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 text-sm">Eliminar</button>
                    </form>
                @endcan
            </div>
        @endforeach

        @auth
            <form action="{{ route('comments.store', $post) }}" method="POST" class="mt-6">
                @csrf
                <textarea name="content" class="w-full border rounded p-2" rows="3"
                          placeholder="Escribe un comentario..."></textarea>

                <button class="mt-2 px-4 py-2 bg-blue-600 text-white rounded">
                    Comentar
                </button>
            </form>
        @endauth

    </div>
</x-app-layout>
