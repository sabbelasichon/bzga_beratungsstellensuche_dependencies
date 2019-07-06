<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Beratungsstellensuche Dependencies',
    'description' => 'Dependencies for Beratungsstellensuche der BZgA',
    'category' => 'plugin',
    'author' => 'Sebastian Schreiber',
    'author_email' => 'ssch@hauptweg-nebenwege.de',
    'author_company' => 'Hauptweg Nebenwege GmbH',
    'state' => 'beta',
    'clearCacheOnLoad' => 1,
    'version' => '8.7.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.13-8.7.99',
        ],
        'conflicts' => [],
    ],
    'autoload' => [
    ],
    'autoload-dev' => [
    ],
];
