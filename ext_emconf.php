<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Aww2025',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Rasani\\Aww2025\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Tobias Sturzbecher',
    'author_email' => 'tobias.sturzbecher@rasani.de',
    'author_company' => 'Rasani',
    'version' => '1.0.0',
];
