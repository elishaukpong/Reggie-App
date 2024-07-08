<a href="{{ data_get($item, 'path') }}"
        @class([
             'group flex items-center px-4 py-3 text-base font-medium rounded-[4px]',
             'bg-pink-100 text-black' => request()->is(trim(data_get($item, 'path'), '/')),
             'text-gray-600 hover:bg-gray-50 hover:text-gray-900' => !request()->is(trim(data_get($item, 'path'), '/')),
        ])>

        @if(data_get($item, 'icon'))
            <span @class([
                'mr-3 flex-shrink-0 h-5 w-5',
                'text-gray-500' => request()->is(trim(data_get($item, 'path'), '/')),
                'text-gray-400 group-hover:text-gray-500' => !request()->is(trim(data_get($item, 'path'), '/')),
            ])>
            {!! data_get($item, 'icon') !!}
        </span>
            @endif

    {{ data_get($item, 'name') }}
</a>