<div class="bg-white md:w-1/3 m-4 px-20 py-[50px] rounded-[10px]">
    <div class="flex justify-center">
        <span class="p-4 rounded-full bg-primary-pink-50">
            {{ $icon }}
        </span>
    </div>

    <div class="py-8 mb-4">
        <p class="font-medium text-black text-sm">
            {{ $slot }}
        </p>
    </div>

    <div>
        {{ $footer }}
    </div>
</div>