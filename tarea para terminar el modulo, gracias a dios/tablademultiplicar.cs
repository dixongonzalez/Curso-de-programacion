using System;

public class Program
{
    // Método que imprime la tabla de multiplicar del 7
    public void TablaDeMultiplicar()
    {
        int numero = 7;

        // Bucle for que va desde 1 hasta 10
        for (int i = 1; i <= 10; i++)
        {
            int resultado = numero * i;
            Console.WriteLine(numero + " x " + i + " = " + resultado);
        }
    }

    public static void Main(string[] args)
    {
        Program programa = new Program();
        programa.TablaDeMultiplicar();
    }
}