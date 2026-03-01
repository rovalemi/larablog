<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Administrar Posts</h2>
    </x-slot>

    <div class="max-w-6xl mx-auto py-6">
        <div class="mb-6 flex space-x-6 border-b pb-2">
            <a href="{{ route('admin.posts.index') }}"
            class="{{ request()->routeIs('admin.posts.*') ? 'text-blue-600 font-semibold border-b-2 border-blue-600 pb-1' : 'text-gray-600 hover:text-gray-800' }}">
                Posts
            </a>

            <a href="{{ route('admin.users.index') }}"
            class="{{ request()->routeIs('admin.users.*') ? 'text-blue-600 font-semibold border-b-2 border-blue-600 pb-1' : 'text-gray-600 hover:text-gray-800' }}">
                Usuarios
            </a>
        </div>

        <table class="w-full border">
            <thead>
                <tr class="bg-gray-100">
                    <th class="p-2">ID</th>
                    <th class="p-2">Título</th>
                    <th class="p-2">Autor</th>
                    <th class="p-2">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                    <tr class="border-t">
                        <td class="p-2">{{ $post->id }}</td>
                        <td class="p-2">{{ $post->title }}</td>
                        <td class="p-2">{{ $post->user->name }}</td>
                        <td class="p-2">
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="px-3 py-1 bg-red-600 text-white rounded">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
