<?php

return [

    'label' => 'Paginação',

    'overview' => '{admin} A mostrar admin resultado|[2,*] A mostrar :first a :last de :total resultados',

    'fields' => [

        'records_per_page' => [

            'label' => 'Por página',

            'options' => [
                'all' => 'Todos',
            ],

        ],

    ],

    'actions' => [

        'first' => [
            'label' => 'Primeira',
        ],

        'go_to_page' => [
            'label' => 'Ir para a página :page',
        ],

        'last' => [
            'label' => 'Última',
        ],

        'next' => [
            'label' => 'Próxima',
        ],

        'previous' => [
            'label' => 'Anterior',
        ],

    ],

];
