<?php

require_once 'vendor/autoload.php';

$app = require_once __DIR__ . '\App\app.php';

$commander = new \Xerophy\Framework\Console\Commander($app);

$console = $commander->createConsole();

$console->run();