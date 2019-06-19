<?php


include "instrutor.class.php";

class catalogoinstrutor{

    
    private $instrutores=array();


    function __construct()

    {
        
      $this->instrutores[]= new instrutor(44522633423,"aq", "Rua Matin Rocha numero 98",40);
      $this->instrutores[]= new instrutor(17844213279, "Ambrosini", "Rua Nossa Senhora da Guadalupe numero 102",50);
      $this->instrutores[]= new instrutor(33567894327, "Maria", "Rua Joaquim da Fonseica numero 25",33);
    }
    function getnome()

    {
      return $this->nome;

    }
    
    function getcod()

    {
        return $this->codinst;
    }
    function procura($cpf)
    {

        foreach($this->instrutores as $instrutor)
        {
            if($instrutor->getcpf()==$cpf)
            {
                return $instrutor;
            }  
        }    
    }
}
?>



