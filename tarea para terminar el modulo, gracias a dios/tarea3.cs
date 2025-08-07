using System;
using System.Collections.Generic;

public class Program
{
    public static void Main(string[] args)
    {
        // lista para los nombres
        List<string> listaDeNombres = new List<string>
        {
            "nava bello victor alejandro",
            "quintero pena mariana valeria",
            "bracho cariamana elio alberto",
            "quintero finl luis guillermo",
            "pacheco paz julio cesar",
            "villalobos madriz darwin antonio",
            "soto hernandez nestor luis",
            "vilchez santiago",
            "ferrer hernandez leomar daniel",
            "fonseca adames deives jose",
            "bracho isaac",
            "gonzalez delgado dixon andres",
            "pimentel hernandez victor enrrique",
            "carvajal briceno manuel alejandro",
            "quintero molero abraham gushll",
            "tremont primera mathias gabriel"
        };

        // se agrega el nombre del prof
        listaDeNombres.Add("danielZespitia");

        // elimino el nombre del profesor "danielZespitia"
        listaDeNombres.Remove("danielZespitia");

        // lista de las edades
        List<int> listaDeEdades = new List<int>
        {
            24, 21, 37, 21, 17, 21, 17, 16, 16, 17, 17, 15, 13, 15, 13, 14
        };
        
        // opcional esto es para recorrer las de listas y ver el nuevo nombre
        Console.WriteLine("--- lista de nombres ---");
        foreach (var nombre in listaDeNombres)
        {
            Console.WriteLine(nombre);
        }

        Console.WriteLine("\n--- lista de edades ---");
        foreach (var edad in listaDeEdades)
        {
            Console.WriteLine(edad);
        }
    }
}