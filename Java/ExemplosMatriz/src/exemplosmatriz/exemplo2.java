package exemplosmatriz;

public class exemplo2 {
    
    public static void main(String[] args) {
        
        String[][] sNomes = {
            
            {"João", "Cleiton", "Lula"},
            {"Carlos", "Robson", "Eduardo"},
            {"Gurizão", "Sergio", "Pedro"}
            
        };
        
        for (int iRow = 0; iRow < 3; iRow++) {
            System.out.println("\n");
            for (int iCol = 0; iCol < 3; iCol++) {
                
                System.out.print(sNomes[iRow][iCol]+"\t\t");
                
            }
            
        }
        
    }
    
}
