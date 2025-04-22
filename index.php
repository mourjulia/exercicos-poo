<?php
require_once 'Literario.php';
require_once 'Programacao.php';

$livro1 = new Literario("1984", "George Orwell", 39.90, Formato::FISICO);
$livro2 = new Programacao("Código Limpo", "Robert C. Martin", 49.90, Formato::DIGITAL);

echo "<h2>Livro Literário</h2>";
echo $livro1->exibirDados();

echo "<h2>Livro de Programação</h2>";
echo $livro2->exibirDados();