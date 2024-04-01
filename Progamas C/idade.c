#include <stdio.h>

void main(){

    int iAno = 0, iIdade = 0;

    printf(" Digite o seu ano de nascimento: ");
    scanf("%d", &iAno);

    iIdade = 2024 - iAno;

    printf("Voce nasceu em %d tem %d anos", iAno, iIdade);

}
