<?php
    session_start(); // inicia a sesão 
    ob_start(); // limpa os ultimo registo
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - Cadastrar</title>
</head>
<body>

    <a href="index.php">Listar</a>
    <br><br>
    
    <h1>Cadastrar Usuário</h1>
    <form action="" method="post">
        <label for="">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome" required><br>
        <label for="">E-mail: </label>
        <input type="email" name="E-mail" id="E-mail" placeholder="Digite teu E-mail" required><br>
        <input type="submit" value="Salvar" name="salvar">
    </form>

</body>
</html>
<?php
    /*Codigo para cadastrar*/
    require './Conn.php';
    require './User.php';

    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($formData['salvar'])) {
        // var_dump($formData);
        $insertUser = new User();
        $insertUser->formData = $formData;
        $VALOR = $insertUser->insert();
        if ($valor) {
            $_SESSION['msg'] = "<p style='color:green>
            Registro cadastrado com sucesso!</p>";
            header("Location: index.php");
        }else {
            $_SESSION['msg'] = "<p style='color: red>
            Ocorreu Erro!</p>";
        }

    }
?>