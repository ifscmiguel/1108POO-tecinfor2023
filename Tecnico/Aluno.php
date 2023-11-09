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
            else{
                die('registro não encontrado');
            }
        }
    }

    function salvar(){
        $conn = new Conexao();
        # criptografar a senha antes de salvar
        $this->senha = password_hash($this->senha, PASSWORD_BCRYPT);
        $sql = "INSERT INTO usuario (nome, email, senha) ";
        $sql .= "VALUES('$this->nome', '$this->email', '$this->senha')";
        $r = $conn->query($sql);
        # em caso do id ser auto_increment
        if($r){
            $this->id = $conn->lastInsertId();
        }
        return $r;
    }

    function atualizar(){
        $conn = new Conexao();
        $sql = "UPDATE usuario SET nome='$this->nome', email='$this->email', senha='$this->senha' WHERE id=$this->id";
        return $conn->query($sql);
    }

    function deletar(){
        $conn = new Conexao();
        return $conn->query("DELETE FROM usuario WHERE id=$this->id");
    }
}
