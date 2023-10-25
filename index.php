<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require './Conta.php'; //chamando o arquivo
    require './ContaCorrente.php'; //chamando o arquivo
    require './ContaPoupanca.php'; //chamando o arquivo

    $contaCorrente = new ContaCorrente("João", 1234, "CC123", 1000, 500);
    $contaPoupanca = new ContaPoupanca("Maria", 5678, "CP456", 2000, 1);

    echo "Dados da Conta Corrente:<br>";
    echo $contaCorrente->exiberDados() . "<br>";
    echo $contaCorrente->sacar(800) . "<br>";
    echo "<br>";

    echo "Dados da Conta Poupança:<br>";
    echo $contaPoupanca->exiberDados() . "<br>";
    echo $contaPoupanca->sacar(1500) . "<br>"
    ?>
</body>
</html>