



function ajax_post(){

  var xmlhttp;
  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  }else {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
    var a = document.getElementById('codigo').value;
    var b = document.getElementById('nombre').value;
    var c = document.getElementById('apellido').value;
	var d = document.getElementById('telefono').value;
	var e = document.getElementById('email').value;
	var f = document.getElementById('genero').value;
	var g = document.getElementById('edad').value;
	var h = document.getElementById('observacion').value;

     var informacionDelUsuario ="codigo="+a+ "&nombre="+b+"&apellido="+c+"&telefono="+d+"&email="+e+"&genero="+f+"&edad="+g+"&observacion="+h;

    xmlhttp.onreadystatechange = function(){
      if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
        var mensaje = xmlhttp.responseText;
        alert( mensaje);
      }
    }

xmlhttp.open("POST","servidor_post.php", true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send(informacionDelUsuario);


}
