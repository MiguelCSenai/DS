package introducaojava;

import javax.swing.JOptionPane;

public class Exercicio3 {
    
    public static void main(String[] args) {
        
        float fBase = 0, fAltura = 0, fArea = 0;
        
        fBase = Float.parseFloat(JOptionPane.showInputDialog("Digite o valor da base"));
        fAltura = Float.parseFloat(JOptionPane.showInputDialog("Digite o valor da altura"));
        
        fArea = (fBase * fAltura/2);
        
        JOptionPane.showMessageDialog(null, "A area do triangulo eh: "+fArea);
        
    }
    
}
