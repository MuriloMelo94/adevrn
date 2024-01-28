<?php

namespace ADEVRN\App\Model;

use ADEVRN\App\DAO\AssociadoDAO;

class AssociadoModel extends Model
{
    public $id, $nome, $email, $cpf, $data_de_filiacao;
    public $statusPagamento = [];

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
        $this->defineStatusPagamento($this->rows);
    }

    public function defineStatusPagamento(array $rows)
    {
        $dao = new AssociadoDAO();

        $listaStatusPagamento = $dao->verificaPagamentosEmDia();

        foreach($rows as $objAssociado){
            foreach($listaStatusPagamento as $listaPagamento){
                if($objAssociado->id == $listaPagamento['associado_id']){
                    if($listaPagamento['status_pagamento'] == true){
                        array_push($this->statusPagamento, [$objAssociado->id, true]);
                    } else {
                        array_push($this->statusPagamento, [$objAssociado->id, false]);
                    }
                }
            }
        }
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