<?php
  
  $codigo = $_GET['codigo'];
  $nombre = $_GET['nombre'];
  $apellido = $_GET['apellido'];
  $telefono = $_GET['telefono'];
  $email = $_GET['email'];
  $genero = $_GET['genero'];
  $edad = $_GET['edad'];
  $observacion = $_GET['observacion'];

   if (empty($codigo)   ||empty($nombre) || empty($apellido) ||       empty($telefono) || empty($email) || empty($genero) ||         empty($edad)     || empty($observacion) ) {
     echo "por favor ingrese su nombre y appelido";
   }else {
     echo "Codigo: " . $codigo ."\n" ."Nombre: " . $nombre . "\n".
		   "Apellido: " . $apellido . "\n" . "Telefono: " .  $telefono . "\n" . "Email: " . $email . "\n" . "Genero: " . $genero . "\n" . "Edad: " . $edad . "\n" . "Observaciones: " . $observacion ;
   }

 ?>
