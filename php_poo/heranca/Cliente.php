<?php

class Cliente
{
    
    public $logradouro;
    public $bairro;

    public function verEndereco()
    {
        $dado = "Rua: {$this -> logradouro} <br>";
        $dado .= "Bairro: {$this -> bairro}";
        
        return $dado;
    }

}