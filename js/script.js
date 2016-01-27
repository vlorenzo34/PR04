//////////////// validacion de crear_usuario.php ////////////////

var validaFormulario=function(){

  var devolver = true;

    ///////////////// EMAIL ////////////////////

    var valor = document.getElementById("val_mail").value;

    if(valor == null || valor.length == 0)
    {
      document.getElementById("error_1").innerHTML='Introduce una dirección email';
      devolver = false;
    } 
    else if(!/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(valor))
    {
      document.getElementById("error_1").style.display = "none";
      document.getElementById("error_11").innerHTML='Formato de dirección incorrecto';
      devolver = false;
    } 
    else 
    {
      document.getElementById("error_11").style.display = "none";
    }

    ///////////////// CONTRASEÑA /////////////////

    valor = document.getElementById("val_pass").value;
    if( valor == null || valor.length == 0 ) {
      document.getElementById("error_2").innerHTML = "Debe introducir la contraseña";
      devolver = false;
    } else if ( valor.length >= 4 ) {
      document.getElementById("error_2").style.display = "none";
      document.getElementById("error_22").innerHTML='La contraseña debe de ser mayor a 4 caracteres';
      devolver = false;
    } else {
      document.getElementById("error_22").style.display = "none";
    }
    

    /////////////////// NOMBRE ///////////////////


    valor = document.getElementById("val_nombre").value;
    if( valor == null || valor.length == 0 ) {
      document.getElementById("error_3").innerHTML = "Debe introducir el nombre";
      devolver = false;
    }else{
      document.getElementById("error_3").style.display = "none";
    }


    ///////////////// APELLIDOS /////////////////

    valor = document.getElementById("val_apellidos").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
      document.getElementById("error_4").innerHTML = "Debe introducir los apellidos";
      devolver = false;
    }else{
      document.getElementById("error_4").style.display = "none";
    }

    ///////////////// TELEFONO /////////////////

    valor = document.getElementById("val_telef").value;
    if( valor == null || valor.length == 0 ) {
      document.getElementById("error_5").innerHTML = "Debe introducir un teléfono";
      devolver = false;
    } else if ( !(/^\d{9}$/.test(valor)) || valor.length > 9 ) {
      document.getElementById("error_5").style.display = "none";
      document.getElementById("error_55").innerHTML = "Debe introducir un teléfono válido";
      devolver = false;
    } else {
      document.getElementById("error_55").style.display = "none";
    }

    ///////////////// CP /////////////////

    valor = document.getElementById("val_cp").value;
    if(valor == null || valor.length == 0) 
    {
      document.getElementById("error_6").innerHTML = "Ha de rellenar el código postal";
      devolver = false;
    }
    else if( !(/^\d{5}$/.test(valor)))  
    {
      document.getElementById("error_6").style.display = "none";
      document.getElementById("error_66").innerHTML = "El código postal ha de ser numérico";
      devolver = false;
    }
    else
    {
      document.getElementById("error_66").style.display = "none";
    }

    ///////////////// CIUDAD /////////////////

    valor = document.getElementById("val_ciudad").value;
    if( valor == null || valor.length == 0 ) {
      document.getElementById("error_7").innerHTML = "Debe introducir el nombre";
      devolver = false;
    }else{
      document.getElementById("error_7").style.display = "none";
    }
    
  devolver = false; 
  return devolver ;
}