<?php
include 'CatalogoAlunos.class.php';
include 'Fazer_exercicio.class.php';

class controladora{
    private $catalogo_alunos;
    private $item_exercicio;
    public function inserir_item_exercicio($nome_aluno,$nome_exercicio,$repeticoes,$carga,$tempo){
        $this->catalogo_alunos=new catalogo_aluno;
        $this->item_exercicio=new FazerExercicio;
        if($nome_aluno==$this->catalogo_alunos->find_aluno($nome_aluno)){
            $this->item_exercicio->insere_exercicio($nome_exercicio,$repeticoes,$carga,$tempo);
        }
    }
}

?>