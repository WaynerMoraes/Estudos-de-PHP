<?php


class Conn{
    public $host = "localhost";
    public $dbname = "usuarios";
    public $user = "root";
    public $pass = "";
    public $port = 3306;

    public function conectar(){

        try{

        new PDO("mysql:host=".$this->host.";port=".$this->port.";dbname=".$this->dbname, $this->user, $this->pass);

        return "Conexão realizada com sucesso!";

        }catch(Exception $err){

            echo "Falha na conexão";
            echo "<hr>";

            return $err -> getMessage();

        }

    }






}

$conn = new Conn();

echo $conn -> conectar();