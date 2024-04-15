package metodos.matematicos.e.string;

import javax.swing.JOptionPane;

public class strReplace {
    
    public static void main(String[] args) {
        
        String sFrase=(JOptionPane.showInputDialog("Digite uma frase"));
        String sRplcd=(JOptionPane.showInputDialog("Digite o que voce quer substituir"));
        String sRplc=(JOptionPane.showInputDialog("Digite a nova palavra"));
        
        JOptionPane.showMessageDialog(null, sFrase.replace(sRplcd, sRplc));
        
    }
    
}
