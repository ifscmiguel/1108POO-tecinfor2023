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
            <?php
            # faz o require dos arquivos sob demanda
            require 'autoload.php';

            # usar os namespaces
            use MeuApp\Lib\Conexao;
            use MeuApp\Tecnico\Aluno;

            # criando uma conexão orientada a objetos
            $conn = new Conexao();

            # criar um aluno novo
            $a1 = new Aluno();
            $a1->nome = 'Antonio';
            $a1->email = 'antonio@foo.bar';
            echo "<p>meu nome é $a1->nome</p>";

            # buscar um usuario do BD
            $a2 = new Aluno(1);
            echo "<p>meu nome é $a2->nome</p>";


            ?>
        </main>
    </div>
</body>

</html>