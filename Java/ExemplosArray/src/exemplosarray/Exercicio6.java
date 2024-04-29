package exemplosarray;

import javax.swing.JOptionPane;

public class Exercicio6 {
    
    public static void main(String[] args) {
        
        int[] aiLoteria =  new int[5];
        int[] aiPalpite = new int[10];
        int iIguais=0;
        String sLoteria = "Loteria: ";
        String sPalpites = "Palpites: ";
        String sIguais = "Você acertou ";
        
        for(int i=0; i<aiLoteria.length; i++){
            
            aiLoteria[i]= (int)(Math.random() * 60) + 1;
            sLoteria += " "+String.valueOf(aiLoteria[i])+",";
            System.out.println(aiLoteria[i]);
            
        }
        
        for(int i = 0; i<aiPalpite.length; i++){
            
            aiPalpite[i]= Integer.parseInt(JOptionPane.showInputDialog("Digite seu "+(i+1)+"° palpite"));
            sPalpites+=" "+String.valueOf(aiPalpite[i])+",";
            
        }
        
        for (int i=0; i<aiPalpite.length; i++){
            
            for(int in=0; in<aiLoteria.length; in++){
                
                if(aiPalpite[i]==aiLoteria[in]){
                    
                    iIguais++;
                    
                }
                
            }
            
        }
        
        JOptionPane.showMessageDialog(null, sLoteria+"\n"+sPalpites+"\n"+sIguais+iIguais+" numeros");
        
    }
    
}
