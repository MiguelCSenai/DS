package exemplosmatriz;

import javax.swing.JOptionPane;

public class Exercicio6 {
    
    public static void main(String[] args) {
        
        boolean[][] abLivre = new boolean[5][10];
        String[][] asQuartos = new String[5][10];
        int iMenu = 0, iAndar=0, iQuarto=0;
        String sMessage = "";
        String sConfirmacao = "";
        
        int numQuarto = 1;
        for (int iRow = 0; iRow < 5; iRow++) {

                System.out.println("\n");

                for (int iCol = 0; iCol < 10; iCol++) {

                    abLivre[iRow][iCol] = true;
                    asQuartos[iRow][iCol] = "Quarto "+String.valueOf(numQuarto);
                    numQuarto++;
                }
        }
        
        do{
            
            numQuarto=1;
            for (int iRow = 0; iRow < 5; iRow++) {

                for (int iCol = 0; iCol < 10; iCol++) {
                    
                    if(abLivre[iRow][iCol] == true){
                        
                        asQuartos[iRow][iCol] = "Quarto "+String.valueOf(numQuarto)+ ": Livre";
                        
                    }else{
                        
                        asQuartos[iRow][iCol] = "Quarto "+String.valueOf(numQuarto)+ ": Ocupado";
                        
                    }
                    
                    numQuarto++;
                    
                }
            }
        
            iMenu = Integer.parseInt(JOptionPane.showInputDialog("O que você quer fazer\n\n    1 - Definir Ocupação\n    2 - Imprimir lista de quartos\n    3 - Sair"));
            
            switch (iMenu) {
                case 1:
                    iAndar=Integer.parseInt(JOptionPane.showInputDialog("Em qual andar?(1 a 5"))-1;
                    iQuarto=Integer.parseInt(JOptionPane.showInputDialog("Qual quarto do andar?(1 a 10"))-1;
                    if(abLivre[iAndar][iQuarto]==true){
                        sConfirmacao = JOptionPane.showInputDialog(asQuartos[iAndar][iQuarto]+ ", deseja definir como ocupado?\n<S/N>");
                        
                        if(sConfirmacao.equalsIgnoreCase("S")){
                            
                            abLivre[iAndar][iQuarto]=!abLivre[iAndar][iQuarto];
                        
                        }
                    }else{
                        
                        sConfirmacao = JOptionPane.showInputDialog(asQuartos[iAndar][iQuarto]+ ", deseja definir como livre?\n<S/N>");;
                        if(sConfirmacao.equalsIgnoreCase("S")){
                            
                            abLivre[iAndar][iQuarto]=!abLivre[iAndar][iQuarto];
                        
                        }
                    
                        
                    }
                    break;
                case 2:
                    sMessage="";
                    for (int iRow = 0; iRow < 5; iRow++) {
                        sMessage+="\n\n";
                        for (int iCol = 0; iCol < 10; iCol++) {
                            
                            sMessage += asQuartos[iRow][iCol]+"           ";
                                                    
                        }
                     
                    }
                    JOptionPane.showMessageDialog(null, sMessage+"    ");    
                    break;
                case 3:
                    
                    break;
            }
            
        }while(iMenu != 3);
            
    }
}
