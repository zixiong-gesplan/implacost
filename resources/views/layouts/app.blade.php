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
        <main class="">
            <x-header/>
            @yield('content')
        </main>
        <x-footer/>
    </body>
</html>
