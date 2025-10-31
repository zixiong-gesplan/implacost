@extends('layouts.app')

@section('title', 'IMPLACOST (1/MAC/2./2.4/0009)')

@section('content')
@php $locale = app()->getLocale() ?? 'es'; @endphp
<section class="w-full h-full bg-bottom relative">
    <img src="images/ola.gif" alt="Imagen de portada" srcset="" class="relative w-full h-full"/>
    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-30">
        <div class="w-4/5 sm:w-2/3 md:w-1/2 mx-auto flex flex-col justify-center items-center bg-white p-4 rounded-md bg-opacity-30 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)]">
            <div data-container="translator">
                <h2 class="text-lg md:text-xl font-extrabold uppercase mx-auto mb-2 md:ml-4 text-balance text-center text-sky-50 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)]" data-lang="es">
                    EVALUACIÓN DE IMPACTOS AMBIENTALES EN ZONAS COSTERAS Y LITORALES POR EFECTO DEL CAMBIO CLIMÁTICO
                </h2>
                <h2 class="text-lg md:text-xl font-extrabold uppercase mx-auto mb-2 md:ml-4 text-balance text-center text-sky-50 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)] hidden" data-lang="pt" >
                    AVALIAÇÃO DO IMPACTO AMBIENTAL EM ZONAS COSTEIRAS E LITORÂNEAS PELO EFEITO DAS MUDANÇAS CLIMÁTICAS
                </h2>
            </div>
            <h1 class="text-lg md:text-xl font-extrabold capitalize mb4 md:ml-4 text-sky-50 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)]">(1/MAC/2/2.4/0009)</h1>
        </div>
        
    </div>
</section>

<section class="w-10/12 mt-2 gap-4 lg:gap-6 justify-center grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mx-auto -top-0 sm:-top-20 relative">
    <div class="bg-indigo-50 p-4 rounded-lg shadow-lg">
        <h1 class="w-full text-2xl font-extrabold capitalize mb-2 text-indigo-700">
            3.656.120,01 €
        </h1>
        <div data-container="translator">
            <p class="text-slate text-base font-semibold" data-lang="es">
                Presupuesto de ejecución
            </p>
            <p class="text-slate text-base font-semibol hidden" data-lang="pt">
                Orçamento de execução
            </p>
        </div>

    </div>
    <div class="bg-sky-50 p-4 rounded-lg shadow-lg">
        <h1 class="w-full text-2xl font-extrabold capitalize mb-2 text-sky-800">
            48 Meses
        </h1>
        <div data-container="translator">
            <p class="text-stale-900 text-base font-semibold" data-lang="es">
                Duración del proyecto 2025-2028
            </p>
            <p class="text-stale-900 text-base font-semibold hidden" data-lang="pt">
                Duração do projeto 2025-2028
            </p>
        </div>

    </div>
    <div class="bg-indigo-50 p-4 rounded-lg shadow-lg">
        <h1 class="w-full text-2xl font-extrabold capitalize mb-2 text-indigo-700">
            85%
        </h1>
        <div data-container="translator">
            <p class="text-stale-900 text-base font-semibold" data-lang="es">
                Co-financiación por el Programa de Cooperacion Interreg Madeira-Azores-Canarias (MAC) 2021-2027
            </p>
            <p class="text-stale-900 text-base font-semibold hidden" data-lang="pt">
                Co-financiamento pelo Programa de Cooperação Interreg Madeira-Açores-Canárias (MAC) 2021-2027
            </p>
        </div>
    </div>
    <div class="bg-sky-50 p-4 rounded-lg shadow-lg">
        <div data-container="translator">
            <h1 class="w-full text-xl font-extrabold capitalize mb-2 text-sky-800" data-lang="es">
                Prioridad 2 - MAC Verde   
            </h1>
            <h1 class="w-full text-xl font-extrabold capitalize mb-2 text-sky-800 hidden" data-lang="pt">
                Prioridade 2 - MAC Verde
            </h1>
        </div>
        <div data-container="translator">
            <p class="text-stale-900 text-base font-semibold"  data-lang="es">
                Transición ecológica, apoyo al desarrollo de una economía verde y azul, lucha contra el cambio climático, prevención y gestion de riesgos y emergencias
            </p>
            <p class="text-stale-900 text-base font-semibold hidden"  data-lang="pt">
                Transição ecológica, apoio ao desenvolvimento de uma economia verde e azul, combate às alterações climáticas, prevenção e gestão de riscos e emergências
            </p>
        </div>

    </div>
</section>

<section class="mt-16 w-10/12 mx-auto">
    <div data-container="translator">
        <h1 class="w-full text-center text-4xl font-extrabold mb-4 text-sky-800 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)]" data-lang="es">
            Seis regiones distintas, un mismo objetivo
        </h1>
        <h1 class="w-full text-center text-4xl font-extrabold mb-4 text-sky-800 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)] hidden" data-lang="pt">
            Seis regiões diferentes, um mesmo objetivo
        </h1>
    </div>
    <div data-container="translator">

        <p class="text-lg text-center text-balance" data-lang="es">
            Bajo el marco del proyecto IMPLACOST (1/MAC/2/2.4/0009) se ha construido un grupo de trabajo 
            multidisciplinar e interregional que actua en todo el espacio de cooperación 
            del Programa INTERREG VI-D MAC 2021-2027.
        </p>
        <p class="text-lg text-center text-balance hidden" data-lang="pt">
            No âmbito do projeto IMPLACOST (1/MAC/2/2.4/0009), foi criado um grupo de trabalho 
            multidisciplinar e inter-regional que atua em todo o espaço de cooperação 
            do Programa INTERREG VI-D MAC 2021-2027.
        </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-8 sm:gap-x-16 gap-y-8 py-8">
        <x-PartnerCard 
            src="/images/LOGO_GOBIERNO_CANARIAS.svg"
            alt="Gobierno de Canarias"
            :caption="[
                'es' => 'Socio Principal',
                'pt' => 'Sócio Principal'
            ]"
            href="https://www.gobiernodecanarias.org/transicionecologica/index.html"
            :description="[
                'es' => 'Órgano ejecutivo de Canarias, responsable de administrar y gestionar las competencias que le otorga el Estatuto de Autonomía para gobernar y coordinar la comunidad autónoma.',
                'pt' => 'Órgão executivo das Canárias, responsável pela administração e gestão das competências que lhe são conferidas pelo Estatuto de Autonomia para governar e coordenar a comunidade autónoma'
            ]"
        />
        <x-partner-card 
            src="/images/LOGO_AZORES.png"
            alt="Gobierno de Azores"
            :caption="[
                'es' => 'Administración Pública',
                'pt' => 'Administração Pública',
            ]"
            href="https://portal.azores.gov.pt/"
            :description="[
                'es' => 'Órgano encargado de definir y coordinar la política regional ambiental, incluyendo cambio climático, ordenación territorial y gestión de recursos hídricos.',
                'pt' => 'Órgão responsável por definir e coordenar a política ambiental regional, incluindo as áreas de alterações climáticas, ordenamento do território e gestão de recursos hídricos.',
            ]"
        />

        <x-partner-card 
            src="/images/LOGO_MADEIRA.png"
            alt="Gobierno de Madeira"
            :caption="[
                'es' => 'Administración Pública',
                'pt' => 'Administração Pública',
            ]"
            href="https://www.madeira.gov.pt/draac/"
            :description="[
                'es' => 'Órgano encargado de coordinar y supervisar políticas de lucha contra el cambio climático, promoviendo la sostenibilidad, la resiliencia y la participación social en Madeira.',
                'pt' => 'Órgão responsável por coordenar e supervisionar políticas de combate às alterações climáticas, promovendo a sustentabilidade, a resiliência e a participação social na Madeira.',
            ]"
        />

        <x-partner-card 
            src="/images/LOGO_GESPLAN.png"
            alt="Gestión y Planeamiento Territorial y Medioambiental"
            :caption="[
                'es' => 'Empresa Pública',
                'pt' => 'Empresa Pública',
            ]"
            href="https://www.gesplan.es/"
            :description="[
                'es' => 'Empresa pública del Gobierno de Canarias especializada en gestión ambiental, planificación territorial, infraestructuras y transición ecológica, con presencia en todo el archipiélago.',
                'pt' => 'Empresa pública do Governo das Canárias especializada em gestão ambiental, planeamento territorial, infraestruturas e transição ecológica, com presença em todo o arquipélago.',
            ]"
        />

        <x-partner-card 
            src="/images/LOGO_ARDITI.png"
            alt="ARDITI"
            :caption="[
                'es' => 'Empresa Pública',
                'pt' => 'Empresa Pública',
            ]"
            href="https://www.arditi.pt/pt/"
            :description="[
                'es' => 'Organización sin fines de lucro, que apoya la investigación y la innovación, promueve la formación científica y tecnológica y contribuye a la modernización y al desarrollo de Madeira, Región Autónoma.',
                'pt' => 'Organização sem fins lucrativos que apoia a investigação e a inovação, promove a formação científica e tecnológica e contribui para a modernização e o desenvolvimento da Região Autónoma da Madeira.',
            ]"
        />
        <x-PartnerCard 
            src="/images/LOGO_UNIVERSIDADE_MADEIRA.png"
            alt="UNIVERSIDADE MADEIRA"
            :caption="[
                'es' => 'Universidad',
                'pt' => 'Universidade',
            ]"
            href="https://www.uma.pt/"
            :description="[
                'es' => 'La Universidad de Madeira continúa realizando actividades de investigación científica, promoviendo la difusión y valorización social y económica del conocimiento y la innovación tecnológica.',
                'pt' => 'A Universidade da Madeira continua a desenvolver atividades de investigação científica, promovendo a difusão e a valorização social e económica do conhecimento e da inovação tecnológica.',
            ]"
        />

        <x-PartnerCard 
            src="/images/LOGO_ULPGC.png"
            alt="Universidad de Las Palmas de Gran Canaria"
            :caption="[
                'es' => 'Universidad',
                'pt' => 'Universidade',
            ]"
            href="https://www.ulpgc.es/"
            :description="[
                'es' => 'Es una institución pública que ofrece educación superior, investigación e innovación, impulsando el desarrollo social y cultural de la región.',
                'pt' => 'É uma instituição pública que oferece ensino superior, investigação e inovação, impulsionando o desenvolvimento social e cultural da região.',
            ]"
        />

        <x-PartnerCard 
            src="/images/LOGO_UNIVERSIDAD_LAGUNA.png"
            alt="Universidad de La Laguna"
            :caption="[
                'es' => 'Universidad',
                'pt' => 'Universidade',
            ]"
            href="https://www.ull.es/"
            :description="[
                'es' => 'Institución pública de educación superior ubicada en Tenerife, que ofrece formación, investigación e innovación en diversas áreas del conocimiento, contribuyendo al desarrollo social y cultural regional.',
                'pt' => 'Instituição pública de ensino superior situada em Tenerife, que oferece formação, investigação e inovação em diversas áreas do conhecimento, contribuindo para o desenvolvimento social e cultural da região.',
            ]"
        />

        <x-PartnerCard 
            src="/images/LOGO_ITER.png"
            alt="Instituto Tecnológico y de Energías Renovables"
            :caption="[
                'es' => 'Empresa pública',
                'pt' => 'Empresa pública',
            ]"
            href="https://www.iter.es/"
            :description="[
                'es' => 'Centro de investigación que impulsa energías renovables, recursos hídricos y vigilancia sísmica, promoviendo innovación y educación para el desarrollo sostenible regional.',
                'pt' => 'Centro de investigação que impulsiona as energias renováveis, os recursos hídricos e a vigilância sísmica, promovendo inovação e educação para o desenvolvimento sustentável da região.',
            ]"
        />

        <x-PartnerCard 
            src="/images/LOGO_GRAFCAN.png"
            alt="GRAFCAN S.A."
            :caption="[
                'es' => 'Empresa pública',
                'pt' => 'Empresa pública',
            ]"
            href="https://www.grafcan.es/"
            :description="[
                'es' => 'Empresa pública de la Comunidad Autónoma de Canarias, adscrita actualmente a la Consejería de Política Territorial, Cohesión Territorial y Aguas, perteneciente al grupo de entidades con presupuesto estimativo de la Comunidad Autónoma de Canarias.',
                'pt' => 'Empresa pública da Comunidade Autónoma das Canárias, atualmente adscrita à Consejeria de Política Territorial, Coesão Territorial e Águas, pertencente ao grupo de entidades com orçamento estimativo da Comunidade Autónoma das Canárias.',
            ]"
        />

        <x-PartnerCard 
            src="/images/LOGO_INGT.png"
            alt="Instituto Nacional de Gestão do Território"
            :caption="[
                'es' => 'Tercer País - Cabo Verde',
                'pt' => 'Terceiro País - Cabo Verde',
            ]"
            href="https://ingt.gov.cv/ingt/"
            :description="[
                'es' => 'Estructura dependiente del Ministerio de Ordenamiento Territorial e Infraestructura de la Vivienda (MIOTH), dotada de personalidad jurídica y de inherentes funciones administrativas, financieras y autonomía patrimonial. Es la entidad del Estado de Cabo Verde que supervisa la organización de su territorio, a través de la promoción de políticas y prácticas que tienen como objetivo garantizar el desarrollo armonioso y sostenible del país.',
                'pt' => 'Estrutura dependente do Ministério do Ordenamento do Território e Infraestruturas de Habitação (MIOTH), dotada de personalidade jurídica, com funções administrativas e financeiras e autonomia patrimonial. É a entidade do Estado de Cabo Verde que supervisiona a organização do território, promovendo políticas e práticas destinadas a garantir o desenvolvimento harmonioso e sustentável do país.',
            ]"
        />

        <x-PartnerCard 
            src="/images/LOGO_SAO_TOME.png"
            alt="Direcção do Ambiente e Acção Climática"
            :caption="[
                'es' => 'Tercer País - Santo Tomé y Príncipe',
                'pt' => 'Terceiro País - São Tomé e Príncipe',
            ]"
            href="https://www.facebook.com/dga.stp/"
            :description="[
                'es' => 'Órgano responsable de coordinar políticas ambientales y de acción climática, promoviendo el desarrollo sostenible y la adaptación al cambio climático en Santo Tomé y Príncipe.',
                'pt' => 'Órgão responsável por coordenar as políticas ambientais e de ação climática, promovendo o desenvolvimento sustentável e a adaptação às alterações climáticas em São Tomé e Príncipe.',
            ]"
        />

        <x-PartnerCard 
            src="/images/LOGO_GHANA.jpeg"
            alt="Ministerio de Recursos Naturales"
            :caption="[
                'es' => 'Tercer País - Ghana',
                'pt' => 'Terceiro País - Gana',
            ]"
            href="https://mlnr.gov.gh/"
            :description="[
                'es' => 'Ministerio responsable de gestionar la tierra, bosques, fauna y minerales, formulando y supervisando políticas para su uso sostenible, vinculadas al desarrollo socioeconómico y la resiliencia ambiental.',
                'pt' => 'Ministério responsável pela gestão do solo, florestas, fauna e minerais, formulando e supervisionando políticas para o seu uso sustentável, ligadas ao desenvolvimento socioeconómico e à resiliência ambiental.',
            ]"
        />
    </div>
</section>
<section class="my-12 flex flex-col gap-16 w-10/12 mx-auto">

    @foreach($objectives as $i => $o)
        @php $reverse = $i % 2 === 1; @endphp

        <div @class(['flex gap-16 flex-col md:flex-row my-4', 'md:flex-row-reverse' => $reverse])>
                <article class="w-full md:w-1/2">
                    <div data-container="translator">

                        <h1 class="text-2xl font-semibold" data-lang="es">{{ $o['title']['es'] }}</h1>
                        <h1 class="text-2xl font-semibold hidden" data-lang="pt">{{ $o['title']['pt'] }}</h1>
                    </div>
                    <div data-container="translator">

                        <p data-lang="es">{{ $o['description']['es'] }}</p>
                        <p class="hidden" data-lang="pt">{{ $o['description']['pt'] }}</p>
                    </div>

                </article>

                <div class="w-full md:w-1/2 flex flex-col gap-4">
                @foreach($o['activities'] as $a)
                    <x-activity
                        :id="$a['id']"
                        :description="$a['description']"
                    />
                @endforeach
                </div>
            </div>

        </div>
    @endforeach


</section>

<section class="my-16 ">
    <div class="w-full">
        <div data-container="translator">
            <h1 class="w-full text-center text-lg md:text-2xl font-semibold my-4 text-sky-900" data-lang="es">Indicadores del proyecto</h1>
            <h1 class="w-full text-center text-lg md:text-2xl font-semibold my-4 text-sky-900 hidden" data-lang="pt">Indicadores do projeto</h1>

        </div>
        <div data-container="translator">
            <p class="w-10/12 text-center text-md md:text-xl m-auto pb-8" data-lang="es">
                En el proyecto <span class="text-sky-900 font-semibold">Implacost</span> nos centramos en la innovación del desarrollo a largo plazo con la vigilancia en el cambio climatico y el impacto del mismo la Macaronesia con los siguentes indicadores.
            </p>
            <p class="w-10/12 text-center text-md md:text-xl m-auto pb-8 hidden" data-lang="pt">
                No projeto <span class="text-sky-900 font-semibold">Implacost</span>, focamo-nos na inovação do desenvolvimento a longo prazo, com vigilância sobre as alterações climáticas e o seu impacto na Macaronésia, com os seguintes indicadores.
            </p>
        </div>


    </div>
    <div  class="grid grid-cols-2 sm:grid-cols-3">
        @foreach($results as $r)
            @if($loop->index < 3)
                <x-BlueCard
                    :title="$r['title']"
                    progress="{{ $r['progress'] }}"
                    target="{{ $r['target'] }}"
                    src="{{ $r['src'] }}"
                    reverse={{true}}
                />
            @else
                <x-BlueCard
                    :title="$r['title']"
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
        closeBtnDialog?.addEventListener("click", () => {
            d.close();
        });
    });
</script>
@endsection


