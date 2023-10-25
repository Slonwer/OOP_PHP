<?php
    class ChequeComum extends Cheque {
        public function calcularJuro(): string {
            $valorComJuro = (0.40 * $this->valor) + $this->valor;
            //ValorComReal = parent::converterReal($valorComJuro);
            $valorConvReal = $this->converterReal($valorComJuro);
            return "Valor do cheque {$this->tipo} sem juros 
            R$ {$this->converterReal($this->valor)} e com juros
            R$ {$valorConvReal} <br>";
        }
    }
?>