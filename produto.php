<?php

    class produto {
        public $nome;
        public $preco;
        public $estoque;

        public function __construct($nome, $preco, $estoque) {
            $this->nome = $nome;
            $this->preco = $preco;
            $this->estoque = $estoque;
        }

        public function aplicarDesconto(float $percentual) {
            $this->preco *= 1 - ($percentual / 100);
            return $this->preco;
        }

        public function vender(int $estoque) {
            if($this->estoque >= 1){
                $this->estoque -= 1;
                return $estoque;
            } else {
                return 'Erro, quantidade insuficiente';
            }
        }

        public function resumo(){
            return "Nome: $this->nome\nPreço atual: $this->preco\nQuantidade: $this->estoque";
        }
    }

    // $teste = new produto('Nome Teste', 10.0, 20.0);
    // echo $teste->resumo();
