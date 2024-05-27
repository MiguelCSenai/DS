package exemplosmatriz;

import javax.swing.JOptionPane;

public class Exercicio5 {
    
    public static void main(String[] args) {
        
        String[][] asPessoas = new String[5][2];
        String sMessage = "";
        String sGenero = "";
        String sEnd =sGenero;
        for (int i = 0; i < 5; i++) {

                asPessoas[i][0] = JOptionPane.showInputDialog("Digite o "+(i+1)+"° nome");
                asPessoas[i][1] = JOptionPane.showInputDialog("Digite o "+(i+1)+"° Genero");


            }
        while(!sEnd.equals("0")){
                       
            

            while(!sGenero.equalsIgnoreCase("F") && !sGenero.equalsIgnoreCase("M") && !sEnd.equalsIgnoreCase("0")){

                sGenero = JOptionPane.showInputDialog("Caracterere inválido\n\nDigite um gênero <M/F> (0 para Sair)");   
                sEnd =sGenero;

            }


            for (int iRow = 0; iRow < 5; iRow++) {

                if(asPessoas[iRow][1].equalsIgnoreCase(sGenero)){

                    sMessage+="Nomes:\n    - "+asPessoas[iRow][0]+"\n";

                }

            }

            JOptionPane.showMessageDialog(null, sMessage);
        
        }
            
    }   
    
}
