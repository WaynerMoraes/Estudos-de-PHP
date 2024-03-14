<?php
    include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Where</title>
</head>
<body>
    <h2>Listar usuários com WHERE listando por ID</h2>
    
    <?php
        $query_usuarios = "SELECT id, nome, email 
                            FROM usuarios 
                            WHERE id = 5";
        $result_usuarios = $conn -> prepare($query_usuarios);
        $result_usuarios -> execute();

        $list_usuario = $result_usuarios -> fetch(PDO::FETCH_ASSOC);

        //print_r($list_usuario);

        extract($list_usuario);
        echo "ID: $id <br>";
        echo "nome: $nome <br>";
        echo "E-mail: $email <br>";        

    ?>

    <hr>

    <h2>Listar usuários com WHERE sisuação do usuário ID</h2>

    <?php
        $query_usuarios_b = "SELECT id, nome, email 
                                FROM usuarios
                                WHERE sitis_usuario_id = 1";

        $result_usuarios_b = $conn -> prepare($query_usuarios_b);
        $result_usuarios_b -> execute();

        while($list_usuario_b = $result_usuarios_b -> fetch(PDO::FETCH_ASSOC)){
            extract($list_usuario_b);

            echo "ID: $id <br>";            
            echo "Nome: $nome <br>";
            echo "E-mail: $email <br>";
            echo "<br>";
        }


        //CURRENT_DATE
        //ALTER TABLE usuarios ADD nivel_acesso_id INT NOT NULL DEFAULT 3 AFTER sits_usuario_id;

        //ALTER TABLE usuarios ADD FOREIGN KEY(niveis_acesso_id)REFERENCES niveis_acesso(id);

    ?>
    
</body>
</html>