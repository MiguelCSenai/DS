#include <stdio.h>

void main(){

    int i=1, iEnd=0, iNum=0, iTudo = 0;
    float fMedia = 0;

    while(iEnd != 1){

        printf("Digite o %do numero para que seja feito uma media(numero negativo para sair): ", i);
        scanf("%d", &iNum);

        if(iNum < 0){

            iEnd++;

        }

        if(iNum >= 0){

            iTudo += iNum;
            i++;

        }


    }
    i--;

    fMedia = (float)iTudo/(float)i;

    printf("A media dos numeros digitados foi de: %.1f", fMedia);

}
