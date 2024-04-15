#include <stdio.h>

void main(){

    int iNumero = 0;

    printf("Digite um numero: ");
    scanf("%d", &iNumero);

    if(iNumero % 2 == 0){

        printf("O numero %d eh par", iNumero);

    } else {

            printf("O numero %d eh impar", iNumero);

    }

}
