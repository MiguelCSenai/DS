#include <stdio.h>

void main(){

    int iNumero = 0;

    printf("Digite um numero: ");
    scanf("%d", &iNumero);

    if(iNumero > 100){

        printf("O numero eh maior que 100");

    } else if(iNumero == 100) {

        printf("O numero eh igual a 100");

    } else {

        printf("O numero eh menor que 100");

    }

}
