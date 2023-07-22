<?php
echo "Ingrese un número para generar la tabla de multiplicar: ";
$numero = intval(readline());

echo "Tabla de multiplicar del número " . $numero . ":\n";

$contador = 0;
while ($contador <= 30) {
    $resultado = $numero * $contador;
    echo $numero . " x " . $contador . " = " . $resultado . "\n";
    $contador++;
}
?>