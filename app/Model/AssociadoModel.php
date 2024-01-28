<?php

namespace ADEVRN\App\Model;

use ADEVRN\App\DAO\AssociadoDAO;
use ADEVRN\App\Model\AnuidadeModel;

class AssociadoModel extends Model
{
    public $id, $nome, $email, $cpf, $data_de_filiacao;
    public $statusPagamento = [];

    public function store()
    {
        $dao = new AssociadoDAO();

        $idUltimoCadastro = $dao->insert($this);

        $this->verificaAnuidades($idUltimoCadastro);
    }

    public function verificaAnuidades(int $id)
    {
        
        $objAssociado = $this->getById($id);
        $anoAssociado = date("Y", strtotime($objAssociado->data_de_filiacao));
        
        $modelAnuidade = new AnuidadeModel();

        $rowsAnuidades = $modelAnuidade->getAllRows();
        foreach($rowsAnuidades as $anuidade){
            if((date("Y", strtotime($anuidade->ano))) >= $anoAssociado){
                $modelAnuidade->debitaAnuidades($anuidade->id, $objAssociado->id);
            }
        }

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
        
        return $this->rows;
    }

    public function defineStatusPagamento(array $rows)
    {
        $dao = new AssociadoDAO();

        $listaStatusPagamento = $dao->verificaPagamentosEmDia();

        foreach($rows as $objAssociado){
            $i = 0;
            foreach($listaStatusPagamento as $listaPagamento){
                if($objAssociado->id == $listaPagamento['associado_id'] && $listaPagamento['status_pagamento'] == false){
                    $i++;
                }
            }
            array_push($this->statusPagamento, [$objAssociado->id, $i]);
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