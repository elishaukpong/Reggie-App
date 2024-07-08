@props(['link' => ''])

<a class="text-white bg-primary-pink-500 rounded-md py-2 px-4" href="{{ $link }}">
    {{ $slot }}
</a>