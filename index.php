<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Orientado a Objetos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <main>
            <h1>PHP e orientação a objetos</h1>
            <?php
            # buscar os arquivos
            require 'autoload.php';

            # usar os namespaces
            use MeuApp\Tecnico\Aluno;
            use MeuApp\Superior\Aluno as AlunoSuperior;

            # criando objetos
            $a1 = new Aluno("Augusto");
            $a2 = new AlunoSuperior("Josefina");
            ?>
        </main>
    </div>
</body>

</html>