const formulario = document.querySelector('.formulario');
      botonEnviar = document.querySelector('#enviar');

eventListeners();

function eventListeners() {
    //Escuchar por el envío de los datos del formulario
    botonEnviar.addEventListener('click', leerFormulario);
}

function leerFormulario(e) {
    e.preventDefault();

    //Obtner datos de los inputs
    const datos = new FormData();
    datos.append('nombre', document.querySelector("#nombre").value);
    datos.append('apellido', document.querySelector("#apellido").value);
    datos.append('dni', document.querySelector("#dni").value);
    datos.append('edad', document.querySelector("#edad").value);
    datos.append('fechaNacimiento', document.querySelector("#fechaNacimiento").value);
    datos.append('genero', document.querySelector("#genero").value);
    datos.append('pais', document.querySelector("#pais").value);
    datos.append('provincia', document.querySelector("#provincia").value);
    datos.append('localidad', document.querySelector("#localidad").value);
    datos.append('calle', document.querySelector("#calle").value);
    datos.append('numero', document.querySelector("#numero").value);
    datos.append('accion', 'insertar');
    insertarDB(datos);

    //Lipiar entradas del formulario
    document.querySelector(".formulario").reset();
}

//Inserción en la base de datos vía AJAX
function insertarDB(datos) {
    //Llamado a ajax
    //Crear el objeto
    const xhr = new XMLHttpRequest();
    //Abrir la conexión
    //xhr.open('POST', '../demo_formulario/inc/modelos/modelo-datos.php', true);
    xhr.open('POST', 'include/funciones/insertar.php', true);
    //enviar los datos
    xhr.send(datos);
}
