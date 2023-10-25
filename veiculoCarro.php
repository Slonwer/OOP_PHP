<?php
class Carro extends Veiculo {
    private $quantidadePortas;

    public function __construct($marca, $ano, $quantidadePortas) {
        parent::__construct($marca, $ano);
        $this->quantidadePortas = $quantidadePortas;
    }

    public function exibirInformacoes() {
        parent::exibirInformacoes();
        echo "Quantidade de Portas: {$this->quantidadePortas}<br>";
    }
}

    