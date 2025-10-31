@extends('layouts.app')

@section('title', 'IMPLACOST (1/MAC/2./2.4/0009) | Resultados')

@section('content')

<section class="mt-8 mb-4 mx-auto w-full md:w-2/3">
    <div data-container="translator">
        <h1 class="w-full text-center text-3xl font-semibold text-sky-900 mt-4" data-lang="es">
            Resultados
        </h1>
        <h1 class="w-full text-center text-3xl font-semibold text-sky-900 mt-4 hidden" data-lang="pt">
            Resultados
        </h1>
    </div>

    
    <div>
        <x-Objetive 
            :subtitle="[
                'es' => 'Evaluar el alcance, intensidad y riesgo asociados a las inundaciones costeras: resultados cuantitativos y cualitativos sobre el impacto social, económico y ecosistémico.',
                'pt' => 'Avaliar o alcance, a intensidade e o risco associados às inundações costeiras: resultados quantitativos e qualitativos sobre o impacto social, económico e ecossistémico.',
            ]"
        >
            <div data-container="translator">
                <h2 class="w-full text-xl text-green-700 text-center my-4" data-lang="es">
                    Objetivo Específico 1
                </h1>
                <h2 class="w-full text-xl text-green-700 text-center my-4 hidden" data-lang="pt">
                    Objetivo Específico 1
                </h1>
            </div>
            
        </x-Objetive>

        <div class="flex flex-wrap gap-2 justify-center">
            <x-Result>
                <div data-container="translator">
                    <p class="text-center text-white text-xs sm:text-s" data-lang="es">
                        Una metodología adaptada al territorio MAC para estudios sobre inundaciones costeras.
                    </p>
                    <p class="text-center text-white text-xs sm:text-s hidden" data-lang="pt">
                        Uma metodologia adaptada ao território MAC para estudos sobre inundações costeiras.
                    </p>
                </div>
            </x-Result>

            <x-Result>
                <div data-container="translator">
                    <p class="text-center text-white text-xs sm:text-s" data-lang="es">
                        Describir diferentes escenarios futuros para las regiones participantes.
                    </p>
                    <p class="text-center text-white text-xs sm:text-s hidden" data-lang="pt">
                        Descrever diferentes cenários futuros para as regiões participantes.
                    </p>
                </div>
            </x-Result>

            <x-Result>
                <div data-container="translator">
                    <p class="text-center text-white text-xs sm:text-s" data-lang="es">
                        Disponer de un sistema de predicción de las condiciones costeras en un punto de la costa de Canarias.
                    </p>
                    <p class="text-center text-white text-xs sm:text-s hidden" data-lang="pt">
                    Disponibilizar um sis   tema de previsão das condições costeiras num ponto da costa das Canárias.
                    </p>
                </div>
            </x-Result>

            <x-Result>
                <div data-container="translator">
                    <p class="text-center text-white text-xs sm:text-s" data-lang="es">
                        Formación sobre las herramientas generadas (métodos, modelos, indicadores, etc.) para las regiones participantes.
                    </p>
                    <p class="text-center text-white text-xs sm:text-s hidden" data-lang="pt">
                        Formação sobre as ferramentas geradas (métodos, modelos, indicadores, etc.) para as regiões participantes.
                    </p>
                </div>
            </x-Result>

            <x-Result>
                <div data-container="translator">
                    <p class="text-center text-white text-xs sm:text-s" data-lang="es">
                        Sensibilizar a sectores específicos y público general sobre riesgos/impactos de inundaciones costeras.
                    </p>
                    <p class="text-center text-white text-xs sm:text-s hidden" data-lang="pt">
                        Sensibilizar setores específicos e o público em geral sobre riscos/impactos de inundações costeiras.
                    </p>
                </div>
            </x-Result>
        </div>
    </div>

    <div class="mt-8">
            <x-Objetive 
                :subtitle="[
                    'es' => 'Evaluar el alcance, intensidad y riesgo asociados a la erosión costera: resultados cuantitativos y cualitativos sobre el impacto social, económico y ecosistémico.',
                    'pt' => 'Avaliar o alcance, a intensidade e o risco associados à erosão costeira: resultados quantitativos e qualitativos sobre o impacto social, económico e ecossistémico.',
                ]"
            >
            <div data-container="translator">
                <h2 class="w-full text-xl text-green-700 text-center my-4" data-lang="es">
                    Objetivo Específico 2
                </h1>
                <h2 class="w-full text-xl text-green-700 text-center my-4 hidden" data-lang="pt">
                    Objetivo Específico 2
                </h1>
            </div>
        </x-Objetive>

        <div class="flex flex-wrap gap-2 justify-center">
            <x-Result>
                <div data-container="translator">
                    <p class="text-center text-white text-xs sm:text-s" data-lang="es">
                        Recopilar datos y material gráfico para las evaluaciones en la zona de estudio.
                    </p>
                    <p class="text-center text-white text-xs sm:text-s hidden" data-lang="pt">
                        Recolher dados e material gráfico para as avaliações na área de estudo.
                    </p>
                </div>
            </x-Result>

            <x-Result>
                <div data-container="translator">
                    <p class="text-center text-white text-xs sm:text-s" data-lang="es">
                        Seleccionar las zonas costeras más representativas de las regiones participantes para las evaluaciones.
                    </p>
                    <p class="text-center text-white text-xs sm:text-s hidden" data-lang="pt">
                        Selecionar as zonas costeiras mais representativas das regiões participantes para as avaliações.
                    </p>
                </div>
            </x-Result>

            <x-Result>
                <div data-container="translator">
                    <p class="text-center text-white text-xs sm:text-s" data-lang="es">
                        Describir escenarios futuros de evolución de la erosión e impactos para cada una de las zonas.
                    </p>
                    <p class="text-center text-white text-xs sm:text-s hidden" data-lang="pt">
                        Descrever cenários futuros de evolução da erosão e impactos para cada uma das zonas.
                    </p>
                </div>
            </x-Result>

            <x-Result>
                <div data-container="translator">
                    <p class="text-center text-white text-xs sm:text-s" data-lang="es">
                        Formación sobre las herramientas generadas (modelos, indicadores, etc.) para las regiones participantes.
                    </p>
                    <p class="text-center text-white text-xs sm:text-s hidden" data-lang="pt">
                        Formação sobre as ferramentas geradas (modelos, indicadores, etc.) para as regiões participantes.
                    </p>
                </div>
            </x-Result>

            <x-Result>
                <div data-container="translator">
                    <p class="text-center text-white text-xs sm:text-s" data-lang="es">
                        Sensibilizar a sectores específicos y público general sobre los riesgos de la erosión costera.
                    </p>
                    <p class="text-center text-white text-xs sm:text-s hidden" data-lang="pt">
                        Sensibilizar setores específicos e o público em geral sobre os riscos da erosão costeira.
                    </p>
                </div>
            </x-Result>

        </div>
    </div>

    
    <div class="mt-8">

        <x-Objetive 
            :subtitle="[
                'es' => 'Evaluar el alcance, intensidad y riesgo asociados a la subida de la temperatura media del mar y otros parámetros físico-químicos: resultados cuantitativos y cualitativos sobre el impacto social, económico y ecosistémico.',
                'pt' => 'Avaliar o alcance, a intensidade e o risco associados ao aumento da temperatura média do mar e de outros parâmetros físico-químicos: resultados quantitativos e qualitativos sobre o impacto social, económico e ecossistémico.',
            ]"
        >
            <div data-container="translator">
                <h2 class="w-full text-xl text-green-700 text-center my-4" data-lang="es">
                    Objetivo Específico 3
                </h1>
                <h2 class="w-full text-xl text-green-700 text-center my-4 hidden" data-lang="pt">
                    Objetivo Específico 3
                </h1>
            </div>
        </x-Objetive>
        <div class="flex flex-wrap gap-2 justify-center">
            <x-Result>
                <div data-container="translator">
                    <p class="text-center text-white text-xs sm:text-s" data-lang="es">
                        Desarrollar indicadores basados en parámetros físicoquímicos para una gestión integrada de zonas costeras.
                    </p>
                    <p class="text-center text-white text-xs sm:text-s hidden" data-lang="pt">
                        Desenvolver indicadores baseados em parâmetros físico-químicos para uma gestão integrada das zonas costeiras.
                    </p>
                </div>
            </x-Result>

            <x-Result>
                <div data-container="translator">
                    <p class="text-center text-white text-xs sm:text-s" data-lang="es">
                        Describir diferentes escenarios futuros para las regiones participantes.
                    </p>
                    <p class="text-center text-white text-xs sm:text-s hidden" data-lang="pt">
                        Descrever diferentes cenários futuros para as regiões participantes.
                    </p>
                </div>
            </x-Result>

            <x-Result>
                <div data-container="translator">
                    <p class="text-center text-white text-xs sm:text-s" data-lang="es">
                        Análisis del riesgo de origen natural presente en las áreas costeras en relación con el cambio climático.
                    </p>
                    <p class="text-center text-white text-xs sm:text-s hidden" data-lang="pt">
                        Análise do risco de origem natural presente nas áreas costeiras em relação às alterações climáticas.
                    </p>
                </div>
            </x-Result>

            <x-Result>
                <div data-container="translator">
                    <p class="text-center text-white text-xs sm:text-s" data-lang="es">
                        Programas de educación y sensibilización general sobre el cambio climático y sus impactos.
                    </p>
                    <p class="text-center text-white text-xs sm:text-s hidden" data-lang="pt">
                        Programas de educação e sensibilização geral sobre as alterações climáticas e os seus impactos.
                    </p>
                </div>
            </x-Result>

            <x-Result>
                <div data-container="translator">
                    <p class="text-center text-white text-xs sm:text-s" data-lang="es">
                        Acceso a la información y participación, incluyendo un programa de ciencia ciudadana.
                    </p>
                    <p class="text-center text-white text-xs sm:text-s hidden" data-lang="pt">
                        Acesso à informação e participação, incluindo um programa de ciência cidadã.
                    </p>
                </div>
            </x-Result>

        </div>
    </div>
</section>
@endsection