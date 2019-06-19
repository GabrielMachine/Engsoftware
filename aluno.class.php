<?php


include "serie.class.php";

 class aluno{

        private $matr;
        private $nome;
        private $endereco;
        private $idade;
        private $series = array();
    
    
    public function __construct($matr,$nome,$endereco,$idade)

    {
        $this->matr=$matr;
        $this->nome=$nome;
        $this->endereco=$endereco;
        $this->idade=$idade;
    }
    public function criaserie($categoria,$instrutor)
    {

        $s=new serie($categoria,$instrutor);
        $this->series[]=$s;
        return $s;


    }

    public function getmatr()
    {

        return $this->matr;

    }    


    }

 ?>

   