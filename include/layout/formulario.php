<form class="formulario">
<fieldset>
    <h2>Información Personal</h2>
    <div class="campos">
        <div class="campo">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" placeholder="Ingrese su Nombre" required>
        </div>
        <div class="campo">
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" placeholder="Ingrese su Apellido" required>
        </div>
        <div class="campo">
            <label for="dni">DNI:</label>
            <input type="number" id="dni" placeholder="Ingrese su Número de DNI" min="1000000" max="99999999" required>
        </div>
        <div class="campo">
            <label for="edad">Edad:</label>
            <input type="number" id="edad" min="1" max="110" placeholder="Ingrese su Edad" required>
        </div>
        <div class="campo">
            <label for="fechaNacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fechaNacimiento" required>
        </div>
        <div class="campo">
            <label for="genero">Género:</label>
            <select name="genero" id="genero" required>
                <option value="vacio" selected>--Seleccionar--</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
            </select>
        </div>
    </div>
    <h2>Residencia</h2>
    <div class="campos">
        <div class="campo">
            <label for="pais">País:</label>
            <input type="text" id="pais" placeholder="País de Resicencia" required>
        </div>
        <div class="campo">
            <label for="provincia">Provincia:</label>
            <input type="text" id="provincia" placeholder="Provincia de Resicencia" required>
        </div>
        <div class="campo">
            <label for="localidad">Localidad:</label>
            <input type="text" id="localidad" placeholder="Localidad de Resicencia" required>
        </div>
        <div class="campo">
            <label for="calle">Calle:</label>
            <input type="text" id="calle" placeholder="Calle/Avenida">
        </div>
        <div class="campo">
            <label for="numero">Nro:</label>
            <input type="text" id="numero" placeholder="Altura">
        </div>
    </div>
</fieldset>
<button type="submit" id="enviar" class="boton">Cargar Formulario</button>
</form>