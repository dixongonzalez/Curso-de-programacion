using System;

public class Program
{
    public static void Main(string[] args)
    {
        // se llama al metodo para el juego de adivinar la contraseña
        // esto es para que se ejecute el metodo
        AdivinarContrasena();
    }

    /// <summary>
    /// pide al usuario que ingrese una contraseña hasta que sea la correcta
    /// </summary>
    public static void AdivinarContrasena()
    {
        // define la contraseña secreta
        const string contrasenaCorrecta = "barberdickson123";
        string contrasenaIngresada;

        Console.WriteLine("Por favor, adivina la contraseña. ¡Tienes intentos ilimitados!");

        while (true)
        {
            Console.Write("Ingresa la contraseña: ");
            contrasenaIngresada = Console.ReadLine();

            if (contrasenaIngresada == contrasenaCorrecta)
            {
                Console.WriteLine("¡Acceso concedido! 🎉");
                Console.WriteLine("Bienvenido al sistema.");
                // esto es lo que te saldra en el caso que sea correcta la contraseña
                break;
            }
            else
            {
                Console.WriteLine("Contraseña incorrecta. Inténtalo de nuevo.");
            }
        }
    }
}