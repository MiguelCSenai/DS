#include <stdio.h>

void main(){

    float fLado1 = 0, fLado2 = 0, fLado3 = 0;

    printf("Digite a medida do primeiro lado do triangulo: ");
    scanf("%f", &fLado1);

    printf("Digite a medida do segundo lado do triangulo: ");
    scanf("%f", &fLado2);

    printf("Digite a medida do terceiro lado do triangulo: ");
    scanf("%f", &fLado3);

    if(fLado1 == fLado2 && fLado3 == fLado1){

        printf("O triangulo eh equilatero");

    }
    else if(fLado1 != fLado2 && fLado2 != fLado3 && fLado1 != fLado3){

        printf("O triangulo eh escaleno");

    }
    else{

        printf("O triangulo eh isoceles");

    }

}
