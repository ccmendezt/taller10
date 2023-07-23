<?php
echo "Ingrese un número para generar la tabla de multiplicar: ";
$numero = intval(readline());

echo "Tabla de multiplicar del número " . $numero . ":\n";

for ($contador = 0; $contador <= 30; $contador++) {
    $resultado = $numero * $contador;
    echo $numero . " x " . $contador . " = " . $resultado . "\n";
}
?>