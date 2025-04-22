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
    require_once "src/Models/Programacao.php";
    
    die();
    require_once 'src/Models/Tecnico.php';

    $livro1 = new Literario("1984", "George Orwell", Genero::DRAMA);
    $livro2 = new Tecnico("Código Limpo", "Robert C. Martin", Formato::DIGITAL);

    ?>

    <h2>Saídas</h2>

    <h3>Livro 1</h3>
    <p>Autor: <?=$livro2->getAutor()?></p>
    <p>Titulo: <?=$livro2->getTitulo()?></p>


</body>

</html>