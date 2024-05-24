package exemplosmatriz;

import javax.swing.JOptionPane;

public class Exercicio2 {
    
    public static void main(String[] args) {
        
        int[][] aiNums = new int[50][20];
        int iChute = 0;
        String sMessage = "";
        
        for (int iRow = 0; iRow < 50; iRow++) {
            
            for (int iCol = 0; iCol < 20; iCol++) {
                
                aiNums[iRow][iCol] = (int)(Math.random()*10000)+1;
                System.out.println(aiNums[iRow][iCol]);
                
            }
            
        }
        
        iChute = Integer.parseInt(JOptionPane.showInputDialog("Procure um numero"));
        aiNums[13][7]=100;
        aiNums[32][14]=100;
        aiNums[16][16]=100;
        aiNums[11][2]=100;

        sMessage = "Resultado:\n\n";
        for (int iRow = 0; iRow < 50; iRow++) {
            
            for (int iCol = 0; iCol < 20; iCol++) {
                
                if(iChute == aiNums[iRow][iCol]){
                    
                    sMessage += "O número "+iChute+" foi encontado, e está localizado na Coluna "+(iCol+1)+" Linha "+(iRow+1)+"\n";
                    
                }
                
            }
            
        }
        
        JOptionPane.showMessageDialog(null, sMessage);
        
    }
    
}
