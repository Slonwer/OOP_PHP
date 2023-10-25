<?php
class Veiculo {
    protected string $marca;
    protected int $ano;
    protected bool $ligado = false;

    public function __construct(string $marca, int $ano) {
        $this->marca = $marca;
        $this->ano = $ano;
    }

    public function ligar(): void {
        $this->ligado = true;
    }

    public function desligar(): void {
        $this->ligado = false;
    }

    public function exibirInformacoes(): void {
        echo "Marca: {$this->marca}, Ano: {$this->ano}, Ligado: " . ($this->ligado ? 'Sim' : 'Não') . "\n";
    }
}

class Carro extends Veiculo {
    protected int $quantidadePortas;

    public function __construct(string $marca, int $ano, int $quantidadePortas) {
        parent::__construct($marca, $ano);
        $this->quantidadePortas = $quantidadePortas;
    }

    public function exibirInformacoes(): void {
        parent::exibirInformacoes();
        echo "Quantidade de Portas: {$this->quantidadePortas}\n";
    }
}

class Moto extends Veiculo {
    protected string $tipoPartida;

    public function __construct(string $marca, int $ano, string $tipoPartida) {
        parent::__construct($marca, $ano);
        $this->tipoPartida = $tipoPartida;
    }

    public function exibirInformacoes(): void {
        parent::exibirInformacoes();
        echo "Tipo de Partida: {$this->tipoPartida}\n";
    }
}

// Exemplo de uso
$carro = new Carro("Toyota", 2022, 4);
$carro->ligar();
$carro->exibirInformacoes();

$moto = new Moto("Honda", 2023, "Elétrica");
$moto->ligar();
$moto->exibirInformacoes();






?>