#include <stdio.h>

void main(){

    int i = 1, iFilhos = 0, iSalAte100 = 0, iPopulacao = 0;
    float fMediasalario = 0, fSalario = 0, fMaiorsal = 0, fMediaFilhos = 0, fPcAte100 = 0;

    do{
        switch(i){

            case 1:
                printf("Digite a populacao total: ");
                scanf("%d", &iPopulacao);
                if(iPopulacao <= 0){
                    printf("Valor invalido!\n");
                }else{
                    i++;
                }
                break;

            case 2:
                printf("\n(Digite um valor negativo para continuar)\nDigite um valor de salario: ");
                scanf("%f", &fSalario);
                if(fSalario < 0){
                    fMediasalario = fMediasalario / (float)iPopulacao;
                    i++;
                } else {
                    if(fMaiorsal < fSalario){
                        fMaiorsal = fSalario;
                    }
                    if(fSalario <= 100){
                        iSalAte100++;
                    }
                    fMediasalario += fSalario;
                }
                break;

            case 3:
                printf("\n(Digite um valor negativo para continuar)\nDigite o numero de filhos coletado: ");
                scanf("%d", &iFilhos);
                if(iFilhos < 0){
                    fMediaFilhos = fMediaFilhos / (float)iPopulacao;
                    i++;
                } else {
                    fMediaFilhos += iFilhos;
                }
                break;
        }
    }while(i <= 3);

        fPcAte100 = ((float)iSalAte100 / (float)iPopulacao) * 100.0;

    printf("\nDADOS COLETADOS\n    Media de Salario: %.2f\n    Media do Numero de filhos: %.1f\n    Maior Salario Registrado: %.2f\n    Percentual de pessoas com Salario de ate 100 reais: %.1f%%", fMediasalario, fMediaFilhos, fMaiorsal, fPcAte100);

}
