<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <h1>Exercício 02</h1>
    <hr>
    <p><i>Faça as chamadas e testes nesta página</i></p>
    <hr>
 
<?php
//Importando a classe
require_once "src/Livro.php";
 
//Criando objeto da Classe
$livroA = new Livro ("Amor & Gelato", "Jenna Evans Welch", 320);
$livroB = new Livro ("A seleção", "Kiera Cass", 363);
?>
 
<h2>Lendo os dados do objeto</h2>
 
<ul>
    <li><b>Título: </b><?=$livroA->getTitulo()?></li>
    <li><b>Autor: </b><?=$livroA->getAutor()?></li>
    <li><b>N° de páginas: </b><?=$livroA->getPaginas()?></li>
</ul>
 
<ul>
    <li><b>Título: </b><?=$livroB->getTitulo()?></li>
    <li><b>Autor: </b><?=$livroB->getAutor()?></li>
    <li><b>N° de páginas: </b><?=$livroB->getPaginas()?></li>
</ul>
 
   
</body>
</html>