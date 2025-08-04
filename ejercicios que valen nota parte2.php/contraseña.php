<?php

/**
 * Valida una contraseña según varios criterios de seguridad.
 * @param string $contrasena La contraseña a validar.
 * @return bool Devuelve true si la contraseña es válida, false en caso contrario.
 */
function validar_contrasena(string $contrasena): bool {
  // 1. Verificar la longitud (debe ser al menos 8 caracteres)
  if (strlen($contrasena) < 8) {
    return false;
  }
  
  // 2. Verificar si contiene al menos una mayúscula
  // La función preg_match usa una expresión regular para buscar el patrón.
  if (!preg_match('/[A-Z]/', $contrasena)) {
    return false;
  }
  
  // 3. Verificar si contiene al menos un número
  if (!preg_match('/[0-9]/', $contrasena)) {
    return false;
  }
  
  // Si todas las verificaciones pasaron, la contraseña es válida
  return true;
}

// --- Demostración: Prueba con diferentes contraseñas ---

$contrasena1 = "Segura123";      // Válida
$contrasena2 = "corta";          // Inválida (longitud)
$contrasena3 = "sinmayusculas1"; // Inválida (sin mayúscula)
$contrasena4 = "SinNumeros";     // Inválida (sin número)
$contrasena5 = "UnaContrasenaMuyFuerte54"; // Válida

echo "--- Resultados de la Validación ---\n";

function mostrar_resultado($contrasena) {
  if (validar_contrasena($contrasena)) {
    echo "

$contrasena es una contraseña válida.\n";
?>