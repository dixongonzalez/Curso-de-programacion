<?php

// Almacena una lista de frutas
$frutas = ["🍎 mango", "🍌 topocho", "🍓 mora", "🍇 31 de diciembre", "🍊 granada"];

echo "--- Lista de Frutas ---\n";
foreach ($frutas as $fruta) {
  echo $fruta . "\n";
} 
// Almacena la informacion de un producto
$producto = [
  'nombre' => '🍌 topocho',
  'precio' => 1.50,
  'stock' => 50
];
echo "--- Informacion del Producto ---\n";
echo "Nombre: " . $producto['nombre'] . "\n";
echo "Precio: $" . $producto['precio'] . "\n";
echo "Stock: " . $producto['stock'] . " unidades\n";

?>