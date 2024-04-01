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
public class CondicionalJava {
    
    public static void main(String[] args) {
        
        int iNumero = 10;
        
        if(iNumero == 10){
         
            System.out.println("Voce digitou o 10");
            
        }
        
        int iNumero2 = Integer.parseInt(JOptionPane.showInputDialog("Digite um numero inteiro entre 0 a 10"));
        
        if(iNumero2 >= 0 && iNumero2 <=10){
        
            JOptionPane.showMessageDialog(null, "VALIDO\nVoce digitou o numero "+iNumero2);
        
        }else{
        
            JOptionPane.showMessageDialog(null, "INVALIDO\nApenas numeros entre 0 e 10");
        
        }
                
    }
    
}