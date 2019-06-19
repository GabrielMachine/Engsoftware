<?php

include "serieitem.class.php";

class serie{

    public $data;
    public $serieitens=array();
    public $categoria;
    public $instrutor;
    
    public function __construct($categoria,$instrutor)

    {
        $this->data=date("d-m-Y");
        $this->categoria=$categoria;
        $this->instrutor=$instrutor;
        
    }

    public function getdata()
    {
        return $this->data;
    }
    
    public function insereserieitem($exercicio,$repeticoes,$tempo,$carga)
    {

        $this->serieitens[]=new serieitem($exercicio,$repeticoes,$tempo,$carga);

    }

    public function getinstrutor()
    {
        return $this->instrutor;
    }
    public function getserieitens()
    {
        return $this->serieitens;
    }

}




