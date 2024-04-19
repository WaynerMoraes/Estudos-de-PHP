<?php

  abstract class AnimalEspecie
  {
    public $especie;
    public $habitat;
    public $raca;
    
    
    public function __construct($especie, $habitat, $raca)
    {
        $arr = [
            "Especie" => $this -> especie = $especie,
            "Habitate" => $this -> habitat = $habitat,
            "Raça" => $this -> raca = $raca            
        ];

        return $arr;
    }
  }  