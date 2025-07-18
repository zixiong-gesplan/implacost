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
        <script>
            (async () => {
                if('Translator' in self){
                    const translator = await Translator.create({
                        sourceLanguage: 'es',
                        targetLanguage: 'en',
                        monitor(monitor) {
                            monitor.addEventListener("downloadprogress", (e) => {
                                console.log(`Downloaded ${Math.floor(e.loaded * 100)}%`);
                            });
                        },
                    });
                    const allHTMLTags = document.querySelectorAll("h1,h2,h3,h4,h5,h6,p,li");
                    allHTMLTags.forEach(async (tag) => {
                        let text = tag.innerHTML;
                        try {
                            tag.innerHTMl ='';
                            tag.classList.add("animate-pulse","bg-gray-200", "text-gray-200","rounded-md");
                            text = await translator.translate(tag.innerHTML);
                            tag.classList.remove("animate-pulse","bg-gray-200", "text-gray-200","rounded-md");
                        } catch (error) {
                            console.log(error);
                        }
                        tag.innerHTML = text;
                    });
                    // allHTMLTags.innerHTML = await translator.translate(allHTMLTags.innerHTML);
                }
            })();
        </script>
    </body>
</html>
