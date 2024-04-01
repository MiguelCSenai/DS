#include <stdio.h>

void main(){

    int i=0, iNum, iPar=0, iImpar=0;

    while(i != 1){

        printf("Digite um numero: ");
        scanf("%d", &iNum);

        if(iNum == 1000){

            i++;

        }
        if(iNum % 2 == 0 && iNum != 1000){

            iPar += iNum;

        }else if(iNum % 2 != 0 && iNum != 1000){

            iImpar += iNum;

        }

    }

    printf("\nA soma dos numeros digitados:\n\nPares: %d             Impares: %d", iPar, iImpar);

}
