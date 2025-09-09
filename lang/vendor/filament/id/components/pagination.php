<?php

return [

    'label' => 'Navigasi halaman',

    'overview' => '{admin} Menampilkan admin hasil|[2,*] Menampilkan :first sampai :last dari :total hasil',

    'fields' => [

        'records_per_page' => [

            'label' => 'per halaman',

            'options' => [
                'all' => 'Semua',
            ],

        ],

    ],

    'actions' => [

        'first' => [
            'label' => 'Pertama',
        ],

        'go_to_page' => [
            'label' => 'Ke halaman :page',
        ],

        'last' => [
            'label' => 'Terakhir',
        ],

        'next' => [
            'label' => 'Selanjutnya',
        ],

        'previous' => [
            'label' => 'Sebelumnya',
        ],

    ],

];
