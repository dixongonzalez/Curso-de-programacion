<?php
$numero = 0;
while ($numero <= 50) {
  $numero = rand(1, 100);
  echo "Numero generado: " . $numero . "\n";
}
echo "Se ha generado un numero mayor a 50";
?>