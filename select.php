<?php
    include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select SQL</title>
</head>
<body>
    
    <h2>Listar usuários</h2>
    
    <?php    

    $query_usuarios = "SELECT id, nome, email, senha, created, modified FROM usuarios";
    $result_usuarios = $conn -> prepare($query_usuarios);
    $result_usuarios -> execute();

    
    

    while($list_usuario = $result_usuarios -> fetch(PDO::FETCH_ASSOC)){
        
        /*
        echo "ID: ".$list_usuario['id']."<br>";
        echo "Nome: ".$list_usuario['nome']."<br>";
        echo "E-mail: ".$list_usuario['email']."<br>";
        echo "Senha: ".$list_usuario['senha']."<br>";
        echo "Cadastro: ".date('d/m/Y H:i:s',strtotime($list_usuario['created']))."<br>";        
        
        if(!empty($list_usuario['modified'])){
            echo "Editado: ".date('d/m/Y H:i:s',strtotime($list_usuario['modified']))."<br>"; 
        }else{
            echo "Editado: "."<br>";
        }

        echo '<hr>';
        */

        // Forma mais enxuta devido à instancia do PDO
        extract($list_usuario);
        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail $email <br>";
        echo "Senha $senha <br>";
        echo "Criado: ".date('d/m/Y H:i:s',strtotime($created))."<br>";

        if(!empty($modified)){
            echo "Editado: ". date('d/m/Y H:i:s',strtotime($modified)) ."<br>";
        }else{
            echo "Editado: <br>";
        }
        echo "<hr>";

    }

    ?>
    
</body>
</html>


