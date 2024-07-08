<div x-data='{sbOpen: false}'>
    <x-off-canvas :menu="$menu"></x-off-canvas>
    <x-desktop-sidebar :menu="$menu"></x-desktop-sidebar>
    <div class="flex flex-1 flex-col md:pl-80">
        <x-top-bar></x-top-bar>

        <x-banner />

        <main class="flex-1">
            <div class="py-6 max-w-6xl mx-auto x-full space-y-4">
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