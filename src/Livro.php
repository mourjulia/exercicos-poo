<?php
require_once 'Formato.php';

class Livro {
    private string $titulo;
    private string $autor;

    public function __construct(string $titulo, string $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function exibirDados(): string {
        return
               "<strong>Título:</strong> {$this->titulo}<br>" .
               "<strong>Autor:</strong> {$this->autor}<br>" ;
    }
}