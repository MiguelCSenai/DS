#include <stdio.h>

void main(){

    int ipt = 0;

    do{

        printf("Digite um numero\n(0 para sair)\n");
        scanf("%d", &ipt);

        if(ipt != 0){

            printf("O numero digitado foi: %d\n\n", ipt);

        }

    }while(ipt != 0);

    printf("O progama foi encerrado.");

}
