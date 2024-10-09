<?php 
class Produto {
    private $descricao;
    private $estoque;
    private $preco;

    public function setDescricao($descricao){
        if (is_string($descricao)){
            $this->descricao = $descricao;
        }
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setEstoque($estoque){
        if (is_numeric($estoque)){
            $this->estoque = $estoque;
        }
    }
    public function getEstoque(){
        return $this->estoque;
    }
    public function setPreco($preco){
        if (is_numeric($preco)){
            $this->preco = $preco;
        }
    }
    public function getPreco(){
        return $this->preco;
    }
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
$p1->setDescricao("Chocolate");
$p1->setEstoque(10);
$p1->setPreco(8);
echo "<hr>";
echo "<strong>" . "Antes das funções" . "</strong>";
echo "<hr>";
echo "O estoque de {$p1->getDescricao()}   é de {$p1->getEstoque()} <br>"; 
echo "O preco de {$p1->getDescricao()} é de R$ {$p1->getPreco()} <br/> <br/>  "; 

$p1->aumentarEstoque(10);
$p1->diminuirEstoque(5);
$p1->reajustarPreco(50);

echo "<hr>";
echo "<strong>" . "Depois das funções" . "</strong>";
echo "<hr>";
echo "O estoque de {$p1->getDescricao()} é de {$p1->getEstoque()} <br>"; 
echo "O preco de {$p1->getDescricao()} é de R$ {$p1->getPreco()} <br>"; 


?>