@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-sm text-gray-600 capitalize mb-2']) }}>
    {{ $value ?? $slot }}
</label>
