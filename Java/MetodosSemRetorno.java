package metodosjava;

public class MetodosSemRetorno {
        
    public static void main(String[] args) {
        imprimir();
        imprimirTexto("Teste");
        somar(5,9);
        dados("Miguel", 16);
        genero('M');
        genero('F');
        genero('N');

    }
    public static void imprimir(){
        
        System.out.println("Aprendendo metodos Java");
        
    }
    
    public static void imprimirTexto(String sTexto) {
        
        System.out.println(sTexto);
        
    }
    
    public static void somar(int iNum1, int iNum2) {
        
        System.out.println(iNum1+iNum2);
        
    }
    public static void dados(String sNome, int iIdade){
        
        System.out.println("Nome:\t"+sNome+"\nIdade:\t"+iIdade);
        
    }
    
    public static void genero(char cGen) {
        
        if(cGen == 'M' || cGen == 'm'){
            
            System.out.println("Masculino");
            
        }else if(cGen == 'F' || cGen == 'f'){
            
            System.out.println("Feminino");
            
        }else{
            
            System.out.println("Genero invalido");
            
        }
        
    }
    
}
