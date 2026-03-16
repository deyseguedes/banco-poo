<?php

require_once "Conta.php";
require_once "SaldoInsuficienteException.php";
require_once "ValorInvalidoException.php";

try{

    $conta = new Conta(500);

    echo "Saldo inicial: ".$conta->consultarSaldo()."<br>";

    $conta->depositar(200);

    echo "Saldo após depósito: ".$conta->consultarSaldo()."<br>";

    $conta->sacar(1000);

    echo "Saldo após saque: ".$conta->consultarSaldo();

}catch(SaldoInsuficienteException $e){

    echo "Erro bancário: ".$e->getMessage();

}catch(ValorInvalidoException $e){

    echo "Erro de valor: ".$e->getMessage();

}catch(Exception $e){

    echo "Erro geral: ".$e->getMessage();

}finally{

    echo "<br>Operação finalizada.";

}

?>