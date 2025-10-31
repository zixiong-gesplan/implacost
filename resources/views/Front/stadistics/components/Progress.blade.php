<div>
    <div data-container="translator">
        <p data-lang="es"> {{ $title['es'] }} </p>
        <p data-lang="pt" class="hidden"> {{ $title['pt'] }} </p>
    </div>

    <div data-container="translator">
        <p data-lang="es">Meta del proyecto: {{ $progress }} de {{ $target }}.</p>
        <p data-lang="pt" class="hidden">Meta do projeto: {{ $progress }} de {{ $target }}.</p>
    </div>

    <div class="w-full h-4 mb-4 bg-gray-200 rounded-full dark:bg-gray-700">
        <div class="h-4 bg-green-700 rounded-full dark:bg-green-500" style="width: {{ floor($progress/$target *100) }}%"></div>
    </div>
</div>