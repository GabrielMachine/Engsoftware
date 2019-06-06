<?php
include 'exercicio.class.php';
class catalogo_exercicios{
    private $exercicios;
    public function montar_catalogo(){
        $this->exercicios=Array();
        for ($i=0; $i<100;$i++){
            $this->exercicios[i]= new exercicio;
            $this->exercicios[i]->get_exercicio();
        }
    }
    public function find_exercicio($nome_exercicio){
        for($i=0;$i<100;$i++){
            if($nome_exercicio==$this->exercicios[i]){
                return $this->exercicios[i];
            }
        }
    }
}


?>