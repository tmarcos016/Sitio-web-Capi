function progressBar(){
    var caracteres1;
    var caracteres2;

    // PROGRESS BAR PERCENTAGE $("#idInput1")----------------------------  //
    // (1) inputs individuales ------------------------------------------
        if($("#idCliente").val()        != "" | 
           $("#idRFC").val()      != "" |
           $("#idDescripcion").val()         != "" 
          ){caracteres1=30;fCambiarAtt();}
          else{
            if($("#idCliente").val()        == "" | 
               $("#idRFC").val()      == "" |
               $("#idDescripcion").val()         == "" 
               ){caracteres1=0;fCambiarAtt();}
          }

        if($("#idCliente").val()        != ""
          ){$("#idCliente").css("backgroundColor","rgba(3, 250, 16)");}
          else{$("#idCliente").css("backgroundColor","rgba(255, 255, 255)");}

        if($("#idRFC").val()      != ""
          ){$("#idRFC").css("backgroundColor","rgba(3, 250, 16)");}
          else{$("#idRFC").css("backgroundColor","rgba(255, 255, 255)");}

        if($("#idDescripcion").val()        != ""
          ){$("#idDescripcion").css("backgroundColor","rgba(3, 250, 16)");}
          else{$("#idDescripcion").css("backgroundColor","rgba(255, 255, 255)");}
        
    // (2) ---------------------------------------------------------------
        if($("#idCliente").val()!=""&$("#idRFC").val()!=""
        |  $("#idCliente").val()!=""&$("#idDescripcion").val()!=""
        |  $("#idDescripcion").val()!=""&$("#idRFC").val()!=""
        ){caracteres1=60;fCambiarAtt();}
    // (3) --------------------------------------------------------------
        if($("#idCliente").val()        != "" & 
           $("#idRFC").val()      != "" &
           $("#idDescripcion").val()         != ""
          ){caracteres1=100;fCambiarAtt();}

    // ----------------------------------------------------- //
    $("#idProgressBar1").css("width",caracteres1+"%");
    $("#idProgressBar2").css("width",caracteres1+"%");

    numColor=caracteres1/100;
    numColor2=caracteres2/100;

    // Color CSS para inputs ------------------------------- //

}

// //////////////////////////////////////////////////////////////////

function progressBarZero(){
    $("#idProgressBar1").css("width",0+"%");
    $("#idProgressBar2").css("width",0+"%");

    fLimpiar();
}

// //////////////////////////////////////////////////////////////////

function fLimpiar(){
    if($("#idCliente").val()      == ""
      ){$("#idCliente").css("backgroundColor","rgba(255, 255, 255)");}
    if($("#idRFC").val()      == ""
      ){$("#idRFC").css("backgroundColor","rgba(255, 255, 255)");}
    if($("#idDescripcion").val()      == ""
      ){$("#idDescripcion").css("backgroundColor","rgba(255, 255, 255)");}  
}

function fCambiarAtt(){
    var vCambiarAtt;
    $(".claseInput1").keyup(function(){
        $(".claseInput1").removeClass("claseChangeClass");
        $(".claseInput1").addClass("claseColorSuccess");
        vCambiarAtt=$("idCambiarAtt").attr("cambiarAtt");
        fSwitch("sInput1",vCambiarAtt);
    });
    $(".claseInput2").keyup(function(){
        $(".claseInput2").removeClass("claseChangeClass");
        $(".claseInput2").addClass("claseColorSuccess");
        vCambiarAtt=$("idCambiarAtt").attr("cambiarAtt");
        fSwitch("sInput2",vCambiarAtt);
    });
    $(".claseInput3").keyup(function(){
        $(".claseInput3").removeClass("claseChangeClass");
        $(".claseInput3").addClass("claseColorSuccess");
        vCambiarAtt=$("idCambiarAtt").attr("cambiarAtt");
        fSwitch("sInput3",vCambiarAtt);
    });
}

function fSwitch(vSwitch,vInputs){

    vRemoveAtt=vInputs;

    switch(vSwitch){
        case "cInput1":
            $("#input2").removeAttr('disabled');
        break;
    }
}

// //////////////////////////////////////////////////////////////////

function inicio(){
    $("#idCliente").val("");
    $("#idRFC").val("");
    $("#idDescripcion").val("");
    $("#btn-reset").click(function(){
        progressBarZero();
    });
}

$(function(){
    inicio(); 
});

function fGuardar(){
    $("#btn-guardar").click(function(){
        progressBarZero();
    });
    $("#btn-guardar").click(function(){
        $("#idCliente").css("backgroundColor","rgba(255, 255, 255)");
        $("#idRFC").css("backgroundColor","rgba(255, 255, 255)");
        $("#idDescripcion").css("backgroundColor","rgba(255, 255, 255)");
    });  
}

// //////////////////////////////////////////////////////////////////

// (1)
$("#idCliente").change(function(){
    progressBar();
});
// (2)
$("#idRFC").keyup(function(){
    progressBar();
});
// (3)
$("#idDescripcion").keyup(function(){
    progressBar();
});
