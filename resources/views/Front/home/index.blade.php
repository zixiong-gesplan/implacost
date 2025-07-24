@extends('layouts.app')

@section('title', 'IMPLACOST (1/MAC/2./2.4/0009)')

@section('content')
<section class="w-full h-full bg-bottom relative">
    <img src="images/ola.gif" alt="Imagen de portada" srcset="" class="relative w-full h-full"/>
    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-30">
        <div class="w-4/5 sm:w-2/3 md:w-1/2 mx-auto flex flex-col justify-center items-center bg-white p-4 rounded-md bg-opacity-30 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)]">
            <h2 class="text-lg md:text-xl font-extrabold uppercase mx-auto mb-2 md:ml-4 text-balance text-center text-sky-50 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)]">
                EVALUACIÓN DE IMPACTOS AMBIENTALES EN ZONAS COSTERAS Y LITORALES POR EFECTO DEL CAMBIO CLIMÁTICO
            </h2>
            <h1 class="text-lg md:text-xl font-extrabold capitalize mb4 md:ml-4 text-sky-50 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)]">(1/MAC/2/2.4/0006)</h1>
        </div>
    </div>
</section>

<section class="w-10/12 mt-2 gap-4 lg:gap-6 justify-center grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mx-auto -top-0 sm:-top-20 relative">
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
    <h1 class="w-full text-center text-4xl font-extrabold mb-4 text-sky-800 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)]">
        Seis regiones disintas, un mismo objetivo
    </h1>
    <p class="text-lg text-center text-balance">
        Bajo el marco del proyecto IMPLACOST (1/MAC/2/2.4/0009) se ha construido un grupo de trabajo 
        multidisciplinar e interregional que actua en todo el espacio de cooperación 
        del Programa INTERREG VI-D MAC 2021-2027.
    </p>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-8 sm:gap-x-16 gap-y-8 py-8">
        <x-PartnerCard 
            src="https://www.gobiernodecanarias.org/gcc/img/logos/logo.svg"
            alt="Gobierno de Canarias"
            caption="Socio Principal"
            href="https://www.gobiernodecanarias.org/transicionecologica/index.html"
            description="Órgano ejecutivo de Canarias, responsable de administrar y gestionar las competencias que le otorga el Estatuto de Autonomía para gobernar y coordinar la comunidad autónoma."
        />

        <x-PartnerCard 
            src="https://www.lifebeetlesazores.com/wp-content/uploads/2021/11/logo-govDRACC.png"
            alt="Gobierno de Azores"
            caption="Administración Pública"
            href="https://portal.azores.gov.pt/"
            description="Órgano encargado de definir y coordinar la política regional ambiental, incluyendo cambio climático, ordenación territorial y gestión de recursos hídricos."
        />
        <x-PartnerCard 
            src="/images/LOGO_MADEIRA.png"
            alt="Gobierno de Madeira"
            caption="Administración Pública"
            href="https://www.madeira.gov.pt/"
            description="Órgano encargado de coordinar y supervisar políticas de lucha contra el cambio climático, promoviendo la sostenibilidad, la resiliencia y la participación social en Madeira."
        />

        <x-PartnerCard 
            src="/images/LOGO_GESPLAN.png"
            alt="Gestión y Planeamiento Territorial y Medioambiental"
            caption="Empresa Pública"
            href="https://www.gesplan.es/"
            description="Empresa pública del Gobierno de Canarias especializada en gestión ambiental, planificación territorial, infraestructuras y transición ecológica, con presencia en todo el archipiélago."
        />

        <x-PartnerCard 
            src="/images/LOGO_ARDITI.png"
            alt="ARDITI"
            caption="Empresa Pública"
            href="https://www.arditi.pt/pt/"
            description="Organización sin fines de lucro, que apoya la investigación y la innovación, promueve la formación científica y tecnológica y contribuye a la modernización y al desarrollo de Madeira, Región Autónoma."
        />
        <x-PartnerCard 
            src="/images/LOGO_UNIVERSIDADE_MADEIRA.png"
            alt="UNIVERSIDADE MADEIRA"
            caption="Universidad"
            href="https://www.uma.pt/"
            description="La Universidad de Madeira continúa realizando actividades de investigación científica, promoviendo la difusión y valorización social y económica del conocimiento y la innovación tecnológica."
        />
        <x-PartnerCard 
            src="https://www.ulpgc.es/sites/default/files/ArchivosULPGC/identidad-corporativa/Logo%2025%20Aniversario/logo_ulpgc_version_horizontal_positiva_de_uso_cotidiano_a_2_tintas.png"
            alt="Universidad de Las Palmas de Gran Canaria"
            caption="Universidad"
            href="https://www.ulpgc.es/"
            description="Es una institución pública que ofrece educación superior, investigación e innovación, impulsando el desarrollo social y cultural de la región."
        />

        <x-PartnerCard 
            src="/images/LOGO_UNIVERSIDAD_LAGUNA.png"
            alt="Universidad de La Laguna"
            caption="Universidad"
            href="https://www.ull.es/"
            description="Institución pública de educación superior ubicada en Tenerife, que ofrece formación, investigación e innovación en diversas áreas del conocimiento, contribuyendo al desarrollo social y cultural regional."
        />
        <x-PartnerCard 
            src="/images/LOGO_ITER.png"
            alt="Instituto Tecnológico y de Energías Renovables"
            caption="Empresa pública"
            href="https://www.iter.es/"
            description="Centro de investigación que impulsa energías renovables, recursos hídricos y vigilancia sísmica, promoviendo innovación y educación para el desarrollo sostenible regional."
        />
        <x-PartnerCard 
            src="/images/LOGO_GRAFCAN.png"
            alt="GRAFCAN S.A."
            caption="Empresa pública"
            href="https://www.grafcan.es/"
            description="Empresa pública de la Comunidad Autónoma de Canarias, adscrita actualmente a la Consejería de Política Territorial, Cohesión Territorial y Aguas, perteneciente al grupo de entidades con presupuesto estimativo de la Comunidad Autónoma de Canarias."
        />
        <x-PartnerCard 
            src="/images/LOGO_INGT.png"
            alt="Instituto Nacional de Gestão do Território"
            caption="Tercer Pais - Cabo Verde"
            href="https://ingt.gov.cv/ingt/"
            description="Estructura dependiente del Ministerio de Ordenamiento Territorial e Infraestructura de la Vivienda (MIOTH), dotada de personalidad jurídica y de inherentes funciones administrativas, financieras y autonomía patrimonial. Es la entidad del Estado de Cabo Verde que supervisa la organización de su territorio, a través de la promoción de políticas y prácticas que tienen como objetivo garantizar el desarrollo armonioso y sostenible del país."
        />

        <x-PartnerCard 
            src="/images/LOGO_SAO_TOME.png"
            alt="Direcção do Ambiente e Acção Climática"
            caption="Tercer Pais - Santo Tomé y Príncipe"
            href="https://www.facebook.com/dga.stp/"
            description="Órgano responsable de coordinar políticas ambientales y de acción climática, promoviendo el desarrollo sostenible y la adaptación al cambio climático en Santo Tomé y Príncipe."
        />
        <x-PartnerCard 
            src="https://delivery-tracker-staging.s3.amazonaws.com/282bf19c-2857-4959-85a8-ad2242d0a7d9"
            alt="Ministerio de Recursos Naturales"
            caption="Tercer Pais - Ghana"
            href="https://mlnr.gov.gh/"
            description="Ministerio responsable de gestionar la tierra, bosques, fauna y minerales, formulando y supervisando políticas para su uso sostenible, vinculadas al desarrollo socioeconómico y la resiliencia ambiental."
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
        <h1 class="w-full text-center text-lg md:text-2xl font-semibold my-4 text-sky-900">Indicadores del proyecto</h1>
        <p class="w-10/12 text-center text-md md:text-xl m-auto pb-8">
            En el proyecto <span class="text-sky-900 font-semibold">Implacost</span> nos centramos en la innovación del desarrollo a largo plazo con la vigilancia en el cambio climatico y el impacto del mismo la Macaronesia con los siguentes indicadores.
        </p>
    </div>
    <div  class="grid grid-cols-2 sm:grid-cols-3">
        @foreach($results as $r)
            @if($loop->index < 3)
                <x-BlueCard
                    title="{{ $r['title'] }}"
                    progress="{{ $r['progress'] }}"
                    target="{{ $r['target'] }}"
                    src="{{ $r['src'] }}"
                    reverse={{true}}
                />
            @else
                <x-BlueCard
                    title="{{ $r['title'] }}"
                    progress="{{ $r['progress'] }}"
                    target="{{ $r['target'] }}"
                    src="{{ $r['src'] }}"
                    reverse={{false}}
                />
            @endif

        @endforeach
    </div>
</section>

<script>
    let showButtons = document.querySelectorAll("[data-type=\"dialog-action\"]");
    showButtons.forEach(btn => {
        let dialog_target = btn.dataset.target
        let dialog = document.querySelector(`[data-value=\"${dialog_target}\"]`);
        // let closeButton = document.querySelector("dialog button");

        // "Show the dialog" button opens the dialog modally
        btn.addEventListener("click", () => {
            dialog.showModal();
        });
    })
    let dialogs = document.querySelectorAll("dialog");
    dialogs.forEach(d => {
        d.addEventListener("click", (event) => {
            if (event.target === d) {
                d.close();
            }        
        });
        const closeBtnDialog = d.querySelector(".btn-close");
        closeBtnDialog.addEventListener("click", () => {
            d.close();
        });
    });
</script>
@endsection


