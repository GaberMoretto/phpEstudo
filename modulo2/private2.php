<?php 

class Pessoa {
    private $nome;
    private $endereco;
    private $nascimento;

    public function __construct($nome, $endereco)
    {
        $this->nome= $nome;
        $this->endereco= $endereco;
    }

    public function setNascimento($nascimento){
        $partes = explode ('-', $nascimento);
        if (count($partes) == 3)
        {
            if(checkdate($partes[1], $partes[2], $partes[0])){
                $this->nascimento = $nascimento;
            }
            return false;
        }
    }
}
$p1 = new Pessoa('Gabriel Moretto', 'endereco');
$ok1 = $p1->setNascimento('06 de junho 1994');
$ok2 = $p1->setNascimento('1990-05-01');
echo '<pre>';
var_dump($ok1);
var_dump($ok2);
var_dump($p1);
echo '</pre>';
?>