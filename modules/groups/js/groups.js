"use strict";

var m = new Model (), v = new View ();

$(document).ready(function () {
    prepareMod();
    handlerEvents();
    //loadMod();
});



function loadMod() {
    
}

function renderCards() {
   // m.loadJson("../../server/obtener_json_media.php", v.cards(m.getDataset(), "#visor"  )   );    
   m.loadJson("../../server/obtener_json_media.php", function (array) {       
       v.cards(array.reverse(), "#visor", correo );
   } )
}



function handlerEvents() {
    

    $("#btnAbrirModal").click(function (e) { 
        e.preventDefault();
        $("#mdlCreateGroup").modal();
    });

   
}


