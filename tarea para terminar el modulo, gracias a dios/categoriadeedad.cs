using System;

public class Program
{
    public void ClasificarEdad(int edad)
    {
        if (edad >= 0 && edad <= 12)
        {
            Console.WriteLine($"Con {edad} años, la persona es un Niño.");
        }
        else if (edad >= 13 && edad <= 17)
        {
            Console.WriteLine($"Con {edad} años, la persona es un Adolescente.");
        }
        else if (edad >= 18 && edad <= 59)
        {
            Console.WriteLine($"Con {edad} años, la persona es un Adulto.");
        }
        else if (edad >= 60)
        {
            Console.WriteLine($"Con {edad} años, la persona es un Adulto Mayor.");
        }
        else
        {
            Console.WriteLine("Edad no válida. La edad debe ser un número positivo.");
        }
    }
    
    // Main para probar los métodos
    public static void Main(string[] args)
    {
        Program programa = new Program();
        Console.WriteLine("--- Ejercicio 4: Categoría de Edad ---");
        programa.ClasificarEdad(8);
        programa.ClasificarEdad(15);
        programa.ClasificarEdad(35);
        programa.ClasificarEdad(70);
        programa.ClasificarEdad(-2);
    }
}