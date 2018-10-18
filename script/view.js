'use strict';

function View () {
    
}


Model.prototype.info = function (container) {

}


View.prototype.table = function (array, visor) {
 
  
    $(visor).empty();
    var limite = array.length, row,
    htmlTable = $(
      "<table class='table table-striped'>" +
      "<thead>" +
        "<tr>" +
          "<th scope='col'>#</th>" +          
          "<th scope='col'>Correo</th>" +
          "<th scope='col'>Nombre</th>" +
          "<th scope='col'>Opción</th>" +
          "<th scope='col'>Notas</th>" +
          "<th scope='col'>Texto 1</th>" +
          "<th scope='col'>Texto 2</th>" +
          "<th scope='col'>Fecha</th>" +
          "<th scope='col'> Editar </th>" +
          "<th scope='col'> Eliminar </th>" +
        "</tr>" +
      "</thead>" +
      "</table>"    
    ), tBody = $("<tbody></tbody>");

            for (let index = 0; index < limite; index++) {
              let fowNumb = index + 1;
              row = $(
                "<tr>" +
                "<th scope='row'>" + fowNumb + "</th>" +                
                "<td>" + 
                   array[index].correo +                   
                "</td>" +                
                  "<td>" + 
                    array[index].nombre +
                  "</td>" +
                  "<td>" + 
                    array[index].opcion +
                  "</td>" +
                  "<td>" + 
                  array[index].notas +
                "</td>" +
                "<td>" + 
                    array[index].texto1 +
                "</td>" +
                "<td>" + 
                    array[index].texto2 +
                "</td>" +
                "<td>" + 
                  array[index].fecha +
                "</td>" +

                "<td class='text-center'>" + 
                      "<i id='faiEdt"+ index +"'  target='"+ array[index].id_datos +"'  class='fas fa-pencil-alt lnk-ico btn-edit'></i>  " +                      
                "</td>" +
                "<td class='text-center'>" +                       
                      "<i id='faiDel"+ index +"'  target='"+ array[index].id_datos +"'   class='far fa-trash-alt lnk-ico btn-del'></i>" +   
                "</td>" +
                "</tr>"
            );
              $(tBody).append(row);      
          }
    $(htmlTable).append(tBody);    
    $(visor).html(htmlTable);


  }