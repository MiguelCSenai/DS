package revisao;

import javax.swing.JOptionPane;
import java.text.DecimalFormat;

public class Exercicio1 {
    
    public static void main(String[] args) {
        
        float fRaio = 0f, fArea = 0f, fPerimetro = 0f;
        
        fRaio = Float.parseFloat(JOptionPane.showInputDialog("Digite o raio do círculo"));
        fArea = (float)(Math.PI * fRaio * fRaio);
        fPerimetro = (2 * (float)Math.PI) * fRaio;
        
        DecimalFormat df = new DecimalFormat("#.##");
        String areaFormatada = df.format(fArea);
        String perimetroFormatado = df.format(fPerimetro);
        
        JOptionPane.showMessageDialog(null, "O círculo de raio " + fRaio + " tem área " + areaFormatada + " e perímetro " + perimetroFormatado);
        
    }
    
}
