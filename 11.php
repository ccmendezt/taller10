<?php
echo "Números pares del 0 al 100:\n";

$sumaPares = 0;
for ($numero = 0; $numero <= 100; $numero += 2) {
    echo $numero . "\n";
    $sumaPares += $numero;
}

echo "La suma de los números pares es: " . $sumaPares . "\n";
?>