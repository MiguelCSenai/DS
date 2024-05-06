package revisao;

import javax.swing.JOptionPane;

public class Exercicio8 {
    
    public static void main(String[] args) {
        
        int iParar=Integer.parseInt(JOptionPane.showInputDialog("Digite o limite a ser exibido"));
        
        for(int i=0; i<=iParar; i++){
            
            System.out.print(i+" ");
            
        }
        System.out.println();
        for(int i=iParar; i>=0; i--){
            
            System.out.print(i+" ");
            
        }
        
    }
    
}
