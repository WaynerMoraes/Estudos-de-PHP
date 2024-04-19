<?php


class Conn{

    public $host = "localhost";
    public $dbname = "usuarios";
    public $user = "root";
    public $pass = "";
    public $port = 3306;
    public $connect = null;

    public function conectar(){

        try{

            $this->connect = new PDO("mysql:host=".$this->host.";port=".$this->port.";dbname=".$this->dbname, $this->user, $this->pass);

            echo "Conexão realizada com sucesso!";

            return $this -> connect;

        }catch(Exception $err){

            echo "Falha na conexão";
            echo "<hr>";

            return $err -> getMessage();

        }

    }






}

