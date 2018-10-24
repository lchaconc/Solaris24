"use strict";

/* 
constantes de etiquetas 
*/

const nameSistem = "Solaris 24 V1.0"; // etiqueta de títiulo para alert de alerftify



function prepareMod() {
    eGoHome();
    getUser();
}

function getUser() {
    //Obtiene el usuario desde la session PHP 
    //console.log(user);
    $("#spnTipoUsuario").text(user);
    $("#spnNombre").text(nombre);
}


function eGoHome() {
    $("#spnHome").click(function (e) { 
        e.preventDefault();
        window.location.assign("../menu/menu.php");
    });
}

