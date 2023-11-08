<?php
namespace MeuApp\Superior;

class Aluno{

    private $nome;

    # método construtor
    function __construct($nome)
    {
        $this->nome = $nome;
        echo "<p>Sou um aluno do superior, meu nome é $this->nome</p>";
    }
}