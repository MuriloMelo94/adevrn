<?php

namespace ADEVRN\App\DAO;

use ADEVRN\App\Model\AssociadoModel;
use \PDO;

class AssociadoDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(AssociadoModel $model)
    {
        $sql = "INSERT INTO associados (nome, email, CPF, data_de_filiacao) VALUES (?, ?, ?, ?) ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->cpf);
        $stmt->bindValue(4, $model->data_de_filiacao);

        $stmt->execute();

    }

    public function update(AssociadoModel $model)
    {
        $sql = "UPDATE associados SET nome=?, email=?, CPF=?, data_de_filiacao=? WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->cpf);
        $stmt->bindValue(4, $model->data_de_filiacao);
        $stmt->bindValue(5, $model->id);

        $stmt->execute();
    }
    
    public function select()
    {
        $sql = "SELECT * FROM associados ORDER BY nome ASC";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    Public function verificaPagamentosEmDia()
    {
        $sql = "SELECT * FROM anuidades_associados";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM associados WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("adevrn\app\Model\AssociadoModel");

    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM associados WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

}