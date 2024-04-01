/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package introducaojava;

import javax.swing.JOptionPane;

public class Exercicio4 {
    
    public static void main(String[] args) {
        
        int iNumero = Integer.parseInt(JOptionPane.showInputDialog("Digite um numero"));
        
        if(iNumero >= 0){
            
            JOptionPane.showMessageDialog(null, "O numero "+iNumero+" eh positivo.");
            
        }else{
            
            JOptionPane.showMessageDialog(null, "O numero "+iNumero+" eh negativo.");
            
        }
        
    }
    
}
