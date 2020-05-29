function fLimpiar(){
    if($("#id_persona").val()      == ""
      ){$("#id_persona").css("backgroundColor","rgba(255, 255, 255)");}
}

function inicio(){
    
    fLimpiar();
}

$(function(){
    $("#id_persona").val("");
    inicio();
});

function fGuardar(){
    $("#btn-guardar").click(function(){
        $("#id_persona").val("");
    });  
}