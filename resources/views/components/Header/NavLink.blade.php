<li @class([
        'h-full flex items-center md:p-4',
        'text-blue-800' => $slot =='IMPLACOST',
        'bg-blue-800 text-white' => $active
    ])
>
    <a href="{{ $href }}" class="h-full w-full flex items-center text-xs lg:text-base p-2">
        {{ $slot }}
    </a>
</li>