<?php



 class catalogoaluno{

    private $alunos=array();

    public function __construct()
    {
        $this->alunos[]=new aluno(1,"Johnson","Rua Alcantra dos Pomares",32);
        $this->alunos[]=new aluno(2,"Helen","Rua Marechal da Fonseca",32);
        $this->alunos[]=new aluno(3,"Yasmin","Rua Bernardino de Carvalho",18);
    }
    public function procura($matr)

    {
        foreach($this->alunos as $aluno)
        {
            if($aluno->getmatr()==$matr)
            {
                return $aluno;
            }
        }

        
    }



 }
 ?>

