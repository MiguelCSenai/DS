package revisao;

import javax.swing.JOptionPane;

public class Exercicio14 {
    
    public static void main(String[] args) {
        
        int[] aiNums = new int[20];
        /*int[] aiPares = new int[(aiNums.length/2)];
        int[] aiImpares = new int[(aiNums.length-aiPares.length];*/
        String sMessage = "Numeros digitados:\n";
        int TamanhoImp=0;
        int TamanhoPar=0;
        int j =0;
        int k =0;
        
        
        for(int i=0; i<aiNums.length;i++){
            
            aiNums[i]=(int)((Math.random()*100)+1);
            sMessage+=aiNums[i]+";\n";
            
        }
        for(int i=0; i<aiNums.length;i++){
            
            if(aiNums[i]%2 != 0){
                
                TamanhoImp+=1;
                
            }else{
                
                TamanhoPar+=1;
                
            }
            
        }
        int[] aiPares = new int[TamanhoPar];
        int[] aiImpares = new int[TamanhoImp];
        
        for(int i=0; i<aiNums.length;i++){
            
            if(aiNums[i]%2 != 0){
                
                aiImpares[j]=aiNums[i];
                j++;
            }else{
                                
                aiPares[k]=aiNums[i];
                k++;
                
            }
            
        }
        
        sMessage+="\nPares: ";
        
        for(int i = 0;i<aiPares.length;i++){
            
            sMessage+=aiPares[i]+", ";
            
        }
        
        sMessage+="\n\nImpares: ";
        
        for(int i = 0;i<aiImpares.length;i++){
            
            sMessage+=aiImpares[i]+", ";
            
        }
        
        JOptionPane.showMessageDialog(null, sMessage);
        
    }
    
}
