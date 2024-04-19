<?php

include_once("./AnimalEspecie.php");

class Caracteristica extends AnimalEspecie
{
    public $tamanho;
    public $cor;

    public function mostrarCaracteristica($tamanho, $cor)
    {        

        $arr = [
            "Raça" => $this -> raca,
            "Habitate" => $this -> habitat,
            "Especie" => $this -> especie,
            "Tamanho" => $this -> tamanho = $tamanho,
            "Cor" => $this -> cor = $cor
        ];

        return $arr;
    }
}