<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Crear Post</h2>
    </x-slot>

    <div class="max-w-4xl mx-auto py-6">
        <form action="{{ route('posts.store') }}" method="POST">
            @include('posts._form', ['btnText' => 'Crear'])
        </form>
    </div>
</x-app-layout>
