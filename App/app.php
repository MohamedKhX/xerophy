<?php

/*
 * -------- Create The Application --------
 */

$foldersPath = [
    'Controllers'   => __DIR__ . '\Controllers',
    'Models'        => __DIR__ . '\Models',
    'Views'         => __DIR__ . '\..\resources\views',
    'Env'           => __DIR__ . '\..\.env',
    '404-page'      => '404.html.twig'
];


$app = new \Xerophy\Framework\Application\Application(
    __DIR__,
    $foldersPath
);

/*
 * -------- Return The Application Instance --------
 */

return $app;