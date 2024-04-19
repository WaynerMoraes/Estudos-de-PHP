<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <?php
    
    include_once('./Cliente.php');
    include_once('./ClienteFisico.php');
    include_once('./ClienteEmpresa.php');

    $cliente = new Cliente;
    $cliente -> logradouro = "Rua paulo moreira da silva";
    $cliente -> bairro = "Taquara";
    echo $cliente -> verEndereco();
    echo "<hr>";


    $clienteFisico = new ClienteFisico;
    $clienteFisico -> logradouro = "Endereço 2";
    $clienteFisico -> bairro = "bairro 2";
    $clienteFisico -> nome = "Nome2";
    $clienteFisico -> cpf = 12345678912;
    echo $clienteFisico -> clienteFisico();
    echo "<hr>";

    $clientEmpresa = new ClienteEmpresa;
    $clientEmpresa -> logradouro = " Endereço 3";
    $clientEmpresa -> bairro = "Bairro 3";
    $clientEmpresa -> nomeFantasia = "Empresa 1";
    $clientEmpresa -> cnpj = 12345678912345687;
    echo $clientEmpresa -> clienteEmpresa();
    
    
    ?>
</body>
</html>