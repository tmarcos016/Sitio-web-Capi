function calcular(){

	var n1=document.getElementById("idCGarantia").value;
	var n2=document.getElementById("idCDominio").value;
    var n3=document.getElementById("idCHosting").value;
    var n4=document.getElementById("idCModulos").value;
    

	var n1=parseInt(n1);
	var n2=parseInt(n2);
    var n3=parseInt(n3);
    var n4=parseInt(n4);

    var suma=n1+n2+n3+n4;

    if($("#idCGarantia").val()     == "" |
           $("#idCDominio").val()  == "" |
           $("#idCHosting").val()  == "" |
           $("#idCModulos").val()  == "" 
          ){
            alert("Porfavor de llenar todos los campos necesarios para poder realizar la calculación del presupuesto.");
            $("#idCGarantia").css("backgroundColor","rgb(128, 197, 236)");
            $("#idCDominio").css("backgroundColor","rgb(128, 197, 236)");
            $("#idCHosting").css("backgroundColor","rgb(128, 197, 236)");
            $("#idCModulos").css("backgroundColor","rgb(128, 197, 236)");
            }

    if($("#idCGarantia").val()     != "" & 
           $("#idCDominio").val()  != "" &
           $("#idCHosting").val()  != "" &
           $("#idCModulos").val()  != "" 
          ){
            alert("El presupuesto del costo total es: $"+suma+" pesos");
            }
} 

// //////////////////////////////////////////////////////////////// //

function progressBar(){
    var caracteres1;
    var caracteres2;

    // PROGRESS BAR PERCENTAGE $("#idInput1")----------------------------  //
    // (1) inputs individuales ------------------------------------------
        if($("#idCliente").val()       != "" | 
           $("#idDGarantia").val()     != "" |
           $("#idCGarantia").val()     != "" |
           $("#idPDominio").val()      != "" |
           $("#idCDominio").val()      != "" |
           $("#idPHosting").val()      != "" |
           $("#idCHosting").val()      != "" |
           $("#idCantModulos").val()   != "" |
           $("#idCModulos").val()      != "" |
           $("#idCTotal").val()        != "" 
          ){caracteres1=25;fCambiarAtt();}
          else{
            caracteres1=0;fCambiarAtt();
          }

        if($("#idCliente").val()        != ""
          ){$("#idCliente").css("backgroundColor","rgba(3, 250, 16)");}
          else{$("#idCliente").css("backgroundColor","rgba(255, 255, 255)");}

        if($("#idDGarantia").val()      != ""
          ){$("#idDGarantia").css("backgroundColor","rgba(3, 250, 16)");}
          else{$("#idDGarantia").css("backgroundColor","rgba(255, 255, 255)");}

        if($("#idCGarantia").val()        != ""
          ){$("#idCGarantia").css("backgroundColor","rgba(3, 250, 16)");}
          else{$("#idCGarantia").css("backgroundColor","rgba(255, 255, 255)");}

        if($("#idPDominio").val()        != ""
          ){$("#idPDominio").css("backgroundColor","rgba(3, 250, 16)");}
          else{$("#idPDominio").css("backgroundColor","rgba(255, 255, 255)");}

        if($("#idCDominio").val()        != ""
          ){$("#idCDominio").css("backgroundColor","rgba(3, 250, 16)");}
          else{$("#idCDominio").css("backgroundColor","rgba(255, 255, 255)");}
        
        if($("#idPHosting").val()        != ""
          ){$("#idPHosting").css("backgroundColor","rgba(3, 250, 16)");}
          else{$("#idPHosting").css("backgroundColor","rgba(255, 255, 255)");}

        if($("#idCHosting").val()        != ""
          ){$("#idCHosting").css("backgroundColor","rgba(3, 250, 16)");}
          else{$("#idCHosting").css("backgroundColor","rgba(255, 255, 255)");}

        if($("#idCantModulos").val()        != ""
          ){$("#idCantModulos").css("backgroundColor","rgba(3, 250, 16)");}
          else{$("#idCantModulos").css("backgroundColor","rgba(255, 255, 255)");}

        if($("#idCModulos").val()        != ""
          ){$("#idCModulos").css("backgroundColor","rgba(3, 250, 16)");}
          else{$("#idCModulos").css("backgroundColor","rgba(255, 255, 255)");}

        if($("#idCTotal").val()        != ""
          ){$("#idCTotal").css("backgroundColor","rgba(3, 250, 16)");}
          else{$("#idCTotal").css("backgroundColor","rgba(255, 255, 255)");}
        

    // (2) ---------------------------------------------------------------
        if($("#idCliente").val()!=""&$("#idDGarantia").val()!=""
        |  $("#idCliente").val()!=""&$("#idCGarantia").val()!=""
        |  $("#idCliente").val()!=""&$("#idPDominio").val()!=""
        |  $("#idCliente").val()!=""&$("#idCDominio").val()!=""
        |  $("#idCliente").val()!=""&$("#idPHosting").val()!=""
        |  $("#idCliente").val()!=""&$("#idCHosting").val()!=""
        |  $("#idCliente").val()!=""&$("#idCantModulos").val()!=""
        |  $("#idCliente").val()!=""&$("#idCModulos").val()!=""
        |  $("#idCliente").val()!=""&$("#idCTotal").val()!=""
        |  $("#idDGarantia").val()!=""&$("#idCGarantia").val()!=""
        |  $("#idDGarantia").val()!=""&$("#idPDominio").val()!=""
        |  $("#idDGarantia").val()!=""&$("#idCDominio").val()!=""
        |  $("#idDGarantia").val()!=""&$("#idPHosting").val()!=""
        |  $("#idDGarantia").val()!=""&$("#idCHosting").val()!=""
        |  $("#idDGarantia").val()!=""&$("#idCantModulos").val()!=""
        |  $("#idDGarantia").val()!=""&$("#idCModulos").val()!=""
        |  $("#idDGarantia").val()!=""&$("#idCTotal").val()!=""
        |  $("#idCGarantia").val()!=""&$("#idPDominio").val()!=""
        |  $("#idCGarantia").val()!=""&$("#idCDominio").val()!=""
        |  $("#idCGarantia").val()!=""&$("#idPHosting").val()!=""
        |  $("#idCGarantia").val()!=""&$("#idCHosting").val()!=""
        |  $("#idCGarantia").val()!=""&$("#idCantModulos").val()!=""
        |  $("#idCGarantia").val()!=""&$("#idCModulos").val()!=""
        |  $("#idCGarantia").val()!=""&$("#idCTotal").val()!=""
        |  $("#idPDominio").val()!=""&$("#idCDominio").val()!=""
        |  $("#idPDominio").val()!=""&$("#idPHosting").val()!=""
        |  $("#idPDominio").val()!=""&$("#idCHosting").val()!=""
        |  $("#idPDominio").val()!=""&$("#idCantModulos").val()!=""
        |  $("#idPDominio").val()!=""&$("#idCModulos").val()!=""
        |  $("#idPDominio").val()!=""&$("#idCTotal").val()!=""
        |  $("#idCDominio").val()!=""&$("#idPHosting").val()!=""
        |  $("#idCDominio").val()!=""&$("#idCHosting").val()!=""
        |  $("#idCDominio").val()!=""&$("#idCantModulos").val()!=""
        |  $("#idCDominio").val()!=""&$("#idCModulos").val()!=""
        |  $("#idCDominio").val()!=""&$("#idCTotal").val()!=""
        |  $("#idPHosting").val()!=""&$("#idCHosting").val()!=""
        |  $("#idPHosting").val()!=""&$("#idCantModulos").val()!=""
        |  $("#idPHosting").val()!=""&$("#idCModulos").val()!=""
        |  $("#idPHosting").val()!=""&$("#idCTotal").val()!=""
        |  $("#idCHosting").val()!=""&$("#idCantModulos").val()!=""
        |  $("#idCHosting").val()!=""&$("#idCModulos").val()!=""
        |  $("#idCHosting").val()!=""&$("#idCTotal").val()!=""
        |  $("#idCantModulos").val()!=""&$("#idCModulos").val()!=""
        |  $("#idCantModulos").val()!=""&$("#idCTotal").val()!=""
        ){caracteres1=50;fCambiarAtt();}
    // (3) --------------------------------------------------------------
        if($("#idCliente").val()        != "" & 
           $("#idDGarantia").val()      != "" &
           $("#idCGarantia").val()      != "" &
           $("#idPDominio").val()      != "" &
           $("#idCDominio").val()      != "" &
           $("#idPHosting").val()      != "" &
           $("#idCHosting").val()      != "" &
           $("#idCantModulos").val()      != "" &
           $("#idCModulos").val()      != "" &
           $("#idCTotal").val()         != ""
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
    if($("#idDGarantia").val()      == ""
      ){$("#idDGarantia").css("backgroundColor","rgba(255, 255, 255)");}
    if($("#idCGarantia").val()      == ""
      ){$("#idCGarantia").css("backgroundColor","rgba(255, 255, 255)");}
    if($("#idPDominio").val()      == ""
      ){$("#idPDominio").css("backgroundColor","rgba(255, 255, 255)");}
    if($("#idCDominio").val()      == ""
      ){$("#idCDominio").css("backgroundColor","rgba(255, 255, 255)");}
    if($("#idPHosting").val()      == ""
      ){$("#idPHosting").css("backgroundColor","rgba(255, 255, 255)");}
    if($("#idCHosting").val()      == ""
      ){$("#idCHosting").css("backgroundColor","rgba(255, 255, 255)");}
    if($("#idCantModulos").val()      == ""
      ){$("#idCantModulos").css("backgroundColor","rgba(255, 255, 255)");}
    if($("#idCModulos").val()      == ""
      ){$("#idCModulos").css("backgroundColor","rgba(255, 255, 255)");}
    if($("#idCTotal").val()      == ""
      ){$("#idCTotal").css("backgroundColor","rgba(255, 255, 255)");}
    
}

function fCambiarAtt(){
    var vCambiarAtt;
    $(".claseInput1").change(function(){
        $(".claseInput2").removeClass("claseChangeClass");
        $(".claseInput2").addClass("claseColorSuccess");
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
            // vRemoveAtt=$('idCambiarAtt').attr('cambiarAtt','disabled');
            $("#idDGarantia").removeAttr('disabled');
        break;
        case "cInput2":
            // vRemoveAtt=$('idCambiarAtt').attr('cambiarAtt','disabled');
            $("#idCGarantia").removeAttr('disabled');
        break;
    }
}

// //////////////////////////////////////////////////////////////////

function inicio(){
    $("#idCliente").val("");
    $("#idDGarantia").val("");
    $("#idCGarantia").val("");
    $("#idPDominio").val("");
    $("#idCDominio").val("");
    $("#idPHosting").val("");
    $("#idCHosting").val("");
    $("#idCantModulos").val("");
    $("#idCModulos").val("");
    $("#idCTotal").val("");

    $("#idCliente").css("backgroundColor","rgba(255, 255, 255)");

    $("#idDGarantia").attr('disabled','disabled');
    $("#idCGarantia").attr('disabled','disabled');
    $("#idPDominio").attr('disabled','disabled');
    $("#idCDominio").attr('disabled','disabled');
    $("#idPHosting").attr('disabled','disabled');
    $("#idCHosting").attr('disabled','disabled');
    $("#idCantModulos").attr('disabled','disabled');
    $("#idCModulos").attr('disabled','disabled');
    $("#idCTotal").attr('disabled','disabled');
    $("#btn-reset").attr('disabled','disabled');
    $("#btn-guardar").attr('disabled','disabled');
    $("#btn-math").attr('disabled','disabled');

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
        $("#siglas").css("backgroundColor","rgba(255, 255, 255)");
        $("#carreras").css("backgroundColor","rgba(255, 255, 255)");
        $("#tetra").css("backgroundColor","rgba(255, 255, 255)");
        $("#fecha_inicial").css("backgroundColor","rgba(255, 255, 255)");
        $("#fecha_final").css("backgroundColor","rgba(255, 255, 255)");
    });  
}

// //////////////////////////////////////////////////////////////////

// (1)
$("#idCliente").change(function(){
    progressBar();
    $("#idDGarantia").removeAttr('disabled');
    $("#idCGarantia").removeAttr('disabled');
    $("#idPDominio").removeAttr('disabled');
    $("#idCDominio").removeAttr('disabled');
    $("#idPHosting").removeAttr('disabled');
    $("#idCHosting").removeAttr('disabled');
    $("#idCantModulos").removeAttr('disabled');
    $("#idCModulos").removeAttr('disabled');
    $("#idCTotal").removeAttr('disabled');
    $("#btn-reset").removeAttr('disabled');
    $("#btn-guardar").removeAttr('disabled');
    $("#btn-math").removeAttr('disabled');
});
// (2)
$("#idDGarantia").keyup(function(){
    progressBar();
});
// (3)
$("#idCGarantia").keyup(function(){
    progressBar();
});
// (4)
$("#idPDominio").keyup(function(){
    progressBar();
});
// (5)
$("#idCDominio").keyup(function(){
    progressBar();
});
// (6)
$("#idPHosting").keyup(function(){
    progressBar();
});
// (7)
$("#idCHosting").keyup(function(){
    progressBar();
});
// (8)
$("#idCantModulos").keyup(function(){
    progressBar();
});
// (9)
$("#idCModulos").keyup(function(){
    progressBar();
});
// (10)
$("#idCTotal").keyup(function(){
    progressBar();
});
