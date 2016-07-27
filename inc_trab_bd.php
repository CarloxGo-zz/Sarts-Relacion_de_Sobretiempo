<?php
include ("security_system.php");
include ("includes/bdkey.php");
ini_set('error_reporting',0);
$ci=$_POST['ci'];
$result = mysql_query("select * from traba where ci='$ci'");
if($row=mysql_fetch_array($result)){
	mysql_close($dbh);
	$respuesta="cirepetida.php";
	echo "<meta HTTP-EQUIV='refresh' content='1;url=$respuesta'>";
}else{
	if($cargo=="LINIERO ELECTRICISTA II"){
		$manejo="SI";
	}else{
		$manejo="NO";
	}
	$ci=$_POST['ci'];
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$region=$_POST['region'];
	$direccion=$_POST['direccion'];
	$gerencia=$_POST['gerencia'];
	$coordinacion=$_POST['coordinacion'];
	$id_estructura=$_POST['id_estructura'];
	$estructura=$_POST['estructura'];
	$jefatura=$_POST['jefatura'];
	$cargo=$_POST['cargo'];
	$horario=$_POST['horario'];
	$estatus=$_POST['estatus'];

	//Enviamos los valores obtenidos a la BD
$result = mysql_query("INSERT INTO `traba` ( `ci` , `nombres` , `apellidos` , `region` , `direccion` , `gerencia` , `coordinacion` , `id_estructura` , `estructura` , `jefatura` , `cargo` , `horario` , `estatus` , `manejo` , `tipotrabajador` , `condicion` )
VALUES (
'$ci', '$nombres', '$apellidos', '$region', '$direccion', '$gerencia', '$coordinacion', '$id_estructura', '$estructura', '$jefatura', '$cargo', '$horario', '$estatus', '$manejo', 'OBRERO', '1'
)") or die ("no se ejecut&oacute;");
	
	$respuesta="traba_bd_exito.html";
	echo "<meta HTTP-EQUIV='refresh' content='1;url=$respuesta'>";
}
?>