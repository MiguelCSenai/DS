package metodos.matematicos.e.string;

import javax.swing.JOptionPane;

public class strUpperLower {
    
    public static void main(String[] args) {
        
        String sFrase=(JOptionPane.showInputDialog("Digite uma frase: "));
        
        JOptionPane.showMessageDialog(null, sFrase.toUpperCase()+"\n"+sFrase.toLowerCase());
        
    }
    
}
