#include <stdio.h>

void main(){

    int i, iValor = 0, iNeg = 0;

    for(i = 1; i <=5; i++){

        printf("\nDigite o %do valor: ", i);
        scanf("%d", &iValor);

        if(iValor < 0){

            iNeg++;

        }

    }
    i--;
    printf("\n%d dos %d valores digitados sao negativos.", iNeg, i);

}
