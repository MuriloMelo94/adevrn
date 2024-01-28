<?php

namespace ADEVRN\App\Model;

use ADEVRN\App\DAO\AnuidadeDAO;

class AnuidadeModel extends Model
{
    public $id, $ano, $valor;

    public function store()
    {
        $dao = new AnuidadeDAO();

        $dao->insert($this);
    }

    public function edit()
    {
        $dao = new AnuidadeDAO();

        $dao->update($this);
    }

    public function getAllRows()
    {
        $dao = new AnuidadeDAO();

        $this->rows = $dao->select();
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

}