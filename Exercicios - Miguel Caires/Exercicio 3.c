#include <stdio.h>

void main(){

int iNum=1, iTabuada=0, iResult = 0;

    for(iNum=1;iNum<=15;iNum++){

        printf("\n\nTABOADA DO %d\n\n", iNum);

        while(iTabuada <=10){

        iResult = iNum * iTabuada;

        printf("%dx%d - %d\n\n", iNum, iTabuada, iResult);
        iTabuada++;
        }
        iTabuada = 0;

    }

    }
