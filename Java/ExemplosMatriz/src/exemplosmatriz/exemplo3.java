package exemplosmatriz;

import java.util.Arrays;

public class exemplo3 {
    public static void main(String[] args) {
        
        String[] asNomes = {
            "Lucas",
            "Daniel",
            "Julia",
            "Tatiana",
            "Rafaela",
            "Carlos"
        };
        
        Arrays.sort(asNomes);
        for (int i = 0; i < asNomes.length; i++) {
            System.out.println(asNomes[i]);
        }
        
    }
       
}
