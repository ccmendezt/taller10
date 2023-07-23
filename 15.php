<?php
function sumar($a, $b) {
    return $a + $b;
}

function restar($a, $b) {
    return $a - $b;
}

function multiplicar($a, $b) {
    return $a * $b;
}

function dividir($a, $b) {
    if ($b != 0) {
        return $a / $b;
    } else {
        echo "Error: No se puede dividir entre cero.";
        exit;
    }
}

echo "Ingrese el primer número: ";
$numero1 = floatval(readline());

echo "Ingrese el segundo número: ";
$numero2 = floatval(readline());

echo "Seleccione la operación a realizar (+, -, *, /): ";
$operacion = readline();

$resultado = 0;

switch ($operacion) {
    case '+':
        $resultado = sumar($numero1, $numero2);
        break;
    case '-':
        $resultado = restar($numero1, $numero2);
        break;
    case '*':
        $resultado = multiplicar($numero1, $numero2);
        break;
    case '/':
        $resultado = dividir($numero1, $numero2);
        break;
    default:
        echo "Operación inválida. Por favor, ingrese una operación válida (+, -, *, /).";
        exit;
}

echo "El resultado de la operación es: " . $resultado . "\n";
?>