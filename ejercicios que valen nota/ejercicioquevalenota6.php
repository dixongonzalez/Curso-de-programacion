<?php
$numero = 0; 
while ($numero < 1 || $numero > 5) {
    // generar un numero aleatorio entre 1 y 10
    $numero = rand(1, 10); 
    //mostrar el numero en pantalla
    echo "Numero introducido: " . $numero . "\n";
    //verificar si el numero que esta en pantalla es correcto
    if ($numero < 1 || $numero > 5) {
        echo "Numero incorrecto. Por favor, introduce un numero del 1 al 5.\n";
    }
}

echo "Numero correcto: " . $numero . ;
?>