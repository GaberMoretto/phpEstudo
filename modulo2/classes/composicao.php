<?php 
require_once 'Produto.php';
require_once 'Caracteristica.php';

$p1 = new Produto('Chocolate', 10, 7);
$p1->setCaracteristica('Cor', 'Branco');
$p1->setCaracteristica('Peso', '500gr');

/*
echo '<pre>';
print_r($p1);
echo '</pre>';
*/

print '<strong>Nome Produto:</strong> ' . $p1->getDescricao() . '<br>';
foreach($p1->getCaracteristica() as $caracteristica)
{
    $nome = $caracteristica->getNome();
    $valor = $caracteristica->getValor();

    print "<strong>Características: </strong> {$nome} = {$valor} <br>";
}
?>