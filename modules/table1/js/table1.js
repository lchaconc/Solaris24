"use strict";

var m = new Model (), v = new View ();

$(document).ready(function () {
    prepareMod();
    loadMod();
});

function loadMod() {
    m.loadJson("../../server/obtener_json_datos.php", renderTable);
}


function renderTable(dataset) {
    //console.log("dataset desde el controler");
    //console.log(dataset);
    v.table(dataset, "#visor");

    //eventos de de componentes de tabla
    // botón editar y botón eliminar

    $(".btn-del").click(function () { 
        
        let target = $(this).attr("target");
        console.log("target: " + target);        
        
       
            
            alertify.confirm( nameSistem, "¿Desea realmente eliminar el registro?",
            function(){
                // si da clic en OK:
              console.log("Aceptar");

            //prepara datos para AJAX
            let formData = new FormData();
            formData.append("idName", "id_datos");
            formData.append("idVal", target);
            formData.append("table", "datos");
            //envia datos por AJAX para el query que hace php
            m.conectDataAjax("../../server/eliminar_registro.php", formData,  loadMod )
              
            },
            function(){
             console.log("Cancelar");
             
            });
        
    });


    $(".btn-edit").click(function (e) { 
        e.preventDefault();
        let target = $(this).attr("target");
        console.log("edit" + target);
        
    });
    
    
}

