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
                <h2 class="text-lg md:text-xl font-extrabold uppercase mx-auto mb-2 md:ml-4 text-balance text-center text-sky-50 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)] hidden" data-lang="pt">
                    AVALIAÇÃO DO IMPACTO AMBIENTAL EM ZONAS COSTEIRAS E LITORÂNEAS PELO EFEITO DAS MUDANÇAS CLIMÁTICAS
                </h2>
                <h2 class="text-lg md:text-xl font-extrabold uppercase mx-auto mb-2 md:ml-4 text-balance text-center text-sky-50 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)] hidden" data-lang="en">
                    Environmental impact assessment of coastal and littoral areas under climate change effects
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
            <p class="text-slate text-base font-semibold hidden" data-lang="pt">
                Orçamento de execução
            </p>
            <p class="text-slate text-base font-semibold hidden" data-lang="en">
                Execution budget
            </p>
        </div>
    </div>
    <div class="bg-sky-50 p-4 rounded-lg shadow-lg">
        <div data-container="translator">
            <h1 class="w-full text-2xl font-extrabold capitalize mb-2 text-sky-800" data-lang="es">
                48 Meses
            </h1>
            <h1 class="w-full text-2xl font-extrabold capitalize mb-2 text-sky-800 hidden" data-lang="pt">
                48 Meses
            </h1>
            <h1 class="w-full text-2xl font-extrabold capitalize mb-2 text-sky-800 hidden" data-lang="en">
                48 Months
            </h1>
        </div>
        <div data-container="translator">
            <p class="text-slate-900 text-base font-semibold" data-lang="es">
                Duración del proyecto 2025-2028
            </p>
            <p class="text-slate-900 text-base font-semibold hidden" data-lang="pt">
                Duração do projeto 2025-2028
            </p>
            <p class="text-slate-900 text-base font-semibold hidden" data-lang="en">
                Project duration 2025-2028
            </p>
        </div>

    </div>
    <div class="bg-indigo-50 p-4 rounded-lg shadow-lg">
        <h1 class="w-full text-2xl font-extrabold capitalize mb-2 text-indigo-700">
            85%
        </h1>
        <div data-container="translator">
            <p class="text-slate-900 text-base font-semibold" data-lang="es">
                Co-financiación por el Programa de Cooperación Interreg Madeira-Azores-Canarias (MAC) 2021-2027
            </p>
            <p class="text-slate-900 text-base font-semibold hidden" data-lang="pt">
                Co-financiamento pelo Programa de Cooperação Interreg Madeira-Açores-Canárias (MAC) 2021-2027
            </p>
            <p class="text-slate-900 text-base font-semibold hidden" data-lang="en">
                Co-financed by the Interreg Madeira-Azores-Canarias (MAC) Cooperation Programme 2021-2027
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
            <h1 class="w-full text-xl font-extrabold capitalize mb-2 text-sky-800 hidden" data-lang="en">
                Priority 2 - Green MAC
            </h1>
        </div>
        <div data-container="translator">
            <p class="text-stale-900 text-base font-semibold"  data-lang="es">
                Transición ecológica, apoyo al desarrollo de una economía verde y azul, lucha contra el cambio climático, prevención y gestion de riesgos y emergencias
            </p>
            <p class="text-stale-900 text-base font-semibold hidden"  data-lang="pt">
                Transição ecológica, apoio ao desenvolvimento de uma economia verde e azul, combate às alterações climáticas, prevenção e gestão de riscos e emergências
            </p>
            <p class="text-slate-900 text-base font-semibold hidden" data-lang="en">
                Ecological transition, support for the development of a green and blue economy, fight against climate change, and prevention and management of risks and emergencies
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
        <h1 class="w-full text-center text-4xl font-extrabold mb-4 text-sky-800 drop-shadow-[0_1px_1px_rgba(0,0,0,0.5)] hidden" data-lang="en">
            Six different regions, one common goal
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
        <p class="text-lg text-center text-balance hidden" data-lang="en">
            Under the framework of the IMPLACOST project (1/MAC/2/2.4/0009), a multidisciplinary and interregional working group 
            has been established to operate across the entire cooperation area 
            of the INTERREG VI-D MAC 2021-2027 Programme.
        </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-8 sm:gap-x-16 gap-y-8 py-8">
        <x-PartnerCard 
            src="/images/LOGO_GOBIERNO_CANARIAS.svg"
            alt="Gobierno de Canarias"
            :caption="[
                'es' => 'Socio Principal',
                'pt' => 'Sócio Principal',
                'en' => 'Main Partner'
            ]"
            href="https://www.gobiernodecanarias.org/transicionecologica/index.html"
            :description="[
                'es' => 'Órgano ejecutivo de Canarias, responsable de administrar y gestionar las competencias que le otorga el Estatuto de Autonomía para gobernar y coordinar la comunidad autónoma.',
                'pt' => 'Órgão executivo das Canárias, responsável pela administração e gestão das competências que lhe são conferidas pelo Estatuto de Autonomia para governar e coordenar a comunidade autónoma.',
                'en' => 'Executive body of the Canary Islands, responsible for administering and managing the powers granted by the Statute of Autonomy to govern and coordinate the autonomous community.'
            ]"
        />
        <x-partner-card 
            src="/images/LOGO_AZORES.png"
            alt="Gobierno de Azores"
            :caption="[
                'es' => 'Administración Pública',
                'pt' => 'Administração Pública',
                'en' => 'Public Administration'
            ]"
            href="https://portal.azores.gov.pt/"
            :description="[
                'es' => 'Órgano encargado de definir y coordinar la política regional ambiental, incluyendo cambio climático, ordenación territorial y gestión de recursos hídricos.',
                'pt' => 'Órgão responsável por definir e coordenar a política ambiental regional, incluindo as áreas de alterações climáticas, ordenamento do território e gestão de recursos hídricos.',
                'en' => 'Body responsible for defining and coordinating regional environmental policy, including climate change, spatial planning, and water resource management.'
            ]"
        />

        <x-partner-card 
            src="/images/LOGO_MADEIRA.png"
            alt="Gobierno de Madeira"
            :caption="[
                'es' => 'Administración Pública',
                'pt' => 'Administração Pública',
                'en' => 'Public Administration'
            ]"
            href="https://www.madeira.gov.pt/draac/"
            :description="[
                'es' => 'Órgano encargado de coordinar y supervisar políticas de lucha contra el cambio climático, promoviendo la sostenibilidad, la resiliencia y la participación social en Madeira.',
                'pt' => 'Órgão responsável por coordenar e supervisionar políticas de combate às alterações climáticas, promovendo a sustentabilidade, a resiliência e a participação social na Madeira.',
                'en' => 'Body responsible for coordinating and overseeing climate change mitigation policies, promoting sustainability, resilience, and social participation in Madeira.'
            ]"
        />

        <x-partner-card 
            src="/images/LOGO_GESPLAN.png"
            alt="Gestión y Planeamiento Territorial y Medioambiental"
            :caption="[
                'es' => 'Empresa Pública',
                'pt' => 'Empresa Pública',
                'en' => 'Public Company'
            ]"
            href="https://www.gesplan.es/"
            :description="[
                'es' => 'Empresa pública del Gobierno de Canarias especializada en gestión ambiental, planificación territorial, infraestructuras y transición ecológica, con presencia en todo el archipiélago.',
                'pt' => 'Empresa pública do Governo das Canárias especializada em gestão ambiental, planeamento territorial, infraestruturas e transição ecológica, com presença em todo o arquipélago.',
                'en' => 'Public company of the Government of the Canary Islands specialized in environmental management, territorial planning, infrastructure, and ecological transition, with a presence throughout the archipelago.'
            ]"
        />

        <x-partner-card 
            src="/images/LOGO_ARDITI.png"
            alt="ARDITI"
            :caption="[
                'es' => 'Empresa Pública',
                'pt' => 'Empresa Pública',
                'en' => 'Public Company'
            ]"
            href="https://www.arditi.pt/pt/"
            :description="[
                'es' => 'Organización sin fines de lucro, que apoya la investigación y la innovación, promueve la formación científica y tecnológica y contribuye a la modernización y al desarrollo de Madeira, Región Autónoma.',
                'pt' => 'Organização sem fins lucrativos que apoia a investigação e a inovação, promove a formação científica e tecnológica e contribui para a modernização e o desenvolvimento da Região Autónoma da Madeira.',
                'en' => 'Non-profit organization that supports research and innovation, promotes scientific and technological training, and contributes to the modernization and development of the Autonomous Region of Madeira.'
            ]"
        />

        <x-PartnerCard 
            src="/images/LOGO_UNIVERSIDADE_MADEIRA.png"
            alt="UNIVERSIDADE MADEIRA"
            :caption="[
                'es' => 'Universidad',
                'pt' => 'Universidade',
                'en' => 'University'
            ]"
            href="https://www.uma.pt/"
            :description="[
                'es' => 'La Universidad de Madeira continúa realizando actividades de investigación científica, promoviendo la difusión y valorización social y económica del conocimiento y la innovación tecnológica.',
                'pt' => 'A Universidade da Madeira continua a desenvolver atividades de investigação científica, promovendo a difusão e a valorização social e económica do conhecimento e da inovação tecnológica.',
                'en' => 'The University of Madeira continues to carry out scientific research activities, promoting the dissemination and socio-economic enhancement of knowledge and technological innovation.'
            ]"
        />

        <x-PartnerCard 
            src="/images/LOGO_ULPGC.png"
            alt="Universidad de Las Palmas de Gran Canaria"
            :caption="[
                'es' => 'Universidad',
                'pt' => 'Universidade',
                'en' => 'University'
            ]"
            href="https://www.ulpgc.es/"
            :description="[
                'es' => 'Es una institución pública que ofrece educación superior, investigación e innovación, impulsando el desarrollo social y cultural de la región.',
                'pt' => 'É uma instituição pública que oferece ensino superior, investigação e inovação, impulsionando o desenvolvimento social e cultural da região.',
                'en' => 'A public institution offering higher education, research, and innovation, driving the social and cultural development of the region.'
            ]"
        />

        <x-PartnerCard 
            src="/images/LOGO_UNIVERSIDAD_LAGUNA.png"
            alt="Universidad de La Laguna"
            :caption="[
                'es' => 'Universidad',
                'pt' => 'Universidade',
                'en' => 'University'
            ]"
            href="https://www.ull.es/"
            :description="[
                'es' => 'Institución pública de educación superior ubicada en Tenerife, que ofrece formación, investigación e innovación en diversas áreas del conocimiento, contribuyendo al desarrollo social y cultural regional.',
                'pt' => 'Instituição pública de ensino superior situada em Tenerife, que oferece formação, investigação e inovação em diversas áreas do conhecimento, contribuindo para o desenvolvimento social e cultural da região.',
                'en' => 'Public higher education institution located in Tenerife, offering training, research, and innovation in various fields of knowledge, contributing to the social and cultural development of the region.'
            ]"
        />

        <x-PartnerCard 
            src="/images/LOGO_ITER.png"
            alt="Instituto Tecnológico y de Energías Renovables"
            :caption="[
                'es' => 'Empresa pública',
                'pt' => 'Empresa pública',
                'en' => 'Public Company'
            ]"
            href="https://www.iter.es/"
            :description="[
                'es' => 'Centro de investigación que impulsa energías renovables, recursos hídricos y vigilancia sísmica, promoviendo innovación y educación para el desarrollo sostenible regional.',
                'pt' => 'Centro de investigação que impulsiona as energias renováveis, os recursos hídricos e a vigilância sísmica, promovendo inovação e educação para o desenvolvimento sustentável da região.',
                'en' => 'Research center that promotes renewable energy, water resources, and seismic monitoring, fostering innovation and education for sustainable regional development.'
            ]"
        />

        <x-PartnerCard 
            src="/images/LOGO_GRAFCAN.png"
            alt="GRAFCAN S.A."
            :caption="[
                'es' => 'Empresa pública',
                'pt' => 'Empresa pública',
                'en' => 'Public Company'
            ]"
            href="https://www.grafcan.es/"
            :description="[
                'es' => 'Empresa pública de la Comunidad Autónoma de Canarias, adscrita actualmente a la Consejería de Política Territorial, Cohesión Territorial y Aguas, perteneciente al grupo de entidades con presupuesto estimativo de la Comunidad Autónoma de Canarias.',
                'pt' => 'Empresa pública da Comunidade Autónoma das Canárias, atualmente adscrita à Consejeria de Política Territorial, Coesão Territorial e Águas, pertencente ao grupo de entidades com orçamento estimativo da Comunidade Autónoma das Canárias.',
                'en' => 'Public company of the Canary Islands Autonomous Community, currently attached to the Department of Territorial Policy, Territorial Cohesion and Water, belonging to the group of entities with an estimated budget of the Canary Islands Government.'
            ]"
        />

        <x-PartnerCard 
            src="/images/LOGO_INGT.png"
            alt="Instituto Nacional de Gestão do Território"
            :caption="[
                'es' => 'Tercer País - Cabo Verde',
                'pt' => 'Terceiro País - Cabo Verde',
                'en' => 'Third Country - Cape Verde'
            ]"
            href="https://ingt.gov.cv/ingt/"
            :description="[
                'es' => 'Estructura dependiente del Ministerio de Ordenamiento Territorial e Infraestructura de la Vivienda (MIOTH), dotada de personalidad jurídica y de inherentes funciones administrativas, financieras y autonomía patrimonial. Es la entidad del Estado de Cabo Verde que supervisa la organización de su territorio, a través de la promoción de políticas y prácticas que tienen como objetivo garantizar el desarrollo armonioso y sostenible del país.',
                'pt' => 'Estrutura dependente do Ministério do Ordenamento do Território e Infraestruturas de Habitação (MIOTH), dotada de personalidade jurídica, com funções administrativas e financeiras e autonomia patrimonial. É a entidade do Estado de Cabo Verde que supervisiona a organização do território, promovendo políticas e práticas destinadas a garantir o desenvolvimento harmonioso e sustentável do país.',
                'en' => 'Structure under the Ministry of Land Use Planning and Housing Infrastructure (MIOTH), endowed with legal personality and with administrative, financial, and patrimonial autonomy. It is the State entity of Cape Verde responsible for supervising territorial organization through the promotion of policies and practices aimed at ensuring the harmonious and sustainable development of the country.'
            ]"
        />

        <x-PartnerCard 
            src="/images/LOGO_SAO_TOME.png"
            alt="Direcção do Ambiente e Acção Climática"
            :caption="[
                'es' => 'Tercer País - Santo Tomé y Príncipe',
                'pt' => 'Terceiro País - São Tomé e Príncipe',
                'en' => 'Third Country - São Tomé and Príncipe'
            ]"
            href="https://www.facebook.com/dga.stp/"
            :description="[
                'es' => 'Órgano responsable de coordinar políticas ambientales y de acción climática, promoviendo el desarrollo sostenible y la adaptación al cambio climático en Santo Tomé y Príncipe.',
                'pt' => 'Órgão responsável por coordenar as políticas ambientais e de ação climática, promovendo o desenvolvimento sustentável e a adaptação às alterações climáticas em São Tomé e Príncipe.',
                'en' => 'Body responsible for coordinating environmental and climate action policies, promoting sustainable development and climate change adaptation in São Tomé and Príncipe.'
            ]"
        />

        <x-PartnerCard 
            src="/images/LOGO_GHANA.jpeg"
            alt="Ministerio de Recursos Naturales"
            :caption="[
                'es' => 'Tercer País - Ghana',
                'pt' => 'Terceiro País - Gana',
                'en' => 'Third Country - Ghana'
            ]"
            href="https://mlnr.gov.gh/"
            :description="[
                'es' => 'Ministerio responsable de gestionar la tierra, bosques, fauna y minerales, formulando y supervisando políticas para su uso sostenible, vinculadas al desarrollo socioeconómico y la resiliencia ambiental.',
                'pt' => 'Ministério responsável pela gestão do solo, florestas, fauna e minerais, formulando e supervisionando políticas para o seu uso sustentável, ligadas ao desenvolvimento socioeconómico e à resiliência ambiental.',
                'en' => 'Ministry responsible for the management of land, forests, wildlife, and minerals, formulating and overseeing policies for their sustainable use, linked to socioeconomic development and environmental resilience.'
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
                        <h1 class="text-2xl font-semibold hidden" data-lang="en">{{ $o['title']['en'] }}</h1>
                    </div>
                    <div data-container="translator">

                        <p data-lang="es">{{ $o['description']['es'] }}</p>
                        <p class="hidden" data-lang="pt">{{ $o['description']['pt'] }}</p>
                        <p class="hidden" data-lang="en">{{ $o['description']['en'] }}</p>
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
            <h1 class="w-full text-center text-lg md:text-2xl font-semibold my-4 text-sky-900" data-lang="es">
                Indicadores del proyecto
            </h1>
            <h1 class="w-full text-center text-lg md:text-2xl font-semibold my-4 text-sky-900 hidden" data-lang="pt">
                Indicadores do projeto
            </h1>
            <h1 class="w-full text-center text-lg md:text-2xl font-semibold my-4 text-sky-900 hidden" data-lang="en">
                Project indicators
            </h1>
        </div>
        <div data-container="translator">
            <p class="w-10/12 text-center text-md md:text-xl m-auto pb-8" data-lang="es">
                En el proyecto <span class="text-sky-900 font-semibold">Implacost</span> nos centramos en la innovación del desarrollo a largo plazo con la vigilancia en el cambio climático y el impacto del mismo en la Macaronesia con los siguientes indicadores.
            </p>
            <p class="w-10/12 text-center text-md md:text-xl m-auto pb-8 hidden" data-lang="pt">
                No projeto <span class="text-sky-900 font-semibold">Implacost</span>, focamo-nos na inovação do desenvolvimento a longo prazo, com vigilância sobre as alterações climáticas e o seu impacto na Macaronésia, com os seguintes indicadores.
            </p>
            <p class="w-10/12 text-center text-md md:text-xl m-auto pb-8 hidden" data-lang="en">
                In the <span class="text-sky-900 font-semibold">Implacost</span> project, we focus on innovation for long-term development, monitoring climate change and its impact on Macaronesia through the following indicators.
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


