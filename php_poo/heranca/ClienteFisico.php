<?php

class ClienteFisico extends Cliente
{
    public $nome;
    public $cpf;

    public function clienteFisico(){

        $dado = "Nome: {$this -> nome} <br>";
        $dado .= "CPF: {$this -> cpf} <br>";
        $dado .= "Rua: {$this -> logradouro} <br>";
        $dado .= "Bairro: {$this -> bairro}";
        return $dado;
    }
}