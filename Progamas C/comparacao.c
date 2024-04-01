#include <stdio.h>

void main(){

    int iValor1 = 0, iValor2 = 0;

    printf("Digite o primeiro numero: ");
    scanf("%d", &iValor1);

    printf("Agora escreva o segundo numero: ");
    scanf("%d", &iValor2);

    if(iValor1 > iValor2){

        printf("O primeiro valor (%d) eh maior\nE o segundo valor (%d) eh menor", iValor1, iValor2);

    }
    else if(iValor1 < iValor2){

        printf("O segundo valor (%d) eh maior\nE o primeiro valor (%d) eh menor", iValor2, iValor1);

    }
    else{

        printf("tem q ser valor diferente paizao");

    }

}
