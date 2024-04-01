#include <stdio.h>

void main(){

int iNum = 0, i = 1, iDiv = 0;

    printf("Digite um numero: ");
    scanf("%d", &iNum);

    do{

        if(iNum%i == 0){

            iDiv++;

        }

        i++;

    }while(i <= iNum);

    if(iDiv != 2){

        printf("%d nao eh primo", iNum);
    }else{

        printf("%d eh primo", iNum);

    }

}
