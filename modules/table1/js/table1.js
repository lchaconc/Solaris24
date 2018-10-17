"use strict";

var m = new Model (), v = new View ();

$(document).ready(function () {
    getUser();
    handlerEvents();
});


jQuery(document).on('submit','#frmData1',function(event){ 
    event.preventDefault();
    var formData = $(this).serialize();
    m.conectAjax("../../server/agregar_formulario.php", formData, '', messageUser );
    
});


function messageUser(msg) {
    ///Obtiene en callback success el mensaje que envia el php 
    console.log(msg);
    //resetea los campos del formulario
    $("#frmData1")[0].reset();        
}

function handlerEvents() {
    $("#spnHome").click(function (e) { 
        e.preventDefault();
        window.location.assign("../menu/menu.php");
    });
}
