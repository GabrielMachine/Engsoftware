

<?php

include "exercicio.class.php";

 class catalogoexercicio{


   private $exercicios= array();
    

    function __construct()

    {
        
        
        $this->exercicios[]=new exercicio(1, "Supino reto", "Colocar em 90 graus o braço com a superficie.");
        $this->exercicios[]=new exercicio(2, "Esteira ", "-");
        $this->exercicios[]=new exercicio(3, "Remada alta ",  "Não forçar a coluna.");

    }

    function procura($codexe){
        foreach($this->exercicios as $exercicio)
        {
            if($exercicio->getcod()==$codexe)
            {
                return $exercicio;
            }
        }

    }
    function getexercicios()
    {
        return $this->exercicios;
    }

 }



 ?>

