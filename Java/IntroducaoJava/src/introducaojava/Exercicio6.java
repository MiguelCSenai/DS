package introducaojava;

public class Exercicio6 {
    
    public static void main(String[] args) {
        
        for(int i=34; i>=10; i--){
                
            System.out.println(i);
            
        }
        
        for(int i=100; i<=200; i+=3){
                
            System.out.println(i);
            
        }
        
        int iSoma = 0;
        
        for(int i=1; i<=1000; i++){
                
            if(i%2 == 1){
                
                iSoma += i;
                
            }
            
        }
        System.out.println(iSoma);
        
    }
    
}
