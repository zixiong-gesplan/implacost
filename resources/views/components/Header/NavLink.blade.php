<li @class([
        'h-full flex items-center md:p-4',
        'text-sky-900' => $slot =='IMPLACOST',
        'bg-blue-800 text-white' => $active
    ])
>
    <a href="{{ $href }}" class="h-full w-full flex items-center text-xs lg:text-sm p-6 lg:px-4 lg:py-6">
        {{ $slot }}
    </a>
</li>