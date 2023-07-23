<?php
function esContrasenaSegura($contrasena)
{
  if (strlen($contrasena) < 8) {
    return false;
  }

  if (!preg_match('/[A-Z]/', $contrasena)) {
    return false;
  }

  if (!preg_match('/[0-9]/', $contrasena)) {
    return false;
  }

  return true;
}

// Solicitar al usuario que ingrese la contraseña
echo "Ingrese la contraseña a registrar: ";
$contrasenaUsuario = readline();

// Verificar si la contraseña es segura
if (esContrasenaSegura($contrasenaUsuario)) {
  echo "La contraseña es segura.\n";
} else {
  echo "La contraseña no es segura. Asegúrese de que tenga 8 o más caracteres, al menos una letra mayúscula y al menos un número.\n";
}
?>