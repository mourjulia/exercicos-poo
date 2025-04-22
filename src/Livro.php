=<?php
class Livro
{
    //Atributos/propriedades- (características do Livro)
    private string $titulo;
    private string $autor;
    private int $paginas;
 
    //Método construtor
    public function __construct(string $titulo, string $autor, int $paginas)
    {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setpaginas($paginas);
    }
 
    //Métodos setters
    private function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }
 
    private function setAutor(string $autor): void
    {
        $this->autor = $autor;
    }
   
    private function setPaginas(string $paginas): void
    {
        $this->paginas = $paginas;
    }
 
    //Métodos getters
    public function getTitulo():string
    {
        return $this->titulo;
    }
   
    public function getAutor():string
    {
        return $this->autor;
    }
 
    public function getPaginas():int
    {
        return $this->paginas;
    }
}
?>
 