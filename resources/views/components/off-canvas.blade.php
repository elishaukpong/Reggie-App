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
                <x-application-logo />
            </div>
            <div class="mt-5 h-0 flex-1 overflow-y-auto p-4">
                <nav class="space-y-1 px-2">
                    @foreach($menu as $heading => $items)
                        <div class="pb-12">
                            <x-navigation-header :title="$heading"/>

                            <div>
                                @foreach($items as $item)
                                    <x-navigation-link-item :item="$item" />
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </nav>

                <div class="flex items-end justify-between mb-8">

                    <div class="flex">
                        <img src="{{ asset('img/user.png') }}" alt="">

                        <div class="ml-2">
                            <p class="text-md font-bold">{{ auth()->user()->name }}</p>
                            <p class="text-sm font-light">{{ auth()->user()->email }}</p>
                        </div>
                    </div>

                    <div>
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.25008 2.33334C5.71032 2.33334 6.08342 1.96024 6.08342 1.50001C6.08342 1.03977 5.71032 0.666672 5.25008 0.666672H4.00008C2.15913 0.666672 0.666748 2.15906 0.666748 4.00001V14C0.666748 15.841 2.15913 17.3333 4.00008 17.3333H5.25008C5.71032 17.3333 6.08341 16.9602 6.08341 16.5C6.08341 16.0398 5.71032 15.6667 5.25008 15.6667H4.00008C3.07961 15.6667 2.33341 14.9205 2.33341 14L2.33342 4.00001C2.33342 3.07953 3.07961 2.33334 4.00008 2.33334H5.25008Z" fill="black"/>
                            <path d="M17.9227 9.58926C18.2481 9.26382 18.2481 8.73619 17.9227 8.41075L14.5893 5.07742C14.2639 4.75198 13.7363 4.75198 13.4108 5.07742C13.0854 5.40285 13.0854 5.93049 13.4108 6.25593L15.3216 8.16667L5.66675 8.16667C5.20651 8.16667 4.83341 8.53977 4.83341 9C4.83341 9.46024 5.20651 9.83334 5.66675 9.83334L15.3216 9.83334L13.4108 11.7441C13.0854 12.0695 13.0854 12.5972 13.4108 12.9226C13.7363 13.248 14.2639 13.248 14.5893 12.9226L17.9227 9.58926Z" fill="black"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
