using System;

public class Program
{
    public void VerificarNumero(int numero)
    {
        if (numero > 0)
        {
            Console.WriteLine($"El número {numero} es positivo.");
        }
        else if (numero < 0)
        {
            Console.WriteLine($"El número {numero} es negativo.");
        }
        else
        {
            Console.WriteLine($"El número es cero.");
        }
    }
    
    // Main para probar los métodos
    public static void Main(string[] args)
    {
        Program programa = new Program();
        Console.WriteLine("--- Ejercicio 2: Positivo, Negativo o Cero ---");
        programa.VerificarNumero(10);
        programa.VerificarNumero(-5);
        programa.VerificarNumero(0);
        Console.WriteLine();
    }
}