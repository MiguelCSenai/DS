package exemplosmatriz;

public class Exercicio4 {
    
    public static void main(String[] args) {
        
        int[][] aiHor = new int[3][8];
        int[][] aiVer = new int[8][3];
        
        for (int iRow = 0; iRow < 3; iRow++) {
            System.out.println("\n");
            for (int iCol = 0; iCol < 8; iCol++) {
                
                aiHor[iRow][iCol] = (int)(Math.random()*50)+51;
                System.out.print(aiHor[iRow][iCol]+"\t");
                
            }
            
        }
        
        System.out.println("\n\n\n");
        
        for (int iRow = 0; iRow < 3; iRow++) {

            for (int iCol = 0; iCol < 8; iCol++) {
                
                aiVer[iCol][iRow] = aiHor[iRow][iCol];
                
            }
            
        }
        
        for (int iRow = 0; iRow < 8; iRow++) {

            System.out.println("\n");
            
            for (int iCol = 0; iCol < 3; iCol++) {
                
                System.out.print(aiVer[iRow][iCol]+"\t");
                
            }
            
        }
        
    }
    
}
