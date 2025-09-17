<?php 
    class aluno {
        public $nome;
        public $matricula;
        private $notas = [];
        private $mediaNotas;

        public function __construct($nome, $matricula, array $notas) {
            $this->nome = $nome;
            $this->matricula = $matricula;
            $this->notas = $notas;
        }

        public function adicionarNota(float $nota) {
            array_push($this->notas, $nota);
        }

        public function media(){
            foreach ($this->notas as $x){
                $this->mediaNotas += $x;
            }
            $this->mediaNotas /= count($this->notas);
            return $this->mediaNotas;
        }

        public function aprovado(){
            if($this->media() >= 6){
                return true;
            } else {
                return false;
            }
        }
    }

    $teste = new aluno('Nome teste', 1234567890987, [4,8]);
    $teste->adicionarNota(10);
    $teste->adicionarNota(5);
    $teste->adicionarNota(7);
    $teste->aprovado();
    