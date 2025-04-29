<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 03</title>
</head>

<body>
    <h1>PHP com POO - Exercicio3</h1>
    <hr>

    <?php
    require_once "src/Enums/Genero.php";
    require_once "src/Enums/Formato.php";
    require_once "src/Models/Livro.php";
    require_once 'src/Models/Literario.php';
    require_once 'src/Models/Tecnico.php';
    require_once "src/Models/Programacao.php";

    $livro1 = new Literario("1984", "George Orwell", Genero::DRAMA);
    $livro2 = new Tecnico("Código Limpo", "Robert C. Martin", Formato::DIGITAL);

    ?>

    <h2>Saídas</h2>

    <h3>Livro 1</h3>
    <p><b>Autor: </b><?=$livro1->getAutor()?></p>
    <p><b>Titulo: </b><?=$livro1->getTitulo()?></p>
    <p><b>Genero: </b><?=$livro1->getGenero()->name?></p>

    <h3>Livro 2</h3>
    <p><b>Autor: </b><?=$livro2->getAutor()?></p>
    <p><b>Titulo: </b><?=$livro2->getTitulo()?></p>
    <p><b>Formato: </b><?=$livro2->getFormato()->name?></p>


</body>

</html>