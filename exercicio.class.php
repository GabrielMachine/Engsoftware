<?php
    class exercicio{
        private $nome_exercicio;
        private $cod_exercicio;
        public function cadastra_exercicio($nome_exercicio,$cod_exercicio){
                $this->nome_aluno=$nome_exercicio;
                $this->cod_exercicio=$cod_exercicio;
            
        }
        public function get_exercicio(){
            return $this->nome_exercicio;
        }
    }
$exercicio = new exercicio;
$exercicio->cadastra_exercicio($_POST["nomeE"],$_POST["cpfE"]);
var_dump($exercicio->get_exercicio());
?>

