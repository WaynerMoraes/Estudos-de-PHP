<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>

    <form action="" method="post">

        <label for="">Nome</label>
        <input type="text" name="nome" placeholder="Digite seu nome"><br><br>

        <label for="">Idade</label>
        <input type="number" name="idade" placeholder="Digite sua idade"><br><br>

        <label for="">E-mail</label>
        <input type="email" name="email" placeholder="Digite seu E-mail"><br><br>

        <input type="submit" name="enviar">




    </form>




    <?php       

        include_once("./Usuarios.php");
        include_once("./Inserir_usuarios.php");

        $listarUsuario = new Usuarios;
        $resultUsuario = $listarUsuario -> listar();

        
        foreach($resultUsuario as $queryrows){

            extract($queryrows);
            var_dump($queryrows);
            


        }

        $cadastrar_usuarios = new Inserir_usuarios();
        $cadastrar_usuarios -> dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $cadastrar_usuarios -> cadastrar()
       


        
             

    
    ?>
</body>
</html>