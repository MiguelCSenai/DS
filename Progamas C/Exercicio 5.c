#include <stdio.h>

void main(){

    float fF = 0, fC = 0;

    printf("Digite quantos Fahrenheit: ");
    scanf("%f", &fF);

    fC = 5 * ((fF-32)/9);

    printf("%.1fC", fC);

}
