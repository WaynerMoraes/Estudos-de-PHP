<?php
    include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AND e OR SQL</title>
</head>
<body>
    
    <h2>Listar usuários com condicional AND</h2>
    
    <?php    
        $query_ususarios = "SELECT id, nome, email, sitis_usuario_id, niveis_acesso_id 
                            FROM usuarios
                            WHERE sitis_usuario_id = 3
                            AND niveis_acesso_id = 1";
        $result_usuarios = $conn -> prepare($query_ususarios);
        $result_usuarios -> execute();

        

        

        while($linhas_usuarios = $result_usuarios -> fetch(PDO::FETCH_ASSOC)){            
            extract($linhas_usuarios);

            

            echo"ID: $id <br>";
            echo"Nome: $nome <br>";
            echo"E-mail: $email <br>";
            echo"Situação: $sitis_usuario_id <br>";
            echo"Nível de acesso: $niveis_acesso_id <br>";
            echo"<hr>";
        }


    

    ?>

    <h2>Listar usuários com condicional OR</h2>

    <?php
        $query_usuarios_b = "SELECT id, nome, email, sitis_usuario_id, niveis_acesso_id 
                            FROM usuarios 
                            WHERE sitis_usuario_id = 3 
                            OR niveis_acesso_id = 1
                            LIMIT 10";
        $result_query = $conn -> prepare($query_usuarios_b);
        $result_query -> execute();

        while($linhas_usuarios = $result_query -> fetch(PDO::FETCH_ASSOC)){
            extract($linhas_usuarios);

            echo"ID: $id <br>";
            echo"Nome: $nome <br>";
            echo"E-mail: $email <br>";
            echo"Situação: $sitis_usuario_id <br>";
            echo"Nível de acesso: $niveis_acesso_id <br>";
            echo"<hr>";

        };

    ?>
    
</body>
</html>


