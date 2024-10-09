<?php 
require_once 'Cesta.php';
require_once 'Produto.php';
require_once 'Cliente.php';

$c1 = new Cesta;

$p1 =  new Produto('Chocolate', 10, 5);
$p2 =  new Produto('Café', 100, 7);
$p3 =  new Produto('Mostarda', 50, 3);


$c1->addItem($p1); 
$c1->addItem($p2); 
$c1->addItem($p3); 

$cliente = new Cliente('Gabriel ', 'gabriel.moretto@gmail.com', '(99) 9999-9999');
$c1->setCliente($cliente);

/*Setando valores do cliente e seus itens */
echo "Cliente: {$c1->getCliente()->getNome()} <br>";
echo "Email: {$c1->getCliente()->getEmail()} <br>";
echo "Telefone: {$c1->getCliente()->getTelefone()} <br>";

/**
 * Jeito 1 de mostrar a lista
 */
// echo '<pre>';
// print_r($c1);
// echo '</pre>';

/**
 * Jeito 2 de mostrar os itens
 */
foreach ($c1->getItens() as $item) {
    // print "Item:  {$item->getDescricao()} <br>";
}
?>