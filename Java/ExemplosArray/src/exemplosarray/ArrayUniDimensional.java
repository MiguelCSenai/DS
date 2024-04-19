package exemplosarray;

public class ArrayUniDimensional {
    
    public static void main(String[] args) {
        
        int[] aiNumeros = new int[10]; 
            
        for(int i=0; i<aiNumeros.length;i++){
            
            aiNumeros[i]=(i+1)*10;
            System.out.println(aiNumeros[i]);
        
        }

    }
    
}
