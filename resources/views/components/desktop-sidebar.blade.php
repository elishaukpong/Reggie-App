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
                    <p>{{\Str::upper($heading)}}</p>

{{--                    <a href="{{ data_get($item, 'path') }}"--}}
{{--                        @class([--}}
{{--                             'group flex items-center px-2 py-2 text-sm font-medium rounded-md',--}}
{{--                             'bg-gray-100 text-gray-900' => request()->is(trim(data_get($item, 'path'), '/')),--}}
{{--                             'text-gray-600 hover:bg-gray-50 hover:text-gray-900' => !request()->is(trim(data_get($item, 'path'), '/')),--}}
{{--                         ])>--}}
{{--                        @if(data_get($item, 'icon'))--}}
{{--                            <span @class([--}}
{{--                            'mr-3 flex-shrink-0 h-5 w-5',--}}
{{--                            'text-gray-500' => request()->is(trim(data_get($item, 'path'), '/')),--}}
{{--                            'text-gray-400 group-hover:text-gray-500' => !request()->is(trim(data_get($item, 'path'), '/')),--}}
{{--                        ])>--}}
{{--                            {!! data_get($item, 'icon') !!}--}}
{{--                        </span>--}}
{{--                        @endif--}}

{{--                        {{ data_get($item, 'name') }}--}}
{{--                    </a>--}}
                @endforeach
            </nav>
        </div>
    </div>
</div>
