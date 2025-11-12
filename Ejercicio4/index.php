<?php
function analizarTexto($texto) {
    $textoLimpio = strtolower($texto);
    $textoLimpio = preg_replace('/[^\w\s]/', '', $textoLimpio);
    $palabras = preg_split('/\s+/', $textoLimpio, -1, PREG_SPLIT_NO_EMPTY);

    $totalPalabras = count($palabras);

    $frecuencia = array_count_values($palabras);
    arsort($frecuencia);

    $longitudTotal = array_reduce($palabras, fn($total, $p) =>
        $total + strlen($p),
        0);

    $longitudPromedio = $totalPalabras > 0 ? $longitudTotal / $totalPalabras : 0;

    return [
        'total_palabras' => $totalPalabras,
        'frecuencia' => $frecuencia,
        'longitud_promedio' => $longitudPromedio
    ];
}

$textoEjemplo = "Hola mi nombre es Hugo López y tengo 19 años";
$analisis = analizarTexto($textoEjemplo);

echo " Análisis de Texto ";
print_r($analisis);
?>