<div x-data='{sbOpen: false}'>
    <x-off-canvas :menu="$menu"></x-off-canvas>
    <x-desktop-sidebar :menu="$menu"></x-desktop-sidebar>
    <div class="flex flex-1 flex-col md:pl-80 h-lvh">
        <x-top-bar></x-top-bar>

        <x-banner />

        <main class="flex-1 h-full bg-gray-50">
{{--            <div class="card bg-primary-pink-100 p-[22px]">--}}
{{--                <div class="block col-span-2 text-center">--}}
{{--                    <span class="text-sm text-gray-900 font-normal">{{ __('Verification in ongoing! You will receive an email soon!') }}</span>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="py-6 max-w-7xl mx-auto x-full space-y-4 ">
                @isset($header)
                    <div class="mx-auto max-w-7xl px-4">
                        {{$header}}
                    </div>
                @endisset
                <div class="mx-auto max-w-7xl px-4">
                    {{$slot}}
                </div>
            </div>
        </main>
    </div>
</div>