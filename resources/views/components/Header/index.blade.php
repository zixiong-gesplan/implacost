<div class="w-full px-2 md:px-8 bg-white" style="view-transition-name:navigation;">
    <nav class="flex flex-col lg:flex-row justify-between items-center w-full ">
        <div class="flex justify-between gap-1 items-center">
            <button id="menu-button" type="button" class="w-8 h-8 text-gray-500 hover:text-white focus:text-white focus:outline-none sm:hidden flex flex-col space-around">
                <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 6H6m12 4H6m12 4H6m12 4H6"/>
                </svg>
            </button>
            <img 
                src="/images/LOGO_HORIZONTAL.png" 
                alt="Interreg MAC - PROYECTO IMPLACOST" 
                class="max-h-28 max-w-72 sm:max-w-full"
            />
        </div>
        <div>
            <ul id="nav-links" class="hidden sm:flex flex-col w-full h-full sm:flex-row justify-between gap-1 items-center">
                <x-NavLink
                    href="/"
                    active="{{ Request::is('/') }}"
                >
                    IMPLACOST
                </x-NavLink>

                <x-NavLink
                    href="/news"
                    active="{{ Request::is('news/*') || Request::is('news') }}"
                >
                    <div data-container="translator">
                        <p data-lang="es">
                            Noticias
                        </p>
                        <p class="hidden" data-lang="pt">
                            Notícias
                        </p>
                        <p class="hidden" data-lang="en">
                            Project News
                        </p>
                    </div>
                    
                </x-NavLink>
                <x-NavLink
                    href="/statistics"
                    active="{{ Request::is('statistics/*') || Request::is('statistics') }}"
                >
                    <div data-container="translator">
                        <p data-lang="es">
                            Estadísticas    
                        </p>
                        <p class="hidden" data-lang="pt">
                            Estadísticas
                        </p>
                        <p class="hidden" data-lang="en">
                            Statistics
                        </p>
                    </div>                
                </x-NavLink>
                <x-NavLink
                    href="/results"
                    active="{{ Request::is('results/*') || Request::is('results') }}"
                >
                    <div data-container="translator">
                        <p data-lang="es">
                            Resultados
                        </p>
                        <p class="hidden" data-lang="pt">
                            Resultados
                        </p>
                        <p class="hidden" data-lang="en">
                            Results
                        </p>
                    </div>   
                </x-NavLink>

                <x-NavLink
                    href="/contact"
                    active="{{ Request::is('contact/*') || Request::is('contact') }}"
                >
                    <div data-container="translator">
                        <p data-lang="es">
                            Contacto
                        </p>
                        <p class="hidden" data-lang="pt">
                            Contacto
                        </p>
                        <p class="hidden" data-lang="en">
                            Contact
                        </p>
                    </div>   
                </x-NavLink>

                <div class="flex flex-row gap-4">
                    <a href="https://www.facebook.com/implacost/" class="rounded-md border bg-sky-900 w-8 h-8" target="_blank">
                        <svg class="w-8 h-8 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/implacost/" class="rounded-md border bg-sky-900 w-8 h-8" target="_blank">
                        <svg class="w-8 h-8 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </ul>
        </div>
    </nav>
</div>
    
<script>
    let navLinks = document.querySelector('#nav-links');
    let menuButton = document.querySelector('#menu-button');
    menuButton.addEventListener('click', () => {
        navLinks.classList.toggle('hidden');
    })
    window.addEventListener('resize', () => {
        if(window.innerWidth < 640){
            navLinks.classList.add('hidden');
            menuButton.classList.remove('hidden');
        }
        if(window.innerWidth > 640){
            navLinks.classList.remove('hidden');
            menuButton.classList.add('hidden');
        }
    })
</script>