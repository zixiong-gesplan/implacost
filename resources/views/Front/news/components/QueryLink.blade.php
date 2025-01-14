<a href="{{ $query }}" 
    @class([
        'rounded px-4 py-2 text-sm md:text-md lg:text-lg items-center flex',
        'text-blue-800 bg-whiite border-blue-800 border' => Request::is($query),
        'text-white bg-blue-800' => !Request::is($query)
    ])
    >
    {{ $label }}
</a>