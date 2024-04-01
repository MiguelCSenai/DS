#include <stdio.h>

void main(){

    float IMC = 0, fPeso = 0, fHeight = 0;

    printf("Digite seu peso: ");
    scanf("%f", &fPeso);

    printf("Digite sua altura: ");
    scanf("%f", &fHeight);

    IMC = fPeso / (fHeight * fHeight);

    if(IMC < 18.5){

        printf("seu IMC eh de %.1f e sua condicao eh:\nAbaixo do Peso.", IMC);

    }
    else if(IMC < 25){

        printf("seu IMC eh de %.1f e sua condicao eh:\nPeso Normal.", IMC);

    }
    else if(IMC < 30){

        printf("seu IMC eh de %.1f e sua condicao eh:\nAcima do Peso.", IMC);

    }
    else{

        printf("seu IMC eh de %.1f e sua condicao eh:\n Obesidade.", IMC);

    }

}
