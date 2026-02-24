@extends('Back.layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Crear Nueva Noticia</h1>
            <a href="{{ route('admin.home') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Volver al Panel</a>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">¡Error!</strong>
                <span class="block sm:inline">Por favor, corrige los siguientes errores:</span>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="grid gap-4">

                <div class="">
                    <label for="title_es" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Titulo (español)
                    </label>
                    <input required type="text" name="title_es" id="title_es" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Titulo de la noticia en español" required="">
                </div>
                <div class="">
                    <label for="title_pt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Titulo (portugués)
                    </label>
                    <input required type="text" name="title_pt" id="title_pt" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Titulo de la noticia en portugués" required="">
                </div>
                <div class="">
                    <label for="title_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Titulo (inglés)
                    </label>
                    <input required type="text" name="title_en" id="title_en" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Titulo de la noticia en inglés" required="">
                </div>


                <div class="">
                    <label for="description_es" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Descripción (español)
                    </label>
                    <textarea required name="description_es" id="description_es" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Descripción de la noticia en español"></textarea>
                </div>
                <div class="">
                    <label for="description_pt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Descripción (portugués)
                    </label>
                    <textarea required name="description_pt" id="description_pt" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Descripción de la noticia en portugués"></textarea>
                </div>
                <div class="">
                    <label for="description_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Descripción (inglés)
                    </label>
                    <textarea required name="description_en" id="description_en" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Descripción de la noticia en inglés"></textarea>
                </div>

                <div class="sm:col-span-2">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen de la Noticia</label>
                    <input required type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" accept="image/*">
                </div>

            </div>
            
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded mt-4">Crear Noticia</button>
        </form>
    </div>
@endsection
