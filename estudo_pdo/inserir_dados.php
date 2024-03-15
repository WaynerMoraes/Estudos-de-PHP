<?php 
    include_once("conexao.php");



    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);       


        if(!empty($dados['enviar'])){

            if(!$dados['nome'] && !$dados['email'] && !$dados['senha'] && !$dados['sit_usuario'] && $dados['nivel_acesso']){

                echo "Preencher todos os campos do formulário";

            }else{

                try{     

                    $inserir_dados = "INSERT INTO usuarios (nome, email, senha, sists_usuario_id, niveis_acesso_id, created) 
                                    VALUES (:nome, :email, :senha, :sit_usuario, :nivel_acesso, NOW())";

                    $cadastrar = $conn -> prepare($inserir_dados);

                    $cadastrar -> bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
                    $cadastrar -> bindParam(':email', $dados['email'], PDO::PARAM_STR);

                    $cripto_senha = password_hash($dados['senha'],PASSWORD_DEFAULT);
                    $cadastrar -> bindParam(':senha', $cripto_senha, PDO::PARAM_STR);


                    $cadastrar -> bindParam(':sit_usuario', $dados['sit_usuario'], PDO::PARAM_INT);
                    $cadastrar -> bindParam(':nivel_acesso', $dados['nivel_acesso'], PDO::PARAM_INT);
                    $cadastrar -> execute();


                    if($cadastrar -> rowCount()){

                        echo("Cadastro realizado com sucesso");
                        unset($dados);

                    }else{
                        echo("Cadastro não realizado realizado");

                    }                                      

                }catch(PDOException $err){

                    echo "Erro: " . $err -> getMessage();

                }
            }

        }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir dados</title>
</head>
<body>

      

    <form action="" method="post">
        <label for="">Nome</label>
        <input type="text" name="nome" value="<?empty($dados['nome']) ?  "": print($dados['nome'])?>"> <br><br>

        <label for="">E-mail</label>
        <input type="email" name="email" value="<?empty($dados['email']) ? "" : print($dados['email'])?>"><br><br>

        <label for="">Senha</label>
        <input type="password" name="senha"><br><br>

        <label for="">Situação Usuario</label>
        <input type="number" name="sit_usuario"><br><br>

        <label for="">Nivel de acesso</label>
        <input type="number" name="nivel_acesso"><br><br>

        <input type="submit" name="enviar">

    </form>

    
</body>
</html>



