package revisao;

import java.text.DecimalFormat;
import javax.swing.JOptionPane;

public class Exercicio5 {
    
    public static void main(String[] args) {
        
        DecimalFormat df = new DecimalFormat("R$ #0.00");
        float[] afImpost = {(30f/100f), (20f/100f), (25f/100f)};
        int iCod = 0;
        float fSal =0f;
        float fRes = 0f;
        
        for(int i = 0;i<1;){
            
            iCod=Integer.parseInt(JOptionPane.showInputDialog("Digite o código de estado civil do funcionario\n\n1) Solteiro\n2) Casado\n3) Outros"));
            
            if(iCod<=0 || iCod>afImpost.length){
                
                JOptionPane.showMessageDialog(null, "Código inválido");
                
            }else{
                
                break;
                
            }
            
        }
              
        fSal = Float.parseFloat(JOptionPane.showInputDialog("Digite o salário bruto do funcionario"));
        
        fRes = fSal * afImpost[iCod-1];
        
        JOptionPane.showMessageDialog(null, "Salario: "+df.format(fSal)+" Cod: "+iCod+" Rescisão: "+df.format(fRes));
        
    }
    
}
