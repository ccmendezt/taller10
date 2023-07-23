<?php
$arregloNumerico = [3, 5, 7, 9, 11];
$longitudArreglo = count($arregloNumerico);

$suma = 0;
for ($i = 0; $i < $longitudArreglo; $i++) {
  $suma += $arregloNumerico[$i];
}

echo "Arreglo numérico: " . implode(", ", $arregloNumerico) . "\n";
echo "La suma de los números es: " . $suma . "\n";
?>