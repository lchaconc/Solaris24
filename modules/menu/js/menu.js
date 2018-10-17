"use strict";

var m = new Model (), v = new View ();

$(document).ready(function () {
    console.log("Menu Ready");    
   loadMod();
});


function loadMod() {
    console.log(user);
    $("#spnTipoUsuario").text(user);
    $("#spnNombre").text(nombre);
    handlerEvents();
    
}


function handlerEvents() {
    $("#btnIrMod01").click(function () { 
        window.location.assign("../mod_01/mod_01.html");
    });
    $("#btnIrMod02").click(function () { 
        window.location.assign("../mod_02/mod_02.html");
    });
}


function loadLayout(user) {
    if (user=="Admin") {
        
    }
    
}


function layoutAdmin() {
    console.log("distribución de administrador");
    
}

function layoutUser() {
    console.log("distribución de usuario");
    
}

