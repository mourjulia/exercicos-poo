<?php

class Livro
{
    private string $titulo;
    private string $autor;
    private int $paginas;

    // Adicionando metodo setters
    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function setAutor(string $autor): void
    {
        $this->autor = $autor;
    }

    public function setPaginas(int $paginas): void
    {
        $this->paginas = $paginas;
    }


    // Adicioanndo metodo getters

    public function getTitulo(): string
    {
        return  $this->titulo;
    }

    public function getAutor(): string
    {
        return  $this->autor;
    }

    public function getPaginas(): int
    {
        return  $this->paginas;
    }
}
