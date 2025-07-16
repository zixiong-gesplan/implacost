<footer class="flex flex-col border-t-2 border-blue-800 gap-8 p-4 md:p-8">
    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 sm:gap-16 w-full md:w-10/12 mx-auto">
        @foreach ($partners as $p)
            <x-footer-card 
                title=" {{ $p['title'] }} "
                location=" {{ $p['location'] }} "
            />
        @endforeach
    </div>
    <div class="h-[10px]"></div>
</footer>