package exemplosmatriz;

import javax.swing.JOptionPane;

public class Exercicio1 {
    
    public static void main(String[] args) {
        
        String[][] asDados = new String[5][2];
        String sMessage = "Nomes:\t\tTelefones\n\n";
        
        for (int iRow = 0; iRow < 5; iRow++) {
            
            asDados[iRow][0] = JOptionPane.showInputDialog("Digite o "+(iRow+1)+" nome");

            asDados[iRow][1] = JOptionPane.showInputDialog("Digite o "+(iRow+1)+" nome");
            
        }
        
        for (int i = 0; i < 5; i++) {
            
            sMessage+=asDados[i][0]+"\t\t\t\t";
            sMessage+=asDados[i][1]+"\n";
    
        }
        
        JOptionPane.showMessageDialog(null, sMessage);
        
    }
    
}
