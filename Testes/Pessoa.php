<?php
class Pessoa {
    // Atributos
    private $nome;
    private $salario;
    private $cargo;
    private $dtContratacao;
    private $dtDemissao;
    private $rg;
    private $cpf;

    // Construtor
    public function __construct($nome, $salario, $cargo, $dtContratacao, $rg, $cpf) {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->cargo = $cargo;
        $this->dtContratacao = $dtContratacao;
        $this->rg = $rg;
        $this->cpf = $cpf;
    }

    // Métodos/funções
    public function admitir($data, $salario) {
        $this->dtContratacao = $data;
        $this->salario = $salario;
    }

    public function demitir($data) {
        $this->dtDemissao = $data;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}

// Criando um objeto Pessoa
$pessoa = new Pessoa("João Silva", 5000.00, "Desenvolvedor", "2022-01-01", "123456789", "987654321");

echo "Nome: " . $pessoa->getNome() . "<br />";
echo "Cargo: " . $pessoa->getCargo() . "<br />";

// Admitir uma nova pessoa
$pessoa->admitir("2022-01-01", 5000.00);

// Alterando o cargo
$pessoa->setCargo("Gerente");

echo "Novo Cargo: " . $pessoa->getCargo();

?>
