<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>

<body>
    <h1>Exercício 01</h1>
    <hr>
    <p><i>Faça as chamadas e testes nesta página</i></p>


    <?php

    // Importando a classe
    require_once "src/Livro.php";


    // Criando o Objeto
    $livroA = new Livro();
    $livroB = new Livro();

    //Colocando valores nos objetos/atributos
    $livroA->setTitulo("1984");
    $livroA->setAutor("George orwell ");
    $livroA->setPaginas(440);

    $livroB->setTitulo("O Visconde Que Me Amava");
    $livroB->setAutor("Julia Quinn");
    $livroB->setPaginas(304);
    ?>

    <h2>Lendo as infromações</h2>

    <ul>
        <li><b>Título: </b> <?= $livroA->getTitulo() ?></li>
        <li><b>Autor: </b> <?= $livroA->getAutor() ?></li>
        <li><b>Páginas: </b> <?= $livroA->getPaginas() ?></li>
    </ul>

    <ul>
        <li><b>Título: </b> <?= $livroB->getTitulo() ?></li>
        <li><b>Autor: </b> <?= $livroB->getAutor() ?></li>
        <li><b>Páginas: </b> <?= $livroB->getPaginas() ?></li>
    </ul>


</body>

</html>