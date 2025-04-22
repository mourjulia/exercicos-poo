<?php
require_once 'Formato.php';

class Livro {
    protected string $titulo;
    protected string $autor;
    protected float $preco;
    protected Formato $formato;

    public function __construct(string $titulo, string $autor, float $preco, Formato $formato) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->preco = $preco;
        $this->formato = $formato;
    }

    public function exibirDados(): string {
        return "<strong>Título:</strong> {$this->titulo}<br>" .
               "<strong>Autor:</strong> {$this->autor}<br>" .
               "<strong>Preço:</strong> R$ {$this->preco}<br>" .
               "<strong>Formato:</strong> {$this->formato->value}<br>";
    }
}