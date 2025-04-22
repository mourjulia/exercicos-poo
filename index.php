<?php
require_once 'Literario.php';
require_once 'Programacao.php';

$livro1 = new Literario("Dom Casmurro", "Machado de Assis", 39.90, Formato::IMPRESSO, Genero::ROMANCE);
$livro2 = new Programacao("PHP Moderno", "João Silva", 89.90, Formato::DIGITAL, "Informática", "PHP");

echo "<h2>Livro Literário</h2>";
echo $livro1->exibirDados();

echo "<h2>Livro de Programação</h2>";
echo $livro2->exibirDados();