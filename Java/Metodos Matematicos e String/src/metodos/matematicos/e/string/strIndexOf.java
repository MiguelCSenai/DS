package metodos.matematicos.e.string;

import javax.swing.JOptionPane;

public class strIndexOf {
    
    public static void main(String[] args) {
        
        String sFrase=(JOptionPane.showInputDialog("Digite um texto"));
        String sFind=(JOptionPane.showInputDialog("Digite o que procurar"));
        int iApartir=Integer.parseInt(JOptionPane.showInputDialog("Digite apartir de qual casa procurar"))+1;
        JOptionPane.showMessageDialog(null, sFrase.indexOf(sFind, iApartir));
        
    }
    
}
