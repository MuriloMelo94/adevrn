<?php

class AssociadoModel
{
    public $id, $nome, $email, $cpf, $data_de_filiacao;
    public $rows;

    public function store()
    {
        include 'app/DAO/AssociadoDAO.php';

        $dao = new AssociadoDAO();

        $dao->insert($this);
    }

    public function edit()
    {
        include 'app/DAO/AssociadoDAO.php';

        $dao = new AssociadoDAO();

        $dao->update($this);
    }

    public function getAllRows()
    {
        include 'app/DAO/AssociadoDAO.php';

        $dao = new AssociadoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'app/DAO/AssociadoDAO.php';

        $dao = new AssociadoDAO();
        $obj = $dao->selectById($id);

        if($obj) {
            return $obj;
        } else {
            header("Location: /associado");
        }
    }

}