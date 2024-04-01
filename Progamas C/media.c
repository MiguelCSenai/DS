#include <stdio.h>
#include <stdlib.h>

void main(){

    int iVlr = 0, i = 1, iSoma = 0, iMedia = 0;

    while(i<11){
    printf("Digite o valor numero %d: ", i);
    scanf("%d", &iVlr);
    iSoma += iVlr;
    i++;
    }
    printf("A media sera %.2f",(float)iSoma / 10.0);



}
