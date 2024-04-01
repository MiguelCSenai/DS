#include <stdio.h>

void main(){

    int iMenu = 0, i = 0, ipt = 0, iVlr = 0, iMaior = 0;

    printf("MENU EXERCICIOS DO WHILE\n\n\n");

    printf("1 - 10 a 100\n\n2 - Loop ate 0\n\n3 - Maior numero\n\n");
    scanf("%d", &iMenu);

    do{

    switch(iMenu){

    case 1:

        i = 10;

        do{

            printf("%d\n", i);
            i++;

        }while(i <= 100);
    break;

    case 2:

        do{

            printf("Digite um numero\n(0 para sair)\n");
            scanf("%d", &ipt);

            if(ipt != 0){

                printf("O numero digitado foi: %d\n\n", ipt);

            }

        }while(ipt != 0);

        printf("O progama foi encerrado.");

    break;

    case 3:

        i = 1, iVlr = 0, iMaior = 0;

        do{

            printf("\n\nDigite o numero %d: ", i);
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

    break;

    }
    }while(iMenu > 0);

}
