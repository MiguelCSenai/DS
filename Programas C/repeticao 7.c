#include <stdio.h>

void main(){

    int i;
    char cLetra = ' ';

    for(i=1; i <= 10;i++){

            printf("Digite a letra numero %d: ", i);
            scanf("%c", &cLetra);
            fflush(stdin);

            printf("A letra %d eh %c\n",i , cLetra);

    }

}
