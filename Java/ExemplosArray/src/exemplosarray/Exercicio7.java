package exemplosarray;

public class Exercicio7 {
    
    public static void main(String[] args) {
        
        int [] aiA = new int[10];
        int [] aiB = new int[10];
        int [] aiC = new int[20];
        String sMessage = "Numeros Gerados:";
        
        for(int i = 0; i<aiA.length; i++){
                
                aiA[i]=(int)(Math.random()*10)+1;
                aiB[i]=(int)(Math.random()*10)+1;
                aiC[i]+=aiA[i];
                aiC[i+10]+=aiB[i];
                
        }
        
        for(int i = 0; i<aiC.length; i++){
           
            sMessage+=" "+aiC[i]+",";
            
        }
        
        System.out.println(sMessage);
        
    }
    
}
