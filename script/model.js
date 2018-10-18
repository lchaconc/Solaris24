'use strict';

function Model () {
    
}

Model.prototype.dataset;

Model.prototype.loadJson = function (pathJson, mCallBack) {
    $.getJSON(pathJson, function (data) {
        console.log(data);
        Model.prototype.dataset=data;
        mCallBack(data);
        })
}

Model.prototype.getDataset = function () { 
    return Model.prototype.dataSet;
}

Model.prototype.getItem = function (index) { 
    return Model.prototype.dataSet[index];
}

Model.prototype.conectFormAjax = function ( path, formData, dataType, mCallBack  ) { 
    //console.log(formData);
   
    
    jQuery.ajax({
        url: path,
        type:'POST',
        dataType: dataType,
        data: formData,
        beforeSend:function(){            
            alertify.warning('Enviando datos. Por favor espere...');
            console.log("enviando");            
        }
      })
      .done(function(response){
        alertify.success('¡Tranzacción generada satisfactoriamente!');
        console.log(response);
        mCallBack(response);
        
      })
      .fail(function(resp){
        console.log(resp.responseText);
        alertify.error('Problemas al enviar datos');
      })
      .always(function(){
        console.log("complete");
    });
    
}

Model.prototype.conectDataAjax = function ( path, formData,  mCallBack  ) { 
    //console.log(formData);
   
    
    jQuery.ajax({
        url: path,
        type:'POST',      
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:function(){            
            alertify.warning('Enviando datos. Por favor espere...');
            console.log("enviando");            
        }
      })
      .done(function(response){
        alertify.success('¡Tranzacción generada satisfactoriamente!');
        console.log(response);
        mCallBack(response);
        
      })
      .fail(function(resp){
        console.log(resp.responseText);
        alertify.error('Problemas al enviar datos');
      })
      .always(function(){
        console.log("complete");
    });
    
}

Model.prototype.saveDataSession = function ( array ) { 
let limit = array.length / 2;
    for (let index = 0; index < limit; index++) {
        
        let tmpIndex = index * 2; 
        sessionStorage.setItem(array[tmpIndex],  array[tmpIndex + 1] );
        //console.log(array[tmpIndex],  array[tmpIndex + 1] );       
    }
}