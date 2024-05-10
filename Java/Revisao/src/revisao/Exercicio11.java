package revisao;

import javax.swing.JOptionPane;

public class Exercicio11 {
    
    public static void main(String[] args) {
        
        int iNum=0, iMaior=0;
        int i=1;
        
        do{
            
            iNum = Integer.parseInt(JOptionPane.showInputDialog("Digite o "+i+"° numero\n\n(Digite um numero negativo para sair"));
            if(i==1 || iNum>iMaior){
                
                JOptionPane.showMessageDialog(null, "O maior numero era "+iMaior+", Agora é "+iNum);
                iMaior = iNum;
                
            }
            i++;
            
        }while(iNum>=0);
        
        JOptionPane.showMessageDialog(null, "O maior numero digitado foi "+iMaior);
        
    }
    
}
