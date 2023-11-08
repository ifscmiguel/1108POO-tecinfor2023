<?php

namespace MeuApp\Tecnico;

class Aluno{

    private $nome;

    # método construtor
    function __construct($nome)
    {
        $this->nome = $nome;
        echo "<p>Sou um aluno do técnico, meu nome é $this->nome</p>";
    }
}