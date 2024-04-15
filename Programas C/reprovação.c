#include <stdio.h>
#include <conio.h>

void main(){

    float fNotaf = 0, fNota1 = 0, fNota2 = 0;

    printf("Digite a  primeira nota do(a) aluno(a) *Kamilly dos Santos Pontes*: ");
    scanf("%f", &fNota1);

    printf("digite a segunda nota: ");
    scanf("%f", &fNota2);

    fNotaf = (fNota1 + fNota2) / 2;

    if(fNotaf >= 6){

        printf("Aluno Aprovado");

    }

    else{

        system("color 5");
        printf("Aluno Reprovado");

    }

}
