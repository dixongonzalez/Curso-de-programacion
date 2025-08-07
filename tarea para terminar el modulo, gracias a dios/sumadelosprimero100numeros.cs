using System;

public class Program
{
    //metodoo que calcula la suma de los números del 1 al 100
    public void SumarNumeros()
    {
        int suma = 0; //inicializamos la variable que guardará la suma

        // Bucle for que va desde 1 hasta 100
        for (int i = 1; i <= 100; i++)
        {
            suma += i; // a la variable 'suma' le sumamos el valor de 'i'
        }

        // mstramos el resultado final
        Console.WriteLine("La suma de los primeros 100 números es: " + suma);
    }

    public static void Main(string[] args)
    {
        Program programa = new Program();
        
        programa.SumarNumeros();
    }
}