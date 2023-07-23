<?php
echo "Números pares del 1 al 100:\n";

$numero = 1;
while ($numero <= 100) {
    if ($numero % 2 == 0) {
        echo $numero . "\n";
    }
    $numero++;
}
?>