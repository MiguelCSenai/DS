#include <stdio.h>

void main(){

    int i;

    for(i=0; i <= 200;i++){

        if(i %2 == 0){

            printf("\nPar: %d", i);

        }

        if(i %2 == 1){

            printf("\nImpar: %d", i);

        }

    }

}
