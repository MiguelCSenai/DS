package exemplosarray;

import javax.swing.JOptionPane;

public class Exercicio2 {
    
    public static void main(String[] args) {
        
        String[] asNomes = new String[10];
        
        for(int i=0; i<asNomes.length;i++){
            
            asNomes[i]=JOptionPane.showInputDialog("Digite um nome");
        
        }
        
        JOptionPane.showMessageDialog(null, "O nome sorteado foi:\n"+asNomes[(int)Math.random()*10]);
        
    }
    
}
