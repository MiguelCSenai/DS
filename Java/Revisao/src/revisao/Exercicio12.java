package revisao;

import javax.swing.JOptionPane;

public class Exercicio12 {
    
    public static void main(String[] args) {
        
        String[] asFrutas = new String[10];
        String sMessage ="";
        
        for(int i=0;i<10;i++){
            
            asFrutas[i]=JOptionPane.showInputDialog("Digite o nome da "+(i+1)+"° fruta");
            if(i%2 == 1){
                
                sMessage += asFrutas[i]+", ";
                
            }
            
        }
        JOptionPane.showMessageDialog(null, sMessage);
        
    }
    
}
