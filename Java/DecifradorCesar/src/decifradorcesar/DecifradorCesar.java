package decifradorcesar;

import javax.swing.JOptionPane;

public class DecifradorCesar {

    public static void main(String[] args) {

        String sCifrado="";
        sCifrado = JOptionPane.showInputDialog("Digite o texto a ser descriptografado");
        int iChave=0;
        iChave = Integer.parseInt(JOptionPane.showInputDialog("Digite a chave"));
        String sAberto="";
        
        for(int i=0; i<sCifrado.length();i++){
        
            int iChar = (int)(sCifrado.charAt(i));
            if(iChar!=32){
            
                iChar -= iChave;
            
            }
            if(iChar > 72){
                
                iChar -= 31;
                
            }
            
            sAberto +=(char)(iChar);
                     
        }
            
        JOptionPane.showMessageDialog(null, "Cifrado: "+sCifrado+"\nAberto: "+sAberto);
        
    }
    
}
