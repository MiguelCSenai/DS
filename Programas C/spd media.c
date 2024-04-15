#include <stdio.h>

void main(){

    float fspd = 0, fdist = 0, ftime = 0;

    printf("Digite a velocidade do carro em km/h: ");
    scanf("%f", &fspd);

    printf("Digite a distancia do trajeto em km: ");
    scanf("%f", &fdist);

    ftime = fdist / fspd;

    printf("Voce chegara ao seu destino em %.2f horas", ftime);

}
