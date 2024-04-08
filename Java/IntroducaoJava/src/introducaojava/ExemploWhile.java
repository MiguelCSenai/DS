package introducaojava;

import javax.swing.JOptionPane;

public class ExemploWhile {
    
    public static void main(String[] args) {
        
        int i = Integer.parseInt(JOptionPane.showInputDialog("Digite um numero"));
        
        while(i >= 0){
        
            System.out.println(i);
            i--;
        
        }
        
        while(true){
        
            String sNome = JOptionPane.showInputDialog("Digite um nome");
            
            JOptionPane.showMessageDialog(null, "O nome digitado foi "+sNome);
            
            String sOpc = JOptionPane.showInputDialog("Deseja digitar outro nome? <S/N>");
            
            if(sOpc.equalsIgnoreCase("N")){
            
                break;
                
            }
        
        }
        
    }
    
}
