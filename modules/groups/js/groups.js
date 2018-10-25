"use strict";

var m = new Model (), v = new View ();

$(document).ready(function () {
    prepareMod();
   // handlerEvents();
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
    var fileType;  //t8ipo de archivo que seleciona el usuario para publicar

    $("#btnSubir").click(function (e) { 
        e.preventDefault();
        $("#modalFile").modal();
    });


    $(".btn-file").click(function () {
        fileType = $(this).attr("target");
        console.log(fileType);
        
        $(".div-icons-fille").slideDown();
        
    });

   
}


