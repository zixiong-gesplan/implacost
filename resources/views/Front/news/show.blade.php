@extends('layouts.app')

@section('title', "IMPLACOST - ".$post['title'])

@section('content')

<section class="my-4 w-full mx-auto post-content">
    <div data-container="translator">
        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-sky-900 lg:mb-6 lg:text-4xl dark:text-white text-center"
            style="view-transition-name:title;"
            data-lang="es"
        >
            {{ $post['title_es'] }}
        </h1>
        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-sky-900 lg:mb-6 lg:text-4xl dark:text-white text-center hidden"
            style="view-transition-name:title;"
            data-lang="pt"
        >
            {{ $post['title_pt'] }}
        </h1>
        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-sky-900 lg:mb-6 lg:text-4xl dark:text-white text-center hidden"
            style="view-transition-name:title;"
            data-lang="en"
        >
            {{ $post['title_en'] }}
        </h1>
    </div>

    <img 
        style="view-transition-name:{{$post['image']}}"
        src="{{$post['image']}}" 
        alt="" 
        class="w-1/2 my-4 border border-gray-500 rounded-lg aspect-video mx-auto">
    <div class="w-2/3 mx-auto ">
        <div data-container="translator">
            <div class="mt-8 text-md mb-4"
                data-lang="es"
            >
                {!! $post['description_es'] !!}
            </div>
            <div class="mt-8 text-md mb-4 hidden"
                data-lang="pt"
            >
                {!! $post['description_pt'] !!}
            </div>
            <div class="mt-8 text-md mb-4 hidden"
                data-lang="en"
            >
                {!! $post['description_en'] !!}
            </div>
        </div>  

        @if( $post['document'] != null)
            <a target="_blank" href="{{$post['document']}}">
                <div data-container="translator">
                    <p class="text-lg text-white px-4 py-2 bg-sky-800 rounded my-4" data-lang="es">
                        Ver documento
                    </p>
                    <p class="text-lg text-white px-4 py-2 bg-sky-800 rounded my-4 hidden" data-lang="pt">
                        Ver documento
                    </p> 
                    <p class="text-lg text-white px-4 py-2 bg-sky-800 rounded my-4 hidden" data-lang="en">
                        Check document
                    </p> 
                </div>

            </a>
        @endif

        <div class="mt-4">
            <div data-container="translator">
                <p class="font-bold text-gray-800" data-lang="es">
                    Publicada el {{ date_format($post['created_at'], "d/m/Y")}}
                </p>
                <p class="font-bold text-gray-800 hidden" data-lang="pt">
                    Publicado em {{ date_format($post['created_at'], "d/m/Y")}}
                </p>
                <p class="font-bold text-gray-800 hidden" data-lang="en">
                    Published on {{ date_format($post['created_at'], "d/m/Y")}}
                </p>
            </div>

            {{-- @if( count($post['tags']) == 0)
                <p></p>
            @else
                <p>
                    Temas:
                    @foreach( $post['tags'] as $tag )
                        <a href="" class="capitalize after:content-[','] p-"><p>{{$tag}}</p></a>
                    @endforeach
                </p>
            @endif --}}
        </div>
    </div>

</section>
<section class="my-4 w-full lg:w-3/4 lg:mx-auto flex gap-4 flex-wrap">
    <a
        href="/news?page=1"
        @class([
            'min-w-9 rounded-md border border-slate-300 py-2 px-3 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2',
            'bg-sky-900 border-transparent text-white shadow-md hover:shadow-lg disabled:pointer-events-none disabled:shadow-none' => 1 == request()->query('page') || request()->query('page') == null
        ])
    >1</a>
    @for ($i = 2; $i <=$count+1;$i++)
        <a
            href="/news?page={{$i}}"
            @class([
                'min-w-9 rounded-md border border-slate-300 py-2 px-3 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2',
                'bg-sky-900 border-transparent text-white shadow-md hover:shadow-lg disabled:pointer-events-none disabled:shadow-none' => $i == request()->query('page')
            ])
        >{{$i}}</a>
    @endfor
</section>
@endsection