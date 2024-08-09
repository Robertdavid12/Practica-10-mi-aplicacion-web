// Validar formulario de registro
function validarRegistro() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirm_password').value;

    if (username === '') {
        alert('El nombre de usuario es obligatorio.');
        return false;
    }

    if (password.length < 6) {
        alert('La contraseña debe tener al menos 6 caracteres.');
        return false;
    }

    if (password !== confirmPassword) {
        alert('Las contraseñas no coinciden.');
        return false;
    }

    return true;
}

// Validar formulario de inicio de sesión
function validarLogin() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (username === '') {
        alert('El nombre de usuario es obligatorio.');
        return false;
    }

    if (password === '') {
        alert('La contraseña es obligatoria.');
        return false;
    }

    return true;
}




