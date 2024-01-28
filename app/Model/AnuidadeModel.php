<?php

namespace ADEVRN\App\Model;

use ADEVRN\App\DAO\AnuidadeDAO;
use ADEVRN\App\Model\AssociadoModel;

class AnuidadeModel extends Model
{
    public $id, $ano, $valor;

    public function store()
    {
        $dao = new AnuidadeDAO();

        $idUltimoCadastro = $dao->insert($this);

        $this->verificaAnuidades($idUltimoCadastro);
    }

    public function verificaAnuidades(int $id)
    {
        $objAnuidade = $this->getById($id);
        
        $modelAssociado = new AssociadoModel();
        $rowsAssociados = $modelAssociado->getAllRows();

        foreach($rowsAssociados as $associado){
            $this->debitaAnuidades($objAnuidade->id, $associado->id);
        }

    }

    public function edit()
    {
        $dao = new AnuidadeDAO();

        $dao->update($this);
    }

    public function getAllRows()
    {
        $dao = new AnuidadeDAO();

        return $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new AnuidadeDAO();
        $obj = $dao->selectById($id);

        if($obj) {
            return $obj;
        } else {
            header("Location: /anuidade");
        }
    }

    public function destroy(int $id)
    {
        $dao = new AnuidadeDAO();
        $dao->delete($id);

        header("Location: /anuidade");
    }

    public function debitaAnuidades(int $anuidadeId, int $associadoId)
    {
        $dao = new AnuidadeDAO();

        $dao->insertDebitoAnuidades($anuidadeId, $associadoId);
    }

}