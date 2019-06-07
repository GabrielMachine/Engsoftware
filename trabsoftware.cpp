#include<iostream>
#include<string>

using namespace std;
class aluno{

private:

    string nome_aluno;
    int cpf;
    
public:
    void cadastra_aluno(){
        cout<<"Cadastre o nome do aluno:";
        getline(cin,nome_aluno);
        cout<<"Cadastre o CPF do aluno:";
        cin>>cpf;

    }

    int get_aluno(){
        return cpf;
    }

};
class instrutor{

private:

    string nome_instrutor;
    int matricula_instrutor;
    
public:
    void cadastra_instrutor(){
        getline(cin,nome_instrutor);
        cin>>matricula_instrutor;
    }

    int get_nome_instrutor(){
        return matricula_instrutor;
    }

};
class exercicio{
private:
    int codigo_exercicio;
    string nome_exercicio;
public:
    void cadastra_exercicio(){
        getline(cin,nome_exercicio);
        std::cin>>codigo_exercicio;
    }
    int get_exercicio(){

        return codigo_exercicio;
    }
};
class CatalogoAluno{
private:
    aluno A[100];
    
public:
    int find_aluno(int cpf_aluno){
        for(int i=0;i<100;i++){
            if(cpf_aluno==A[i].get_aluno()){
                return A[i].get_aluno();
            }
        }
    }
};
class CatalogoExercicio{
private:
    exercicio E[100];
    
public:
    int find_exercicio(int codigo_exercicio){
        for(int i=0;i<100;i++){
            if(codigo_exercicio==E[i].get_exercicio()){
                return E[i].get_exercicio();
            }
        }
    }
};
class item_exercicio{
private:
int repeticoes;
int tempo;
int carga;
CatalogoExercicio CE;
public:
void incluir_item_exercicio(int codigo_exercicio){

    if(codigo_exercicio==CE.find_exercicio(codigo_exercicio)){
        std::cin>>repeticoes;
        std::cin>>tempo;
        std::cin>>carga;
    }
    
}
};
class controladora_serie{
private:
    CatalogoAluno CA;
    item_exercicio IE;
public:
    void incluir_exercicio_serie(int codigo_aluno,int codigo_exercicio){
        if(codigo_aluno==CA.find_aluno(codigo_aluno)){
                IE.incluir_item_exercicio(codigo_exercicio);
        }
    }
};
class serie{
    
};
int main(){
    //cadastrando alguns alunos:
    aluno A[100];
    for(int i=0;i<5;i++){
        A[i].cadastra_aluno();
    }
    //cadastrando alguns exercicios:
    exercicio E[100];
    for(int i=0;i<5;i++){
        E[i].cadastra_exercicio();
    }
    //cadastrando 3 instrutores:
    instrutor I[100];//número maximo de instutores que podem ser cadastrados
    for(int i=0;i<5;i++){
        I[i].cadastra_instrutor();
    }
    CatalogoAluno CA;
    cout<< CA.find_aluno(1234);
}