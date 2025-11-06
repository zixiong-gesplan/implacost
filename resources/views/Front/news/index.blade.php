@extends('layouts.app')
 
@section('title', 'IMPLACOST (1/MAC/2./2.4/0009) | Noticias')

@section('content')

<section class="my-4 w-full mx-auto">
    <div data-container="translator">

        <h1 class="w-full text-center text-3xl font-semibold text-sky-900 mt-4" data-lang="es">
            Noticias
        </h1>
        <h1 class="w-full text-center text-3xl font-semibold text-sky-900 mt-4 hidden" data-lang="pt">
            Notícias
        </h1>
        <h1 class="w-full text-center text-3xl font-semibold text-sky-900 mt-4 hidden" data-lang="en">
            Project News
        </h1>
    </div>
    <!-- <div class="flex gap-4 w-full justify-center mt-4 flex-col lg:flex-row">
        <div class="flex flex-col md:flex-row gap-2 justify-between">
            <x-QueryLink
                query="news"
                label="Todas"
            />
            <x-QueryLink
                query="news?type=acciones formativas"
                label="Acciones formativas"
            />
            
            <x-QueryLink
                query="news?type=publicaciones científicas"
                label="Publicaciones científicas"
            />
            <x-QueryLink
                query="news?type=publicaciones técnicas"
                label="Publicaciones técnicas"
            />
        </div>

        <form action="" class="flex gap-2">
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded focus:ring-blue-800 focus:border-blue-800 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            <button type="submit" class="text-sky-900 text-sm md:text-lg rounded px-4 border border-blue-800"> Buscar</button>
        </form>
    </div> -->
</section>

<section class="my-4 w-full lg:w-3/4 lg:mx-auto">

    @foreach($news as $n)
        
        <x-NewsCard
            src="{{ $n['image'] }}"
            :title="[
                'es' =>$n['title_es'],
                'pt' =>$n['title_pt'],
                'en' =>$n['title_en']
            ]"
            :description="[
                'es' => $n['short_description_es'],
                'pt' => $n['short_description_pt'],
                'en' => $n['short_description_en']
            ]"
            id="{{ $n['id'] }}"
        />
    @endforeach
</section>

@endsection