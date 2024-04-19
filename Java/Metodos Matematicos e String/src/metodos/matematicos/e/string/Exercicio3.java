package metodos.matematicos.e.string;

import javax.swing.JOptionPane;

public class Exercicio3 {
    
    public static void main(String[] args) {
        
        String sFrase=(JOptionPane.showInputDialog("Digite uma frase"));
        sFrase = sFrase.replace("a", "").replace("e", "").replace("i", "").replace("o", "").replace("u", "").replace("A", "").replace("E", "").replace("I", "").replace("O", "").replace("U", "");
        
        JOptionPane.showMessageDialog(null, sFrase);
        
    }
    
}