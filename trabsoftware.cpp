#include<iostream>
#include<string>

using namespace std;
class aluno{

private:

    string nome_aluno;
    int cpf;
    
public:
    void cadastra_aluno(){
        cout<<"Cadastre o CPF do aluno:";
        cin>>cpf;
        cout<<"Cadastre o nome do aluno:";
        getline(cin,nome_aluno);
        getline(cin,nome_aluno);

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
        cout<<"Cadastre a matrícula do instrutor:";
        cin>>matricula_instrutor;
        cout<<"Cadastre o nome do instrutor:";
        getline(cin,nome_instrutor);
        getline(cin,nome_instrutor);
    }

    int get_instrutor(){
        return matricula_instrutor;
    }

};

class exercicio{
private:
    int codigo_exercicio;
    string nome_exercicio;
public:
    void cadastra_exercicio(){
        cout<<"cadastre o codigo do exercicio:";
        cin>>codigo_exercicio;
        cout<<"Cadastre o nome do exercício:";
        getline(cin,nome_exercicio);
        getline(cin,nome_exercicio);   
    }
    int get_exercicio(){

        return codigo_exercicio;
    }
};
class item_exercicio{
private:
    int repeticoes;
    int tempo;
    int carga;
    exercicio E[100];
public:
    void incluir_item_exercicio(int codigo_exercicio,exercicio e[]){
    for(int i=0;i<100;i++){
        if(codigo_exercicio==e[i].get_exercicio()){
            cout<<"número de repetições:";
            cin>>repeticoes;
            cout<<"Tempo de exercicio";
            cin>>tempo;
            cout<<"carga do exercicio:";
            cin>>carga;
        }
    }
}
};
class controladora_serie{
private:
    aluno A[100];
    item_exercicio IE;
    exercicio E[100];
public:
    void incluir_exercicio_serie(int codigo_aluno,int codigo_exercicio,aluno a[], exercicio e[]){
        for(int i=0;i<100;i++){
        if(codigo_aluno==a[i].get_aluno()){
                IE.incluir_item_exercicio(codigo_exercicio,e);
        }
        }
    }
};
class serie{
private:
    aluno A[100];
    exercicio E[100];
    item_exercicio IE[20];
    controladora_serie CE;
    instrutor I[100];
public:
    void nova_serie(int codigo_aluno,int matricula_instrutor,aluno a[], exercicio e[],instrutor i[]){
        for(int j; j<100;j++){
            if(matricula_instrutor==i[j].get_instrutor()){
                int inserir_exercicio;
                int codigo_exercicio;
                cout<<"digite 1 para inserir um exercicio:";
                cin>>inserir_exercicio;
                while(inserir_exercicio==1){
                    cout<<"insira o código do exercício:";
                    cin>>codigo_exercicio;
                    CE.incluir_exercicio_serie(codigo_aluno,codigo_exercicio,a,e);
                    cout<<"inserir outro exercicio?";
                    cin>>inserir_exercicio;
                }
            }
        }
        cout<<"cadastro finalizado";
    }    
};
int main(){
    //cadastrando alguns alunos:
    aluno A[100];
    for(int i=0;i<1;i++){
        A[i].cadastra_aluno();
    }
    //cadastrando alguns exercicios:
    
    exercicio E[100];
    for(int i=0;i<2;i++){
        E[i].cadastra_exercicio();
    }
    //cadastrando q instrutores:
    instrutor I[100];//número maximo de instutores que podem ser cadastrados
    for(int i=0;i<1;i++){
        I[i].cadastra_instrutor();
    }
    //criando serie
    serie S;
    S.nova_serie(1234,112,A,E,I);
    
}