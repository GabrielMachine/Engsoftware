<?php


class serieitem{

    public $exercicio;
    public $repeticoes;
    public $carga;
    public $tempo;



    public function __construct($exercicio,$repeticoes,$carga,$tempo)

    {
        $this->exercicio=$exercicio;
        $this->repeticoes=$repeticoes;
        $this->carga=$carga;
        $this->tempo=$tempo;

    }

    public function getexercicio()
    {
        return $this->exercicio;
    }
    public function getrepeticoes()
    {
        return $this->repeticoes;
    }
    public function getcarga()
    {
        return $this->carga;
    }
    public function gettempo()
    {
        return $this->carga;
    }
}
?>