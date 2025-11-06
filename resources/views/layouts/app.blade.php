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
        <dialog id="loader" class="w-2/3 flex p-8 gap-2 items-center justify-center bg-white rounded-xl shadow-lg">
            <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-sky-700" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
            </svg>
            <p class="font-semibold text-black">Traduciendo...</p>
        </dialog>
        <main class="">
            <x-header/>
            @yield('content')
        </main>
        <div class="fixed bottom-10 right-4 z-50" id="lang-btn">
            <div class="relative">
                <div id="languageMenu" class="absolute bottom-12 right-0 w-40 bg-white rounded-xl shadow-lg hidden">
                    <button onclick="setLanguage('es')" class="block w-full text-left px-4 py-2 hover:bg-gray-100" command="show-loader" commandfor="loader">Español</button>
                    <button onclick="setLanguage('pt')" class="block w-full text-left px-4 py-2 hover:bg-gray-100" command="show-loader" commandfor="loader">Português</button>
                    <button onclick="setLanguage('en')" class="block w-full text-left px-4 py-2 hover:bg-gray-100" command="show-loader" commandfor="loader">English</button>
                </div>
                <button onclick="toggleMenu()" class="bg-blue-600 text-white px-4 py-2 rounded-xl shadow-lg hover:bg-blue-700 focus:outline-none">
                    <div data-container="translator">
                        <p data-lang="es">
                            🌐 Idioma
                        </p>
                        <p class="hidden" data-lang="pt">
                            🌐 Idioma
                        </p>
                        <p class="hidden" data-lang="en">
                            🌐 Language
                        </p>
                    </div>
        
                </button>
            </div>
        </div>
        <x-footer/>
        <script>
            let userLang = localStorage.getItem('lang') || 'es';

            function toggleMenu() {
                const menu = document.getElementById('languageMenu');
                menu.classList.toggle('hidden');
            }
            async function setLanguage(lang) {
                if(userLang == lang){ return }

                const allHTMLTags = document.querySelectorAll('*[data-container="translator"]');
                
                for (const tag of allHTMLTags) {
                    let children = tag.querySelectorAll(`:scope > *`);
                    console.log(children)
                    for (const child of children) {
                        child.classList.add('hidden');
                    }
                    let chilToDisplay = tag.querySelector(`[data-lang=${lang}]`);
                    chilToDisplay.classList.remove('hidden');
                }
                document.getElementById('languageMenu').classList.add('hidden');
                localStorage.setItem('lang', lang);
                userLang = lang;
            }

            // Ocultar menú si se hace clic fuera
            document.addEventListener('click', function(event) {
                const menu = document.getElementById('languageMenu');
                const isClickInside = event.target.closest('#languageMenu') || event.target.closest('button');
                if (!isClickInside) {
                    menu.classList.add('hidden');
                }
            });

            const allHTMLTags = document.querySelectorAll('*[data-container="translator"]');
            for (const tag of allHTMLTags) {
                let children = tag.querySelectorAll(`:scope > *`);
                for (const child of children) {
                    child.classList.add('hidden');
                }
                let chilToDisplay = tag.querySelector(`[data-lang=${userLang}]`);
                chilToDisplay.classList.remove('hidden');
            }
            document.getElementById('languageMenu').classList.add('hidden');



        </script>
    </body>
</html>
