<?php


    class categoriaserie{

        private $nome;
        private $desc;

        public function __construct($nome,$desc)
        {
           
           $this->nome=$nome;
           $this->desc=$desc;

        }

        public function getnome()
        {
            return $this->nome;

        }
        public function getdesc()
        {
            return $this->desc;
        }
    

    }

?>