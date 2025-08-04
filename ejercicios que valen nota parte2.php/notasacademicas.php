<?php

// Array principal de estudiantes
$estudiantes = [
  [
    'nombre' => 'Anabell Lopez',
    'notas' => [
      'Matemáticas' => 95, 
      'Historia' => 88,
      'Ciencias' => 92
    ]
  ], 
  [
    'nombre' => 'Dixon Gonzalez',
    'notas' => [
      'Matemáticas' => 78, 
      'Historia' => 85,    
      'Ciencias' => 90
    ]
  ], 
  [
    'nombre' => 'Mariangel Gonzalez',
    'notas' => [
      'Matemáticas' => 100, 
      'Historia' => 95,
      'Ciencias' => 98
    ]
  ]
];

// Recorre el array de estudiantes y sus notas usando bucles anidados
echo "--- Resumen de Notas de Estudiantes ---\n";

foreach ($estudiantes as $estudiante) {
  // Bucle exterior: Recorre cada estudiante
  echo "\nNombre del Estudiante: " . $estudiante['nombre'] . "\n";
  echo "Notas:\n";
  
  // Bucle interior: Recorre las notas de cada estudiante
  foreach ($estudiante['notas'] as $materia => $calificacion) {
    echo "  - " . $materia . ": " . $calificacion . "\n";
  }
}
?>