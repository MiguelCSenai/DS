#include <stdio.h>

void main(){

    int iIdade = 0;

    printf("Digite sua idade: ");
    scanf("%d", &iIdade);

    if(iIdade < 4){

        printf("Categoria Baby");

    }

    else if(iIdade >= 4 && iIdade <= 8){

        printf("Categoria Pre-Mirim");

    }

    else if(iIdade >= 9 && iIdade <= 12){

        printf("Categoria Mirim");

    }

    else if(iIdade >= 13 && iIdade <= 15){

        printf("Categoria Petiz");

    }

    else if(iIdade > 15){

        printf("Categoria Profissional");

    }
    else if(iIdade > 100 || iIdade < 1){

        printf("Idade Invalida");

    }

}
