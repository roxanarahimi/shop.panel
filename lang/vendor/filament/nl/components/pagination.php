<?php

return [

    'label' => 'Paginering navigatie',

    'overview' => '{admin} Toont admin resultaat|[2,*] Toont :first tot :last van :total resultaten',

    'fields' => [

        'records_per_page' => [

            'label' => 'Per pagina',

            'options' => [
                'all' => 'Alles',
            ],

        ],

    ],

    'actions' => [

        'first' => [
            'label' => 'Eerste',
        ],

        'go_to_page' => [
            'label' => 'Ga naar pagina :page',
        ],

        'last' => [
            'label' => 'Laatste',
        ],

        'next' => [
            'label' => 'Volgende',
        ],

        'previous' => [
            'label' => 'Vorige',
        ],

    ],

];
