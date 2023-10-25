<?php
 class Corrente extends Conta {
    public float $limiteCredito;
    
    public float $depositar;

    public float $sacar;

    
        function Corrente() {
        $dados = "Nome: {$this->limiteCredito}<br>"; 
        $dados .= "NumAgencia: {$this->depositar}<br>";
        $dados .= "NumConta: {$this->numConta}<br>"; 
        $dados .= "Saldo: {$this->saldo}<br>";
       
        return "<p>$dados</p>";
    }
}



?>