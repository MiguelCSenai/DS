package metodos.matematicos.e.string;

import javax.swing.JOptionPane;

public class StrCharAt {
    
    public static void main(String[] args) {
        
        String sFrase=(JOptionPane.showInputDialog("Digite uma frase: "));
        
        int iChar=Integer.parseInt(JOptionPane.showInputDialog("Digite o caractere que voce quer exibir"))-1;
        
        JOptionPane.showMessageDialog(null, sFrase.charAt(iChar));
        
    }
    
}
