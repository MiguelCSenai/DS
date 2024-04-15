void main(){

    int i = 1;
    float fVlr = 0, fMedia = 0, fNotas=0;

    do{

        printf("\n\nDigite a nota numero %d: ", i);
        scanf("%f", &fVlr);

        if(fVlr < 0 || fVlr > 10){

            printf("Nota invalida (Apenas notas entre 0 a 10)\n\n");

        }else{

            fNotas += fVlr;

            i++;
        }

    }while(i <= 4);

    fMedia = fNotas / 4;

    printf("\n\nA media final eh de: %.1f\n", fMedia);
    if(fMedia < 7){

        printf("REPROVADO");
        system("color 0C");

    }else{

        printf("APROVADO");
        system("color 02");

    }

}
