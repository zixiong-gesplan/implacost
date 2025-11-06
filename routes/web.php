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
                'title' => [
                    'es' => 'Objetivo específico 1 del proyecto',
                    'pt' => 'Objetivo específico 1 do projeto',
                    'en' => 'Project Specific Objective 1',
                ],
                'description' => [
                    'es' => 'Evaluar el alcance, intensidad y riesgo asociados a las inundaciones costeras: resultados cuantitativos y cualitativos sobre el impacto social, económico y ecosistémico.',
                    'pt' => 'Avaliar o alcance, a intensidade e o risco associados às inundações costeiras: resultados quantitativos e qualitativos sobre o impacto social, económico e ecossistémico.',
                    'en' => 'Assess the extent, intensity, and risk associated with coastal flooding: quantitative and qualitative results on social, economic, and ecosystem impacts.',
                ],
                'activities' => [
                    [
                        'id' => '1.1',
                        'description' => [
                            'es' => 'Estudio de la evolución de la línea de costa en la región de cooperación a partir de técnicas remotas e inteligencia artificial.',
                            'pt' => 'Estudo da evolução da linha de costa na região de cooperação com base em técnicas remotas e inteligência artificial.',
                            'en' => 'Study of coastal line evolution in the cooperation region using remote sensing and artificial intelligence techniques.',
                        ],
                    ],
                    [
                        'id' => '1.2',
                        'description' => [
                            'es' => 'Estudio de las afecciones de la intrusión salina en las costas y sus efectos sobre sectores afectados.',
                            'pt' => 'Estudo dos efeitos da intrusão salina nas zonas costeiras e dos seus impactos nos setores afetados.',
                            'en' => 'Study of the effects of saltwater intrusion in coastal areas and its impacts on affected sectors.',
                        ],
                    ],
                    [
                        'id' => '1.3',
                        'description' => [
                            'es' => 'Diseño de un sistema piloto de predicción de las condiciones marinas costeras, focalizado en la prevención de impactos de eventos adversos costeros.',
                            'pt' => 'Desenho de um sistema-piloto de previsão das condições marinhas costeiras, focado na prevenção dos impactos de eventos costeiros adversos.',
                            'en' => 'Design of a pilot system for predicting coastal marine conditions, focused on preventing the impacts of adverse coastal events.',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'es' => 'Objetivo específico 2 del proyecto',
                    'pt' => 'Objetivo específico 2 do projeto',
                    'en' => 'Project Specific Objective 2',
                ],
                'description' => [
                    'es' => 'Evaluar el alcance, intensidad y riesgo asociados a la erosión costera: resultados cuantitativos y cualitativos sobre el impacto social, económico y ecosistémico.',
                    'pt' => 'Avaliar o alcance, a intensidade e o risco associados à erosão costeira: resultados quantitativos e qualitativos sobre o impacto social, económico e ecossistémico.',
                    'en' => 'Assess the extent, intensity, and risk associated with coastal erosion: quantitative and qualitative results on social, economic, and ecosystem impacts.',
                ],
                'activities' => [
                    [
                        'id' => '2.1',
                        'description' => [
                            'es' => 'Evaluación de la erosión de escarpes y acantilados en las costas rocosas seleccionadas de la Región MAC.',
                            'pt' => 'Avaliação da erosão de escarpas e falésias nas costas rochosas selecionadas da Região MAC.',
                            'en' => 'Assessment of cliff and escarpment erosion along selected rocky coasts in the MAC region.',
                        ],
                    ],
                    [
                        'id' => '2.2',
                        'description' => [
                            'es' => 'Evaluación de la erosión de costas sedimentarias, sistemas dunares y humedales costeros, así como sus atributos ecológicos y paisajísticos.',
                            'pt' => 'Avaliação da erosão das costas sedimentares, sistemas dunares e zonas húmidas costeiras, bem como dos seus atributos ecológicos e paisagísticos.',
                            'en' => 'Assessment of erosion on sedimentary coasts, dune systems, and coastal wetlands, as well as their ecological and landscape attributes.',
                        ],
                    ],
                    [
                        'id' => '2.3',
                        'description' => [
                            'es' => 'Estudios de planificación de la orla costera en diferentes regiones del espacio MAC de cooperación.',
                            'pt' => 'Estudos de planeamento da orla costeira em diferentes regiões do espaço de cooperação MAC.',
                            'en' => 'Coastal planning studies in various regions of the MAC cooperation area.',
                        ],
                    ],
                ],
            ],
            [
                'title' => [
                    'es' => 'Objetivo específico 3 del proyecto',
                    'pt' => 'Objetivo específico 3 do projeto',
                    'en' => 'Project Specific Objective 3',
                ],
                'description' => [
                    'es' => 'Evaluar el alcance, intensidad y riesgo asociados a la subida de la temperatura media del mar y otros parámetros físico-químicos: resultados cuantitativos y cualitativos sobre el impacto social, económico y ecosistémico.',
                    'pt' => 'Avaliar o alcance, a intensidade e o risco associados ao aumento da temperatura média do mar e de outros parâmetros físico-químicos: resultados quantitativos e qualitativos sobre o impacto social, económico e ecossistémico.',
                    'en' => 'Assess the extent, intensity, and risk associated with the rise in average sea temperature and other physico-chemical parameters: quantitative and qualitative results on social, economic, and ecosystem impacts.',
                ],
                'activities' => [
                    [
                        'id' => '3.1',
                        'description' => [
                            'es' => 'Cuantificar los parámetros físicoquímicos de interés para desarrollar indicadores y establecer la base de la gobernanza de espacios costeros.',
                            'pt' => 'Quantificar os parâmetros físico-químicos de interesse para desenvolver indicadores e estabelecer as bases da governação dos espaços costeiros.',
                            'en' => 'Quantify relevant physico-chemical parameters to develop indicators and establish the foundation for coastal governance.',
                        ],
                    ],
                    [
                        'id' => '3.2',
                        'description' => [
                            'es' => 'Ciencia ciudadana y sensibilización: el valor de las zonas costeras y litorales en los sectores socio-económicos de la región de cooperación.',
                            'pt' => 'Ciência cidadã e sensibilização: o valor das zonas costeiras e litorais nos setores socioeconómicos da região de cooperação.',
                            'en' => 'Citizen science and awareness: the value of coastal and littoral areas for the socio-economic sectors of the cooperation region.',
                        ],
                    ],
                ],
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
                'title' => [
                    'es' => 'Personas formadas',
                    'pt' => 'Pessoas formadas',
                    'en' => 'People trained',
                ],
                'progress' => 0,
                'target' => 350,
                'src' => '/images/TARGET_1.png',
            ],
            [
                'title' => [
                    'es' => 'Publicaciones en medios',
                    'pt' => 'Publicações nos meios de comunicação',
                    'en' => 'Media publications',
                ],
                'progress' => 12,
                'target' => 3,
                'src' => '/images/TARGET_2.png',
            ],
            [
                'title' => [
                    'es' => 'Estudios realizados',
                    'pt' => 'Estudos realizados',
                    'en' => 'Studies carried out',
                ],
                'progress' => 0,
                'target' => 6,
                'src' => '/images/TARGET_3.png',
            ],
            [
                'title' => [
                    'es' => 'Reuniones de socios',
                    'pt' => 'Reuniões de parceiros',
                    'en' => 'Partner meetings',
                ],
                'progress' => 1,
                'target' => 6,
                'src' => '/images/TARGET_2.png',
            ],
            [
                'title' => [
                    'es' => 'Nuevos contratos de investigadores',
                    'pt' => 'Novos contratos de investigadores',
                    'en' => 'New researcher contracts',
                ],
                'progress' => 0,
                'target' => 6,
                'src' => '/images/TARGET_3.png',
            ],
            [
                'title' => [
                    'es' => 'Visitas a la web del proyecto',
                    'pt' => 'Visitas ao site do projeto',
                    'en' => 'Visits to the project website',
                ],
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
                'title' => [
                    'es' => 'Indicadores de realización',
                    'pt' => 'Indicadores de realização',
                    'en' => 'Output indicators',
                ],
                'goals' => [
                    [
                        'title' => [
                            'es' => 'RCO 83 - Estrategias y planes de acción desarrollados conjuntamente.',
                            'pt' => 'RCO 83 - Estratégias e planos de ação desenvolvidos conjuntamente.',
                            'en' => 'RCO 83 - Strategies and action plans jointly developed.',
                        ],
                        'progress' => 0,
                        'target' => 1,
                    ],
                    [
                        'title' => [
                            'es' => 'RCO 84 - Actividades piloto desarrolladas conjuntamente y ejecutadas en el proyecto.',
                            'pt' => 'RCO 84 - Atividades-piloto desenvolvidas conjuntamente e executadas no projeto.',
                            'en' => 'RCO 84 - Pilot activities jointly developed and implemented within the project.',
                        ],
                        'progress' => 0,
                        'target' => 2,
                    ],
                    [
                        'title' => [
                            'es' => 'RCO 87 - Organizaciones que cooperan a través de las fronteras.',
                            'pt' => 'RCO 87 - Organizações que cooperam através das fronteiras.',
                            'en' => 'RCO 87 - Organisations cooperating across borders.',
                        ],
                        'progress' => 0,
                        'target' => 13,
                    ],
                ],
            ],

            [
                'title' => [
                    'es' => 'Indicadores de resultado',
                    'pt' => 'Indicadores de resultado',
                    'en' => 'Result indicators',
                ],
                'goals' => [
                    [
                        'title' => [
                            'es' => 'RCR 84 - Organizaciones que cooperan después de haber completado el proyecto.',
                            'pt' => 'RCR 84 - Organizações que cooperam após a conclusão do projeto.',
                            'en' => 'RCR 84 - Organisations that continue to cooperate after project completion.',
                        ],
                        'progress' => 0,
                        'target' => 13,
                    ],
                    [
                        'title' => [
                            'es' => 'RCR 79 - Estrategias conjuntas y planes de acción adoptados por organizaciones.',
                            'pt' => 'RCR 79 - Estratégias conjuntas e planos de ação adotados por organizações.',
                            'en' => 'RCR 79 - Joint strategies and action plans adopted by organisations.',
                        ],
                        'progress' => 0,
                        'target' => 1,
                    ],
                ],
            ],

            [
                'title' => [
                    'es' => 'Indicadores específicos del proyecto',
                    'pt' => 'Indicadores específicos do projeto',
                    'en' => 'Project-specific indicators',
                ],
                'goals' => [
                    [
                        'title' => [
                            'es' => 'Nº de personas formadas a través de cursos online y participantes en seminarios y jornadas asociadas a actividades de ejecución (los alumnos participantes de las acciones formativas tendrán que inscribirse previamente en formularios habilitados a tal efecto. Se entrega copia de los formularios en los informes de seguimiento).',
                            'pt' => 'Nº de pessoas formadas através de cursos online e participantes em seminários e jornadas associadas a atividades de execução (os alunos participantes nas ações formativas devem inscrever-se previamente em formulários próprios, cuja cópia será entregue nos relatórios de acompanhamento).',
                            'en' => 'Number of people trained through online courses and participants in seminars and workshops related to implementation activities (participants must register in advance through dedicated forms, copies of which will be included in progress reports).',
                        ],
                        'progress' => 0,
                        'target' => 350,
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de reuniones de seguimiento del proyecto.',
                            'pt' => 'Nº de reuniões de acompanhamento do projeto.',
                            'en' => 'Number of project monitoring meetings.',
                        ],
                        'progress' => 0,
                        'target' => 5,
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de publicaciones científicas.',
                            'pt' => 'Nº de publicações científicas.',
                            'en' => 'Number of scientific publications.',
                        ],
                        'progress' => 0,
                        'target' => 3,
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de investigadores formados.',
                            'pt' => 'Nº de investigadores formados.',
                            'en' => 'Number of researchers trained.',
                        ],
                        'progress' => 0,
                        'target' => 5,
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de alumnos de primaria y secundaria sensibilizados.',
                            'pt' => 'Nº de alunos do ensino básico e secundário sensibilizados.',
                            'en' => 'Number of primary and secondary school students reached through awareness activities.',
                        ],
                        'progress' => 0,
                        'target' => 800,
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de estudios realizados.',
                            'pt' => 'Nº de estudos realizados.',
                            'en' => 'Number of studies carried out.',
                        ],
                        'progress' => 0,
                        'target' => 6,
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de nuevos contratos de investigadores.',
                            'pt' => 'Nº de novos contratos de investigadores.',
                            'en' => 'Number of new researcher contracts.',
                        ],
                        'progress' => 0,
                        'target' => 6,
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de indicadores de vulnerabilidad ante el cambio climático desarrollados.',
                            'pt' => 'Nº de indicadores de vulnerabilidade às alterações climáticas desenvolvidos.',
                            'en' => 'Number of climate change vulnerability indicators developed.',
                        ],
                        'progress' => 0,
                        'target' => 3,
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de soluciones basadas en la naturaleza implantadas en base a los resultados de este proyecto.',
                            'pt' => 'Nº de soluções baseadas na natureza implementadas com base nos resultados deste projeto.',
                            'en' => 'Number of nature-based solutions implemented based on the project results.',
                        ],
                        'progress' => 0,
                        'target' => 3,
                    ],
                ],
            ],

            [
                'title' => [
                    'es' => 'Indicadores de comunicación',
                    'pt' => 'Indicadores de comunicação',
                    'en' => 'Communication indicators',
                ],
                'goals' => [
                    [
                        'title' => [
                            'es' => 'Nº visitas a página web del proyecto.',
                            'pt' => 'Nº de visitas ao site do projeto.',
                            'en' => 'Number of visits to the project website.',
                        ],
                        'progress' => Visitor::count(),
                        'target' => 5000,
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de actos de difusión en los medios de comunicación.',
                            'pt' => 'Nº de eventos de divulgação nos meios de comunicação.',
                            'en' => 'Number of outreach events in the media.',
                        ],
                        'progress' => 0,
                        'target' => 15,
                    ],
                    [
                        'title' => [
                            'es' => 'Nº total de publicaciones realizadas.',
                            'pt' => 'Nº total de publicações realizadas.',
                            'en' => 'Total number of publications produced.',
                        ],
                        'progress' => 0,
                        'target' => 43,
                    ],
                    [
                        'title' => [
                            'es' => 'Nº publicaciones realizadas en redes sociales.',
                            'pt' => 'Nº de publicações realizadas nas redes sociais.',
                            'en' => 'Number of posts published on social media.',
                        ],
                        'progress' => 0,
                        'target' => 40,
                    ],
                    [
                        'title' => [
                            'es' => 'Nº publicaciones realizadas en formato físico.',
                            'pt' => 'Nº de publicações realizadas em formato físico.',
                            'en' => 'Number of publications produced in print format.',
                        ],
                        'progress' => 0,
                        'target' => 3,
                    ],
                    [
                        'title' => [
                            'es' => 'Nº de producciones audiovisuales.',
                            'pt' => 'Nº de produções audiovisuais.',
                            'en' => 'Number of audiovisual productions.',
                        ],
                        'progress' => 0,
                        'target' => 1,
                    ],
                    [
                        'title' => [
                            'es' => 'Nº eventos de comunicación realizados.',
                            'pt' => 'Nº de eventos de comunicação realizados.',
                            'en' => 'Number of communication events held.',
                        ],
                        'progress' => 0,
                        'target' => 10,
                    ],
                    [
                        'title' => [
                            'es' => 'Nº total de participantes en los eventos realizados.',
                            'pt' => 'Nº total de participantes nos eventos realizados.',
                            'en' => 'Total number of participants in the events held.',
                        ],
                        'progress' => 0,
                        'target' => 450,
                    ],
                    [
                        'title' => [
                            'es' => 'Nº total de mujeres en los eventos realizados.',
                            'pt' => 'Nº total de mulheres nos eventos realizados.',
                            'en' => 'Total number of women in the events held.',
                        ],
                        'progress' => 0,
                        'target' => 250,
                    ],
                    [
                        'title' => [
                            'es' => 'Nº total de participantes de los terceros países en los eventos realizados.',
                            'pt' => 'Nº total de participantes de países terceiros nos eventos realizados.',
                            'en' => 'Total number of participants from third countries in the events held.',
                        ],
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
