package introducaojava;

import javax.swing.JOptionPane;

public class Exercicio9 {
    
    public static void main(String[] args) {
        
        String sNome = "";
        String sIdade = "";
        String sTexto = "Digite um nome (Mais de 3 letras)";
        do{
        
            sNome = JOptionPane.showInputDialog(sTexto);
            sTexto = "NOME INVALIDO!!!\n\nDigite um nome (Mais de 3 letras)";
            
        
        }while(sNome.length()< 3);
        
        sTexto = "Digite uma idade (Entre 0 e 150)";
        
        do{
            
            sNome = JOptionPane.showInputDialog(sTexto);
            sTexto = "NOME INVALIDO!!!\n\nDigite uma idade (Entre 0 e 150)";
            
        
        }while(sNome.length()< 3);
        
    }
    
}
