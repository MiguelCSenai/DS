package exemplosarray;

import javax.swing.JOptionPane;

public class Exercicio4 {
    
    public static void main(String[] args) {
        
        float[] afNumeros = new float[5];
        float fSoma=0;

        for(int i=0; i<afNumeros.length; i++){
            
            afNumeros[i]=Float.parseFloat(JOptionPane.showInputDialog("Digite o "+(i+1)+"° numero"));
            fSoma+=afNumeros[i];
            System.out.println((i+1)+"o Numero: "+afNumeros[i]);
            
        }
        System.out.println(fSoma);
        
        
    }
    
}
