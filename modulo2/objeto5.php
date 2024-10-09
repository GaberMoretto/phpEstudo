<?php 
class Produto {
    // private string $descricao;
    // private float $estoque;
    // private float $preco;

    public function __construct(private string $descricao,private float $estoque,private float $preco){
        // $this->setDescricao($descricao);
        // $this->setEstoque($estoque);
        // $this->setPreco($preco);
        echo $this->descricao;
    }

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
    public function __destruct(){
         echo "DESTRUÍDO: Objeto" . $this->getDescricao() . "<br>";
        
    }

}
$p1 = new Produto(' Chocolate', 10, 8);
$p2 = new Produto(' café', 12, 5);

echo "O estoque de " . $p1->getDescricao() . "   é de " . $p1->getEstoque() . "<br>"; 
echo "O preço de " . $p1->getDescricao() . " é de R$ " .  $p1->getPreco() . "<br/>"; 

// https://ead.php.com.br/phpoo/index.php?class=ContentRenderer&method=onShow&source=aHR0cHM6Ly9wbGF5ZXIudmltZW8uY29tL3ZpZGVvLzg3MjY4NTUxNg==&title=2.5.2%20Promo%C3%A7%C3%A3o%20de%20propriedades%20no%20construtor%20(05:08)
// Promoção de propriedades no construtor

?>