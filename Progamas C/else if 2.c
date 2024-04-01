#include <stdio.h>

void main(){

    int iDia = 0;

    printf("Digite um numero de 1 de 7: ");
    scanf("%d", &iDia);

    if(iDia == 1){

        printf("O dia eh domingo");

    }
    else if(iDia == 2){

        printf("O dia eh Segunda-Feira");

    }
    else if(iDia == 3){

        printf("O dia eh Tersa-Feira");

    }
    else if(iDia == 4){

        printf("O dia eh Quarta-Feira");

    }
    else if(iDia == 5){

        printf("O dia eh Quinta-Feira");

    }
    else if(iDia == 6){

        printf("O dia eh Sexta-Feira");

    }
    else if(iDia == 7){

        printf("O dia eh Sabado");

    }
    else{

        printf("tem que ser entre 1 e 7 bobao");

    }

}
