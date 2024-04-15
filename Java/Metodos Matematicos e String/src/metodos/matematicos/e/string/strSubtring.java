package metodos.matematicos.e.string;

import javax.swing.JOptionPane;

public class strSubtring {
    
    public static void main(String[] args) {
        
        String sTexto=(JOptionPane.showInputDialog("Digite um texto"));
        
        int iCorte=Integer.parseInt(JOptionPane.showInputDialog("Digite apartir de qual caractere voce quer exibir"))-1;
        int iFim=Integer.parseInt(JOptionPane.showInputDialog("Digite até qual caractere voce quer exibir"));
        
        JOptionPane.showMessageDialog(null, sTexto.substring(iCorte, iFim));
        
    }
    
}
