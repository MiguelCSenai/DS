#include <stdio.h>

void main (){

    int iValorA = 0, iValorB = 0, iResultado = 0, iConta = 0;

    printf("Qual tipo de calculo?\n1(+) \n2(-) \n3(/) \n4(*) \n:");
    scanf ("%d",&iConta);

    if(iConta >= 5){

        printf("nem da parceiro, eh pra escolher entre 1 e 4");

    }

    printf("Digite o primeiro valor:");
    scanf ("%d",&iValorA);

    printf("Digite o segundo valor:");
    scanf ("%d",&iValorB);


    if(iConta == 1){

        iResultado = iValorA + iValorB;
        printf("Resultado: %d", iResultado);


    }

    else if(iConta == 2){

        iResultado = iValorA - iValorB;
        printf("Resultado: %d", iResultado);


    }

    else if(iConta == 3){

        iResultado = iValorA / iValorB;
        printf("Resultado: %d", iResultado);

    }

    else{

        iResultado = iValorA * iValorB;
        printf("Resultado: %d", iResultado);

    }



}
