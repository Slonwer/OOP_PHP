<?php
    class Cliente { // classe PAI
        public string $logradouro;
        public string $bairro;
        public string $estado;
        public string $cidade;
        public string $cep;

        public function verEndereco(): string{
            return "<p>Endereço: {$this->logradouro}<br> Bairro: {$this->bairro}
            <br> Cidade: {$this->cidade}<br> CEP: {$this->cep}<br> Estado: {$this->estado}</p>";
        }
    }
?>