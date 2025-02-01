public class Primo {
    public static void main(String[] args) {
        int num = 29, flag = 0;
        for (int i = 2; i <= num / 2; i++) {
            if (num % i == 0) {
                flag = 1;
                break;
            }
        }
        if (flag == 0) {
            System.out.println("Es primo");
        } else {
            System.out.println("No es primo");
        }
    }
}
