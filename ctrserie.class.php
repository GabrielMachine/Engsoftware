<?php

include "catalogoexercicio.php";
class ctrserie{

    private $catalogoexercicio;
    private $serie;

    public function __construct($serie)
    {
        $this->catalogoexercicio=new catalogoexercicio();
        $this->serie=$serie;
    }

    public function insereserieitem($codexe,$repeticoes,$tempo,$carga){


    $exercicio=($this->catalogoexercicio)->procura($codexe);
    $i=true;
    foreach( $this->serie->getserieitens() as $serieitem)
    {
        if($serieitem->getexercicio()==$exercicio)
        {
        $i=false;
        }
        $i=(true && $i);
        

    }
    if($i==true)
    {
    ($this->serie)->insereserieitem($exercicio,$repeticoes,$tempo,$carga);
    }
    

    
    }
}
?>

