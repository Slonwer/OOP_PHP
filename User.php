<?php
    class User extends Conn {
        // Atributos da classe
        public object $conn;
        public array $formData;

        public function list():array {
            $this->conn = $this->conectar(); // conectei com a classe Conn
            $query = "SELECT u.* FROM usuarios u ORDER BY nome"; // Fiz o meu comando SQL
            $result = $this->conn->prepare($query); // Preparei para enviar ao bnaco de dados
            $result->execute();
            $retorno = $result->fetchAll();
            return $retorno;
        }
        
        public function insert():bool {
            $this->conn = $this->conectar();
            $query = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
            $result = $this->conn->prepare($query);
            $result->bindParam(':nome', $this->formData['nome']);
            $result->bindParam(':email', $this->formData['email']);
            $result->execute();
            
            if ($result->rowCount()> 0) {
                return true;
            } else {
                return false;
            }
        }
    }
?>