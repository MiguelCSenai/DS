package cifrador.cesar;

import javax.swing.JOptionPane;

public class CifradorCesar {

    public static void main(String[] args) {

        String sAberto="";
        sAberto = JOptionPane.showInputDialog("Digite o texto a ser criptografado");
        int iChave=0;
        iChave = Integer.parseInt(JOptionPane.showInputDialog("Digite a chave"));
        String sCifrado="";
        
        for(int i=0; i<sAberto.length();i++){
        
            int iChar = (int)(sAberto.charAt(i));
            if(iChar!=32){
            
                iChar += iChave;
            
            }
            
            sCifrado +=(char)(iChar);
                     
        }
            
        JOptionPane.showMessageDialog(null, "ABERTO: "+sAberto+"\nCifrado: "+sCifrado);
        
    }
    
}
