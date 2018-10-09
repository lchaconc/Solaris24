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
            window.location.assign("../menu/menu.php");    
        }

}