<?php

class Usuario{

    public string $nome;
    public int $idade;
    public string $email;

    public function cadastrar($nome, $idade, $email){

        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;

        return "O usuário {$this->nome} tem {$this->idade} anos e seu e-mail é {$this->email}";
    }
}