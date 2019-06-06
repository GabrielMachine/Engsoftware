<?php
    class Aluno{
        private $nome_aluno;
        private $cpf_aluno;
        public function cadastra_aluno($nome_aluno,$cpf_aluno){
            if($_POST["escolha"]=="aluno"){
                $this->nome_aluno=$nome_aluno;
                $this->cpf_aluno=$cpf_aluno;
            }
        }
        public function get_aluno(){
            return $this->nome_aluno;
        }
    }
    class Instrutor{
        private $nome_instrutor;
        private $cpf_instrutor;
        public function cadastra_instrutor($nome_instrutor,$cpf_instrutor){
            if($_POST["escolha"]=="instrutor"){
                $this->nome_aluno=$nome_instrutor;
                $this->cpf_aluno=$cpf_instrutor;
            }
        }
        public function get_instrutor(){
            return $this->nome_instrutor;
        }
    }
$aluno = new Aluno;
$aluno->cadastra_aluno($_POST["nomeU"],$_POST["cpfU"]);
var_dump($aluno->get_aluno());
?>

