<a href="{{ data_get($item, 'path') }}"
    @class([
         'group flex items-center px-4 py-3 text-sm font-medium rounded-[4px]',
         'bg-pink-100 text-black border-r-8 border-primary-pink-600' => request()->is(trim(data_get($item, 'path'), '/')),
         'text-gray-600 hover:bg-pink-100 hover:text-black hover:border-r-8 hover:border-primary-pink-600' => !request()->is(trim(data_get($item, 'path'), '/')),
    ])>

    @if(data_get($item, 'icon'))
        <span @class([
            'mr-4 flex-shrink-0 h-5 w-5',
            'text-primary-pink-600' => request()->is(trim(data_get($item, 'path'), '/')),
            'text-gray-400 group-hover:text-primary-pink-600' => !request()->is(trim(data_get($item, 'path'), '/')),
        ])>
            {!! data_get($item, 'icon') !!}
        </span>
    @endif

    {{ data_get($item, 'name') }}
</a>