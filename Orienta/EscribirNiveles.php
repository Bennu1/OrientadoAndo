<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables
$userID = $_REQUEST['identificacion'];
$userIDFK = $_REQUEST['identforanea'];
$niveles = $_REQUEST['nivel'];
$tiempo = $_REQUEST['tiem'];


  //insertar Valores en la base de datos Bonotes
  $adicionarDatos = mysqli_query($conect, "INSERT INTO OrientaUsuarios(identforanea, nivel, tiem) VALUES('$userID','$userIDFK', '$niveles', '$tiempo' )");

  echo "adicionado";





//http://tadeolabhack.com:8081/test/Datos/orienta/EscribirNiveles.php?identificacion=1&identforanea&nevel=1&tiem=2:15


?>

