<?php

namespace ADEVRN\App\DAO;

use \PDO;

abstract class DAO
{
    protected $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=adev-rn";

        $this->conexao = new PDO($dsn, 'root', '');
    }

}