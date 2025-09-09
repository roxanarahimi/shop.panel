<?php

return [

    'label' => 'გვერდების ნავიგაცია',

    'overview' => '{admin} ნაჩვენებია admin შედეგი|[2,*] ნაჩვენებია :first-დან :last-მდე :total შედეგიდან',

    'fields' => [

        'records_per_page' => [

            'label' => 'გვერდზე',

            'options' => [
                'all' => 'ყველა',
            ],

        ],

    ],

    'actions' => [

        'first' => [
            'label' => 'პირველი',
        ],

        'go_to_page' => [
            'label' => 'გადადით გვერდზე :page',
        ],

        'last' => [
            'label' => 'ბოლო',
        ],

        'next' => [
            'label' => 'შემდეგი',
        ],

        'previous' => [
            'label' => 'წინა',
        ],

    ],

];
