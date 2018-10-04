function actualizaPregunta(item,materia,consigna,imagen,pregunta,opcion1,opcion2,opcion3,opcion4,correcta,justificacion,justificacionImagen){
        var parametros = {
                "id" : item,
                "consigna" : consigna,
                "materia" : materia,
                "img" : imagen,
                "pregunta" : pregunta,
                "opc1" : opcion1,
                "opc2" : opcion2,
                "opc3" : opcion3,
                "opc4" : opcion4,
                "correcta" : correcta,
                "justificacion" : justificacion,
                "justificacionImagen" : justificacionImagen
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'actualizar_pregunta.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#resultado").html(response);
                }
        });
}
