<?php 
$produto = array();
$produto['descricao'] = 'Chocolate';
$produto['estoque'] = 100;
$produto['preco'] = 7;


$objeto = new stdClass;

foreach ($produto as $key => $value) {
    $objeto->$key = $value;
}
echo '<pre>'; 
var_dump($objeto);
echo '</pre>'; 
?>