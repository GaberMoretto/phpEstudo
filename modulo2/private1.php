<?php 

class Pessoa {
    private $nome;
    private $endereco;
    private $nascimento;

}

$p1 = new Pessoa;
$p1->nome = 'Gabriel Moretto';
$p1->endereco = 'Rua Sei lá o que';
$p1->nascimento = '06/06/1994';
echo '<pre>';
print_r($p1);
echo '<pre>';
?>