<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Listar</title>
</head>
<body>
    
    <a href="caduser.php">Cadastrar</a>
    <h1>Lista de Usuarios</h1>
    <?php
    if(isset($_SESSION['msg'])){ // pergunta se tem valor da sesão
 echo  $_SESSION['msg']; // exibe a sessão
 unset($_SESSION  ['msg']); // mata a sesão
    }
            require './Conn.php';
            require './User.php';
    
            $User = new User();
            $result = $list->list();
    
            foreach ($result as $row) {
                extract($row);
                // PHP <= 7
                echo "ID: " . $row['id']. "<br>";
                echo "Nome: " . $row['nome'] . "<br>";
                echo "E-mail: " . $row['email'] . "<br>";
                echo "<hr>";
            }

    
    
        // require './Conn.php';
        // require './ListUsers.php';

        // $list = new ListUsers();
        // $result = $listUsers->list();

        // foreach ($result as $row){
        //     extract($row);
        //     // PHP <= 7
        //     echo "ID: " . $row['id']. "<br>";
        //     echo "Nome: " . $row['nome'] . "<br>";
        //     echo "E-mail: " . $row['email' . "<br>"];
        //     echo "<hr>";

        //     // echo "Nome: $nome <br>";
        //     // echo "E-mail: $email <br>";
        //     // echo "<hr>;"

        //     /*PHP 8*/
        //     // echo "ID: $id $dbname $<br>"; 
        // }


    ?>
</body>
</html>
