<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Middleware\AuthSession;
use App\Http\Middleware\TrackVisitors;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(TrackVisitors::class)->group(function () {
    Route::get('/', function (Request $request) {
        $labelCards = [
            [
                'label' => '3.656.120,01 €',
                'description' => 'Presupuesto para la ejecución',
            ],
            [
                'label' => '48 meses',
                'description' => 'Duración del proyecto 2025-2028',
            ],
            [
                'label' => '85%',
                'description' => 'Co-financiación por el Programa de Cooperacion Interreg Madeira-Azores-Canarias (MAC) 2021-2027',
            ],
            [
                'label' => 'Prioridad 2 - MAC Verde',
                'description' => 'Transición ecológica, apoyo al desarrollo de una economía verde y azul, lucha contra el cambio climático, prevención y gestion de riesgos y emergencias',
            ],
        ];

        $objectives = [
            [
                'title' => 'Objetivo específico 1 del proyecto',
                'description' => 'Evaluar el alcance, intensidad y riesgo asociados a las inundaciones costeras: resultados cuantitativos y cualitativos sobre el impacto social, económico y ecosistémico.',
                'activities' => [[
                    'id' => '1.1',
                    'description' => 'Estudio de la evolución de la línea de costa en la región de cooperación a partir de técnicas remotas e inteligencia artificial.',
                ],
                    [
                        'id' => '1.2',
                        'description' => 'Estudio de las afecciones de la intrusión salina en las costas y sus efectos sobre sectores afectados.',
                    ],
                    [
                        'id' => '1.3',
                        'description' => 'Diseño de un sistema piloto de predicción de las condiciones marinas costeras, focalizado en la prevención de impactos de eventos adversos costeros.',
                    ]],
            ], [
                'title' => 'Objetivo especifico 2 del proyecto',
                'description' => 'Evaluar el alcance, intensidad y riesgo asociados a la erosión costera: resultados cuantitativos y cualitativos sobre el impacto social, económico y ecosistémico',
                'activities' => [[
                    'id' => '2.1',
                    'description' => 'Evaluación de la erosión de escarpes y acantilados en las costas rocosas seleccionadas de la Región MAC.',
                ],
                    [
                        'id' => '2.2',
                        'description' => 'Evaluación de la erosión de costas sedimentarias, sistemas dunares y humedales costeros, así como sus atributos ecológicos y paisajísticos.',
                    ],
                    [
                        'id' => '2.3',
                        'description' => 'Estudios de planificación de la orla costera en diferentes regiones del espacio MAC de cooperación.',
                    ]],
            ], [
                'title' => 'Objetivo especifico 3 del proyecto',
                'description' => 'Evaluar el alcance, intensidad y riesgo asociados a la subida de la temperatura media del mar y otros parámetros físico-químicos: resultados cuantitativos y cualitativos sobre el impacto social, económico y ecosistémico.',
                'activities' => [[
                    'id' => '3.1',
                    'description' => 'Cuantificar los parámetros físicoquímicos de interés para desarrollar indicadores y establecer la base de la gobernanza de espacios costeros.',
                ],
                    [
                        'id' => '3.2',
                        'description' => 'Ciencia ciudadana y sensibilización: el valor de las zonas costeras y litorales en los sectores socio-económicos de la región de cooperación.',
                    ]],
            ],
        ];

        // $results = array(
        //     [
        //         'title' => 'Nº de personas formadas',
        //         'progress' => 0,
        //         'target' => 350
        //     ],[
        //         'title' => 'Reuniones de seguimiento',
        //         'progress' => 0,
        //         'target' => 5
        //     ],[
        //         'title' => 'Nº de publicaciones cientificas',
        //         'progress' => 0,
        //         'target' => 3
        //     ],[
        //         'title' => 'Alumnos de primara y secundaria sensibilizados',
        //         'progress' => 0,
        //         'target' => 800
        //     ],[
        //         'title' => 'Estudios realizados',
        //         'progress' => 0,
        //         'target' => 6
        //     ],[
        //         'title' => 'Investigadores Formados',
        //         'progress' => 0,
        //         'target' => 6
        //     ],[
        //         'title' => 'Nuevos contratos de investigadores',
        //         'progress' => 0,
        //         'target' => 6
        //     ],[
        //         'title' => 'Nº de indicadores de vulnerabilidad ante el cambio climático desarrollados',
        //         'progress' => 0,
        //         'target' => 3
        //     ],[
        //         'title' => 'Soluciones basadas en la naturaleza implantadas',
        //         'progress' => 0,
        //         'target' => 3
        //     ],[
        //         'title' => 'Visitas a la web del proyecto',
        //         'progress' => Visitor::count(),
        //         'target' => 5000
        //     ]
        // );
        $results = [
            [
                'title' => 'Personas formadas',
                'progress' => 0,
                'target' => 350,
                'src' => '/images/TARGET_1.png',
            ], [
                'title' => 'Publicaciones en medios',
                'progress' => 12,
                'target' => 3,
                'src' => '/images/TARGET_2.png',
            ], [
                'title' => 'Estudios realizados',
                'progress' => 0,
                'target' => 6,
                'src' => '/images/TARGET_3.png',
            ], [
                'title' => 'Reuniones de socios',
                'progress' => 1,
                'target' => 6,
                'src' => '/images/TARGET_2.png',
            ], [
                'title' => 'Nuevos contratos de investigadores',
                'progress' => 0,
                'target' => 6,
                'src' => '/images/TARGET_3.png',
            ], [
                'title' => 'Visitas a la web del proyecto',
                'progress' => Visitor::count(),
                'target' => 5000,
                'src' => '/images/TARGET_1.png',
            ],
        ];

        return response()->view('Front.home.index', [
            'labelCards' => $labelCards,
            'objectives' => $objectives,
            'results' => $results,
        ])->header('Permissions-Policy', 'translator=(*)');
    });

    Route::resource('/news', NewsController::class);

    Route::get('/statistics', function () {
        $indicators = [
            [
                'title' => 'Indicadores de realización',
                'goals' => [
                    [
                        'title' => 'RCO 83-Estrategias y planes de acción desarrollados conjuntamente.',
                        'progress' => 0,
                        'target' => 1,
                    ],
                    [
                        'title' => 'RCO 84-Actividades piloto desarrolladas conjuntamente y ejecutadas en el proyecto.',
                        'progress' => 0,
                        'target' => 2,
                    ],
                    [
                        'title' => 'RCO 87-Organizaciones que cooperan a través de las fronteras.',
                        'progress' => 0,
                        'target' => 13,
                    ],
                ],
            ],
            [
                'title' => 'Indicadores de resultado',
                'goals' => [
                    [
                        'title' => 'RCR 84-Organizaciones que cooperan después de haber completado el proyecto.',
                        'progress' => 0,
                        'target' => 13,
                    ],
                    [
                        'title' => 'RCR 79-Estrategias conjuntas y planes de acción adoptados por organizaciones.',
                        'progress' => 0,
                        'target' => 1,
                    ],
                ],
            ],
            [
                'title' => 'Indicadores específicos del proyecto',
                'goals' => [
                    [
                        'title' => 'Nº de personas formadas a través de cursos online y participantes en seminarios y jornadas asociadas a actividades de ejecución (los alumnos participantes de las acciones formativas tendrán que inscribirse previamente en formularios habilitados a tal efecto. Se entrega copia de los formularios en los informes de seguimiento).',
                        'progress' => 0,
                        'target' => 350,
                    ],
                    [
                        'title' => 'Nº de reuniones de seguimiento del proyecto.',
                        'progress' => 0,
                        'target' => 5,
                    ],
                    [
                        'title' => 'Nº de publicaciones científicas.',
                        'progress' => 0,
                        'target' => 3,
                    ],
                    [
                        'title' => 'Nº de investigadores formados.',
                        'progress' => 0,
                        'target' => 5,
                    ],

                    [
                        'title' => 'Nº de alumnos de primaria y secundaria sensibilizados.',
                        'progress' => 0,
                        'target' => 800,
                    ],
                    [
                        'title' => 'Nº de estudios realizados',
                        'progress' => 0,
                        'target' => 6,
                    ],
                    [
                        'title' => 'Nº de nuevos contratos de investigadores.',
                        'progress' => 0,
                        'target' => 6,
                    ],
                    [
                        'title' => 'Nº de indicadores de vulnerabilidad ante el cambio climático desarrollados.',
                        'progress' => 0,
                        'target' => 3,
                    ],
                    [
                        'title' => 'Nº de soluciones basadas en la naturaleza implantadas en base a los resultados de este proyecto.',
                        'progress' => 0,
                        'target' => 3,
                    ],
                ],
            ],
            [
                'title' => 'Indicadores de comunicación',
                'goals' => [
                    [
                        'title' => 'Nº visitas a página web del proyecto.',
                        'progress' => Visitor::count(),
                        'target' => 5000,
                    ],
                    [
                        'title' => 'Nº de actos de difusión en los medios de comunicación.',
                        'progress' => 0,
                        'target' => 15,
                    ],
                    [
                        'title' => 'Nº total de publicaciones realizadas.',
                        'progress' => 0,
                        'target' => 43,
                    ],
                    [
                        'title' => 'Nº publicaciones realizadas en redes sociales.',
                        'progress' => 0,
                        'target' => 40,
                    ],
                    [
                        'title' => 'Nº publicaciones realizadas en formato físico.',
                        'progress' => 0,
                        'target' => 3,
                    ],
                    [
                        'title' => 'Nº de producciones audiovisuales.',
                        'progress' => 0,
                        'target' => 1,
                    ],
                    [
                        'title' => 'Nº eventos de comunicación realizados.',
                        'progress' => 0,
                        'target' => 10,
                    ],
                    [
                        'title' => 'Nº total de participantes en los eventos realizados.',
                        'progress' => 0,
                        'target' => 450,
                    ],
                    [
                        'title' => 'Nº total de mujeres en los eventos realizados.',
                        'progress' => 0,
                        'target' => 250,
                    ],
                    [
                        'title' => 'Nº total de participantes de los terceros países en los eventos realizados.',
                        'progress' => 0,
                        'target' => 50,
                    ],
                ],
            ],
        ];

        return view('Front.stadistics.index', ['indicators' => $indicators]);
    });

    Route::get('/results', function () {
        return view('Front.results.index');
    });

    Route::get('/contact', function () {
        return view('Front.contact.index');
    });
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware(AuthSession::class)->group(function () {
    Route::get('/admin', function () {
        return view('Back.home.index');
    });

    Route::get('/admin/crear-noticia', function () {
        return view('Back.news.create');
    });
});
