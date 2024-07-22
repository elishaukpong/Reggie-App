@props(['up' => true])

<div class="w-1/4 border mr-2 p-4 rounded-[10px] bg-white">
    <div class="flex justify-between items-center">
        <h3 class="font-medium text-sm">
            {{ $slot }}
        </h3>

        <label for="images"></label>
        <select name="" id="images" class="border border-gray-300 rounded-md text-xs">
            <option value="">30 Days</option>
            <option value="">40 Days</option>
        </select>
    </div>

    <div class="flex justify-between items-center mt-12">
        <h2 class="text-2xl font-bold">
            {{ $figure }}
        </h2>

        @if($up == 'true')

            <div class="font-medium text-xs inline-flex items-center bg-success-50 text-success-700 rounded-[10px] px-[4px]">
                <span class="mr-1">
                    <x-svg.up-arrow/>
                </span>

                2.71%
            </div>

        @else

            <div class="font-medium text-xs inline-flex items-center bg-error-50 text-error-700 rounded-[10px] px-[4px]">
                        <span class="mr-1">
                            <x-svg.down-arrow/>
                        </span>

                2.71%
            </div>
        @endif
    </div>
</div>