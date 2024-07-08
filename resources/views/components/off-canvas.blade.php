{{-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. --}}
<div class="relative z-40 md:hidden" role="dialog" aria-modal="true">
    <div
        x-cloak
        x-show="sbOpen"
        x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

    <div class="fixed inset-0 z-40 flex" x-cloak x-show="sbOpen">
        <div
            x-cloak
            x-show="sbOpen"
            x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out duration-300 transform"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="relative flex w-full max-w-xs flex-1 flex-col bg-white pt-5 pb-4">
            <div
                x-cloak
                x-show="sbOpen"
                x-transition:enter="ease-in-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in-out duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute top-0 right-0 -mr-12 pt-2">
                <button
                    x-on:click="sbOpen=false"
                    type="button" class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">Close sidebar</span>
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="flex flex-shrink-0 items-center px-4">
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            </div>
            <div class="mt-5 h-0 flex-1 overflow-y-auto">
                <nav class="space-y-1 px-2">
                    @foreach($menu as $item)
                        <a href="{{ data_get($item, 'path') }}"
                            @class([
                                 'group flex items-center px-2 py-2 text-base font-medium rounded-md',
                                 'bg-gray-100 text-gray-900' => request()->is(trim(data_get($item, 'path'), '/')),
                                 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' => !request()->is(trim(data_get($item, 'path'), '/')),
                             ])>
                            @if(data_get($item, 'icon'))
                                <span @class([
                                        'mr-4 flex-shrink-0 h-6 w-6',
                                        'text-gray-500' => request()->is(trim(data_get($item, 'path'), '/')),
                                        'text-gray-400 group-hover:text-gray-500' => !request()->is(trim(data_get($item, 'path'), '/')),
                                    ])>
                                        {!! data_get($item, 'icon') !!}
                                    </span>
                            @endif
                            {{ data_get($item, 'name') }}
                        </a>
                    @endforeach
                </nav>
            </div>
        </div>
    </div>
</div>
