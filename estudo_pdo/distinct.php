<?php
    include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISTINCT</title>
</head>
<body>

    <h2>Listar usuários (DISTINCT)</h2>

    <?php
        $query_acessos = "SELECT DISTINCT nome_aula,  usuario_id
                        FROM acessos
                        WHERE usuario_id = 5";
        $result_acessos = $conn -> prepare($query_acessos);
        $result_acessos -> execute();

        while($linhas_acessos = $result_acessos -> fetch(PDO::FETCH_ASSOC)){
            extract($linhas_acessos);
            
            
            echo"Nome da aula: $nome_aula <br>";
            echo"Id do usuario: $usuario_id <br>";
            echo"<hr>";

        };


    ?>
    
</body>
</html>