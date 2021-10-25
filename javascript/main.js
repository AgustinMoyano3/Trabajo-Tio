"use strict";

let torneos = []

let btnBorrarTodo = document.querySelector('#btnBorrarTodo');
let btnAgregar3 = document.querySelector('#btnAgregar3');
let btnEnviar = document.querySelector("#btnEnviar");
let inputFechaInicio = document.querySelector("#inputFechaInicio");
let inputFechaFin = document.querySelector("#inputFechaFin");
let inputLocalidad = document.querySelector("#inputLocalidad");
let contenidoTabla = document.querySelector("#contenidoTabla");
btnEnviar.addEventListener("click", function(e){
    e.preventDefault();
    agregarTorneo()})
btnAgregar3.addEventListener("click", function(e){
    e.preventDefault();
    agregar3()})

btnBorrarTodo.addEventListener("click", function(e){
    e.preventDefault();
    borrarTorneos()})


agregar3();




function agregar3(){
    let torneosPredeterminados = [
        {
        "inicio": "12/6/21",
        "fin": "14/6/21",
        "localidad": "Tres Arroyos",
        },
        {
        "inicio": "17/6/21",
        "fin": "19/6/21",
        "localidad": "Tandil"
        },
        {
        "inicio": "22/6/21",
        "fin": "24/6/21",
        "localidad": "Bahia Blanca",
        }
    ]
    for(let i=0;i <= torneosPredeterminados.length-1;i++){
        torneos.push(torneosPredeterminados[i]);
    }
    actualizarTabla();
}

function agregarTorneo(){
    torneos.push({
        "inicio": inputFechaInicio.value,
        "fin": inputFechaFin.value,
        "localidad":inputLocalidad.value
    });
    actualizarTabla();
}



function actualizarTabla(){
    contenidoTabla.innerHTML = '';
    for(let i=0;i <= torneos.length-1;i++){
        contenidoTabla.innerHTML += "<tr> <td>" + torneos[i].inicio + "</td><td>" + torneos[i].fin + "</td><td>" 
        + torneos[i].localidad + "</td> </tr>";
        if(torneos[i].localidad == "Tres Arroyos"){
            
        }
    }
}

function borrarTorneos(){
    for(let i=torneos.length-1;i>=0;i--){
        torneos.pop(torneos[i]);   
    }
    actualizarTabla();
}

