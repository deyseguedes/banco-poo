<?php

class Conta {

    private $saldo;

    public function __construct($saldo)
    {
        $this->saldo = $saldo;
    }

    public function consultarSaldo()
    {
        return $this->saldo;
    }

    public function depositar($valor)
    {

        if($valor <= 0){
            throw new ValorInvalidoException("Valor de depósito inválido");
        }

        $this->saldo += $valor;

        return $this->saldo;
    }

    public function sacar($valor)
    {

        if($valor <= 0){
            throw new ValorInvalidoException("Valor de saque inválido");
        }

        if($valor > $this->saldo){
            throw new SaldoInsuficienteException("Saldo insuficiente");
        }

        $this->saldo -= $valor;

        return $this->saldo;
    }

}

?>