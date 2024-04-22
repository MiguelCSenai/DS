package exemplosarray;

import javax.swing.JOptionPane;

public class Exercicio5 {
    
    public static void main(String[] args) {
        
        int[] aiVal= new int[10];
        int[] aiValTF = new int[10];
        
        for(int i=0; i<aiVal.length; i++){

                aiVal[i]=Integer.parseInt(JOptionPane.showInputDialog("Digite o "+(i+1)+"° numero"));
                if(i==0){
                    
                    System.out.println("Numeros Digitados:");
                    
                }
                System.out.println((i+1)+"o Numero: "+aiVal[i]);

        }
        
        System.out.println("\n");
        
        for(int i=0; i<aiValTF.length; i++){

                aiValTF[i]=aiVal[i]*5;
                if(i==0){
                    
                    System.out.println("Numeros Vezes 5:");
                    
                }
                System.out.println((i+1)+"o Numero: "+aiValTF[i]);

        }
        
    }
    
}
