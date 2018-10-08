'use strict';

function Model () {
    
}

Model.prototype.dataset;

Model.prototype.loadJson = function (pathJson, mCallBack) {

}

Model.prototype.getDataset = function () { 
    return Model.prototype.dataSet;
}

Model.prototype.getItem = function (index) { 
    return Model.prototype.dataSet[index];
}

Model.prototype.conAjax = function ( path, formData, dataType, mCallBack  ) { 
    jQuery.ajax({
        url: path,
        type:'POST',
        dataType: dataType,
        data: formData,
        beforeSend:function(){
            alertify.message('Enviando datos. Por favor espere...');
            console.log("enviando");            
        }
      })
      .done(function(response){
        console.log(response);
        mCallBack(response);
        
      })
      .fail(function(resp){
        console.log(resp.responseText);
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