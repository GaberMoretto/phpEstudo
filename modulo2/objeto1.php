<?php 
class Produto {
    public  $descricao;
    public  $estoque ;
    public  $preco;
}

$p1 = new Produto;
$p1->descricao = "Chocolate";
$p1->estoque = 20;
$p1->preco = 5;

echo'<pre>';
var_dump($p1); 
echo'</pre>';

$p2 = new Produto;
$p2->descricao = "Café";
$p2->estoque = 20;
$p2->preco = 10;



?>

