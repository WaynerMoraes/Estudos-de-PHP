<?php

include_once('./Conn.php');
include_once('./index.php');

class Inserir_usuarios{

    public $connect;
    public $cadastrar;

    public $dados;
    




    public function cadastrar(){  

       


        if(!empty($this -> dados['enviar'])){


            if(!$this -> dados['nome'] || !$this -> dados['idade'] || !$this -> dados['email']){

                

                echo "Complete os campos";


            }else{
                
                
        
                try{    
                    
                    $conn = new Conn();
                    $this -> connect = $conn -> conectar();                    

                    $querylistar = "INSERT INTO usuarios2 (nome, idade,email) VALUES (:nome, :idade,:email)";                    

                    $this -> cadastrar = $this -> connect -> prepare($querylistar);

                    $this -> cadastrar -> bindParam(':nome',$this -> dados['nome'],PDO::PARAM_STR);

                    $this -> cadastrar -> bindParam(':idade', $this -> dados['idade'], PDO::PARAM_INT);

                    $this -> cadastrar -> bindParam(':email', $this -> dados['email'], 
                    PDO::PARAM_STR);

                    $this -> cadastrar -> execute();

                    if($this -> cadastrar -> rowCount()){
                        
                        
                    }else{
                        return "Cadastro não realizado.";
                    }

                    

                }catch(Exception $err){

                    return "Erro " . $err -> getMessage();

                }
            }
        }
    }
}