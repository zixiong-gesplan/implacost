<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title') </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <x-styles-imports/>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <main class="p-2 md:p-8">
            <x-header/>
            @yield('content')

        </main>

        <!-- <main @class([
            'flex flex-col row-start-2 items-center sm:items-start bg-no-repeat	w-full',
            "bg-[url('/images/HERO.png')] bg-cover	h-[720px]" => Request::is('/')
            ])>
            <div @class([
                    "h-full md:ml-10 w-full md:max-w-1/2 md:w-1/2" => Request::is('/'),
                    "hidden" => !Request::is('/')

                ])>
                <x-description/>
            </div>
        </main> -->
        <x-footer/>
    </body>
</html>
