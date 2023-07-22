<?php
echo "Ingrese el tipo de afiliación (A, B, C o D): ";
$tipoAfiliacion = readline();

echo "Ingrese el número de personas: ";
$numeroPersonas = intval(readline());

$precioEntrada = 25000;
$totalSinDescuento = $precioEntrada * $numeroPersonas;

switch ($tipoAfiliacion) {
    case 'A':
        $descuento = 0.30 * $totalSinDescuento;
        break;
    case 'B':
        $descuento = 0.25 * $totalSinDescuento;
        break;
    case 'C':
        $descuento = 0.10 * $totalSinDescuento;
        break;
    case 'D':
        $descuento = 0.05 * $totalSinDescuento;
        break;
    default:
        echo "Tipo de afiliación inválido. Por favor, ingrese un tipo válido (A, B, C o D).";
        exit;
}

$totalConDescuento = $totalSinDescuento - $descuento;

echo "Valor total de las entradas con descuento: $" . $totalConDescuento . "\n";
?>