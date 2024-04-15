#include <stdio.h>

void main(){

    int iNum = 0, iFat = 1, i = 0;

    printf("Digite o valor desejado: ");
    scanf("%d", &iNum);

    for(i=iNum; i > 0; i--){

        iFat*=i;

    }

    printf("\nO fatorial de %d eh %d",iNum, iFat);

}
