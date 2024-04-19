<?php 

include_once "./Conn.php";




class Usuarios{


    public $connect;

    public function listar(){


        $conn = new Conn();
        $this -> connect = $conn -> conectar();

        $query = "SELECT id, nome idade, email FROM usuarios2 ORDER BY id DESC";

        $resultQuery = $this -> connect -> prepare($query);

        $resultQuery -> execute();

        return $resultQuery -> fetchAll();

    }
}