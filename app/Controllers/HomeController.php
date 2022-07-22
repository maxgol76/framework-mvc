<?php

namespace App\Controllers;

use App\Views\View;

class HomeController extends Controller
{
    public function actionIndex()
    {
        View::render('home');
    }
}
