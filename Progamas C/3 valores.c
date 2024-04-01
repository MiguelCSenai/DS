#include <stdio.h>

void main(){

    int iValor1 = 0, iValor2 = 0, iValor3 = 0;

    printf("Escreva o primeiro numero: ");
    scanf("%d", &iValor1);

    printf("Escreva o segundo numero: ");
    scanf("%d", &iValor2);

    printf("Escreva o terceiro numero: ");
    scanf("%d", &iValor3);

    if(iValor1 > iValor2 && iValor2 > iValor3){

        printf("%d\n%d\n%d", iValor1, iValor2, iValor3);

    }
    else if(iValor2 > iValor3 && iValor3 > iValor1){

        printf("%d\n%d\n%d", iValor2, iValor3, iValor1);

    }
    else if(iValor3 > iValor2 && iValor2 > iValor1){

        printf("%d\n%d\n%d", iValor3, iValor2, iValor1);

    }
    else if(iValor1 > iValor3 && iValor3 > iValor2){

        printf("%d\n%d\n%d", iValor1, iValor3, iValor2);

    }
    else if(iValor3 > iValor1 && iValor1 > iValor2){

        printf("%d\n%d\n%d", iValor3, iValor1, iValor2);

    }
    else if(iValor2 > iValor1 && iValor1 > iValor3){

        printf("%d\n%d\n%d", iValor2, iValor1, iValor3);

    }


}
