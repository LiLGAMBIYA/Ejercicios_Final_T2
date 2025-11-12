<?php
$productos = [
    ["id" => 1, "nombre" => "Laptop", "precio" => 899.99, "stock" => 10],
    ["id" => 2, "nombre" => "Teléfono", "precio" => 499.50, "stock" => 15],
    ["id" => 3, "nombre" => "Tablet", "precio" => 349.99, "stock" => 0],
];

$caros = array_filter($productos, fn($p) => $p["precio"] > 400);
echo " Productos caros (> 400) ";
print_r($caros);

usort($productos, fn($a, $b) => $a["precio"] <=> $b["precio"]);
echo " Productos ordenados por precio ";
print_r($productos);

$valorTotal = array_reduce($productos, fn($total, $p) =>
    $total + ($p["precio"] * $p["stock"]),
    0);

echo " Valor total del inventario ";
echo "$" . number_format($valorTotal, 2);
?>