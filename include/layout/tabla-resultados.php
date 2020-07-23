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
            <?php include_once ('../demo_formulario/include/funciones/filtar.php'); ?>
        </tbody>
    </table>
</div>
<a href="index.php" class="boton boton-actualizar">Actualizar Tabla</a>