#include <stdio.h>

void main(){

int iNum = 0, i = 1, iSoma = 0;

    do{

        printf("\nDigite o %do numero: ", i);
        scanf("%d", &iNum);
        if(iNum > 0){

            iSoma += iNum;
            i++;

        }else{

            printf("Numero invalido!\n(Apenas valores positivos)\n");

        }

    }while(i <= 10);

        printf("A soma de todos os numeros foi de %d", iSoma);

}
