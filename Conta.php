<?php
    class Conta{
        public string $nome;
        public int $numAgencia;
        public string $numConta;
        public float $saldo;

        //construtor da classe, é o primeiro a ser executado
        public function __construct(string $nome, int $numAgencia, string $numConta, float $saldo){
            $this->nome = $nome;
            $this->numAgencia = $numAgencia;
            $this->numConta = $numConta;
            $this->saldo = $saldo;
        }
        public function exiberDados(): string{
            return "Nome: {$this->nome}<br>
            N Agencia {$this->numAgencia}<br>
            N Conta: {$this->numConta}<br>
            Saldo: R$ {$this->saldo}";
        }
    }