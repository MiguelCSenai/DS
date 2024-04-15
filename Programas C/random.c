#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

void main(){

    setlocale(LC_ALL, "Portuguese");

    srand(time (NULL));

    int iNumero_Secreto = rand()&100 + 1;
    int iTentativas = 0, iPalpite = 0;

    do{

        printf("Dê o seu palpite(entre 1 e 100): ");
        scanf("%d", &iPalpite);

        iTentativas++;

        if(iPalpite<iNumero_Secreto){

            printf("Tente um numero maior\n");

        }else if(iPalpite > iNumero_Secreto){

            printf("Tente um numero menor\n");

        }
        else{

            printf("Parabéns!!! Você acertou!");

        }

    }while(iPalpite != iNumero_Secreto);
}
