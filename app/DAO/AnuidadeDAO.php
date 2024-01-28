<?php

namespace ADEVRN\App\DAO;

use ADEVRN\App\Model\AnuidadeModel;
use \PDO;

class AnuidadeDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(AnuidadeModel $model)
    {
        $sql = "INSERT INTO anuidades (ano, valor) VALUES (?, ?) ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->ano);
        $stmt->bindValue(2, $model->valor);

        $stmt->execute();

        return $this->conexao->lastInsertId();

    }

    public function update(AnuidadeModel $model)
    {
        $sql = "UPDATE anuidades SET ano=?, valor=? WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->ano);
        $stmt->bindValue(2, $model->valor);
        $stmt->bindValue(3, $model->id);

        $stmt->execute();
    }
    
    public function select()
    {
        $sql = "SELECT * FROM anuidades ORDER BY ano ASC";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM anuidades WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("adevrn\app\Model\AnuidadeModel");

    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM anuidades WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public function insertDebitoAnuidades(int $anuidadeId, int $associadoId)
    {
        $sql = "INSERT INTO anuidades_associados (anuidade_id, associado_id) VALUES (?, ?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $anuidadeId);
        $stmt->bindValue(2, $associadoId);

        $stmt->execute();
    }

}