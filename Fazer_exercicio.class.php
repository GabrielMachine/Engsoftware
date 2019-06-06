<?php
include 'CatalogoExercicios.class.php';
class FazerExercicio{
    private $fazer;
    private $repeticoes;
    private $tempo;
    private $carga;
    private $exercicio_incluso;
    public function insere_exercicio($nome_exercicio,$repeticoes,$carga,$tempo){
            $this->fazer= new catalogo_exercicios;
            if($nome_exercicio==$this->fazer->find_exercicio($nome_exercicio)){
                $this->exercicio_incluso=$nome_exercicio;
                $this->repeticoes=$repeticoes;
                $this->carga=$carga;
                $this->tempo=$tempo;
            }
    } 
}


?>