package revisao;

import javax.swing.JOptionPane;

public class Exercicio13 {
    
    public static void main(String[] args) {
        
        double[] adNotas = new double[4];
        String sNotas = "";
        double dMedia =0;
        
        for(int i=0; i<adNotas.length;i++){
            
            adNotas[i] = Double.parseDouble(JOptionPane.showInputDialog("Digite a "+(i+1)+"° nota"));
            sNotas += "Nota "+(i+1)+": "+adNotas[i]+";\n";
                        
        }
        
        for(int i=0; i<adNotas.length; i++){
            
            dMedia+=adNotas[i];
            
        }
        
        dMedia = dMedia/adNotas.length;
        
        JOptionPane.showMessageDialog(null,"Notas do Aluno:\n\n"+sNotas+"\nA média do aluno é "+dMedia+".\n\n");
        
    }
    
}
