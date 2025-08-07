using System;

public class Program
{
    public void Calculadora(double num1, double num2, char operacion)
    {
        double resultado;

        switch (operacion)
        {
            case '+':
                resultado = num1 + num2;
                Console.WriteLine($"El resultado de {num1} + {num2} es: {resultado}");
                break;
            case '-':
                resultado = num1 - num2;
                Console.WriteLine($"El resultado de {num1} - {num2} es: {resultado}");
                break;
            case '*':
                resultado = num1 * num2;
                Console.WriteLine($"El resultado de {num1} * {num2} es: {resultado}");
                break;
            case '/':
                if (num2 != 0)
                {
                    resultado = num1 / num2;
                    Console.WriteLine($"El resultado de {num1} / {num2} es: {resultado}");
                }
                else
                {
                    Console.WriteLine("Error: No se puede dividir por cero.");
                }
                break;
            default:
                Console.WriteLine("Error: Operación no válida. Use +, -, *, /.");
                break;
        }
    }

    // Main para probar los métodos
    public static void Main(string[] args)
    {
        Program programa = new Program();
        Console.WriteLine("--- Ejercicio 3: Calculadora Simple ---");
        programa.Calculadora(10.5, 5.2, '+');
        programa.Calculadora(20, 4, '/');
        programa.Calculadora(8, 0, '/');
        programa.Calculadora(5, 3, 'x');
        Console.WriteLine();
    }
}