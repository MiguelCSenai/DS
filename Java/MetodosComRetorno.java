package metodosjava;

public class MetodosComRetorno {
    
    public static void main(String[] args) {
        
        int iSoma = somar(1, 1);
        System.out.println(iSoma);
        System.out.println(contaLetra("eh us guri nao tem jeito", 'E'));
        
    }
    public static int somar(int n1, int n2){
        
        return n1+n2;
        
    }
    public static int contaLetra(String sFrase, char cFind){
        
        int iQtde = 0;
        sFrase = sFrase.toUpperCase();
        for (int i = 0; i < sFrase.length(); i++) {
            
            if(sFrase.charAt(i) == cFind){
                
                iQtde++;                
                
            }
            
        }
        
        return iQtde;
        
    }
        
        
    
}
