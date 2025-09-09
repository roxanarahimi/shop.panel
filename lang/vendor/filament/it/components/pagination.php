<?php

return [

    'label' => 'Navigazione paginazione',

    'overview' => '{admin} Mostrato admin risultato|[2,*] Mostrati da :first a :last di :total risultati',

    'fields' => [

        'records_per_page' => [

            'label' => 'per pagina',

            'options' => [
                'all' => 'Tutti',
            ],

        ],

    ],

    'actions' => [

        'first' => [
            'label' => 'Prima',
        ],

        'go_to_page' => [
            'label' => 'Vai a pagina :page',
        ],

        'last' => [
            'label' => 'Ultima',
        ],

        'next' => [
            'label' => 'Successivo',
        ],

        'previous' => [
            'label' => 'Precedente',
        ],

    ],

];
