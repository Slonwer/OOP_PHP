<?php
    /**
     * Summary of ClientePessoaJuridica
     */
    class ClientePessoaJuridica extends Cliente {
        public string $nome;
        public string $cnpj;

        public  function verInformacaoUsuario(): string {
            $dados = "Endereço da pessoa física<br>";
            $dados = "Endereço: {$this->logradouro}<br>";
            $dados = "Bairro: {$this->bairro}<br>";
            $dados = "Cidade: {$this->cidade}<br>";
            $dados = "CEP: {$this->cep}<br>";
            $dados = "Estado: {$this->estado}<br>";
            $dados = "Nome: {$this->nome}<br>";
            $dados = "CNPJ: {$this->cnpj}<br>";
            return "<p>$dados</p>";
        }
    }
?>