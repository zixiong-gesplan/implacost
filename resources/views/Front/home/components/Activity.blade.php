<div class="flex border-l-8 border-blue-800 pl-4 flex-col min-h-1/3 items-center">
    <div class="w-full">
        <div data-container="translator">
            <h1 class="font-semibold text-sky-900 text-lg" data-lang="es">
                Actividad {{ $id }}
            </h1>
            <h1 class="font-semibold text-sky-900 text-lg" data-lang="pt">
            Atividade {{ $id }}
            </h1>
        </div>
        <div data-container="translator">
            <p data-lang="es">
                {{ $description['es'] }}
            </p>
            <p class="hidden" data-lang="pt">
                {{ $description['pt']}}
            </p>
        </div>

    </div>
</div>