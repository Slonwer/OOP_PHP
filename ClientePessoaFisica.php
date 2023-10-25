<?php
    class ClientePessoaFisica extends Cliente {// herança/extends
        public string $nome;
        public string $cpf;

        public  function verInformacaoUsuario(): string {
            $dados = "Endereço da pessoa física<br>";
            $dados = "Endereço: {$this->logradouro}<br>";
            $dados = "Bairro: {$this->bairro}<br>";
            $dados = "Cidade: {$this->cidade}<br>";
            $dados = "CEP: {$this->cep}<br>";
            $dados = "Estado: {$this->estado}<br>";
            $dados = "Nome: {$this->nome}<br>";
            $dados = "CPF: {$this->cpf}<br>";
            return "<p>$dados</p>";
        }
    }
?>