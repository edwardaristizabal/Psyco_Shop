function validateForm() {
  $correo = $_POST['correo'];
  $contraseña = $_POST['contraseña'];

  // Validar que los campos obligatorios estén completos
  if (empty($correo) || empty($contraseña)) {
    return false;
  }

  // Validar que el correo electrónico tenga un formato válido
  if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    return false;
  }

  // Validar que las contraseñas tengan mas de 8 caracteres
  if (strlen($contraseña) < 8) {
    return false;
  }
