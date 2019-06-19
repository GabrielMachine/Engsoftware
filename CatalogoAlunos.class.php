<?php

include 'aluno.class.php';
class catalogo_aluno{
    private $alunos;
    public function montar_catalogo(){
        $this->alunos=array();
    }
    public function adicionar_aluno($cpf_aluno){
        $this->alunos[]=$cpf_aluno;
    }
    public function find_aluno($cpf_aluno){
        foreach($this->alunos as $alunos){
            if($cpf_aluno==$alunos){
                return $alunos;
            }
        }
    }

}
?>