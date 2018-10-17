"use strict";

var m = new Model (), v = new View ();

jQuery(document).on('submit','#frmData1',function(event){ 
    event.preventDefault();
    var formData = $(this).serialize();
    m.conectAjax("../../server/agregar_formulario.php", formData, 'json', messageUser );
});


function messageUser() {
    alertify
  .alert("Datos enviados de forma satisfactoria", function(){
    alertify.message('OK');
  });
    
}