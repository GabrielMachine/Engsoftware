<?php

    include "catalogocategserie.php";
    include "catalogoinstrutor.php";
    include "catalogoaluno.php";
    include "aluno.class.php";
   
   
    class ctraluno{

        private $catalogocategserie;
        private $catalogoaluno;
        private $catalogoinstrutor;

        public function __construct()

        {
            $this->catalogocategserie=new catalogocategserie();
            $this->catalogoaluno=new catalogoaluno();
            $this->catalogoinstrutor=new catalogoinstrutor();

        }

        public function criaserie($matraluno,$cpfinstr,$nomecategoria)

        {
            
            $objaluno=($this->catalogoaluno)->procura($matraluno);
            $objinstrutor=($this->catalogoinstrutor)->procura($cpfinstr);
            $objcategoria=($this->catalogocategserie)->procura($nomecategoria);
        
            if($objaluno==null)
            {
                echo "aluno não encontrado";
                return null;
            }
            if($objinstrutor==null)
            {
                echo "instrutor não encontrado";
                return null;
            }

            $s=$objaluno->criaserie($objcategoria,$objinstrutor);
            return $s;  

        }

    }

    ?>

    


