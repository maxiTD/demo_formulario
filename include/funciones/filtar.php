<?php
    function obtenerDatos() {
        //Impotar la conexion a la DB
        include('../demo_formulario/include/funciones/db.php');

        return $conn->query("SELECT nombre, apellido, dni, edad, fecha_nacimiento, genero, pais, provincia, localidad, calle, numero FROM personas WHERE (edad > 24 && edad < 35)");
    }

    $personas = obtenerDatos();
    //si num_rows no es NULL es porque hay registros
    if ($personas->num_rows) {
        foreach ($personas as $persona) { ?>
            <tr>
                <td><?php echo $persona['nombre']; ?></td>
                <td><?php echo $persona['apellido']; ?></td>
                <td><?php echo $persona['dni']; ?></td>
                <td><?php echo $persona['edad']; ?></td>
                <td><?php echo $persona['fecha_nacimiento']; ?></td>
                <td><?php echo $persona['genero']; ?></td>
                <td><?php echo $persona['pais']; ?></td>
                <td><?php echo $persona['provincia']; ?></td>
                <td><?php echo $persona['localidad']; ?></td>
                <td><?php echo $persona['calle']; ?></td>
                <td><?php echo $persona['numero']; ?></td>
            </tr>
    <?php }
}
?>