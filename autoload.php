<?php

spl_autoload_register(function ($nomeClasse) {

    $classeController = "app/Controller/" . $nomeClasse . ".php";
    $classeModel = "app/Model/" . $nomeClasse . ".php";
    $classeDAO = "app/DAO/" . $nomeClasse . ".php";

    if(file_exists($classeController)){

        include $classeController;
    
    } else if (file_exists($classeModel)) {

        include $classeModel;

    } else if (file_exists($classeDAO)) {

        include $classeDAO;

    }
});