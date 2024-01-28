<?php

namespace ADEVRN\App\Controller;

use ADEVRN\App\Model\AnuidadeModel;

class AnuidadeController extends Controller
{
    public static function index()
    {
        $title = 'Lista de Anuidades';

        $model = new AnuidadeModel();
        $model->getAllRows();

        parent::render('Anuidade/ListaAnuidade', $model, $title);
    }
    
    public static function form()
    {
        $title = 'Nova Anuidade';
        
        parent::render('Anuidade/FormAnuidade', '' ,$title);
    }

    public static function store()
    {
        $model = new AnuidadeModel();
        $model->ano = $_POST['ano'];
        $model->valor = $_POST['valor'];

        $model->store();

        header("Location: /anuidade");
    }

    public static function edit()
    {
        $model = new AnuidadeModel();
        $model = $model->getById( (int) $_GET['id']);

        $title = 'Editar Anuidade';
        
        parent::render('Anuidade/EditAnuidade', $model, $title);
    }

    public static function update()
    {
        $model = new AnuidadeModel();
        $model->id = $_POST['id'];
        $model->ano = $_POST['ano'];
        $model->valor = $_POST['valor'];

        $model->edit();

        header("Location: /anuidade");
    }

    public static function destroy()
    {
        $model = new AnuidadeModel();

        $model->destroy($_GET['id']);

        header("Location: /anuidade");
    }
    
}