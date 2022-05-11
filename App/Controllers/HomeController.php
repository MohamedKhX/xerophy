<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $this->render('index.html.twig');
    }
}