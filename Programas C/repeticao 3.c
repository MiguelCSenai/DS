#include <stdio.h>

void main(){

    int iA = 0, iB = 0, i = 0, iSoma = 0;

    printf("Digite o primeiro valor: ");
    scanf("%d", &iA);

    printf("Digite o segundo valor: ");
    scanf("%d", &iB);

    for( i = iA; i<=iB; i++){

        iSoma +=i;

    }

    printf("O valor da soma dos numeros entre %d e %d, sera %d", iA, iB, iSoma);


}
