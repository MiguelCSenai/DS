package introducaojava;

import javax.swing.JOptionPane;

public class Exercicio9 {
    
    public static void main(String[] args) {
        
        String sNome = "";
        int iIdade = 0;
        String sTexto = "Digite um nome (Mais de 3 letras)";
        float fSal =0;
        String sGen = "";
        do{
        
            sNome = JOptionPane.showInputDialog(sTexto);
            sTexto = "NOME INVALIDO!!!\n\nDigite um nome (Mais de 3 letras)";
            
        
        }while(sNome.length()< 3);
        
        sTexto = "Digite uma idade (Entre 0 e 150)";
        
        do{
            
            iIdade = Integer.parseInt(JOptionPane.showInputDialog(sTexto));
            sTexto = "IDADE INVALIDA!!!\n\nDigite uma idade (Entre 0 e 150)";
            
        
        }while(iIdade < 0 || iIdade > 150);
        
        sTexto = "Digite um salario (Maior que 0)";
        
        do{
            
            fSal = Float.parseFloat(JOptionPane.showInputDialog(sTexto));
            sTexto = "SALARIO INVALIDO!!!\n\nDigite um salario (Maior que 0)";
            
        
        }while(fSal<=0);
        
        sTexto = "Digite seu genero <M/F>";
        
        do{
        
            sGen = JOptionPane.showInputDialog(sTexto);
            sTexto = "GENERO INVALIDO!!!\n\nOpcoes <M>, <F>";
        
        }while(!sGen.equalsIgnoreCase("M") && !sGen.equalsIgnoreCase("F"));
        
        JOptionPane.showMessageDialog(null, "Nome: "+sNome+"\nIdade: "+iIdade+"\nSalario: "+fSal+"\nGenero: "+sGen);
        
    }
    
}
