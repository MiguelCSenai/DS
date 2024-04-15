#include <stdio.h>
#include <time.h>

void delay(int number_of_seconds)
{
    // Converting time into milli_seconds
    int milli_seconds = 1000 * number_of_seconds;

    // Storing start time
    clock_t start_time = clock();

    // looping till required time is not achieved
    while (clock() < start_time + milli_seconds)
        ;
}

void main(){

    int iSenha = 0;

    printf("Digite sua senha: ");
    scanf("%d", &iSenha);

    if(iSenha == 1234){

        printf("Acesso Permitido");
        system("color A0");

    }
    else{

        printf("Acesso Negado");
        system("color C0");
        delay(1);
        system("color 0C");
        delay(1);
        system("color C0");
        delay(1);
        system("color 0C");
        delay(1);
        system("color C0");
        delay(1);
        system("color 0C");
        delay(1);
        system("color C0");


    }

}
