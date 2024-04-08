package introducaojava;

import javax.swing.JOptionPane;

public class ExemploDoWhile {
    
    public static void main(String[] args) {
        
        int iNum = 0;
        String sTexto = "Digite um numero maior que 10";
        
        do{
        
            iNum = Integer.parseInt(JOptionPane.showInputDialog(sTexto));
            sTexto = "NUMERO INCORRETO!!!\n\n Digite um numero maior que 10!";
            
            
        }while(iNum <10);
        
        JOptionPane.showMessageDialog(null, "Voce digitou o numero "+iNum);
        
    }
    
}
