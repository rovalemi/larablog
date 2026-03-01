@csrf

<div class="mb-4">
    <label class="block font-semibold">Título</label>
    <input type="text" name="title" value="{{ old('title', $post->title ?? '') }}"
           class="w-full border rounded p-2">
</div>

<div class="mb-4">
    <label class="block font-semibold">Contenido</label>
    <textarea name="content" rows="6"
              class="w-full border rounded p-2">{{ old('content', $post->content ?? '') }}</textarea>
</div>

<div class="mb-4">
    <label class="block font-semibold">Imagen (URL)</label>
    <input type="text" name="image" value="{{ old('image', $post->image ?? '') }}"
           class="w-full border rounded p-2">
</div>

<button class="px-4 py-2 bg-blue-600 text-white rounded">
    {{ $btnText }}
</button>
