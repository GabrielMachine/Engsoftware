#include<iostream>
#include<string>

using namespace std;
class aluno{

private:

    string nome_aluno;
    int cpf;
    
public:
    void cadastra_aluno(){
        cin>>cpf;
        getline(cin,nome_aluno);

    }

    string get_nome_aluno(){
        return nome_aluno;
    }

};
class exercicio{
private:
    int codexercicio;
    string nome_exercicio;
public:
    void cadastra_exercicio(){
        std::cin>>codexercicio;
        getline(cin,nome_exercicio);
       
    }
    string get_nome_exercicio(){

        return nome_exercicio;
    }
};
class CatalogoAluno{
private:
    aluno A[100];
    
public:
    void find_aluno(string nome_aluno){
        for(int i=0;i<100;i++){
            if(nome_aluno.compare(A[i].get_nome_aluno())){
                return A[i].get_nome_aluno();
            }
        }
    }
};
class CatalogoExercicio{
private:
    exercicio E[100];
    
public:
    void find_exercicio(string nome_exercicio){
        for(int i=0;i<100;i++){
            if(nome_exercicio.compare(E[i].get_nome_exercicio())){
                return E[i].get_nome_exercicio();
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
void exerc_fazer(string nome_exercicio){

    if(nome_exercicio.compare(CE.find_exercicio(nome_exercicio))){
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
            
            int fim;
            while(fim=0){
                    FE.exerc_fazer(nome_exercicio);
            }
        }
    }
};
