<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Editar Comentario</h2>
    </x-slot>

    <div class="max-w-3xl mx-auto py-6">
        <form action="{{ route('comments.update', $comment) }}" method="POST">
            @csrf
            @method('PUT')

            <textarea name="content" rows="4"
                      class="w-full border rounded p-2">{{ old('content', $comment->content) }}</textarea>

            <button class="mt-3 px-4 py-2 bg-blue-600 text-white rounded">
                Actualizar comentario
            </button>
        </form>
    </div>
</x-app-layout>
