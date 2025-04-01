@extends('layouts.app')

@section('title', 'IMPLACOST (1/MAC/2./2.4/0009)')

@section('content')

<section class="w-full md:w-10/12 mx-auto my-8 md:mb-16 flex flex-col md:flex-row gap-8">
    <div class="w-full md:w-1/2">
        <img src="/images/IMPLACOST_LOGO.png" alt="Logo IMPLACOST" class="w-10/12 mb-2 md:ml-4">
        <h1 class="text-lg md:text-3xl font-extrabold capitalize mb4 text-blue-800 md:ml-4">(1/MAC/2/2.4/0006)</h1>
        <h2 class="text-sm md:text-lg font-extrabold text-slate-700 uppercase mx-auto mb-4 md:ml-4 text-balance">
            EVALUACIÓN DE IMPACTOS AMBIENTALES EN ZONAS COSTERAS Y LITORALES POR EFECTO DEL CAMBIO CLIMÁTICO.
        </h2>
        <img src="https://interregmac.org/wp-content/uploads/2023/07/Group-9.jpg" alt="" class="w-full">
    </div>
    <div class="w-full md:w-1/2 h-full">
        <img src="/images/HERO.jpg" alt="" class="w-full rounded-lg aspect-video my-auto shadow-lg">
    </div>
</section>


<section class="w-full mt-2 gap-4 justify-center grid  grid-cols-1 sm:grid-cols-2">
    @foreach($labelCards as $l )
        <x-Label
            label="{{ $l['label'] }}"
            description="{{ $l['description'] }}"
        />
    @endforeach
</section>
<section class="mt-8">
    <h1 class="w-full text-center text-2xl font-extrabold capitalize mb-4">
        socios
    </h1>
    <x-PartnerCarousel />
</section>

<section class="my-12 flex flex-col gap-16">
    @foreach($objectives as $o)
    <div @class([
        'flex gap-16 flex-col md:flex-row my-4',
        'md:flex-row-reverse' => $loop->index % 2 == 1
    ])>
        <article class="w-full md:w-1/2 flex flex-col justify-center">
            <h1 class="text-2xl font-semibold">
                {{ $o['title'] }}
            </h1>
            <p>
                {{ $o['description'] }}
            </p>
        </article>
        <div class="w-full md:w-1/2 flex flex-col gap-4">
            @foreach( $o['activities'] as $a )
            <x-Activity
                id="{{ $a['id'] }}"
                description="{{ $a['description'] }}"
            />
            @endforeach
        </div>
    </div>
    @endforeach

</section>

<section class="my-16 ">
    <div class="w-full">
        <h1 class="w-full text-center text-lg md:text-2xl font-semibold my-4">Indicadores del proyecto</h1>
        <p class="w-10/12 text-center text-md md:text-xl m-auto">
            En el proyecto <span class="text-blue-800 font-semibold">Implacost</span> nos centramos en la innovación del desarrollo a largo plazo con la vigilancia en el cambio climatico y el impacto del mismo la Macaronesia con los siguentes indicadores.
        </p>
    </div>
    <div class="grid  grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 mt-8">
    @foreach($results as $r)
        <x-BlueCard
            title="{{ $r['title'] }}"
            progress="{{ $r['progress'] }}"
            target="{{ $r['target'] }}"
        />
    @endforeach
    </div>
    <!-- <div class="grid  grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 mt-8">
        <div class="border w-32 h-32 sm:w-36 sm:h-36 md:w-40 md:h-40 place-self-center">
            <div class="flex flex-col items-center justify-evenly h-full p-2 sm:p-4">
                <p class="text-center text-xs md:text-md"></p>
                <h1 class="text-md "><span class="md:text-3xl font-semibold text-blue-800">350</span> de 350</h1>
            </div>
        </div>
        <div class="border w-32 h-32 sm:w-36 sm:h-36 md:w-40 md:h-40 bg-blue-800 rounded-lg place-self-center">
            <div class="flex flex-col items-center justify-evenly h-full p-2 sm:p-4">
                <p class="text-center text-white text-xs md:text-md">Reuniones de Seguimiento</p>
                <h1 class="text-white text-md"><span class="md:text-3xl font-semibold ">5</span> de 5</h1>
            </div>
        </div>
        <div class="border w-32 h-32 sm:w-36 sm:h-36 md:w-40 md:h-40 bg-blue-800 rounded-lg place-self-center">
            <div class="flex flex-col items-center justify-evenly h-full p-2 sm:p-4">
                <p class="text-center text-white text-xs md:text-md">Nº de publicaciones cientificas</p>
                <h1 class="text-white text-md"><span class="md:text-3xl font-semibold ">3</span> de 3</h1>
            </div>
        </div>
        <div class="border w-32 h-32 sm:w-36 sm:h-36 md:w-40 md:h-40 bg-blue-800 rounded-lg place-self-center">
            <div class="flex flex-col items-center justify-evenly h-full p-2 sm:p-4">
                <p class="text-center text-white text-xs md:text-md">Alumnos de primara y secundaria sensibilizados</p>
                <h1 class="text-white text-md"><span class="md:text-3xl font-semibold ">800</span> de 800</h1>
            </div>
        </div>
        <div class="border w-32 h-32 sm:w-36 sm:h-36 md:w-40 md:h-40 bg-blue-800 rounded-lg place-self-center">
            <div class="flex flex-col items-center justify-evenly h-full p-2 sm:p-4">
                <p class="text-center text-white text-xs md:text-md">Estudios realizados</p>
                <h1 class="text-white text-md"><span class="md:text-3xl font-semibold ">6</span> de 6</h1>
            </div>
        </div>
        <div class="border w-32 h-32 sm:w-36 sm:h-36 md:w-40 md:h-40 bg-blue-800 rounded-lg place-self-center">
            <div class="flex flex-col items-center justify-evenly h-full p-2 sm:p-4">
                <p class="text-center text-white text-xs md:text-md">Investigadores Formados</p>
                <h1 class="text-white text-md"><span class="md:text-3xl font-semibold ">6</span> de 6</h1>
            </div>
        </div>

        <div class="border w-32 h-32 sm:w-36 sm:h-36 md:w-40 md:h-40 bg-blue-800 rounded-lg place-self-center">
            <div class="flex flex-col items-center justify-evenly h-full p-2 sm:p-4">
                <p class="text-center text-white text-xs md:text-md"> Nuevos contratos de investigadores</p>
                <h1 class="text-white text-md"><span class="md:text-3xl font-semibold ">6</span> de 6</h1>
            </div>
        </div>
        <div class="border w-32 h-32 sm:w-36 sm:h-36 md:w-40 md:h-40 bg-blue-800 rounded-lg place-self-center">
            <div class="flex flex-col items-center justify-evenly h-full p-2 sm:p-4">
                <p class="text-center text-white text-xs md:text-md">Nº de indicadores de vulnerabilidad ante el cambio climático desarrollados</p>
                <h1 class="text-white text-md"><span class="md:text-3xl font-semibold ">3</span> de 3</h1>
            </div>
        </div>
        <div class="border w-32 h-32 sm:w-36 sm:h-36 md:w-40 md:h-40 bg-blue-800 rounded-lg place-self-center">
            <div class="flex flex-col items-center justify-evenly h-full p-2 sm:p-4">
                <p class="text-center text-white text-xs md:text-md">Soluciones basadas en la naturaleza implantadas</p>
                <h1 class="text-white text-md"><span class="md:text-3xl font-semibold ">3</span> de 3</h1>
            </div>
        </div> -->
    </div>
</section>
@endsection

