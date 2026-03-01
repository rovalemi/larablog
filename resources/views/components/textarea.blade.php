@props(['value' => ''])

<textarea {{ $attributes->merge(['class' => 'w-full border-gray-300 rounded-md shadow-sm']) }}>
    {{ $value }}
</textarea>
