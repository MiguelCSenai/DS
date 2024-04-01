#include <stdio.h>

void main(){

    int i = 1, iVlr = 0, iMaior = 0;

    do{

        printf("\n\nDigite um numero %d: ", i);
        scanf("%d", &iVlr);

        if(iVlr <= 0){

            printf("Numero invalido (Apenas numeros maiores que 0)\n\n");

        }else{

        if(i == 1){

            iMaior = iVlr;

        }
        if(iVlr > iMaior){

            iMaior = iVlr;

        }
        i++;
        }

    }while(i <= 10);

    printf("O maior numero digitado foi: %d", iMaior);

}
