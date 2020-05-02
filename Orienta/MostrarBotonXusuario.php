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


while($botones1= mysqli_fetch_array($consulta))
{
	$button1 = $botones1['btn1'];	
	$button2 = $botones1['btn2'];
	$button3 = $botones1['btn3'];
	$button4 = $botones1['btn4'];
}

$rta = $button1+$button2+$button3+$button4;

echo $rta;	
echo "\n";

//http://tadeolabhack.com:8081/test/Datos/MostrarBotonXusuario.php?IDuser=85

?>