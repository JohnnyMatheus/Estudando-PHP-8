import java.util.Scanner;

public class MoneyBreakdown {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int contas = {100, 50, 20, 10, 5, 2};
        double[] moedas = {1.0, 0.5, 0.25, 0.10, 0.05, 0.01};

        // Entrada do valor
        System.out.print("Digite o valor em R$: ");
        double quantia = scanner.nextDouble();

        System.out.println("Decomposição:");
        
        // Processamento das cédulas
        for (int conta : contas) {
            int count = (int) (quantia / conta);
            if (count > 0) {
                System.out.printf("R$%d: %d%n", conta, count);
                quantia -= count * conta;
            }
        }

        // Processamento das moedas
        for (double moeda : moedas) {
            int count = (int) Math.floor(quantia / moeda);
            if (count > 0) {
                System.out.printf("R$%.2f: %d%n", moeda, count);
                    quantia -= count * moeda;
            }
            // Arredondar para evitar problemas com precisão de ponto flutuante
            quantia = Math.round(quantia * 100.0) / 100.0;
        }

        scanner.close();
    }
}