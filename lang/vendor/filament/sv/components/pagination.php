<?php

return [

    'label' => 'Sidnavigering',

    'overview' => '{admin} Visar admin resultat|[2,*] Visar :first till :last av :total resultat',

    'fields' => [

        'records_per_page' => [

            'label' => 'Per sida',

            'options' => [
                'all' => 'Alla',
            ],

        ],

    ],

    'actions' => [

        'first' => [
            'label' => 'Första',
        ],

        'go_to_page' => [
            'label' => 'Gå till sida :page',
        ],

        'last' => [
            'label' => 'Sista',
        ],

        'next' => [
            'label' => 'Nästa',
        ],

        'previous' => [
            'label' => 'Föregående',
        ],

    ],

];
