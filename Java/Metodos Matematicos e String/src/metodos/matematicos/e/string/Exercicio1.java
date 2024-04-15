package metodos.matematicos.e.string;

import javax.swing.JOptionPane;

public class Exercicio1 {
    
    public static void main(String[] args) {
        
        String sNums="";
        
        for(int i=1;i<=2;i++){

                sNums += String.valueOf((int)(Math.random()*20+1)+"\n");

            }
        JOptionPane.showMessageDialog(null, "Os numeros foram:\n"+sNums);
        
    }
    
}
