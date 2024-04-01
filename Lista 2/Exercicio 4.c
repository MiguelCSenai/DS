#include <stdio.h>

void main(){

    float fHoras = 0, fSalHor = 0, fSalTotal = 0;

    printf("Digite quanto eh o salario por hora: ");
    scanf("%f", &fSalHor);
    printf("Digite quantas horas foram trabalhadas: ");
    scanf("%f", &fHoras);

    fSalTotal = fSalHor * fHoras;

    printf("O salario sera de %.2f Reais", fSalTotal);

}
