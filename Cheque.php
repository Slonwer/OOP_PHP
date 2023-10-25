<?php
    abstract class Cheque {
        // public float $valor;
        // public string $tipo;
        // public function __construct(float $valor, string $tipo){
        //     $this->valor = $valor;
        //     $this->tipo = $tipo;
        // }
        // // //PHP < 8
        // public function verValor(): string {
        //     return "Valor do cheque ". $this->valor . " é R$ {$this->valor} <br>";
        // }

        //PHP 8
        public function converterReal(float $valor): string{
            return number_format($valor, '2', ',', '.');
        }

        public function __construct(public float $valor, public string $tipo){

        }
    }

?>