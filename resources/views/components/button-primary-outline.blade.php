@props(['link' => ''])

<a class="rounded-md py-2 px-4 border border-primary-pink-500 text-primary-pink-500" href="{{ $link }}" {{ $attributes }}>
    {{ $slot }}
</a>