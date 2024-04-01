package introducaojava;

import javax.swing.JOptionPane;

public class Exercicio7 {
    
    public static void main(String[] args) {
              
        int iMaior = 0;
        int iMenor = 0;
        
        for(int i=1; i<=6; i++){
            
            int iIdade = Integer.parseInt(JOptionPane.showInputDialog("Digite a "+i+"a idade"));
            
            System.out.println(i+"a idade: "+iIdade);
            
            if(iIdade > iMaior || i == 1){
                
                iMaior = iIdade;
                
            }
            if(iIdade < iMenor || i == 1){
                
                iMenor = iIdade;
                
            }
            
        }
        
        System.out.println("Maior idade: "+iMaior+"\nMenor idade: "+iMenor);
        
    }
    
}
