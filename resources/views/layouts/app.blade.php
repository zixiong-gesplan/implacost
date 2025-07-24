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
        <div class="fixed bottom-4 right-4 z-50" id="lang-btn">
            <div class="relative">
                <div id="languageMenu" class="absolute bottom-12 right-0 w-40 bg-white rounded-xl shadow-lg hidden opacity-0">
                    <button onclick="setLanguage('es')" class="block w-full text-left px-4 py-2 hover:bg-gray-100" command="show-loader" commandfor="loader">Español</button>
                    <button onclick="setLanguage('pt')" class="block w-full text-left px-4 py-2 hover:bg-gray-100" command="show-loader" commandfor="loader">Português</button>
                    <!-- <button onclick="setLanguage('en')" class="block w-full text-left px-4 py-2 hover:bg-gray-100" command="show-loader" commandfor="loader">English</button>
                        <button onclick="setLanguage('fr')" class="block w-full text-left px-4 py-2 hover:bg-gray-100" command="show-loader" commandfor="loader">Français</button> -->
                </div>
                <button onclick="toggleMenu()" class="bg-blue-600 text-white px-4 py-2 rounded-xl shadow-lg hover:bg-blue-700 focus:outline-none">
                    🌐 Idioma
                </button>
            </div>
        </div>
        <x-footer/>
    </body>
</html>
