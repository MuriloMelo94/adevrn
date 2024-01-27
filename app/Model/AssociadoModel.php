<?php

class AssociadoModel
{
    public $id, $nome, $email, $cpf, $data_de_filiacao;
    public $rows;

    public function store()
    {
        $dao = new AssociadoDAO();

        $dao->insert($this);
    }

    public function edit()
    {
        $dao = new AssociadoDAO();

        $dao->update($this);
    }

    public function getAllRows()
    {
        $dao = new AssociadoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new AssociadoDAO();
        $obj = $dao->selectById($id);

        if($obj) {
            return $obj;
        } else {
            header("Location: /associado");
        }
    }

    public function destroy(int $id)
    {
        $dao = new AssociadoDAO();
        $dao->delete($id);

        header("Location: /associado");
    }

}