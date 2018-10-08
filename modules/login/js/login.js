"use strict";

var m = new Model ();

jQuery(document).on('submit','#frmLogin',function(event){ 
    event.preventDefault();
    var formData = $(this).serialize();
    m.conAjax("../../server/login.php", formData, 'json', redirectUser );



});


function redirectUser(response) {
 if (response.error==true) {
     alertify.error("Usuario o contraseña incorrectos.");
     $("#txtPassword").val("");
 } else {
    switch (response.tipo) {
        case "Admin":
        console.log("Administrador");            
        break;
        case "Usuario":
        console.log("Usuario");            
        break;
    
        default:
        console.log("Opción fuera de rango");        
        break;
    };
    //Almacena en sessionStorage los datos de usuario:
    m.saveDataSession(["tipo", response.tipo, "nombre", response.nombre]);
 }



}