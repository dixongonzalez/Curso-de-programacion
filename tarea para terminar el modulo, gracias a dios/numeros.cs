using System;

public class Program
{
    // Método que recibe un número entero y determina si es par o impar
    public void VerificarParImpar(int numero)
    {
        // El operador módulo (%) devuelve el resto de una división.
        // Si el resto de dividir el número por 2 es 0, es par.
        if (numero % 2 == 0)
        {
            Console.WriteLine($"El número {numero} es par.");
        }
        else
        {
            Console.WriteLine($"El número {numero} es impar.");
        }
    }

    public static void Main(string[] args)
    {
        Program programa = new Program();

        // Puedes llamar al método con diferentes números para probarlo
        programa.VerificarParImpar(5);
        programa.VerificarParImpar(10);
        programa.VerificarParImpar(-3);
        programa.VerificarParImpar(0);
    }
}