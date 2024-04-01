package introducaojava;

import javax.swing.JOptionPane;

public class ExemploJOptionPane {
    
    public static void main(String[] args) {
        
        float fNota1 = 0, fNota2 = 0, fTrab = 0, fMedia = 0;
        
        fNota1 = Float.parseFloat(JOptionPane.showInputDialog("Digite a primeira nota:" ));
        fNota2 = Float.parseFloat(JOptionPane.showInputDialog("Digite a segunda nota:" ));
        fTrab = Float.parseFloat(JOptionPane.showInputDialog("Digite a nota do trabalho:" ));
        
        fMedia = (fNota1 + fNota2 + fTrab)/3;
        
        JOptionPane.showMessageDialog(null, "Media: "+fMedia);
        
    }
    
}
