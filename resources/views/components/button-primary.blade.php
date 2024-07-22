@props(['link' => ''])

<a {{ $attributes->merge(['class' => 'text-white bg-primary-pink-500 rounded-md py-2 px-4 text-sm font-semibold']) }} href="{{ $link }}">
    {{ $slot }}
</a>
