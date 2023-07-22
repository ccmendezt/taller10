<?php
echo "Ingrese su nombre: ";
$nombre = readline();

echo "Ingrese su edad: ";
$edad = intval(readline());

if ($edad >= 18) {
    echo "Hola, " . $nombre . ". Usted es mayor de edad.\n";
} else {
    echo "Hola, " . $nombre . ". Usted es menor de edad.\n";
}
?>