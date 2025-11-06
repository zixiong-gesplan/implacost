
<dialog data-value="{{$src}}"
    class="transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg p-8 "
>
    <button type="button" class="btn-close absolute top-4 right-4"> X</button>
    <div class="flex flex-col w-full gap-4">
        <figure class="items-center text-center space-y-2 w-full">
            <img src="{{ $src }}" alt="{{ $alt }}" class="h-24">
        </figure>
        <h2 class="text-indigo-700 text-2xl font-bold">
            {{ $alt }}
        </h2>
        <div class="flex flex-col w-full gap-4">
            <div data-container="translator">
                <h3 class="text-sky-900 text-lg font-bold" data-lang="es">
                    {{ $caption['es'] }}
                </h3>
                <h3 class="text-sky-900 text-lg font-bold hidden" data-lang="pt">
                    {{ $caption['pt'] }}
                </h3>
                <h3 class="text-sky-900 text-lg font-bold hidden" data-lang="en">
                    {{ $caption['en'] }}
                </h3>
            </div>
            <div data-container="translator">
                <p data-lang="es">
                    {{ $description['es'] }}
                </p>
                <p data-lang="pt" class="hidden">
                    {{ $description['pt'] }}
                </p>
                <p data-lang="en" class="hidden">
                    {{ $description['en'] }}
                </p>
            </div>

            <a href="{{$href}}" target="_blank" rel="noopener noreferrer"
                class="text-sky-900 underline dark:text-blue-500 hover:no-underline"
            >
                <div data-container="translator">
                    <p data-lang="es">
                        Conoce al socio
                    </p>
                    <p data-lang="pt" class="hidden">
                        Conheça o parceiro
                    </p>
                    <p data-lang="en" class="hidden">
                        Meet the partner
                    </p>
                </div>
            </a>
            <div class="h-1"></div>
        </div>
    </div>
</dialog>

<button
    class="border rounded-lg p-4 isolate bg-white/20 shadow-lg ring-1 ring-black/5"
    data-target="{{$src}}"
    data-type="dialog-action"
>
    <figure class="flex flex-col items-center text-center space-y-2 grayscale hover:grayscale-0">
        <img src="{{ $src }}" alt="{{ $alt }}" class="h-full max-h-20">
    </figure>
</button>