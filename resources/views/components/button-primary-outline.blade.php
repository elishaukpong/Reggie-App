@props(['link' => ''])

<a class="rounded-md py-2 px-4 border-[1.5px] border-primary-pink-500 text-primary-pink-500 text-sm font-semibold" href="{{ $link }}" {{ $attributes }}>
    {{ $slot }}
</a>