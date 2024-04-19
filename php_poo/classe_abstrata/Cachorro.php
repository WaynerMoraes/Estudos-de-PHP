<?php
require_once("./AnimalEspecie.php");

class Cachorro extends AnimalEspecie
{
    public $tamanho;
    public $cor;

    public function verCachorro()
    {

        
        $arr = [
            "Especie" => $this -> especie,
            "Habitate" => $this -> habitat,
            "Raça" => $this -> raca,
            "Tamanho" => $this -> tamanho,
            "Cor" => $this -> cor
        ];

        return $arr;
    }
}