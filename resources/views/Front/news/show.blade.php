@extends('layouts.app')

@section('title', "Noticia")

@section('content')

<section class="my-4 w-full mx-auto">
    <h1 class="w-full text-center text-3xl font-semibold text-blue-800 mt-4">
        {{$post['title']}}
    </h1>

    <img src="{{$post['image']}}" alt="" class="w-1/3 mx-auto my-4">
    <div class="w-2/3 mx-auto">
        <p class="mt-8 text-md mb-4">
            {{$post['description']}}
        </p>

        <a href="{{$post['link']}}" class="text-lg text-white px-4 py-2 bg-blue-800 rounded my-4">Ver documento</a>

        <div class="mt-4">
            <p class="text-blue-400">
                Publicada el {{$post['date']}}
            </p>
            <!-- <p>
                Temas:
                @foreach( $post['tags'] as $tag )
                    <a href="" class="capitalize after:content-[','] p-">{{$tag}}</a>
                @endforeach
            </p> -->
        </div>
    </div>

</section>
@endsection