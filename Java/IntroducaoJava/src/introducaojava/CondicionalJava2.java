/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package introducaojava;

import javax.swing.JOptionPane;

/**
 *
 * @author Aluno
 */
public class CondicionalJava2 {
    
    public static void main(String[] args) {
        
        float fNota1 = Float.parseFloat(JOptionPane.showInputDialog("Digite a primeira nota"));
        float fNota2 = Float.parseFloat(JOptionPane.showInputDialog("Digite a segunda nota"));
        float fNota3 = Float.parseFloat(JOptionPane.showInputDialog("Digite a terceira nota"));
        
        float fMedia = (fNota1 + fNota2 + fNota3)/3;
        
        if(fMedia >= 6){
            
            JOptionPane.showMessageDialog(null, "Nota final:"+fMedia+"\nAPROVADO");
            
        }else if(fMedia >=5){
            
            JOptionPane.showMessageDialog(null, "Nota final:"+fMedia+"\nRECUPERACAO");
            
        }else{
            
            JOptionPane.showMessageDialog(null, "Nota final:"+fMedia+"\nREPROVADO");
            
        }
        
    }
    
}