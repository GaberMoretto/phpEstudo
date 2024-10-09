<?php 

class Cesta 
{
    private $hora;
    private $itens;
    private $cliente;

    public function __construct()
    {
        $this->hora = date ('Y-m-d H:i:s');
        $this->itens = []; 
    }
    /**Adiciona produtos */
    public function addItem(Produto $produto)
    {
        $this->itens[] =  $produto;
    }
    /**Método para obter itens */
    public function getItens()
    {
        return $this ->itens;
    }
    /**Método para associar um cliente */
    public function setCliente(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }
    /**Método para obter cliente */
    public function getCliente()
    {
        return $this->cliente;
    }
}

?>