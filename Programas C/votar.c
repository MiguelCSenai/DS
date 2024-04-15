#include <stdio.h>

void main(){

    int iAno = 0, iIdade = 0;

    printf("Digite seu ano de nascimento: ");
    scanf("%d", &iAno);

    iIdade = 2024 - iAno;

    if(iIdade >= 16){

        printf("Voce pode votar ;)");

    }
    else{

        printf("Voce nao pode votar o_o");

    }

}
