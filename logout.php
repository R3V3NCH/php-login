<?php

    session_start(); // inicializamos la sesion

    session_unset(); // quita la sesión

    session_destroy(); // destruimos la sesión

    header('Location: /php-login');

?>