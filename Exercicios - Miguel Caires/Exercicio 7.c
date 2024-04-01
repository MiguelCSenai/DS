#include <stdio.h>

void main(){

    int i = 1;
    float fNota = 0, fMedia = 0;

    do{

        printf("\nDigite a %da nota: ", i);
        scanf("%f", &fNota);

        if(fNota >= 0 && fNota <= 10){

            fMedia += fNota;
            i++;

        }else{

            printf("Nota invalida!\n(Apenas valores positivos menores que 10!)\n");

        }

    }while(i<=4);

    fMedia /= 4;

    printf("A media final do aluno eh %.1f\n", fMedia);
    if(fMedia >= 6){

        printf("Aprovado");
        system("color 0a");

    }else{

        printf("Reprovado");
        system("color 0c");

    }

}
