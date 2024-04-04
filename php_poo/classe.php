<?php

 class usuario{

    public string $nome; 
    
    public function cadastrar($nome){

        $this -> nome = $nome;
        return "{$this -> nome} cadastrado com sucesso!";
    }

}