#include <stdio.h>

void main(){

    float fRaio = 0, fHeight = 0, fArea = 0, fVol = 0;

    printf("Digite o raio do cilindro em cm: ");
    scanf("%f", &fRaio);

    printf("Digite a altura do cilindro em cm: ");
    scanf("%f", &fHeight);

    fArea = 2 * 3.14 * fRaio * (fRaio + fHeight);
    fVol = 3.14 * (fRaio * fRaio) * fHeight;

    printf("A area do cilindro eh de %.2f, e o volume eh de %.2f.", fArea, fVol);

}
