<?php

use Xerophy\Framework\Application\Application;
use Xerophy\Framework\Routing\Router;


/**.
 *
 * -------- Get the router from the application --------
 *
 * @var $router Router
 * @var $app Application
 * */
$router = $app->getRouter();

/**
 * -------- Start register your routes here (: --------
 */

$router->view('/', 'index.html.twig');

