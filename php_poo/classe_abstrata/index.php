<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais</title>
</head>
<body>
    <?php
    
        require_once("./Caracteristica.php");

        $especieCachorro = new Caracteristica("Mamifero", "Urbano", "RND");
        $msg = $especieCachorro->mostrarCaracteristica("Médio", "Marrom");

       
        
        foreach($msg as $c => $v)
        {
            echo "{$c} - {$v} <br>";
        }

        echo "<hr>";

    
        $especieCobra = new Caracteristica("Reptil", "Selva", "Jibóia");
        $msg = $especieCobra -> mostrarCaracteristica("Grande", "Verde");

        foreach($msg as $c => $v)
        {
            echo "{$c} - {$v} <br>";
        }

        echo "<hr>";

        $especieAve = new Caracteristica("Ave", "Selva", "Águia");
        $msg = $especieAve -> mostrarCaracteristica("Grande", "Cinza");

        foreach($msg as $c => $v)
        {
            echo "{$c} - {$v} <br>";
        }

    
    ?>
</body>
</html>