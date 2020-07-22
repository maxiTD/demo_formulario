<?php
    //Credenciales para la DB
    define('DB_USUARIO', 'root');
    define('DB_PASSWORD', '113415');
    define('DB_HOST', 'localhost');
    define('DB_NOMBRE', 'demo_formulario');
    $conn = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE);
?>