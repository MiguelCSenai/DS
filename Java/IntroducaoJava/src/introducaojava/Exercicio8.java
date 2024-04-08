package introducaojava;

import javax.swing.JOptionPane;

public class Exercicio8 {
    
    public static void main(String[] args) {
        
        int iSoma = 0;
        
        for (int iNum = 5; iNum <= 499; iNum++){
            
            if(iNum % 2 == 1){
                
                iSoma += iNum;
                System.out.println(iNum);
                
            }
            
        }
        JOptionPane.showMessageDialog(null, "A soma dos numero impares entre 5 e 499 eh "+iSoma);
        
    }
    
}
