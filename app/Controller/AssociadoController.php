<?php

class AssociadoController
{
    public static function index()
    {
        include 'app/view/modules/associado/ListaAssociado.php';
    }
    
    public static function form()
    {
        include 'app/view/modules/associado/FormAssociado.php';
    }
}