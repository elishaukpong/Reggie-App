@props(['active' => false])

<div {{ $attributes }} @class([
         'flex px-8 py-4 cursor-pointer',
         'bg-white' => $active
    ])>

    <div class="pt-1">
        <x-svg-stop />
    </div>

    <div class="ml-2">
        <p class="font-semibold text-nav-gray-100 pb-1">
            {{ $slot }}
        </p>

        <button class="text-nav-gray-100 px-4 py-1 bg-nav-gray-50 rounded-full font-semibold text-[10px]">
            PENDING
        </button>
    </div>

</div>