package introducaojava;

import javax.swing.JOptionPane;

public class Exercicio5 {
    
    public static void main(String[] args) {
        
        float fPeso = Float.parseFloat((JOptionPane.showInputDialog("Digite o peso")));
        float fAltura = Float.parseFloat((JOptionPane.showInputDialog("Digite a altura")));
        float fIMC = fPeso/(fAltura*fAltura);
        
        if(fIMC < 18.5){
            
            JOptionPane.showMessageDialog(null, "Abaixo do normal");
            
        }else if(fIMC < 24.4){
            
            JOptionPane.showMessageDialog(null, "Normal");
            
        }else if(fIMC < 29.9){
            
            JOptionPane.showMessageDialog(null, "Pre-Obesidade");
            
        }else if(fIMC < 34.9){
            
            JOptionPane.showMessageDialog(null, "Obesidade 1");
            
        }else if(fIMC < 39.9){
            
            JOptionPane.showMessageDialog(null, "Obesidade 2");
            
        }else if(fIMC >= 39.9){
            
            JOptionPane.showMessageDialog(null, "Obesidade morbida");
            
        }
        
    }
    
}
