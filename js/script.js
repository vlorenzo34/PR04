var validaFormulario=function(){

  var devolver = true;

    ///////////////// CONTRASEÑA /////////////////

    

    /////////////////// NOMBRE ///////////////////


    var valor = document.getElementById("element_1_1").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
      document.getElementById("error_1").innerHTML = "Debe introducir el nombre";
      devolver = false;
    }else{
      document.getElementById("error_1").style.display = "none";
    }


    ///////////////// APELLIDOS /////////////////


    valor = document.getElementById("element_1_2").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
      document.getElementById("error_2").innerHTML = "Debe introducir los apellidos";
      devolver = false;
    }else{
      document.getElementById("error_2").style.display = "none";
    }


    ///////////////// FECHA NAC. /////////////////


    valor = document.getElementById("element_2_1").value;

    if( valor == null || valor.length == 0) {
      document.getElementById("error_3").innerHTML = "Debes introducir una fecha";
      devolver = false;
    }

    valor = document.getElementById("element_2_1").value;

    var formatoValido=/^\d{2}\/\d{2}\/\d{4}$/;
    if (!formatoValido.test(valor)) {
        document.getElementById("error_33").innerHTML = " | Formato de fecha incorrecto";
        devolver = false;
    }else{
        var dia=valor.split("/")[0];
        var mes=valor.split("/")[1];
        var anyo=valor.split("/")[2];
        var fecha = new Date(anyo, mes-1, dia);
        if ((fecha.getMonth()+1!=mes)||(fecha.getDate()!=dia)||(fecha.getFullYear()!=anyo)){
            document.getElementById("error_3").style.display = "none";
            document.getElementById("error_33").style.display = "none";
            document.getElementById("error_333").innerHTML = "Introduzca una fecha valida";
        devolver = false;
        } else{
          document.getElementById("error_3").style.display = "none";
          document.getElementById("error_33").style.display = "none";
          document.getElementById("error_333").style.display = "none";
        }
    }

    ///////////////// DIRECCION /////////////////


    valor = document.getElementById("element_3_1").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
      document.getElementById("error_4").innerHTML = "Debe introducir la dirección";
      devolver = false;
    } else {
      document.getElementById("error_4").style.display = "none";
    }

    valor = document.getElementById("element_3_3").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
      document.getElementById("error_5").innerHTML = "Debe introducir la ciudad";
      devovler = false;
    }else{
      document.getElementById("error_5").style.display = "none";
    }

    valor = document.getElementById("element_3_4").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
      document.getElementById("error_6").innerHTML = "Debe introducir la provincia";
      devolver = false;
    }else{
      document.getElementById("error_6").style.display = "none";
    }

    ///////////////// CP /////////////////
    valor = document.getElementById("element_3_5").value;
    if(valor == null || valor.length == 0) {
      document.getElementById("error_7").innerHTML = "Ha de rellenar el código postal";
      devolver = false;
    }else if(isNaN(valor))  {
      document.getElementById("error_7").innerHTML = "El código postal ha de ser numérico";
      devolver = false;
    }else{
      document.getElementById("error_7").style.display = "none";
    }

    ///////////////// PAIS /////////////////
    indice = document.getElementById("element_3_6").selectedIndex;
    if( indice == null || indice == 0 ) {
      document.getElementById("error_8").innerHTML = "Debe seleccionar un país";
      devolver = false;
    }else{
      document.getElementById("error_8").style.display = "none";
    }

    ///////////////// NIF /////////////////
    valor = document.getElementById("element_7").value;
    var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

    if( !(/^\d{8}[A-Z]$/.test(valor)) ) {
      document.getElementById("error_9").innerHTML = "Introduzca un NIF válido";
      devolver = false;
    } else if(valor.charAt(8) != letras[(valor.substring(0, 8))%23]) {
      document.getElementById("error_9").innerHTML = "La letra del NIF no es correcta";
      devolver = false;
    } else {
      document.getElementById("error_9").style.display = "none";
    }

    ///////////////// SEXO /////////////////
    radioBtns = document.getElementsByName("element_8");
    var checked=false
    for(var i=0; i<radioBtns.length; i++) {
      if(radioBtns[i].checked) {
        checked=true;
        break;
      }
    }
    if(!checked) {
      document.getElementById("error_10").innerHTML = "Debe seleccionar el sexo";
      devovler = false;
    } else {
      document.getElementById("error_10").style.display = "none";
    }
    ///////////////// EMAIL ////////////////////

    var email = document.getElementById("val_mail").value;

    if(email == null || email.length == 0){
      document.getElementById("error_11").innerHTML='Introduce una dirección email';
      devolver = false;
    } else if(!/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(email)){
      document.getElementById("error_11").style.display = "none";
      document.getElementById("error_111").innerHTML='Formato de dirección incorrecto';
      devolver = false;
    } else {
      document.getElementById("error_111").style.display = "none";
    }

    ///////////////// TELEFONO /////////////////
    valor = document.getElementById("element_5").value;
    if( !(/^\d{3}\s\d{3}\s\d{3}$/.test(valor)) ) {
      document.getElementById("error_12").innerHTML = "Debe introducir un teléfono válido";
      devolver = false;
    }

    ///////////////// SPAMM /////////////////
    elemento = document.getElementById("element_9_1");
    if( !elemento.checked ) {
      document.getElementById("error_13").innerHTML = "Debe aceptar recibir spam";
      return false;
    }

    devolver = true;
}