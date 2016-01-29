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
    } else if( valor.length <= 4 ) {
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
    else if(isNaN(valor))  
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
  return devolver;
}

//////////////// MAPA CREAR CONTACTO 1/////////////////////

var geocoder;
      var map;
      function initialize() {
        var latlng = new google.maps.LatLng(41.394885, 2.014379);
        var mapOptions = {
          zoom: 9,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
      }
 
      function codeAddress() {
        geocoder = new google.maps.Geocoder();
        var address = document.getElementById('address').value;
        geocoder.geocode( { 'address': address}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            document.getElementById('x').value = results[0].geometry.location.lat().toFixed(6);
            document.getElementById('y').value = results[0].geometry.location.lng().toFixed(6);
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }


//////////////// MAPA CREAR CONTACTO 2/////////////////////

var geocoder2;
      var map2;
      function initialize2() {
        var latlng = new google.maps.LatLng(41.394885, 2.014379);
        var mapOptions = {
          zoom: 9,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map2 = new google.maps.Map(document.getElementById('map_canvas2'), mapOptions);
      }
 
      function codeAddress2() {
        geocoder2 = new google.maps.Geocoder();
        var address2 = document.getElementById('address2').value;
        geocoder2.geocode( { 'address': address2}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            document.getElementById('x2').value = results[0].geometry.location.lat().toFixed(6);
            document.getElementById('y2').value = results[0].geometry.location.lng().toFixed(6);
            map2.setCenter(results[0].geometry.location);
            var marker2 = new google.maps.Marker({
                map: map2,
                position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }