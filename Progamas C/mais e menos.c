#include <stdio.h>

void main(){

    int iValor = 0, iSoma = 0, iSub = 0;

    printf("Digite um numero para que esse seja somado e subtraido por 1: ");
    scanf("%d", &iValor);

    iSoma = iValor + 1;
    iSub = iValor - 1;

    printf("O resultado do valor somado de 1 eh %d\nO resultado do valor subtraido por 1 eh %d", iSoma, iSub);

}
