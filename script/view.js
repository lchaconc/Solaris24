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
  console.log(array);
  
  var limite = array.length;


  $(visor).empty();

  var htmlContainer = $("<div class='col-12'></div>"); 
  
for (let index = 0; index <limite; index++) {
  //console.log(index);
  //console.log(array[index].titulo );
  var tmpIco, coreVisor;

  switch (array[index].tipo) {
    case "lnk":
    tmpIco = "<i class='fas fa-link'></i>";
    coreVisor = "<a href='"+ array[index].urlArchivo +"' target='_balnk' >" +
    "<img class='img-thumbnail lnk-ico' src='assets/ico/link.png' alt='imagen link de sitio web'></img>" +
    "</a>";
    break;
    case "mp3":
    tmpIco =  "<i class='fas fa-volume-up'></i>";
    coreVisor = "<audio controls src='" + array[index].urlArchivo + "' ></audio>";
    break;
    case "mp4":
    tmpIco = "<i class='fas fa-video'></i>";
    coreVisor = "<video controls src='" + array[index].urlArchivo + "' ></video>";
    break;
    case "jpg":
    tmpIco = "<i class='far fa-image'></i>";
    coreVisor = "<img class='img-fluid' src='" + array[index].urlArchivo + "' alt='imagen' ></img>";
    break;
    case "pdf":
    tmpIco = "<i class='fas fa-file-pdf'></i>";
    coreVisor = "<img class='img-thumbnail lnk-ico' src='assets/ico/pdf.png' alt='Card image cap'></img>";
    coreVisor = "<a href='"+ array[index].urlArchivo +"' target='_balnk' >" +
    "<img class='img-thumbnail lnk-ico' src='assets/ico/pdf.png' alt='imagen link de pdf'></img>" +
    "</a>";
    break;
  
    default:
    console.log("Opción de ico fuera de rango");
    
      break;
  }
  
  
  var htmlCard = $(
    "<div class='row'>"  +
      "<div class='col-12 col-cards-container'>" +
  "<div class='card text-center'>" +
  "<div class='card-header' > "+ tmpIco +" </div>" +
  "<div class='card-body'>" +
    "<h5 class='card-title' > "+ array[index].titulo +" </h5>" +
    
     "<p>" +  coreVisor + "</p>" +
     "<p class='card-text'  > "+ array[index].descripcion +"</p>" +    
  //  "<button class='btn btn-primary btn-ver-media' typeMedia='"+ array[index].tipo +"' target='"+ array[index].urlArchivo +"'   >" +
//        "<i class='far fa-eye'></i> Ver " +
//    "</button>" +
  "</div>" +
  "<div class='card-footer text-muted'>Publicado el " + array[index].fecha +  "</div>" +
      "</div>" +
    "</div>" +
    "</div>");
  $(htmlContainer).append(htmlCard);  
}

$(visor).html(htmlContainer);

}