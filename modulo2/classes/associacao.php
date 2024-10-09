<?php 

require_once 'Fabricante.php';
require_once 'Produto.php';

$p1 = new Produto ('Chocolate', 10, 7);
$f1 = new Fabricante ('Fabrica de Chocolate', 'Rua tal...', '9334112.85415156');

$p1->setFabricante($f1);

$descricao = $p1->getDescricao();
$nome_fabr = $p1->getFabricante()->getNome();

print "O Fabricante do produto " .$descricao . " é " . $nome_fabr ;
/*
echo '<pre>';
var_dump($p1);
var_dump($f1);
echo '</pre>';
*/
?>
