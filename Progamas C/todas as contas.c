#include <stdio.h>

void main(){

    float fValor1 = 0, fValor2 = 0, fSoma = 0, fSub = 0, fDiv = 0, fMul = 0;

    printf("Digite o primeiro valor:");
    scanf ("%f",&fValor1);

    printf("Digite o segundo valor:");
    scanf ("%f",&fValor2);

    fSoma = fValor1 + fValor2;
    fSub = fValor1 - fValor2;
    fDiv = fValor1 / fValor2;
    fMul = fValor1 * fValor2;

    printf(" Soma: %.0f\n Subtracao: %.0f\n Divisao: %0.2f\n Multiplicacao: %0.0f", fSoma, fSub, fDiv, fMul);

}
