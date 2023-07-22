<?php
echo "Ingrese el tipo de afiliación (A o B): ";
$tipoAfiliacion = readline();

echo "Ingrese el número de personas: ";
$numeroPersonas = intval(readline());

$precioEntrada = 25000;
$totalSinDescuento = $precioEntrada * $numeroPersonas;

if ($tipoAfiliacion === 'A' || $tipoAfiliacion === 'B') {
    $descuento = 0.3 * $totalSinDescuento;
    $totalConDescuento = $totalSinDescuento - $descuento;

    echo "Valor total de las entradas con descuento (30%): $" . $totalConDescuento . "\n";
} else {
    echo "Valor total de las entradas sin descuento: $" . $totalSinDescuento . "\n";
}
?>