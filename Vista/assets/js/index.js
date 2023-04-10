/* DataTable */
document.addEventListener('DOMContentLoaded', function () {
    /* Cargamos datos a el localStorage */
    if (!localStorage.getItem('hombres')) {
        let hombres = datosHombres;
        localStorage.setItem('hombres', JSON.stringify(hombres));
    }
    if (!localStorage.getItem('mujeres')) {
        let mujeres = datosMujeres;
        localStorage.setItem('mujeres', JSON.stringify(mujeres));
    }
});

/* Evento Click Carrousel */
function cargar(id) {
    var datos_totales = JSON.parse(localStorage.getItem('hombres'));
    var datos_elegidos = null;
    for (ids in datos_totales) {
        if (datos_totales[ids].id == id) {
            datos_elegidos = datos_totales[ids];
        }
    }
    cargarInfo(datos_elegidos);
    cargarImg(datos_elegidos.imagen);
    cargaGanador(datos_elegidos.datosGanador[0]);
    cargar_tabla(datos_elegidos.listadoParticipantes);
}

/* Carga info en cuadrado 1 */
function cargarInfo(datos) {
    /* Obtengo a cuadrado 1 */
    let divCuadradoUno = document.getElementById('cuadradoUno');
    /* Cargamos datos en H1 (TITULO)*/
    divCuadradoUno.childNodes[1].innerHTML = datos.categoria;
    /* Cargamos datos en H5 (SUBTITULO) */
    divCuadradoUno.childNodes[3].innerHTML = datos.categoriaMayor;
    /* Cargamos datos en P (EDADES) */
    divCuadradoUno.childNodes[5].innerHTML = "<strong>Edades:</strong> Entre " + datos.edadInicio + " y " + datos.edadFinal+" Años";
}

/* Carga img en el cuadrado 2 */
function cargarImg(url) {
    /* input img Cuadrado 2 */
    let inputImg = document.getElementById('imgCuadradoDos');
    inputImg.src = url;
}

//carga los datos del ganador en el Cuadrado 4
function cargaGanador(datosGanador) {
    //datos.datosGanador tiene el array con la info para el div
    //cargo todo el documento
    let winner = datosGanador;
    let d = document;
    let ganadorDiv = d.getElementById('descripcionGanador');
    ganadorDiv.innerHTML = `
    <p><strong>Nombre Completo:</strong> ${winner.nombreCompleto}</p>
    <p><strong>Edad:</strong> ${winner.edad}</p>
    <p><strong>Federación:</strong> ${winner.federacion}</p>
    <p><strong>Historia:</strong> ${winner.resumen}</p>
    <p><strong>Frase icónica: </strong>${winner.frase}</p>`;
}

function cargarOtroGanador(datos){
    let ganadorDiv = document.getElementById('descripcionGanador');
    ganadorDiv.innerHTML = '';
    ganadorDiv.innerHTML = `
    <p><strong>Nombre Completo:</strong>${datos.nombre} </p>
    <p><strong>País:</strong> ${datos.pais}</p>
    <p><strong>Puntos:</strong> ${datos.puntos}</p>`;
}

/* Colapsa el div */
function colapsar(){
    /* Obtenemos div Colapsable */
    let divColapsable = document.getElementById('collapseExample');
    /* Eliminamos clase "show" para ocultarlo */
    divColapsable.classList.remove('show');
}