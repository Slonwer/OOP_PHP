<?php

    class ContaCorrente extends Conta{
        public float $limimteCredito;

        public function __construct(string $nome, int $numAgencia, string $numConta, float $saldo, float $limimteCredito){
            parent:: __construct($nome, $numAgencia, $numConta, $saldo);
            $this->limimteCredito = $limimteCredito;
        }

        public function depositar (float $valor): void{ //void não retorna nada
            if($valor > 0){
                $this->saldo += $valor;  //+= para soma os valores, só = ira subtruir o valor atual
            }
        }

        public function sacar (float $valor): string{
            if($valor > 0){
                $saldoDisponivel = $this->saldo + $this->limimteCredito;
                if($valor <= $saldoDisponivel){
                    $this->saldo -= $valor;
                    return "Saque de R$ $valor realizado com sucesso.
                        Saldo restante: R$ {$this->saldo}";
                }else {
                    return "Saldo insuficiente para o saque.";
                }
            }else{
                return "Valor de saque inválido";
            }
        }
    }