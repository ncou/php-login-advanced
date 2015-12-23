<?php

/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */

// login & registration classes
define('MESSAGE_ACCOUNT_NOT_ACTIVATED', 'Su cuenta todavía no ha sido activada. Por favor, haz clic en el enlace de confirmación del correo.');
define('MESSAGE_CAPTCHA_WRONG', 'El captcha es incorrecto.');
define('MESSAGE_COOKIE_INVALID', 'Cookie no válida.');
define('MESSAGE_DATABASE_ERROR', 'Problema de conexión con la base de datos.');
define('MESSAGE_EMAIL_ALREADY_EXISTS', 'Esta cuenta de correo electrónico ya está en uso. Por favor, utilice la opción de recordar contraseña si cree que la ha olvidado.');
define('MESSAGE_EMAIL_CHANGE_FAILED', 'Lo sentimos, pero pero su dirección de correo electrónico no ha podido ser cambiada.');
define('MESSAGE_EMAIL_CHANGED_SUCCESSFULLY', 'Su dirección de correo electrónico ha sido cambiada con éxito. La nueva es ');
define('MESSAGE_EMAIL_EMPTY', 'El correo electrónico no puede estar vacío');
define('MESSAGE_EMAIL_INVALID', 'Su dirección de correo electrónico no tiene un formato válido');
define('MESSAGE_EMAIL_SAME_LIKE_OLD_ONE', 'La dirección de correo electrónico es la misma que la anterior. Por favor, seleccione una diferente.');
define('MESSAGE_EMAIL_TOO_LONG', 'La dirección de correo electrónico no debe ser mayor de 64 caracteres');
define('MESSAGE_LINK_PARAMETER_EMPTY', 'Parámetros del enlace vacíos.');
define('MESSAGE_LOGGED_OUT', 'Ha cerrado su sesión.');
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
define('MESSAGE_LOGIN_FAILED', 'Error de inicio de sesión.');
define('MESSAGE_OLD_PASSWORD_WRONG', 'Su antigua contraseña es incorrecta.');
define('MESSAGE_PASSWORD_BAD_CONFIRM', 'Las contraseñas no coinciden');
define('MESSAGE_PASSWORD_CHANGE_FAILED', 'Lo sentimos, pero ha habido un error en su cambio de contraseña.');
define('MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY', 'Su contraseña ha sido modificada correctamente.');
define('MESSAGE_PASSWORD_EMPTY', 'El campo de contraseña está vacío.');
define('MESSAGE_PASSWORD_RESET_MAIL_FAILED', 'El correo de reinicio de contraseña no ha podido ser enviado. Error: ');
define('MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT', 'El correo de reinicio de contraseña ha sido enviado correctamente.');
define('MESSAGE_PASSWORD_TOO_SHORT', 'La contraseña debe tener una longitud mínima de 6 caracteres.');
define('MESSAGE_PASSWORD_WRONG', 'Contraseña incorrecta. Pruebe de nuevo.');
define('MESSAGE_PASSWORD_WRONG_3_TIMES', 'Ha introducido una contraseña incorrecta 3 veces o más. Por favor, espere 30 segundos antes de poder intentarlo de nuevo.');
define('MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL', 'Lo sentimos. No se ha encontrado ninguna combinación de id/código de verificación here...');
define('MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL', 'La activación se ha realizado correctamente. Ahora puede acceder.');
define('MESSAGE_REGISTRATION_FAILED', 'Lo sentimos, su registro ha sido fallido. Por favor, inténtelo de nuevo.');
define('MESSAGE_RESET_LINK_HAS_EXPIRED', 'Su enlace de reinicio ha expirado. Por favor, utilice su enlace antes de que pase una hora.');
define('MESSAGE_VERIFICATION_MAIL_ERROR', 'Lo sentimos, no hemos podido enviarle un correo electrónico de verificación. Su cuenta no ha sido creada.');
define('MESSAGE_VERIFICATION_MAIL_NOT_SENT', 'Correo electrónico de verificación no enviado correctamente. Error: ');
define('MESSAGE_VERIFICATION_MAIL_SENT', 'Su cuenta ha sido creada con éxito y le hemos enviado un correo electrónico.Por favor, haga clic en el enlace de verificación que encontrará dentro de dicho correo.');
define('MESSAGE_USER_DOES_NOT_EXIST', 'Este usuario no existe');
define('MESSAGE_USERNAME_BAD_LENGTH', 'El nombre de usuario debe tener entre 2 y 64 caracteres');
define('MESSAGE_USERNAME_CHANGE_FAILED', 'Lo sentimos, se ha producido un fallo durante su cambio de nombre de usuario');
define('MESSAGE_USERNAME_CHANGED_SUCCESSFULLY', 'Su nombre de usuario ha sido modificado correctamente. El nuevo es ');
define('MESSAGE_USERNAME_EMPTY', 'El campo de nombre de usuario está vacío');
define('MESSAGE_USERNAME_EXISTS', 'Lo sentimos, ese nombre de usuario ya está en uso. Por favor, escoja uno nuevo.');
define('MESSAGE_USERNAME_INVALID', 'El nombre de usuario no tiene el formato correcto. Debe tener entre 2 y 64 caracteres y estar formado únicamente por letras (a-Z) y números');
define('MESSAGE_USERNAME_SAME_LIKE_OLD_ONE', 'Lo sentimos, ese nombre de usuario es el mismo que tiene actualmente. Introduzca uno distinto.');

// views
define('WORDING_BACK_TO_LOGIN', 'Volver a la página de inicio de sesión.');
define('WORDING_CHANGE_EMAIL', 'Cambiar correo electrónico');
define('WORDING_CHANGE_PASSWORD', 'Cambiar contraseña');
define('WORDING_CHANGE_USERNAME', 'Cambiar nombre de usuario');
define('WORDING_CURRENTLY', 'actualmente');
define('WORDING_EDIT_USER_DATA', 'Editar los datos de usuario');
define('WORDING_EDIT_YOUR_CREDENTIALS', 'Ha iniciado sesión y puede editar sus credenciales aquí');
define('WORDING_FORGOT_MY_PASSWORD', 'He olvidado mi contraseña');
define('WORDING_LOGIN', 'Iniciar sesión');
define('WORDING_LOGOUT', 'Cerrar sesión');
define('WORDING_NEW_EMAIL', 'Nuevo correo electrónico');
define('WORDING_NEW_PASSWORD', 'Nueva contraseña');
define('WORDING_NEW_PASSWORD_REPEAT', 'Repita su nueva contraseña');
define('WORDING_NEW_USERNAME', 'Nuevo nombre de usuario (debe tener entre 2 y 64 caracteres y estar formado únicamente por letras (a-Z) y números)');
define('WORDING_OLD_PASSWORD', 'Su antigua contraseña');
define('WORDING_PASSWORD', 'Contraseña');
define('WORDING_PROFILE_PICTURE', 'Su imagen de perfil (de Gravatar):');
define('WORDING_REGISTER', 'Registrarse');
define('WORDING_REGISTER_NEW_ACCOUNT', 'Registrar una nueva cuenta');
define('WORDING_REGISTRATION_CAPTCHA', 'Por favor, introduzca los siguientes caracteres');
define('WORDING_REGISTRATION_EMAIL', 'Correo electrónico del usuario (por favor, introduzca un correo electrónico real, ya que recibirá un correo de verificación con un enlace de activación)');
define('WORDING_REGISTRATION_PASSWORD', 'Contraseña (mínimo 6 caracteres)');
define('WORDING_REGISTRATION_PASSWORD_REPEAT', 'Repetición de contraseña');
define('WORDING_REGISTRATION_USERNAME', 'Nombre de usuario (solo letras y números y longitud de 2 a 64 caracteres)');
define('WORDING_REMEMBER_ME', 'Mantener iniciada la sesión (2 semanas)');
define('WORDING_REQUEST_PASSWORD_RESET', 'Pedir un reinicio de contraseña. Introduzca su nombre de usuario y recibirá un correo electrónico con las instrucciones:');
define('WORDING_RESET_PASSWORD', 'Reiniciar mi contraseña');
define('WORDING_SUBMIT_NEW_PASSWORD', 'Enviar la nueva contraseña');
define('WORDING_USERNAME', 'Nombre de usuario');
define('WORDING_YOU_ARE_LOGGED_IN_AS', 'Ha iniciado sesión como ');
