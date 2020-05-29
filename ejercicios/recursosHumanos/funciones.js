function fLimpiar(){
    if($("#id_persona").val()      == ""
      ){$("#id_persona").css("backgroundColor","rgba(255, 255, 255)");}
}

function inicio(){
    $("#id_persona").val("");
}

$(function(){
    inicio(); 
});

function fGuardar(){
    $("#btn-guardar").click(function(){
        $("#id_persona").css("backgroundColor","rgba(255, 255, 255)");
    });  
}

function activar(){
    $("#activo").val("1");
    fGuardar();
}

function desactivar(){
    $("#activo").val("0");
    fGuardar();
}

