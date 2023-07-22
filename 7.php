<?php
echo "Ingrese el primer número: ";
$numero1 = floatval(readline());

echo "Ingrese el segundo número: ";
$numero2 = floatval(readline());

echo "Seleccione la operación a realizar (+, -, *, /): ";
$operacion = readline();

$resultado = 0;

switch ($operacion) {
    case '+':
        $resultado = $numero1 + $numero2;
        break;
    case '-':
        $resultado = $numero1 - $numero2;
        break;
    case '*':
        $resultado = $numero1 * $numero2;
        break;
    case '/':
        if ($numero2 != 0) {
            $resultado = $numero1 / $numero2;
        } else {
            echo "Error: No se puede dividir entre cero.";
            exit;
        }
        break;
    default:
        echo "Operación inválida. Por favor, ingrese una operación válida (+, -, *, /).";
        exit;
}

echo "El resultado de la operación es: " . $resultado . "\n";
?>