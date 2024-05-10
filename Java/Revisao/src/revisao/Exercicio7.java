package revisao;

import javax.swing.JOptionPane;

public class Exercicio7 {
    
    public static void main(String[] args) {
        
        float fMedia =0f;
        
        for(int i=1;i<=12;i++){
            
            int iNum = Integer.parseInt(JOptionPane.showInputDialog("Digite o "+i+"° numero"));
            
            fMedia += iNum;
            
        }
        fMedia = fMedia/12;
        
        JOptionPane.showMessageDialog(null, "A média aritmética dos numeros digitados é "+fMedia);
        
    }
    
}
