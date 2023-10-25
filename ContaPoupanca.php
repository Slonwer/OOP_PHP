<?php
    class ContaPoupanca extends Conta{
        public int $tipo;

        public function __construct(string $nome, int $numAgencia, string $numConta, float $saldo, int $tipo){
            parent:: __construct($nome, $numAgencia, $numConta, $saldo);
            $this->tipo = $tipo;
        }

        public function sacar(float $valor): string{
            if($valor > 0){
                if($valor <= $this->saldo){
                    $this->saldo -= $valor;
                    return "Saque de R$ $valor realizado com sucesso.<br>
                    Saldo restante: R$ {$this->saldo}";
                }else {
                    return "Saldo insufiente para o saque.";
                }
            }else {
                return "Valor de saque inválido.";
            }
        }
    }