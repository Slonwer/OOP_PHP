<?php
class Veiculo {
    protected string $marca;
    protected int $ano;

    public function __construct(string $marca, int $ano) {
        $this->marca = $marca;
        $this->ano = $ano;
    }

    public function exibirInformacoes(): void {
        echo "Marca: {$this->marca}, Ano: {$this->ano}\n";
    }
}

class Moto extends Veiculo {
    public string $tipoPartida;

    public function __construct(string $marca, int $ano, string $tipoPartida) {
        parent::__construct($marca, $ano);
        $this->tipoPartida = $tipoPartida;
    }

    public function depositar(float $valor): void {
        if ($valor > 0) {
           
        }
    }
}

// Exemplo de uso
$moto = new Moto("Honda", 2022, "Elétrica");
$moto->exibirInformacoes();



?>