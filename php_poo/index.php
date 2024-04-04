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

        include_once("./metodo_atributo.php");


        $dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);     

        $obj = new Usuario();


        if(!empty($dados['enviar'])){

            $nome = $obj -> nome = $dados['nome'];
            $idade = $obj -> idade = $dados['idade'];
            $email = $obj -> email = $dados['email'];

            echo $obj -> cadastrar($nome, $idade, $email);

            unset($dados);



        }

        echo "<hr>";
        var_dump($dados['nome']);


             

    
    ?>
</body>
</html>