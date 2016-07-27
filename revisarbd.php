<?php
// Conexion el servidor
include ("includes/bdkey.php");
$user="cgonzalez1";
$pass="M4xyY4d1";

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
		echo 'Estructura='.$_SESSION['estructur']=$row[estructura];
		echo '<br />Nivel='.$_SESSION['level']=$row[nivel];
	}
	//header ("Location: inicio.html");
}else{
	//si no existe le mando otra vez a la portada
	echo "NO EXISTE";//header("Location: sesion.php?errorusuario=si");
}
?>
