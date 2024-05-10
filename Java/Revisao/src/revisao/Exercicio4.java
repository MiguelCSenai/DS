package revisao;

import javax.swing.JOptionPane;

public class Exercicio4 {
    
    public static void main(String[] args) {
         
        String[] siProd = {"Banana", "Maçã", "Laranja", "Uva", "Morango"};
        int iCod = 0;
        iCod=Integer.parseInt(JOptionPane.showInputDialog("Digite o código do produro"));
        
        JOptionPane.showMessageDialog(null, siProd[iCod-1]);

    }
   
}
