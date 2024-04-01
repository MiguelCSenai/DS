#include <stdio.h>

void main(){

int i=1, iSoma = 0;

    for(i=0; i <=500; i++){

        if(i % 2 == 1 && i % 3 == 0){

            printf("%d\n", i);

        iSoma += i;
        }


    }

    printf("A soma dos numeros eh de %d", iSoma);

    }


