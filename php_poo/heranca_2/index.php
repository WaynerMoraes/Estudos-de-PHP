<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        include_once("./Cadastro.php");
        include_once("./Aluno.php");
        include_once("./Professor.php");

        $cadastro = new Cadastro;
        $nome = $cadastro -> nome = "Wayner";
        $idade = $cadastro -> idade = "28";
        $sexo = $cadastro -> sexo = "Masculino";
   
        echo $cadastro ->mostrarCadastro();

        echo "<hr>";



        $cadastroAluno = new Aluno;

        $nome = $cadastroAluno -> nome = "Pedro";
        $idade = $cadastroAluno -> idade =  "22";
        $periodo = $cadastroAluno -> periodo = "4º";
        $turno = $cadastroAluno -> turno = "Manhã";
        $curso = $cadastroAluno -> curso = "Matemática";

        echo $cadastroAluno -> verAluno();

        echo "<hr>";

        $cadastroProfessor = new Professor;


        $nome = $cadastroProfessor -> nome = "João";
        $idade = $cadastroProfessor -> idade = "48";
        $disciplina = $cadastroProfessor -> disciplina = "Calculo Numérico";
        $turno = $cadastroProfessor -> turno = "Noite";

        echo $cadastroProfessor -> verProfessor();

        
       
        
    
    
    ?>
</body>
</html>