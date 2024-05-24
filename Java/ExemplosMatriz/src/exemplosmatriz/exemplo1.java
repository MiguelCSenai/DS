package exemplosmatriz;

public class exemplo1 {
    
    public static void main(String[] args) {
    
        int[][] aiMatriz = new int [2][3];
        
        aiMatriz[0][0] = 10;
        aiMatriz[0][1] = 20;
        aiMatriz[0][2] = 30;
        aiMatriz[1][0] = 40;
        aiMatriz[1][1] = 50;
        aiMatriz[1][2] = 60;
        
        for (int iRow = 0; iRow < 2; iRow++) {
            
            for (int iCol = 0; iCol < 3; iCol++) {
                
                System.out.println(aiMatriz[iRow][iCol]);
                
            }
            
        }
    
    }
    
}
