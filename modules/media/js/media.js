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
    v.cards("array", "#visor");
}




function handlerEvents() {
    $("#btnSubir").click(function (e) { 
        e.preventDefault();
        $("#modalFile").modal();
    });


    $(".btn-file").click(function () { 
        $(".div-icons-fille").slideDown();
        
    });

    $("#inputfile").change(function () {
        console.log(this.files[0].name  );
        var objFile = $(this);
        $("#lblInputFile").html(this.files[0].name);

        //preparación objeto para Ajax
        var formData = new FormData();   
        formData.append("titleFile", $("#txtTitle").val() );
        formData.append("descFile", $("#txtDesc").val() );
        formData.append("objFile",  objFile[0].files[0]);

        //Envío del arcivo junto con sus metadatos
        m.conectDataAjax("./server/agregar_archivo.php",formData, hola );

        $(".div-icons-fille").slideUp(
            function () {
                $("#modalFile").modal("hide");
              }
        );        
    });
}

function hola(params) {
    console.log("exito");
    
}
