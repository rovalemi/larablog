<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Editar Post</h2>
    </x-slot>

    <div class="max-w-4xl mx-auto py-6">
        <form action="{{ route('posts.update', $post) }}" method="POST">
            @method('PUT')
            @include('posts._form', ['btnText' => 'Actualizar'])
        </form>
    </div>
</x-app-layout>
