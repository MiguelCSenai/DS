#include <stdio.h>

        void main(){

    int i = 1, iVlr = 0, iSoma = 0;

    do{

        printf("\nDigite o numero %d: ", i);
        scanf("%d", &iVlr);

        if(iVlr <= 0){

            printf("Numero invalido (Apenas numeros maiores que 0)\n\n");

        }else{

            iSoma += iVlr;
            i++;

        }

    }while(i <= 10);

    printf("\nA soma dos numeros digitado foi: %d", iSoma);

}


