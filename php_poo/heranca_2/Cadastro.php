<?php 

class Cadastro
{
    public $nome;
    public $idade;
    public $sexo;
    


    public function mostrarCadastro()
    {
        $dado = "Nome: {$this -> nome} <br>";
        $dado .= "Idade: {$this -> idade} <br>";
        $dado .= "Sexo {$this -> sexo}";
        


        return $dado;
        exit();
    }
}