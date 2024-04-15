#include <stdio.h>

void main(){

    int iDia = 0;
    printf("Digite o numero do dia da semana (1 a 7): ");
    scanf("%d", &iDia);

    switch(iDia){

        case 1: printf("O dia eh domingo\n");
                break;

        case 2: printf("O dia eh segunda-feira\n");
                break;

        case 3: printf("O dia eh terca-feira\n");
                break;

        case 4: printf("O dia eh quarta-feira\n");
                break;

        case 5: printf("O dia eh quinta-feira\n");
                break;

        case 6: printf("O dia eh sexta-feira\n");
                break;

        case 7: printf("O dia eh sabado\n");
                break;

        case 69:print("*Dia do sexo*");
                break;

        default:printf("Para de ser burro eh entre 1 e 7 imbecil");
                break;

    }

}
