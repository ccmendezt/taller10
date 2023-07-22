<?php
define('CONSTANTE_1', 'Constante');
define('CONSTANTE_2', 5);

$v = 'Variable';
$pi = 3.1415;

echo "Contenido original de las constantes y variables:\n";
echo "CONSTANTE 1: " . CONSTANTE_1 . "\n";
echo "CONSTANTE 2: " . CONSTANTE_2 . "\n";
echo "Variable 1: " . $v . "\n";
echo "Variable 2: " . $pi . "\n";

$v = '¡Cambió el valor de la variable!';
$pi = 100;

echo "Contenido actualizado de las variables:\n";
echo "CONSTANTE 1: " . CONSTANTE_1 . "\n";
echo "CONSTANTE 2: " . CONSTANTE_2 . "\n";
echo "variable 1: " . $v . "\n";
echo "variable 2: " . $pi . "\n";
?>