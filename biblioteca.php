<?php

    class Biblioteca
    {
        public string $nome;
        private array $livros ;

        public function __construct(string $nome)
        {
            $this->nome = $nome;
            $this->livros = [];
        }

        public function adicionarLivro(string $titulo)
        {
            $this->livros[] += $titulo;
        }

        public function buscarLivro(string $termo)
        {
            $resultados = [];
            foreach ($this->livros as $livro) {
                if (str_contains(strtolower($livro), strtolower($termo))) {
                    $resultados[] = $livro;
                }
            }
            return $resultados;
        }

        public function listarLivros(): string
        {
            $lista = "";
            foreach ($this->livros as $livro) {
                $lista .= ", {$livro}";
            }
            return $lista;
        }
    }

    $biblioteca = new Biblioteca("Biblioteca Central");

    $biblioteca->adicionarLivro("O Senhor dos Anéis");
    $biblioteca->adicionarLivro("Dom Casmurro");
    $biblioteca->adicionarLivro("O Hobbit");

    echo $biblioteca->buscarLivro("O");

    echo $biblioteca->listarLivros();