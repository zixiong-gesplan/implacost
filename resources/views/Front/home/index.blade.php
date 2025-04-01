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


<!-- <section class="w-full mt-2 gap-4 justify-center grid  grid-cols-1 sm:grid-cols-2">
    @foreach($labelCards as $l )
        <x-Label
            label="{{ $l['label'] }}"
            description="{{ $l['description'] }}"
        />
    @endforeach
</section> -->
<section class="w-10/12 mt-2 gap-4 lg:gap-6 justify-center grid  grid-cols-1 sm:grid-cols-2 md:grid-cols-4 mx-auto">
    <div class="bg-indigo-50 p-4 rounded-lg shadow-lg">
        <h1 class="w-full text-2xl font-extrabold capitalize mb-2 text-indigo-700">
            3.656.120,01 €
        </h1>
        <p class="text-slate text-base font-semibold">
            Presupuesto de ejecución
        </p>
    </div>
    <div class="bg-sky-50 p-4 rounded-lg shadow-lg">
        <h1 class="w-full text-2xl font-extrabold capitalize mb-2 text-sky-800">
            48 Meses
        </h1>
        <p class="text-stale-900 text-base font-semibold">
            Duración del proyecto 2025-2028
        </p>
    </div>
    <div class="bg-indigo-50 p-4 rounded-lg shadow-lg">
        <h1 class="w-full text-2xl font-extrabold capitalize mb-2 text-indigo-700">
            85%
        </h1>
        <p class="text-stale-900 text-base font-semibold">
            Co-financiación por el Programa de Cooperacion Interreg Madeira-Azores-Canarias (MAC) 2021-2027
        </p>
    </div>
    <div class="bg-sky-50 p-4 rounded-lg shadow-lg">
        <h1 class="w-full text-xl font-extrabold capitalize mb-2 text-sky-800">
            Prioridad 2 - MAC Verde   
        </h1>
        <p class="text-stale-900 text-base font-semibold">
            Transición ecológica, apoyo al desarrollo de una economía verde y azul, lucha contra el cambio climático, prevención y gestion de riesgos y emergencias
        </p>
    </div>
</section>

<section class="mt-16 w-10/12 mx-auto">
    <h1 class="w-full text-center text-4xl font-extrabold capitalize mb-4 text-sky-800 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)]">
        Seis regiones disintas.... Un mismo objetivo... 
    </h1>
    <p class="text-lg text-center text-balance">
        Bajo el marco del proyecto IMPLACOST (1/MAC/2/2.4/0009) se ha construido un grupo de trabajo 
        multidisciplinar e interregional que actua en todo el espacio de cooperación 
        del Programa INTERREG VI-D MAC 2021-2027.
    </p>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-16 gap-y-8 py-8">
        <x-PartnerCard 
            src="https://www.gobiernodecanarias.org/gcc/img/logos/logo.svg"
            alt="Gobierno de Canarias"
            caption="Socio Principal"
            href="https://www.gobiernodecanarias.org/transicionecologica/index.html"
        />

        <x-PartnerCard 
            src="https://www.lifebeetlesazores.com/wp-content/uploads/2021/11/logo-govDRACC.png"
            alt="Gobierno de Azores"
            caption="Administración Pública"
            href="https://portal.azores.gov.pt/"
        />
        <x-PartnerCard 
            src="/images/LOGO_MADEIRA.png"
            alt="Gobierno de Madeira"
            caption="Administración Pública"
            href="https://www.madeira.gov.pt/"
        />

        <x-PartnerCard 
            src="/images/LOGO_GESPLAN.png"
            alt="Gesplan"
            caption="Empresa Pública"
            href="https://www.gesplan.es/"
        />

        <x-PartnerCard 
            src="/images/LOGO_ARDITI.png"
            alt="ARDITI"
            caption="Empresa Pública"
            href="https://www.arditi.pt/pt/"
        />
        <x-PartnerCard 
            src="/images/LOGO_UNIVERSIDADE_MADEIRA.png"
            alt="UNIVERSIDADE MADEIRA"
            caption="Universidad"
            href="https://www.uma.pt/"
        />
        <x-PartnerCard 
            src="https://www.ulpgc.es/sites/default/files/ArchivosULPGC/identidad-corporativa/Logo%2025%20Aniversario/logo_ulpgc_version_horizontal_positiva_de_uso_cotidiano_a_2_tintas.png"
            alt="ULPGC"
            caption="Universidad"
            href="https://www.itccanarias.org/web/es/"
        />

        <x-PartnerCard 
            src="https://www.rankingcyd.org/assets/img/logoUnis2/1284.png"
            alt="ULL"
            caption="Universidad"
            href="https://www.ull.es/"
        />
        <x-PartnerCard 
            src="/images/LOGO_ITER.png"
            alt="ULL"
            caption="Empresa pública"
            href="https://www.iter.es/"
        />
        <x-PartnerCard 
            src="/images/LOGO_GRAFCAN.png"
            alt="GRAFCAN"
            caption="Empresa pública"
            href="https://www.grafcan.es/"
        />
        <x-PartnerCard 
            src="/images/LOGO_INGT.png"
            alt="INGT"
            caption="Tercer Pais"
            href="https://ingt.gov.cv/ingt/"
        />

        <x-PartnerCard 
            src="/images/LOGO_SAO_TOME.png"
            alt="DGAAG"
            caption="Tercer Pais"
            href="https://www.facebook.com/dga.stp/"
        />

        <x-PartnerCard 
            src="https://delivery-tracker-staging.s3.amazonaws.com/282bf19c-2857-4959-85a8-ad2242d0a7d9"
            alt="Ministerio de recursos naturales"
            caption="Tercer Pais"
            href="https://mlnr.gov.gh/"
        />
    </div>

</section>

<section class="my-12 flex flex-col gap-16 w-10/12 mx-auto">
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

