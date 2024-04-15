package metodos.matematicos.e.string;

public class MatMaxMin {
    
    public static void main(String[] args) {
        
        float fN1= 20, fN2=5.3f, fN3=2;
        
        System.out.println("O maior numero entre "+fN1+" e "+fN2+" sera: "+Math.max(fN1, fN2));
        System.out.println("O menor numero entre "+fN1+" e "+fN2+" sera: "+Math.min(fN1, fN2));
        System.out.println("O maior numero entre "+fN1+" e "+fN2+" e "+fN3+" sera: "+Math.max(Math.max(fN1, fN2), fN3));
        
    }
    
}
