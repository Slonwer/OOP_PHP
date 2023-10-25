<?php
   class Moto extends Veiculo {
    private $tipoPartida;

    public function __construct($marca, $ano, $tipoPartida) {
        parent::__construct($marca, $ano);
        $this->tipoPartida = $tipoPartida;
    }

    public function exibirInformacoes() {
        parent::exibirInformacoes();
        echo "Tipo de Partida: {$this->tipoPartida}<br>";
    }
}