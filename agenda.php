<?php

class agenda
{
    private array $contatos;

    public function adicionarContato(string $nome, string $telefone)
    {
        $this->contatos[$nome] = $telefone;
    }

    public function removerContato(string $nome)
    {
        unset($this->contatos[$nome]);
    }

    public function buscarContato(string $nome)
    {
        if (array_key_exists($nome, $this->contatos)) {
            return $this->contatos[$nome];
        } else {
            return "Contato não encontrado.";
        } 
    }

    public function listarContatos()
    {
        $contatosOrdenados = $this->contatos;
        ksort($contatosOrdenados);
        return $contatosOrdenados;
    }
}

$minhaAgenda = new agenda();

$minhaAgenda->adicionarContato('Alberta', '11111-1111');
$minhaAgenda->adicionarContato('Berenice', '22222-2222');
$minhaAgenda->adicionarContato('Carlos', '33333-3333');

print_r($minhaAgenda->listarContatos());

echo $minhaAgenda->buscarContato('Alberta') . "\n";
echo $minhaAgenda->buscarContato('Ana') . "\n";

$minhaAgenda->removerContato('Carlos');
print_r($minhaAgenda->listarContatos());