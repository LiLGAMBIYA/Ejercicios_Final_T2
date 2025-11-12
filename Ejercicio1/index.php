<?php
function calcular($num1, $num2, $operacion) {
    return match($operacion) {
        'suma' => $num1 + $num2,
        'resta' => $num1 - $num2,
        'multiplicacion' => $num1 * $num2,
        'division' => $num2 != 0 ? $num1 / $num2 : "Error: División por cero",
        default => "Operación no válida",
    };
}

$resultado = calcular(10, 5, 'suma');
echo "Resultado (suma): $resultado <br>";

$resultado = calcular(10, 5, 'division');
echo "Resultado (división): $resultado <br>";

$resultado = calcular(10, 0, 'division');
echo "Resultado (división por cero): $resultado <br>";
?>