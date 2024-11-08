<?php 
class Produto {
    public $descricao;
    public $estoque;
    public $preco;

    public function aumentarEstoque($unidades){
        if (is_numeric($unidades) AND $unidades >= 0 ){
            $this->estoque += $unidades;
        }
    }

    public function diminuirEstoque($unidades){
        if (is_numeric($unidades) AND $unidades >= 0 ){
            $this->estoque -= $unidades;
        }
    }
    public function reajustarPreco($percentual){
        if (is_numeric($percentual) AND $percentual >= 0 ){
            $this->preco *= (1 + ($percentual/100));
        }
    }

}
$p1 = new Produto;
$p1->descricao = "Chocolate";
$p1->estoque = 10;
$p1->preco = 8;
echo "<hr>";
echo "<strong>" . "Antes das funções" . "</strong>";
echo "<hr>";
echo "O estoque de   {$p1->descricao}   é de {$p1->estoque} <br>"; 
echo "O preco de   {$p1->descricao} é de R$ {$p1->preco} <br/> <br/>  "; 

$p1->aumentarEstoque(10);
$p1->diminuirEstoque(5);
$p1->reajustarPreco(50);

echo "<hr>";
echo "<strong>" . "Depois das funções" . "</strong>";
echo "<hr>";
echo "O estoque de   {$p1->descricao} é de {$p1->estoque} <br>"; 
echo "O preco de   {$p1->descricao} é de R$ {$p1->preco} <br>"; 


?>