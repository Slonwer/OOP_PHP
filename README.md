# OOP_PHP

![Image Description](https://c4.wallpaperflare.com/wallpaper/108/743/766/php-programming-life-success-wallpaper-preview.jpg)
  
##  OOP PHP METODO USANDO DURANTE O CURSO 



```codigo  php
 <?php
class user extends Conn {
   public object $conn;

   public array $formDate;

   public function list() :array {
    $this->conn = $this->conectar();
    $query = "SELECT u.* FROM usuarios u ORDER BY nome";
    $result = $this->conn->prepare($query);
    $result->execute();
    $retorno = $result->fetchAll();
    //var_dump($retorno);
    return $retorno;
}

public function insert() {
     $this->conn = $this->conectar();
     $query = "INSERT INTO  usuario  (nome, email, created) VALUE (:nome, :email, NOW ())";
     $result = $this->conn->prepare ($query);
     $result->execute();
     $add_user = $this->conn->prepare("");
     $add_user->bindParam(':nome', $this->formDate['nome']);
     $add_user->bindParam(':email', $this->formDate['email']);
     $add_user->execute();

     if ($result->rowCount()> 0) {
      return true;
     } else {
      return false;
      
     } 

     }
}
?>

```

Precisa Banco de dados 

##SQL 
```BANCO DE DADOS SQL


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `usuarios` (`id`, `nome`, `email`) VALUES
(1, 'Ricardo', 'rrsecco@hotmail.com'),
(2, 'Kelly', 'kelly@gmail.com.br'),
(3, 'Jessica', 'jessica@gmail.com.br'),
(4, 'Gabrielly', 'gabrielly@gmail.com.br'),
(5, 'Marcos', 'marcos@gmail.com.br');
COMMIT;


```

- **EXECICIO EM PHP PRECISA DO BANCO DE DADOS QUE VAI SER ESTÁ FEITO EM SW1
- 

