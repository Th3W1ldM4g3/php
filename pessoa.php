<?php

    class pessoa {
        public string $nome;
        public string $telefone;
        public string $endereco;
        public function __construct($nome, $telefone, $endereco){
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }
    }

    class pessoaFisica extends pessoa {
        protected string $cpf;  
        public function __construct($nome, $telefone, $endereco, $cpf){
            parent::__construct($nome, $telefone, $endereco);
            $this->cpf = $cpf;
        }
    }

    class pessoaJuridica extends pessoa {
        public string $cnpj;
        private array $socios;
        public function __construct($nome, $telefone, $endereco, $cnpj){
            parent::__construct($nome, $telefone, $endereco);
            $this->cnpj = $cnpj;
        }
        public function adicionarSocio(pessoaFisica $novoSocio) {
            $this->socios[] = $novoSocio;
            return $this->socios;
        }
    }

    $pf1 = new pessoaFisica('Cleber', '55 (66) 12345-6789', 'Avenida São Cleber, 2020', '222.333.444-55');
    $pf2 = new pessoaFisica('Nicolas', '55 (65) 98765-4321', 'Rua Trindade, 444', '123.321.999-00');

    $pj = new pessoaJuridica('Tech Ltda', '55 (65) 33333-4444', 'Av.Central, 1000', '12.345.678/0001-99');
    $pj->adicionarSocio($pf1);
    $pj->adicionarSocio($pf2);
    var_dump($pf1);
    echo "<br>";
    echo "<br>";
    var_dump($pf2);
    echo "<br>";
    echo "<br>";
    var_dump($pj);
    echo "<br>";
    echo "<br>";
?>