//Faça a leitura de um numero inteiro e se ele for maior que 50, mostre uma msg dizendo isso

#include <stdio.h>

void main(){

    int iNumero = 0;

    printf("Digite um numero menor que 50: ");
    scanf("%d", &iNumero);

    if(iNumero > 50){

        printf("Esse numero eh maior que 50!!!");

    }

}
