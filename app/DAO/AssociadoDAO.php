<?php

class AssociadoDAO
{

    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=adev-rn";

        $this->conexao = new PDO($dsn, 'root', '');
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
        
    }
    
    public function select()
    {
        $sql = "SELECT * FROM associados ORDER BY nome ASC";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

}