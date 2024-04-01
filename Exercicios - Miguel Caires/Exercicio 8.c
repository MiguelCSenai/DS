#include <stdio.h>

void main(){
    int i = 1, iIdade = 0, iMaior =0;

    do{

        printf("Digite a idade da %da pessoa: ", i);
        scanf("%d", &iIdade);

        if(iIdade >= 18){

            iMaior++;

        }

        i++;

    }while(i<=10);
    i--;
    printf("%d das %d pessoas são maiores de idade", iMaior, i);


}
