<?php
    //Importar la conexiona a la DB
    include_once ('db.php');

    if ($_POST['accion'] == 'insertar') {
        //Parsear datos
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $edad = $_POST['edad'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $genero = $_POST['genero'];
        $pais = $_POST['pais'];
        $provincia = $_POST['provincia'];
        $localidad = $_POST['localidad'];
        $calle = $_POST['calle'];
        $numero = $_POST['numero'];

        //prepare statement
        $stmt = $conn->prepare('INSERT INTO personas (nombre, apellido, dni, edad, fecha_nacimiento, genero, pais, provincia, localidad, calle, numero) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->bind_param('sssssssssss', $nombre, $apellido, $dni, $edad, $fechaNacimiento, $genero, $pais, $provincia, $localidad, $calle, $numero);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
?>