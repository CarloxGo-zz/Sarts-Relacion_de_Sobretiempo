<?php
// Conexion el servidor
include ("includes/bdkey.php");
$user=$_POST["usuario"];
$pass=$_POST["contrasena"];

$result = mysql_query("SELECT * FROM usuarios WHERE user='$user' AND pass='$pass'");

if(mysql_num_rows($result)!==0){
	//usuario y contraseña válidos
    //defino una sesion y guardo datos
    session_start();
	session_name("usuario");
    $_SESSION["autentificado"]= "SI";
	$_SESSION["ultimoacceso"]= date("Y-n-j H:i:s");
	setcookie("usuario", $_POST["usuario"], time()+7200,"/",""); 
	
	while($row=mysql_fetch_array($result)){
		$_SESSION['estructur']=$row[estructur];
		$_SESSION['level']=$row[nivel];
	}
	header ("Location: inicio.html");
}else{
	//si no existe le mando otra vez a la portada
	header("Location: sesion.php?errorusuario=si");
}
?>
