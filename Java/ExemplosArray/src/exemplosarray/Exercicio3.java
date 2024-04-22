package exemplosarray;

import javax.swing.JOptionPane;

public class Exercicio3 {
    
    public static void main(String[] args) {
    
        int[] aiNumeros = new int[10];

        for(int i=0; i<aiNumeros.length; i++){

                aiNumeros[i]=Integer.parseInt(JOptionPane.showInputDialog("Digite o "+(i+1)+"° numero"));

        }
        
        for(int i=0; i<aiNumeros.length; i++){

            System.out.println((i+1)+"o numero: "+aiNumeros[i]);

        }
        
        System.out.println("");
        System.out.println(aiNumeros.length);
        
        for(int i=(aiNumeros.length)-1; i>-1; i--){

            System.out.println((i+1)+"o numero: "+aiNumeros[i]);

        }
    
    }
    
}
