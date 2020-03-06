<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Authorized Previews',
    'description' => 'Generate URLs that grant access to hidden languages without a backend login',
    'category' => 'be',
    'state' => 'stable',
    'uploadfolder' => 0,
    'clearCacheOnLoad' => 0,
    'author' => 'Daniel Goerz',
    'author_email' => 'daniel.goerz@b13.com',
    'author_company' => 'b13 GmbH',
    'version' => '1.2.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
