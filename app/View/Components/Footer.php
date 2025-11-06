<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $partners = [
            [
                'title' => [
                    'es' => 'CANARIAS',
                    'pt' => 'CANÁRIAS',
                    'en' => 'CANARY ISLANDS',
                ],
                'location' => 'Avda. Francisco La Roche, nº 35 Edf. Servicios Múltiples I Planta 11ª Santa Cruz de Tenerife 38071 Tenerife',
            ], [
                'title' => [
                    'es' => 'AZORES',
                    'pt' => 'AÇORES',
                    'en' => 'AZORES',
                ],
                'location' => 'Avenida Antero de Quental, n.º 9 C - 3º andar, 9500-160 Ponta Delgada',
            ], [
                'title' => [
                    'es' => 'MADEIRA',
                    'pt' => 'MADEIRA',
                    'en' => 'MADEIRA',
                ],
                'location' => 'Rua Dr. Pestana Júnior N.º 6 - 5 º andar - 9064-506',
            ], [
                'title' => [
                    'es' => 'CABO VERDE',
                    'pt' => 'CABO VERDE',
                    'en' => 'CAPE VERDE',
                ],
                'location' => 'Edificio do Ministério das Infraestruturas Ponta Belém, CP -114, Plateau, Ciudad Praia',
            ], [
                'title' => [
                    'es' => 'SANTO TOMÉ Y PRÍNCIPE',
                    'pt' => 'SÃO TOMÉ E PRÍNCIPE',
                    'en' => 'SÃO TOMÉ AND PRÍNCIPE',
                ],
                'location' => 'Edifício do SAAR SEGUROS 2º Andar - Avenida Amílcar Cabral, Caixa Postal nº 1023',
            ], [
                'title' => [
                    'es' => 'GHANA',
                    'pt' => 'GANA',
                    'en' => 'GHANA',
                ],
                'location' => 'HR22+HVQ, Starlets 91 Rd, Accra',
            ],
        ];

        return view('components.footer', ['partners' => $partners]);
    }
}
