#include<iostream>
#include<string>

class aluno{

private:

    char nome_aluno[100];
    int cpf;
    
public:
    void cadastra_aluno(){
        std::cin>>cpf;
        std::cin.getline(nome,100);

    }

    char get_nome_aluno(){
        return nome_aluno;
    }

};
class exercicio{
private:
    int codexercicio;
    char nomeexercicio[100];
public:
    void cadastra_exercicio(){
        std::cin>>codexercicio;
        std::cin.getline(nome,100);
       
    }
    int get_nome_exercicio(){

        return nomeexercicio;
    }
};
class CatalogoAluno{
private:
    aluno A[100];
    
public:
    void find_aluno(char nome_aluno[]){
        for(i=0;i<100;i++){
            if(std::string::compare(nome_aluno,A[i].get_nome_aluno())){
                return A[i].get_nome_aluno();
            }
        }
    }
};
class CatalogoExercicio{
private:
    exercicio E[100];
    
public:
    void find_exercicio(char nome_exercicio[]){
        for(i=0;i<100;i++){
            if(std::string::compare(nome_aluno,E[i].get_nome_aluno())){
                return E[i].get_nome_aluno();
            }
        }
    }
};
class fazer_exercicio{
private:
int repeticoes;
int tempo;
int carga;
CatalogoExercicio CE;
public:
void exerc_fazer(char nome_exercicio[]){

    if(nome_exercicio==CE.find_exercicio()){
        std::cin>>repeticoes;
        std::cin>>tempo;
        std::cin>>carga;
    }
    
}
};
class controladora_serie{
private:
    CatalogoAluno CA;
    fazer_exercicio FE;
public:
    void incluir_nova_serie(char nome_aluno[],char nome_exercicio[]){
        if(std::string::compare(nome_aluno,CA.find_aluno(nome_aluno))){
            inclua=1;
            int fim;
            while(fim=0){
                    FE.exerc_fazer(nome_exercicio);
            }
        }
    }
};
