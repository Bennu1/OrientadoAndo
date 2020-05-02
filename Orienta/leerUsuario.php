<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables
$nombre = $_REQUEST['nombre'];
$niveles = $_REQUEST['nivel'];
$tiempo = $_REQUEST['tiem'];

//pregunto si el id de usuario ya esta en la tabla
$IDexistente = mysqli_query($conect, "SELECT * FROM test WHERE name='$nombre',  level= '$niveles', time= '$tiempo' ");


//se obtienen todos los datos del usuario idUser
while($row = mysqli_fetch_array($IDexistente))
{
    $usuarioID = $row['id'];
    $usuarioIDuser = $row['IdUser_FK'];
    $usuarioNombre = $row['name'];
    $usuarioNiveles = $row['level'];
    $usuarioTiempo = $row['time'];

    echo $usuarioNombre;


}



//http://tadeolabhack.com:8081/test/Datos/orienta/leerUsuario.php?ape=pso


?>

