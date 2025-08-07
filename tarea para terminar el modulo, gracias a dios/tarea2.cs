using System;



public class FriendsList

{

    public static void Main(string[] args)

    {

        // el array es para almacenar los nombres de tus hijos

        string[] friends = new string[3];



        // aca asignas los nombres de tus hijos

        friends[0] = "Dei v 72 anos";

        friends[1] = "Galletasmaria 43 anos";

        friends[2] = "Darwin 12";



        // y aca se imprimen los nombres ya llamados

        Console.WriteLine("Mis tres hijos son y tienen:");

        Console.WriteLine(friends[0]);

        Console.WriteLine(friends[1]);

        Console.WriteLine(friends[2]);

    }

}