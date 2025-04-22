<?php 
class Tecnico extends Livro {
    private Formato $formato;

    public function __construct(
        string $titulo, string $autor, Formato $formato) {

        /* Passamos titulo e autor pro pai (Livro) */
        parent::__construct($titulo, $autor);

        /* Formato definimos aqui (filho) usando setFormato */
        $this->setFormato($formato);
    }

    private function setFormato(Formato $formato): void
    {
        $this->formato = $formato;
    }

    public function getFormato(): Formato
    {
        return $this->formato;
    }
    
}
