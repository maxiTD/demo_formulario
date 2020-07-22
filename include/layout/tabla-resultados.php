<div class="contenedor-listado">
    <h1>Personas entre 25 y 35 Años:</h1>
    <table class="listado contenedor " id="listado">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Edad</th>
                <th>F. Nacimiento</th>
                <th>Género</th>
                <th>País</th>
                <th>Provincia</th>
                <th>Localidad</th>
                <th>Calle</th>
                <th>N°</th>
            </tr>
        </thead>
        <tbody>

            <?php
                //include_once ('../funciones/filtrar.php');

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
                }?>
        </tbody>
    </table>
</div>
<a href="index.php" class="boton boton-actualizar">Actualizar Tabla</a>