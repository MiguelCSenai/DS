#include <stdio.h>

void main(){

    float fMetros = 0, fCm = 0;

    printf("Digite um valor em m para ser transformado em cm: ");
    scanf("%f", &fMetros);

    fCm = fMetros * 100;

    printf("%.2fcm", fCm);

}
