<?php

spl_autoload_register(function ($nomeClasse) {

    include '../' . $nomeClasse . '.php';
    
});