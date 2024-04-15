package metodos.matematicos.e.string;

import javax.swing.JOptionPane;

public class Exercicio2 {
    
    public static void main(String[] args) {
        
        double iNum = Math.random()*9+1;
        
        
        int iChute = Integer.parseInt(JOptionPane.showInputDialog("Chute um numero entre 1 a 9"));
        
        if(iChute == (int)iNum){
            
            JOptionPane.showMessageDialog(null, "VOCE ACERTOU!!!");
            
        }else{
            
            JOptionPane.showMessageDialog(null, "Voce errou.");
            
        }
        
    }
    
}
