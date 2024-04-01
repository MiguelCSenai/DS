package introducaojava;

public class ExemploConversao {
    
    public static void main(String[] args) {
        
        int iValor = 12;
        float fValor = 25.9f;
        double dValor = 32.6;
        String sValor1 = "2024";
        String sValor2 = "98.6";
        
        float fConverte = (float) iValor;
        double dConverte = (double) iValor;
        int iConverte = (int) iValor;
        
        iConverte = Integer.parseInt(sValor1);
        fConverte = Float.parseFloat(sValor2);
        dConverte = Double.parseDouble(sValor2);
        String sNum = String.valueOf(iValor);
        
        System.out.println("\n"+iConverte+"\n"+fConverte);
        
    }
    
}
