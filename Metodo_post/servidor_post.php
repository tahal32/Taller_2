<?php
  
  $codigo = $_POST['codigo'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];
  $genero = $_POST['genero'];
  $edad = $_POST['edad'];
  $observacion = $_POST['observacion'];

   if (empty($codigo)   ||empty($nombre) || empty($apellido) ||       empty($telefono) || empty($email) || empty($genero) ||         empty($edad)     || empty($observacion) ) {
     echo "por favor ingrese su nombre y appelido";
   }else {
     echo "Codigo: " . $codigo ."\n" ."Nombre: " . $nombre . "\n".
		   "Apellido: " . $apellido . "\n" . "Telefono: " .  $telefono . "\n" . "Email: " . $email . "\n" . "Genero: " . $genero . "\n" . "Edad: " . $edad . "\n" . "Observaciones: " . $observacion ;
   }

 ?>
