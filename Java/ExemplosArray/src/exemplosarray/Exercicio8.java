package exemplosarray;

public class Exercicio8 {
    
    public static void main(String[] args) {
        
        int[] aiDado = {1,2,3,4,5,6};
        int[] aiRep = new int[6];
        int[] aiNums = new int[15*aiDado.length];
        
        for(int i=0;i<aiNums.length;i++){
        
            aiNums[i]+=aiDado[(int)(Math.random()*6)];
            switch(aiNums[i]){
                
                case 1:
                    System.out.println("1\n");
                    break;
                case 2:
                    System.out.println("2\n");
                    break;
                case 3:
                    System.out.println("3\n");
                    break;
                case 4:
                    System.out.println("4\n");
                    break;
                case 5:
                    System.out.println("5\n");
                    break;
                case 6:
                    System.out.println("6\n");
                    break;
                
            }
        
        }
        
    }
    
}
