"use strict";

var m = new Model (), v = new View ();

$(document).ready(function () {
    prepareMod();
    handlerEvents();
    loadMod();
});



function loadMod() {
    renderCards();
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

    $("#inputfile").change(function () {
        //console.log(this.files[0].name  );
        var objFile = $(this);
        $("#lblInputFile").html(this.files[0].name);

        //preparación objeto para Ajax
        var formData = new FormData();   
        formData.append("titleFile", $("#txtTitle").val() );
        formData.append("descFile", $("#txtDesc").val() );
        
        formData.append("correo", correo );
        formData.append("nombre", nombre );
        formData.append("grupo", "Supersonicos" );

        formData.append("typeFile", fileType );
        formData.append("objFile",  objFile[0].files[0]);

        //Envío del arcivo junto con sus metadatos
        m.conectDataAjax("../../server/agregar_archivo.php",formData, function (param) {
            loadMod();
          } );

        $(".div-icons-fille").slideUp(
            function () {
                $("#modalFile").modal("hide");
              }
        );        
    });
}


