package exemplosmatriz;

import javax.swing.JOptionPane;

public class Exercicio3 {
    
    public static void main(String[] args) {
        
        int[][] aiNums = new int[4][4];
        int iMaior = 0;
        String sMessage = "", sTable = "Tabela dos Numeros Digitados:\n\n";
        
        for (int iRow = 0; iRow < 4; iRow++) {
            
            sTable += "\n";
            
            for (int iCol = 0; iCol < 4; iCol++) {
                
                aiNums[iRow][iCol] = Integer.parseInt(JOptionPane.showInputDialog("Digite um numero"));
                sTable += aiNums[iRow][iCol]+"        ";
                
                if(aiNums[iRow][iCol] > iMaior){
                    
                    iMaior = aiNums[iRow][iCol];
                    sMessage = "O maior numero digitado foi "+iMaior+", que está localizado na Coluna "+(iCol+1)+" e na linha "+(iRow+1);
                    
                }
                
            }
            
        }
        
        JOptionPane.showMessageDialog(null, sTable);
        
        JOptionPane.showMessageDialog(null, sMessage);
        
    }
    
}
