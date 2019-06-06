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
$aluno = new Aluno;
$aluno->cadastra_aluno($_POST["nomeU"],$_POST["cpfU"]);
var_dump($aluno->get_aluno());
?>

