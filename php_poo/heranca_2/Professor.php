<?php
    include_once("./Professor.php");


    class Professor extends Cadastro
    {
        public $disciplina;
        public $turno;
        

        public function verProfessor()
        {
            $dado = "Disciplina: {$this -> disciplina} <br>";
            $dado .= "Turno: {$this -> turno} <br>";
            $dado .= "Nome: {$this -> nome} <br>";
            $dado .= "Idade {$this -> idade} <br>";

            return $dado;
            exit();
        }

    }