<?php
    include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order By</title>
</head>
<body>

    <h2>Listar usuários (ORDER BY)</h2>

    <?php
        $query = "SELECT id, nome, email
                    FROM usuarios
                    ORDER BY id DESC";
        $result_query = $conn -> prepare($query);
        $result_query -> execute();

        while($linha_query = $result_query -> fetch(PDO::FETCH_ASSOC)){
            extract($linha_query);

            echo"ID: $id <br>";
            echo"Nome: $nome <br>";
            echo"E-mail: $email <br>";
            echo"<hr>";
        };
    
    ?>
    
</body>
</html>