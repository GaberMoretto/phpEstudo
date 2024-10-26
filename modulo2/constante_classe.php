<?php 
class Pessoa {
    private $nome;
    private $genero;
    const GENEROS = ['M'=> 'Masculino',
                     'F'=> 'Feminino'];
    
    public function __construct($nome, $genero){
        $this->nome= $nome;
        $this->genero= $genero;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getNomeGenero(){
        return Pessoa::GENEROS[$this->genero];
    }
}
$p1 = new Pessoa ('João', 'M');
$p2 = new Pessoa ('Maria', 'F');

// print $p1->getNome() . PHP_EOL;
// print $p1->getNomeGenero() . '<br>';
// print $p2->getNome() . PHP_EOL;
// print $p2->getNomeGenero() . '<br>';
//print Pessoa::GENEROS['F'];

var_dump(Pessoa::GENEROS);
?>