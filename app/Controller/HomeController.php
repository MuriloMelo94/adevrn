<?php

namespace ADEVRN\App\Controller;

class HomeController extends Controller
{
    public static function index()
    {
        $title = 'Home';

        parent::render('home/Home');
    }
    
}