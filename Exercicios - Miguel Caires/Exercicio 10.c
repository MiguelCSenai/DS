#include <stdio.h>

void main(){

    int i = 0, iNum = 0, iH =0, iEnd = 0;

printf(" H = (1 x 1) + (2 x 2) + (3 x 3) +...+ (n x n)\n");

    while(iEnd != 1){

        printf("\nDigite um numero: ");
        scanf("%d", &iNum);

        if(iNum == 0){

            iEnd++;

        }

        while(i <= iNum){


            iH += i*i;
            i++;

        }
        printf("\nH = %d", iH);

    }
    printf("\n\nProgama Encerrado");

}
