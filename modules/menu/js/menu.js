"use strict";

var m = new Model (), v = new View ();

$(document).ready(function () {
    console.log("Menu Ready");
    getUser();
    loadMod();
});


function loadMod() {

    handlerEvents();
    
}


function handlerEvents() {
    //referencias
    $("#btnIrMod01").click(function () { 
        window.location.assign("../form1/form1.php");
    });
    $("#btnIrMod02").click(function () { 
        window.location.assign("../table1/table1.php");
    });
    $("#btnGoMedia").click(function () { 
        window.location.assign("../media/media.php");
    });


        $("#icoCloseSession").click(function () {
                    alertify.confirm( nameSistem, "¿Desea cerrar sesión?",
                    function(){
                        window.location.assign("../../server/destroy_session.php");   
                    },
                    function(){
                        console.log("cancela cierre sesión");
                        
                    });
                         
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

