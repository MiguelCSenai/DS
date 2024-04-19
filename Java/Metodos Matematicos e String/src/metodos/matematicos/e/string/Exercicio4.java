package metodos.matematicos.e.string;

import javax.swing.JOptionPane;

public class Exercicio4 {
    
    public static void main(String[] args) {

        int iVezes=0;
        String sFrase=(JOptionPane.showInputDialog("Digite um texto"));
        String sFind=(JOptionPane.showInputDialog("Digite o que procurar"));
        int iIndex = sFrase.indexOf(sFind);

        while(iIndex != -1){
                
                iVezes++;
                iIndex=sFrase.indexOf(sFind, iIndex+1);                  
        }
        JOptionPane.showMessageDialog(null, "A expressão "+sFind+" foi encontrada "+iVezes+" vezes");       
    }
    
}
