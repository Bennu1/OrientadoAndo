<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


$indata =$_REQUEST["in"];
$userID = $_REQUEST['userID'];


	if($indata =="BorrarTodo")
	{
		$actualizaBtn1 = mysqli_query($conect, "DELETE FROM Botones");
		echo "Borro Todo";
	}


//pregunto si el id de usuario ya esta en la tabla
$IDexistente = mysqli_query($conect, "SELECT * FROM Botones WHERE idUser='$userID' ");


//se obtienen todos los datos del usuario idUser
while($row = mysqli_fetch_array($IDexistente))
{
	$usuario = $row['idUser'];
    $idSelect = $row['idSelect'];
}

//si no hay idSelect, significa que el usuario no existe
if($idSelect == null && $usuario != $userID)
{
	echo "No existe el usuario para poderlo eliminar";
}
//si existe el usuario entonces borrelo de acuerdo a la instrucción recibida
else
{
	if($indata =="BorrarUsuario")
	{
		$actualizaBtn1 = mysqli_query($conect, "DELETE FROM Botones WHERE idUser='$userID'");
		echo "Usuario Borrado";
	}

	if($indata =="BorrarDatosUsuario")
	{
		$actualizaBtn1 = mysqli_query($conect, "UPDATE Botones SET btn1=0,btn2=0,btn3=0,btn4=0  WHERE idUser='$userID'");
		echo "Datos del Usuario borrados";
	}
}

//http://tadeolabhack.com:8081/test/Datos/BorrarDatos.php?in=BorrarDatosUsuario&userID=1
//in=BorrarTodo
//in=BorrarUsuario
//in=BorrarDatosUsuario

?>