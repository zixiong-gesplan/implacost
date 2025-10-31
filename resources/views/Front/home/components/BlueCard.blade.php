
<div @class([
        'w-full bg-sky-900 flex gap-1',
        'flex-row-reverse' => $reverse
])>
    <div class="hidden sm:flex w-full sm:w-1/2 h-full ">
        <img src="{{$src}}" alt="Ejemplo" class="h-full w-full object-cover opacity-50">
    </div>
    <div class="w-full sm:w-1/2 flex flex-col items-center justify-evenly h-full p-2 sm:p-4">
        <h1 class="text-white text-md"><span class="text-3xl font-semibold ">{{ $progress }}</h1>
        <div data-container="translator">
        <p class="text-center text-white text-md" data-lang="es">{{ $title['es'] }}</p>
        <p class="text-center text-white text-md hidden" data-lang="pt">{{ $title['pt'] }}</p>

        </div>
    </div>
</div>