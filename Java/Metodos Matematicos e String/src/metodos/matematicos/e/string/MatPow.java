package metodos.matematicos.e.string;

import javax.swing.JOptionPane;

public class MatPow {
   
    public static void main(String[] args) {
        
        System.out.println(Math.pow(4, 2));
        int iNum=Integer.parseInt(JOptionPane.showInputDialog("Digite a base da potencia"));
        int iExp= Integer.parseInt(JOptionPane.showInputDialog("Digite o expoente da potencia"));
        JOptionPane.showMessageDialog(null, "Resultado: "+Math.pow(iNum, iExp));
        
    }
    
}
