@extends('layouts.app')

@section('title','IMPLACOST (1/MAC/2./2.4/0009) | Estadísticas')

@section('content')
<section class="mt-8 mb-4 mx-auto w-full md:w-2/3">
    <div data-container="translator">
        <h1 class="w-full text-center text-3xl font-semibold text-sky-900 mt-4 capitalize" data-lang="es">
            Estadísticas
        </h1>
        <h1 class="w-full text-center text-3xl font-semibold text-sky-900 mt-4 capitalize hidden" data-lang="pt">
            Estadísticas
        </h1>
        <h1 class="w-full text-center text-3xl font-semibold text-sky-900 mt-4 capitalize hidden" data-lang="en">
            Stadistics
        </h1>
    </div>
    @foreach( $indicators as $i )
        <div data-container="translator">
            <h2 class="w-full text-xl text-green-700 text-center mb-3" data-lang="es">
                {{ $i['title']['es'] }}
            </h2>
            <h2 class="w-full text-xl text-green-700 text-center mb-3 hidden" data-lang="pt">
                {{ $i['title']['pt'] }}
            </h2>
            <h2 class="w-full text-xl text-green-700 text-center mb-3 hidden" data-lang="en">
                {{ $i['title']['en'] }}
            </h2>
        </div>

        @foreach( $i['goals'] as $goal )
            <x-progress
                :title="$goal['title']"
                progress="{{ $goal['progress'] }}"
                target="{{ $goal['target'] }}"
            />
        @endforeach
    @endforeach
</section>
@endsection