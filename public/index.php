<?php

/**
 * Xerophy - A Framework For PHP DEVELOPERS
 *
 * @package Xerophy
 * @auther MohamedKhX <>
 */

require_once __DIR__ . '\..\vendor\xerophy\framework\src\Support\helpers.php';

use Xerophy\Framework\Application\Application;

/*
 * -------- Auto Loader --------
 * */

require_once __DIR__ . '\..\vendor\autoload.php';



/**
 * -------- Get App Instance --------
 *
 * @var $app Application
 */

$app = require_once __DIR__ . '\..\App\app.php';


/*
 * -------- Register The Routes --------
 * */

require_once __DIR__ . '\..\routes\web.php';


/*
 * -------- Run The Application --------
 */

$app->bootup();
