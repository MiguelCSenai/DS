package revisao;

import javax.swing.JOptionPane;

public class Exercicio2 {
    
    public static void main(String[] args) {
        
        float[] afNum = new float[2];
        float fMult = 0, fDiv = 0, fSub = 0;
        String sNums = "";
        
        for(int i=0;i<afNum.length;i++){
            
            afNum[i] = Float.parseFloat(JOptionPane.showInputDialog("Digite o "+(i+1)+"° valor"));
            sNums = String.valueOf(afNum[i])+" ";
            
        }
        
        for(int i=1;i<=3;i++){
            
            switch(i){
                
                case 1 -> fMult = afNum[0]*afNum[1];
                case 2 -> fDiv = afNum[0]/afNum[1];
                case 3 -> fSub = afNum[0]-afNum[1];
                
            }
            
        }
        
        JOptionPane.showMessageDialog(null, "Numeros digitados: "+sNums+"\n\nResultado multiplicação: "+fMult+"\nResultado divisão: "+fDiv+"\nResultado subtração: "+fSub);
        
    }
    
}
