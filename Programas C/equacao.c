#include <stdio.h>

void main(){

    float fA=0, fB=0, fC=0;

    float fCalculo=0;

    printf("Digite o primeiro valor:");
    scanf("%f",&fA);

    printf("Digite o segundo valor:");
    scanf("%f",&fB);

    printf("Digite o terceiro valor:");
    scanf("%f",&fC);

    fCalculo = (fA+fB)/fC;

    printf("O resultado de (A+B)/C sera %.2f", fCalculo);

}
