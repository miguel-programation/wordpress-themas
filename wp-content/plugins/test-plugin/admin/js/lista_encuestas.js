jQuery(document).ready(function($){
      

    $("#btnnuevo").click(function(){
          
         $("#modalnuevo").modal("show");

    });

    
    var i = 1;
    $("#add").click(function(){
        i++;
        $("#camposdinamicos").append('<tr id="row'+i+'"><td><label for="txtnombre" class="col-form-label" style="margin-right:5px">Pregunta '+i+'</label></td><td> <input type="text" name="name[]" id="name" class="form-control name_list"></td><td><select name="type[]" id="type" class="form-control type_list"  style="margin-left:5px"><option value="1" selected>SI - NO</option><option value="2"> Rango 0 - 5</option></select></td><td><button name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="margin-left:15px">X</button></td></tr>');
        return false;
    });


});