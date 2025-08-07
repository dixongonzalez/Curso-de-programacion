using System;

class Program
{
    static void Main(string[] args)
    {
        // tupla para ver el nombre completo
        var nombreCompleto = ("Dixon", "Andres", "Gonzalez", "Delgado");
        
        // tupla para la edad
        var edad = (15);

        Console.WriteLine($"Nombre completo: {nombreCompleto.Item1} {nombreCompleto.Item2} {nombreCompleto.Item3} {nombreCompleto.Item4}");
        Console.WriteLine($"Edad: {edad}");

    }
}