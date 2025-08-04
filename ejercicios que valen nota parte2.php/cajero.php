<?php

// Catálogo inicial de productos
$catalogo = [
  ['nombre' => 'Laptop', 'precio' => 1200, 'stock' => 10],
  ['nombre' => 'Mouse', 'precio' => 25, 'stock' => 50],
  ['nombre' => 'Teclado', 'precio' => 75, 'stock' => 20]
];
function agregar_producto(&$catalogo, $nombre, $precio, $stock) {
  $nuevo_producto = ['nombre' => $nombre, 'precio' => $precio, 'stock' => $stock];
  $catalogo[] = $nuevo_producto;
  echo "Producto '{$nombre}' agregado al catálogo.\n";
}
function buscar_producto($catalogo, $nombre_buscado) {
  foreach ($catalogo as $producto) {
    if ($producto['nombre'] === $nombre_buscado) {
      return $producto;
    }
  }
  return null;
}
function calcular_total_valor_stock($catalogo) {
  $valor_total = 0;
  foreach ($catalogo as $producto) {
    $valor_total += $producto['precio'] * $producto['stock'];
  }
  return $valor_total;
}
// 1. Agregar un nuevo producto
echo "--- Agregando Producto ---\n";
agregar_producto($catalogo, 'Monitor', 300, 15);
echo "\n";

// 2. Buscar un producto existente
echo " Buscando Producto 'Mouse' \n";
$mouse = buscar_producto($catalogo, 'Mouse');
if ($mouse) {
  echo "Producto encontrado: " . $mouse['nombre'] . ", Precio: $" . $mouse['precio'] . ", Stock: " . $mouse['stock'] . "\n";
} else {
  echo "El producto no se encontró.\n";
}
echo "\n";

// 3. Buscar un producto que no existe
echo "--- Buscando Producto 'Tableta' ---\n";
$tableta = buscar_producto($catalogo, 'Tableta');
if (!$tableta) {
  echo "El producto 'Tableta' no se encontró.\n";
}
echo "\n";

// 4. Calcular el valor total del inventario
echo "--- Valor Total del Inventario ---\n";
$valor_total_inventario = calcular_total_valor_stock($catalogo);
echo "El valor total del inventario es: $" . $valor_total_inventario . "\n";

?>