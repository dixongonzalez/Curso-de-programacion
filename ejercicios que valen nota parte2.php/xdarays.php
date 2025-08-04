<?php

// lista de tareas
$tareas = [
  [
    'tarea' => 'Comprar el pan',
    'completada' => false,
    'prioridad' => 'alta'
  ],
  [
    'tarea' => 'Enviar el reporte de ventas',
    'completada' => false,
    'prioridad' => 'alta'
  ],
  [
    'tarea' => 'Llamar a los clientes',
    'completada' => true,
    'prioridad' => 'media'
  ],
  [
    'tarea' => 'Organizar la oficina',
    'completada' => false,
    'prioridad' => 'baja'
  ]
];

echo "--- Todas las Tareas ---\n";
foreach ($tareas as $tarea) {
  $estado = $tarea['completada'] ? '[✅ Hecha]' : '[❌ Pendiente]';
  echo "- " . $estado . " (" . $tarea['prioridad'] . "): " . $tarea['tarea'] . "\n";
}

echo "\n--- Marcando una Tarea como Completada ---\n";
echo "¡Tarea 'Enviar el reporte de ventas' marcada como completada!\n";

$tareas[1]['completada'] = true;

echo "\n--- Tareas Pendientes ---\n";
foreach ($tareas as $tarea) {
  if ($tarea['completada'] === false) {
    echo "- (" . $tarea['prioridad'] . "): " . $tarea['tarea'] . "\n";
  }
}
?>