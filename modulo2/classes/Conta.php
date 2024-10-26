<?php 
abstract class Conta
{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo)
    {
        $this->agencia =  $agencia;
        $this->conta =  $conta;
        if ($saldo > 0){
            $this->saldo =  $saldo;
        }
    }
public function depositar ($quantia)
    {
    if ($quantia > 0){
        $this->saldo += $quantia;
    }
    }
public function getSaldo()
    {
    return $this->saldo;
    }
public function getInfo(){ //Informações que serão utilizadas para debug 
    return "Agencia {$this->agencia}, Conta {$this->conta}";
}
/**
 * Obriga as classes filhas usarem essa função, ela
 * é uma assinatura de método,  qualquer classe filha deve
 * implementar o método retirar.
 */
abstract function retirar ($quantia);
}
?>
