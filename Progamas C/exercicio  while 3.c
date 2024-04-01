#include <stdio.h>
#include <stdlib.h>

void main(){

    int iVlr = 0, i = 1, iMaior = 0;

    while(i<11){
    printf("Digite o valor numero %d: ", i);
    scanf("%d", &iVlr);
    if(i==1){

        iMaior = iVlr;

    }
    if(iVlr > iMaior){

        iMaior = iVlr;

    }
    i++;
    }

    printf("O maior numero digitado foi %d", iMaior);

}

