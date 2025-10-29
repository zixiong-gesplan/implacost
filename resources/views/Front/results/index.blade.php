@extends('layouts.app')

@section('title', 'IMPLACOST (1/MAC/2./2.4/0009) | Resultados')

@section('content')

<section class="mt-8 mb-4 mx-auto w-full md:w-2/3">

    <h1 class="w-full text-center text-3xl font-semibold text-sky-900 mt-4">
        Resultados
    </h1>
    
    <div>
        <x-Objetive 
            subtitle="Evaluar el alcance, intensidad y riesgo asociados a las inundaciones costeras: resultados cuantitativos y cualitativos sobre el impacto social, económico y ecosistémico."
        >
            Objetivo Específico 1
        </x-Objetive>

        <div class="flex flex-wrap gap-2 justify-center">
            <x-Result>
                Una metodología adaptada al territorio MAC para estudios sobre inundaciones costeras.
            </x-Result>
            <x-Result>
                Describir diferentes escenarios futuros para las regiones participantes.
            </x-Result>
            <x-Result>
                Disponer de un sistema de predicción de las condiciones costeras en un punto de la costa de Canarias.
            </x-Result>
            <x-Result>
                Formación sobre las herramientas generadas (métodos, modelos, indicadores, etc.) para las regiones participantes.
            </x-Result>
            <x-Result>
                Sensibilizar a sectores específicos y público general sobre riesgos/impactos de inundaciones costeras.
            </x-Result>

        </div>
    </div>

    <div class="mt-8">
        <x-Objetive 
            subtitle="Evaluar el alcance, intensidad y riesgo asociados a la erosión costera: resultados cuantitativos y cualitativos sobre el impacto social, económico y ecosistémico."
        >
            Objetivo Específico 2
        </x-Objetive>

        <div class="flex flex-wrap gap-2 justify-center">
            <x-Result>
                Recopilar datos y material gráfico para las evaluaciones en la zona de estudio.
            </x-Result>
            <x-Result>
                Seleccionar las zonas costeras más representativas de las regiones participantes para las evaluaciones.
            </x-Result>
            <x-Result>
                Describir escenarios futuros de evolución de la erosión e impactos para cada una de las zonas.
            </x-Result>
            <x-Result>
                Formación sobre las herramientas generadas (modelos, indicadores, etc.) para las regiones participantes.
            </x-Result>
            <x-Result>
                Sensibilizar a sectores específicos y público general sobre los riesgos de la erosión costera.
            </x-Result>
        </div>
    </div>

    
    <div class="mt-8">

        <x-Objetive 
            subtitle="Evaluar el alcance, intensidad y riesgo asociados a la subida de la temperatura media del mar y otros parámetros físico-químicos: resultados cuantitativos y cualitativos sobre el impacto social, económico y ecosistémico."
        >
            Objetivo Específico 3
        </x-Objetive>
        <div class="flex flex-wrap gap-2 justify-center">
            <x-Result>
                Desarrollar indicadores basados en parámetros físicoquímicos para una gestión integrada de zonas costeras.
            </x-Result>
            <x-Result>
                Describir diferentes escenarios futuros para las regiones participantes.
            </x-Result>
            <x-Result>
                Análisis del riesgo de origen natural presente en las áreas costeras en relación con el cambio climático.
            </x-Result>
            <x-Result>
                Programas de educación y sensibilización general sobre el cambio climático y sus impactos.
            </x-Result>
            <x-Result>
                Acceso a la información y participación, incluyendo un programa de ciencia ciudadana.
            </x-Result>
        </div>
    </div>
</section>
@endsection