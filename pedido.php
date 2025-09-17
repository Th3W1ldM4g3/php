<?php

require "produto.php";

class Pedido {
    private string $cliente;
    private array $itens = [];

    public function __construct(string $cliente) {
        $this->cliente = $cliente;
    }

    public function adicionarItem(Produto $produto, int $quantidade) {
        $this->itens[] = [
            'produto' => $produto,
            'quantidade' => $quantidade
        ];
    }

    public function total() {
        $total = 0.0;
        foreach ($this->itens as $item) {
            $total += $item['produto']->preco * $item['quantidade'];
        }
        return $total;
    }

    public function detalhes() {
        $detalhes = "Cliente: {$this->cliente}\n";
        $detalhes .= "Itens:\n";
        foreach ($this->itens as $item) {
            $nome = $item['produto']->nome;
            $preco = $item['produto']->preco;
            $quantidade = $item['quantidade'];
            $subtotal = $item['produto']->preco * $quantidade;
            $detalhes .= "- {$nome}: {$quantidade} x R$ {$preco} = R$ {$subtotal}\n";
        }
        $total = $this->total();
        $detalhes .= "Total: R$ {$total}\n";
        return $detalhes;
    }
}

$produto1 = new produto('Camiseta', 50.0, 10);
$produto2 = new produto('Calça', 120.0, 5);
$produto3 = new produto('Tênis', 200.0, 3);

$pedido = new Pedido('João');
$pedido->adicionarItem($produto1, 2);
$pedido->adicionarItem($produto2, 1);
$pedido->adicionarItem($produto3, 1);

echo $pedido->detalhes();

// Exemplo de total
echo "Total do pedido: R$ " . $pedido->total() . "\n";