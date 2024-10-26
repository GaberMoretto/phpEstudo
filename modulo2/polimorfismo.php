<?php 
require_once "./classes/Conta.php";
require_once "./classes/ContaCorrente.php";
require_once "./classes/ContaPoupanca.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$contas = []; 
$contas [] = new ContaCorrente(1234, 'cc.1234', 100, 500);
$contas [] = new ContaPoupanca(1235, 'pp.4321', 100);


foreach ($contas as $conta) {
   if ($conta instanceof Conta){
    print $conta->getInfo() . '<br>' ;
    print "--Saldo Atual: {$conta->getSaldo()}  . <br>";
    $conta->depositar(200);
    print "--Depósido no valor de 200 <br>";
    print "--Saldo Atual: {$conta->getSaldo()}  <br>";

    if ($conta->retirar(700)) {
      print "--Retirada de 700 (OK) <BR>";
    }
    else {
      print "--Retirada de 700 (não permitida) <br>";
    }
    print "--Saldo Atual: {$conta->getSaldo()}  <br>";   
  }
}
?>