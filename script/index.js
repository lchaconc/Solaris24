//Método de index

$(document).ready(function () {
    setTimeout(function(){ 
        loadMod();
     }, 2000);
});


function loadMod() {
    window.location.assign("./modules/login/login.html")
}