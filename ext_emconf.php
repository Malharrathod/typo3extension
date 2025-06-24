<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Typo3 Extension',
    'description' => 'Typo3 Demo extension',
    'category' => 'plugin',
    'author' => 'Malhar Rathod',
    'author_email' => 'rathodm1996@gmail.com',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
