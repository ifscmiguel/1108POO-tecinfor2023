<?php

namespace MeuApp\Tecnico;

use MeuApp\Lib\Conexao;

class Aluno
{

    public $id;
    public $nome;
    public $email;
    public $senha;

    # método construtor
    function __construct($id = null)
    {
        if ($id) {
            $conn = new Conexao();
            $aluno = $conn->query("SELECT * FROM usuario WHERE id=$id")->fetch();
            if ($aluno) {
                $this->id = $aluno['id'];
                $this->nome = $aluno['nome'];
                $this->email = $aluno['email'];
                $this->senha = $aluno['senha'];
            }
        }
    }
}
