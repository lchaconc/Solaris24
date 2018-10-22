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
          "<th class='text-center' scope='col'>Correo</th>" +
          "<th class='text-center' scope='col'>Nombre</th>" +
          "<th class='text-center' scope='col'>Código</th>" +
    /*   "<th scope='col'>Opción</th>" +
          "<th scope='col'>Notas</th>" +
          "<th scope='col'>Texto 1</th>" +
          "<th scope='col'>Texto 2</th>" +  */
          "<th class='text-center' scope='col'>Fecha</th>" + 
          "<th class='text-center' scope='col'> Ver - Editar </th>" +
          "<th class='text-center' scope='col'> Eliminar </th>" +
        "</tr>" +
      "</thead>" +
      "</table>"    
    ), tBody = $("<tbody></tbody>");

            for (let index = 0; index < limite; index++) {
              let fowNumb = index + 1;
              row = $(
                "<tr>" +
                "<th scope='row'>" + fowNumb + "</th>" +                
                "<td class='text-center'>" + 
                   array[index].correo +                   
                "</td>" +                
                  "<td class='text-center'>" + 
                    array[index].nombre +
                  "</td>" +
                  "<td class='text-center'>" + 
                    array[index].id_datos +
                  "</td>" +
           /*       "<td>" + 
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
                "</td>" + */
                "<td class='text-center'>" + 
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

View.prototype.formWithData = function (record, visor) {
  $(visor).empty();
    var htmlCode = (
      "<form action=''  id='frmData1'>" + 
      "<div class='form-group'>" +
      "<label for='txtId'>Id de elemento:</label>" +
      "<input  name='id_data' type='text' class='form-control' id='txtId' value='"+ record.id_datos +"'>" +
    "</div>" +
      "<div class='form-group'>" + 
        "<label for='exampleFormControlInput1'>Correo electrónico:</label>" +
        "<input name='email' type='email' class='form-control' id='exampleFormControlInput1' value='" + record.correo + "' >" +
      "</div>" +
      "<div class='form-group'>" +
              "<label for='txtNameUser'>Nombre:</label>" +
              "<input name='nameUser' type='text' class='form-control' id='txtNameUser' value='"+ record.nombre +"'  >" +
      "</div>" +
      "<div class='form-group'>" +
        "<label for='exampleFormControlSelect1'>Seleccionar campo:</label>" +
        "<select class='form-control' id='exampleFormControlSelect1' name='option' value='"+ record.opcion +"' >" +          
          "<option>1</option>" +
          "<option>2</option>" +
          "<option>3</option>" +
          "<option>4</option>" +
          "<option>5</option>" +
        "</select>" +
      "</div>" +
      "<div class='form-group'>" +
        "<label for='exampleFormControlTextarea1'>Notas:</label>" +
        "<textarea class='form-control' id='exampleFormControlTextarea1' rows='3' name='notes' > "+ record.notas +"  </textarea>" +
      "</div>" +
      "<div class='form-group'>" +
              "<label for='formGroupExampleInput'>Texto corto 1:</label>" +
              "<input name='text1' type='text' class='form-control' id='formGroupExampleInput' value='"+ record.texto1 +"'>" +
            "</div>" +
            "<div class='form-group'>" +
              "<label for='formGroupExampleInput2'>Texto corto 2:</label>" +
              "<input name='text2' type='text' class='form-control' id='formGroupExampleInput2' value='"+ record.texto2 +"'>" +
            "</div>" +
            "<hr>" +
            "<div class='col-12 text-right' >" +
              "<input class='btn btn-outline-primary' type='submit' value='Actualizar'>" +
            "</div>" +

"</form>"
    );
    $(visor).html(htmlCode);
}

View.prototype.cards = function (array, visor) {

  $(visor).empty();

  var 
  icoPdf = "<i class='fas fa-file-pdf'></i>",
  icoVideo = "<i class='fas fa-video'></i>",
  icoAudio = "<i class='fas fa-volume-up'></i>",
  icoLink = "<i class='fas fa-link'></i>", 
  htmlContainer; 
  
for (let index = 0; index < array.length; index++) {
  htmlCard =   
  "<div class='card text-center'>" +
  "<div class='card-header' > "+ icoLink +" </div>" +
  "<div class='card-body'>" +
    "<h5 class='card-title' > "+  "TÍTIULO DE MUESTRA"  +" </h5>" +
    "<p class='card-text'  > "+ " DESCRIPCIÓN " +"</p>" + 
    "<button class='btn btn-primary'><i class='far fa-eye'></i> Ver </button>" +
  "</div>" +
  "<div class='card-footer text-muted'>" + " FECHA PUBLICACION " +  "</div>" +
"</div>";
  
}

$(visor).html(htmlCard);

}