package exemplosarray;

public class Exercicio1 {
    
    public static void main(String[] args) {
        
        int[] aiNumeros = new int[15];
        
        for(int i=0; i<aiNumeros.length;i++){
            
            aiNumeros[i]=(int)(Math.random()*1000+1);
            System.out.println(aiNumeros[i]);
        
        }
        
    }
    
}
