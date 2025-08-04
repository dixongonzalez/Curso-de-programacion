<?php

// Array de candidatos, inicializando sus votos en 0
$votos = [
  'Candidato A' => 0,
  'Candidato B' => 0,
  'Candidato C' => 0
];

/**
 * Emite un voto para un candidato específico.
 * @param array &$votos El array de votos por referencia.
 * @param string $candidato El nombre del candidato a votar.
 */
function emitir_voto(&$votos, $candidato) {
  if (array_key_exists($candidato, $votos)) {
    $votos[$candidato]++;
    echo "Se ha emitido un voto para: " . $candidato . "\n";
  } else {
    echo "Error: El candidato '" . $candidato . "' no existe.\n";
  }
}

echo "--- Votación en curso (10 votos aleatorios) ---\n";

// Array con los nombres de los candidatos para la selección aleatoria
$candidatos = array_keys($votos);

// Bucle para simular 10 votos aleatorios
for ($i = 0; $i < 10; $i++) {
  // Selecciona un candidato de forma aleatoria
  $candidato_elegido = $candidatos[rand(0, count($candidatos) - 1)];
  // Llama a la función para emitir el voto
  emitir_voto($votos, $candidato_elegido);
}

echo "\n--- Resultados Finales ---\n";

// Bucle para imprimir los resultados finales
foreach ($votos as $candidato => $conteo) {
  echo $candidato . ": " . $conteo . " votos\n";
}

// Opcional: Determinar y mostrar el ganador
$ganador = array_search(max($votos), $votos);
echo "\n¡El ganador es **" . $ganador . "** con " . $votos[$ganador] . " votos! 🎉\n";

?>