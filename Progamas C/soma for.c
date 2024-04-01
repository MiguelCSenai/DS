#include <stdio.h>

void main(){

    int i;
    int iSoma = 0;

    for (i=10; i >= 3; i--){

        printf("%d\n", i);

        iSoma = iSoma += i;

    }

        printf("\n");

        printf("A soma sera %d", iSoma);

}
