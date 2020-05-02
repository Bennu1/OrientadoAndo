<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

$userID = $_REQUEST['IDuser'];

//consultar la tabla
$consulta = mysqli_query($conect, "SELECT * FROM Botones WHERE idUser ='$userID' ");


while($posicion= mysqli_fetch_array($consulta))
{
	echo$pos = $posicion['idSelect'];
	echo "\n";
}



//http://tadeolabhack.com:8081/test/Datos/MostrarPosXusuario.php?IDuser=85

?>