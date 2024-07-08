<!-- Static sidebar for desktop -->
<div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">
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
        </div>
    </div>
</div>
