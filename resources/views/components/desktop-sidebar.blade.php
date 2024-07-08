<!-- Static sidebar for desktop -->
<div class="hidden md:fixed md:inset-y-0 md:flex md:w-80 md:flex-col">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex flex-grow flex-col overflow-y-auto border-r border-gray-200 bg-white p-5">
        <div class="flex flex-shrink-0 items-center px-4 pb-4">
            <x-application-logo />
        </div>
        <div class="mt-5 flex flex-grow flex-col">
            <nav class="flex-1 space-y-1 px-2 pb-4">
                @foreach($menu as $heading => $items)
                    <div>
                        <x-navigation-header :title="$heading"/>

                        <div>
                            @foreach($items as $item)
                                <x-navigation-link-item :item="$item" />
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </nav>

            <div class="flex">
                <div class="flex">
                    <img src="{{ asset('img/user.png') }}" alt="">
                    <div>
                        <h2>{{ auth()->user()->name }}</h2>
                        <p>{{ auth()->user()->email }}</p>
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
