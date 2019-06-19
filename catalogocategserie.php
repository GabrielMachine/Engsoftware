<?php

    include "categoriaserie.class.php";
   
    class catalogocategserie{


        private $scategorias=array();


        public function __construct()
        {
            $this->scategorias[]=new categoriaserie("Perder peso","Foco em perder gorduras e ganho de massa muscular");
            $this->scategorias[]=new categoriaserie("Ganho de massa muscular","Foco em ganhar peso controlado sem excesso de gorduras e ganho de massa muscular corporal");
            $this->scategorias[]=new categoriaserie("Ganho de massa corporal","Dieta bem flexivel com foco em carboidratos devido ao IMC muito abaixo do peso ");
        }

        public function procura($nomecategoria)
        {

            foreach($this->scategorias as $categoria)
            {
                if($categoria->getnome()==$nomecategoria)
                {
                    return $categoria;
                }

            }

        }
        public function getcategorias()
        {
            return $this->scategorias;
        }
    }

    ?>
