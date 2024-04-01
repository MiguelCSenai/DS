#include <stdio.h>

void main(){

    int i = 1, iNum = 0, iMenor = 0, iMaior = 0, iEnd = 0;

        while(iEnd != 1){

            printf("(Numero negativo para sair)\nDigite o %do numero:", i);
            scanf("%d", &iNum);

            if(iNum < 0){

                iEnd++;

            }

            if(i== 1){

                iMaior = iNum;
                iMenor = iNum;

            }

            if(iNum > iMaior){

                iMaior = iNum;

            }else if(iNum < iMenor && iNum >= 0){

                iMenor = iNum;

            }
            if(iNum > 0){

                i++;

            }

        }
        printf("Maior Numero digitado: %d\nMenor Numero digitado: %d", iMaior, iMenor);

    }
