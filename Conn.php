<?php
class Conn {
    public string $db = "mysql";
    public string $host = "localhost";
    public string $user = "root";
    public string $pass = "";
    public string $dbname = "Sw1";
    public $port = 3306;
    public object $connect;

    public function conectar() {
        try {
            $this->connect = new PDO($this->db . ':host=' . 
            $this->host . ';dbname=' . $this->dbname, $this->user, 
            $this->pass);
            
            // echo "Conexão realizada com sucesso!";
            return $this->connect;
        } catch (Exception $err) {
            echo "Erro: Conexão não realizada com sucesso! Erro gerado: " . $err;
            return false;
        }
    }
}