package metodos.matematicos.e.string;

import javax.swing.JOptionPane;

public class MatRandom {
    
    public static void main(String[] args) {
        
        Object[] options = { "Confirmar", "Cancelar" };
        
        String sNums="";
        
        JOptionPane.showOptionDialog(null, "Sortear", "Informação", JOptionPane.DEFAULT_OPTION, JOptionPane.QUESTION_MESSAGE, null, options, options[0]);

            for(int i=1;i<=6;i++){

                sNums += String.valueOf((int)(Math.random()*60+1)+" ");

            }

            JOptionPane.showMessageDialog(null, "Numeros Sorteados:\n"+sNums);
        
        }
    
}
