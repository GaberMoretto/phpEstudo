<?php 
class ContaCorrente extends Conta
{
    protected $limite;

    public function __construct($agencia,$conta, $saldo, $limite)
    {
        parent::__construct($agencia,$conta, $saldo);
        $this->limite = $limite;
    }
/**
 * Essa classe está como final para que não seja mais possível
 * redefinir em classes filhas
 */
    public final function retirar($quantia)
    {
        if (($this->saldo + $this->limite) >= $quantia) 
        {
            $this->saldo -= $quantia;
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>