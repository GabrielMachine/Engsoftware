<?php

class instrutor{

    private $cpf;
    private $nome;
    private $endereco;
    private $idade;


    public function __construct($cpf,$nome,$endereco,$idade)

    {

        $this->cpf=$cpf;
        $this->nome=$nome;
        $this->endereco=$endereco;
        $this->idade=$idade;

    }

    function getcpf()
    {

        return $this->cpf;

    }

    function getnome()
    {

        return $this->nome;

    }


}
?>