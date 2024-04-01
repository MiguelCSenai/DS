#include <stdio.h>
void main(){

    char cLetra1 = ' ', cLetra2 = ' ';

    printf("Digite a primeira letra: ");
    fflush(stdin);
    scanf("%c", &cLetra1);

    printf("Digite a segunda letra letra: ");
    fflush(stdin);
    scanf("%c", &cLetra2);

    printf("As letras digitadas foram %c e %c", cLetra1, cLetra2);

}
