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
        <div class="fixed bottom-4 right-4 z-50">
            <div class="relative">
                <div id="languageMenu" class="absolute bottom-12 right-0 w-40 bg-white rounded-xl shadow-lg hidden">
                    <button onclick="setLanguage('es')" class="block w-full text-left px-4 py-2 hover:bg-gray-100">Español</button>
                    <button onclick="setLanguage('pt')" class="block w-full text-left px-4 py-2 hover:bg-gray-100">Português</button>
                    <button onclick="setLanguage('en')" class="block w-full text-left px-4 py-2 hover:bg-gray-100">English</button>
                    <button onclick="setLanguage('fr')" class="block w-full text-left px-4 py-2 hover:bg-gray-100">Français</button>
                </div>
                <button onclick="toggleMenu()" class="bg-blue-600 text-white px-4 py-2 rounded-xl shadow-lg hover:bg-blue-700 focus:outline-none">
                    🌐 Idioma
                </button>
            </div>
            <div class="h-[15px]"></div>
        </div>
        <x-footer/>
        <script>
             function toggleMenu() {
                const menu = document.getElementById('languageMenu');
                menu.classList.toggle('hidden');
            }

            async function setLanguage(lang) {
                if('Translator' in self){
                    let translator;
                    if(lang == "es"){
                        translator = await Translator.create({
                            sourceLanguage: lang,
                            targetLanguage: 'es',
                            monitor(monitor) {
                                monitor.addEventListener("downloadprogress", (e) => {
                                    console.log(`Downloaded ${Math.floor(e.loaded * 100)}%`);
                                });
                            },
                        });
                    }else{
                        translator = await Translator.create({
                            sourceLanguage: 'es',
                            targetLanguage: lang,
                            monitor(monitor) {
                                monitor.addEventListener("downloadprogress", (e) => {
                                    console.log(`Downloaded ${Math.floor(e.loaded * 100)}%`);
                                });
                            },
                        });
                    }

                    const allHTMLTags = document.querySelectorAll("h1,h2,h3,h4,h5,h6,p,li");
                    allHTMLTags.forEach(async (tag) => {
                        let text = tag.innerHTML;
                        try {
                            text = await translator.translate(tag.innerHTML);
                        } catch (error) {
                            console.log(error);
                        }
                        tag.innerHTML = text;
                    });
                }
                document.getElementById('languageMenu').classList.add('hidden');
            }

            // Ocultar menú si se hace clic fuera
            document.addEventListener('click', function(event) {
                const menu = document.getElementById('languageMenu');
                const isClickInside = event.target.closest('#languageMenu') || event.target.closest('button');
                if (!isClickInside) {
                    menu.classList.add('hidden');
                }
            });
            (async () => {
                
            })();
        </script>
    </body>
</html>
