#include <stdio.h>

void main(){

    int i, iNum = 0, iMult = 0;

        printf("Digite um numero: ");
        scanf("%d", &iNum);

    for (i = 1; i <= 10; i++){


        iMult = iNum * i;

        if(i == 1){

            printf("\nTabuada do numero %d\n\n",iNum, i, iMult);

        }

        printf("%d - %d\n", i, iMult);

    }
}
