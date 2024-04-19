<?php

class ClienteEmpresa extends Cliente
{
    public $nomeFantasia;
    public $cnpj;

    public function clienteEmpresa()
    {
        $dado = "Empresa: {$this -> nomeFantasia} <br>";
        $dado .= "CNPJ: {$this -> cnpj}<br>";
        $dado .= "Rua: {$this -> logradouro}<br>";
        $dado .= "Bairro {$this -> bairro}<br>";
        return $dado;
    }
}