<html>
<body>

<?php
    class Aluno{
        private $nome_aluno;
        private $cpf_aluno;
        public function cadastra_aluno(){
            if($_POST["escolha"]=="aluno"){
                $nome_aluno=$_POST["nomeU"];
                echo $nome_aluno;
                $cpf_aluno=$_POST["cpfU"];
            }
        }
        public function get(){
            return $this->$nome_aluno;
        }
    }
echo Aluno::get();
?>


</body>
</html>
