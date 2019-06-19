<?php
    class exercicio{

        private $codexe;
        private $nome;
        private $descricao;
            
        function __construct($codexe,$nome,$descricao)
        {
            $this->codexe=$codexe;
            $this->nome=$nome;
            $this->descricao=$descricao;
        }

       function getnome()

        {
            return $this->nome;
        }
        function getcod()
        {

            return $this->codexe;
        }
        function getdesc()
        {
            return $this->descricao;
        }
    }
?>