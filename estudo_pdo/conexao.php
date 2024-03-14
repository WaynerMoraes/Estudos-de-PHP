<?php

    $host = "localhost";
    $port = 3306;
    $user = "root";
    $pass = "";
    $dbname = "wayner";

    try {

        $conn = new PDO("mysql:host=$host;port=$port;dbname=". $dbname, $user, $pass);

        //var_dump($conn);

        echo"Conexão realizada com sucesso!";

    }catch(PDOException $e) {


        /*echo "Erro de conexão com o banco de dados!</br> Erro:".*/  $e->getMessage();

    }

    

    ?>