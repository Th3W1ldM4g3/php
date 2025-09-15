<?php

    class ContaBancaria
    {
        private string $titular;
        private float $saldo;

        public function __construct(string $titular, float $saldo)
        {
            $this->titular = $titular;
            $this->saldo = $saldo;
        }

        public function depositar(float $valor)
        {
            if ($valor > 0) {
                $this->saldo += $valor;
            }
        }

        public function sacar(float $valor)
        {
            if ($valor > 0 && $valor <= $this->saldo) {
                $this->saldo -= $valor;
                return true;
            }
            return false;
        }

        public function transferir(ContaBancaria $destino, float $valor): bool
        {
            if ($this->sacar($valor)) {
                $destino->depositar($valor);
                return true;
            }
            return false;
        }
    }

    $conta1 = new ContaBancaria("João", 1000.0);
    $conta2 = new ContaBancaria("Maria", 500.0);

    $conta1->depositar(200.0);

    $conta2->sacar(100.0);

    $conta1->transferir($conta2, 300.0);