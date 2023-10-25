<?php
    class ListUsers extends Conn {
        public object $conn;

        public function list():array {
            $this->conn = $this->conectar(); // conectei com a classe Conn
            $query = "SELECT u.* FROM usuarios u ORDER BY nome"; // Fiz o meu comando SQL
            $result = $this->conn->prepare($query); // Preparei para enviar ao bnaco de dados
            $result->execute(); // Agora vou executar
            $retorno = $result->fetchAll(); // Esperando o retorno, ao usar fetchALL tras tudo
            // var_dump($retorno);
            return $retorno;
        }
    }
?>