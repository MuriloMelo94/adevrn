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

    public function getAllRows()
    {
        include 'app/DAO/AssociadoDAO.php';

        $dao = new AssociadoDAO();

        $this->rows = $dao->select();
    }

}