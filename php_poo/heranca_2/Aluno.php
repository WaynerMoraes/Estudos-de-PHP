<?php
include_once("./Cadastro.php");


class Aluno extends Cadastro
{
    public $periodo;
    public $turno;
    public $curso; 

    public function verAluno()


    {
        $dado = "Periodo: {$this -> periodo} <br>";
        $dado .= "Turno: {$this -> turno} <br>";
        $dado .= "Curso: {$this -> curso} <br>";
        $dado .= "Nome: {$this -> nome} <br>";
        $dado .= "Idade: {$this -> idade}";

        return $dado;

        exit();
    }

}