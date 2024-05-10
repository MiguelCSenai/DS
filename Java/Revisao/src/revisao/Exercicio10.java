package revisao;

import javax.swing.JOptionPane;

public class Exercicio10 {
    
    public static void main(String[] args) {
    
        int i = 1, iNum=0, iSoma=0;
        
        while(i<=10){
            
            iNum=Integer.parseInt(JOptionPane.showInputDialog("Digite o "+i+"° numero"));
            
            iSoma+=iNum;
            i++;
            
        }
        
        JOptionPane.showMessageDialog(null, "A soma dos numeros digitados é "+iSoma);
    }
    
}
