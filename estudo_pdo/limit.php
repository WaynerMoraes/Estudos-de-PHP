<?php 
    include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIMIT E OFFSET</title>
</head>
<body>

    <h2>Listar Usuários com LIMIT</h2>
    <?php       

        $query_usuarios = "SELECT id, nome, email FROM usuarios LIMIT 3";
        $result_usuarios = $conn -> prepare($query_usuarios);
        $result_usuarios -> execute();
    
        
        
    
        while($list_usuario = $result_usuarios -> fetch(PDO::FETCH_ASSOC)){           
                
            // Forma mais enxuta devido à instancia do PDO
            extract($list_usuario);
            echo "ID: $id <br>";
            echo "Nome: $nome <br>";
            echo "E-mail $email <br>";
            echo"<hr>";            
    
        }  
    
    
    
    
    ?>

    <h2>Listar Usuários com LIMIT</h2>

    <?php
        $query_usuarios = "SELECT id, nome, email FROM usuarios LIMIT 10 OFFSET 20";
        $result_usuarios = $conn -> prepare($query_usuarios);
        $result_usuarios -> execute();

        while($list_usuario = $result_usuarios -> fetch(PDO::FETCH_ASSOC)){

            extract($list_usuario);

            echo "ID : $id <br>";
            echo "Nome : $nome <br>";
            echo "E-mail : $email <br>";
            echo "<hr>";
        }

    
    ?>
    
    
</body>
</html>


