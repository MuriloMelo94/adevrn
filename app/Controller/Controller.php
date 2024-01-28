<?php

namespace ADEVRN\App\Controller;

abstract class Controller
{
    protected static function render($view, $model = NULL, $titlePagina = NULL)
    {
        $arquivoView = "app/View/Modules/$view.php";
        $title = $titlePagina;

        if (file_exists($arquivoView)){
            include $arquivoView;
        } else {
            exit ("Arquivo da View não encontrado. Arquivo: " . $view);
        }
    }
}