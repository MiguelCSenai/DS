package exemplosarray;

import javax.swing.JOptionPane;

public class ExemploVetor {
    
    public static void main(String[] args) {
        
        int[] aiIdades = new int[20];
        
        for(int i=0; i<aiIdades.length; i++){
        
            aiIdades[i]=Integer.parseInt(JOptionPane.showInputDialog("Digite a "+(i+1)+"° idade"));
            
            System.out.println((i+1)+"° idade: "+aiIdades[i]);
        
        }
        
    }
    
}
