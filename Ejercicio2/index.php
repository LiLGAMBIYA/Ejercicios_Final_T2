<?php
function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function validarNombre($nombre) {
    return strlen($nombre) >= 2 && preg_match('/^[a-zA-Z\s]+$/', $nombre);
}

function validarTelefono($telefono) {
    return preg_match('/^[0-9]{9}$/', $telefono);
}

function validarClave($clave) {
    return strlen($clave) >= 8 &&
        preg_match('/[A-Z]/', $clave) &&
        preg_match('/[a-z]/', $clave) &&
        preg_match('/[0-9]/', $clave);
}

echo "Email (test@ok.com): " . (validarEmail("test@ok.com") ? 'Válido' : 'Inválido') . "<br>";
echo "Email (test_mal): " . (validarEmail("test_mal") ? 'Válido' : 'Inválido') . "<br>";
echo "Nombre (Juan): " . (validarNombre("Juan") ? 'Válido' : 'Inválido') . "<br>";
echo "Nombre (J1): " . (validarNombre("J1") ? 'Válido' : 'Inválido') . "<br>";
echo "Teléfono (123456789): " . (validarTelefono("123456789") ? 'Válido' : 'Inválido') . "<br>";
echo "Clave (Clave123): " . (validarClave("Clave123") ? 'Válido' : 'Inválido') . "<br>";
echo "Clave (clave): " . (validarClave("clave") ? 'Válido' : 'Inválido') . "<br>";
?>