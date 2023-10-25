<?php
class Conn{
    public $host ="localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "site";
    public $port = 3306;
    public $conn = null;


 public function conectar (){
    // conexão sem porta 
    try{
        $this->conn = new PDO("mysql:host=". $this->host .";dbname=". $this->dbname, $this->user,  $this->pass);
        return $this->conn;
    }catch (Exception $err){
        echo "Erro:conexão não realizada com sucesso!Erro gerado:". $err;
        return false;
    }

 }
     
}


?>