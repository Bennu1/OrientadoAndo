<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables
$userID = $_REQUEST['identificacion'];
$nombre = $_REQUEST['nombre'];


  //insertar Valores en la base de datos Bonotes
  $adicionarDatos = mysqli_query($conect, "INSERT INTO OrientaUsuarios(nombre, tiempo) VALUES('$userID','$nombre')");

  echo "adicionado";





//http://tadeolabhack.com:8081/test/Datos/Orienta/EscribirUsuarios.php?identificacion=1&nombre=juan


?>

