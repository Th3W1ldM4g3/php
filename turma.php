<?php
// turma.php

require 'aluno.php';

class Turma {
    public $disciplina;
    private $alunos = [];

    public function __construct($disciplina) {
        $this->disciplina = $disciplina;
    }

    public function adicionarAluno(aluno $aluno) {
        $this->alunos[] = $aluno;
    }

    public function melhorAluno() {
        $melhor = $this->alunos[0];
        foreach ($this->alunos as $aluno) {
            if ($aluno->media() > $melhor->media()) {
                $melhor = $aluno;
            }
        }
        return $melhor;
    }

    public function resultadoFinal() {
        foreach ($this->alunos as $aluno) {
            if ($aluno->aprovado()) {
                echo "$aluno->nome está aprovado(a).\n";
            } else {
                echo "$aluno->nome está reprovado(a).\n";
            }
        }
    }
}

require_once 'aluno.php';

$aluno1 = new aluno('Ana', 1001, [7, 8]);
$aluno2 = new aluno('Bruno', 1002, [5, 6]);
$aluno3 = new aluno('Carla', 1003, [9, 10]);

$turma = new Turma('Matemática');
$turma->adicionarAluno($aluno1);
$turma->adicionarAluno($aluno2);
$turma->adicionarAluno($aluno3);

$melhor = $turma->melhorAluno();
echo "Melhor aluno: {$melhor->nome}\n";

$turma->resultadoFinal();
