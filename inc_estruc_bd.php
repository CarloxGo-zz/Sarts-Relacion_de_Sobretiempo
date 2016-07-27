<?php
include ("security_system.php");
ini_set('error_reporting',0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Incluir Trabajador en la BD</title>
</head>

<body>

<?php

$dbh = mysql_connect("localhost", "wwwsart_root", "M4X1mu5") or die("No se pudo conectar a la base de datos".mysql_error());
mysql_select_db("wwwsart_sarts",$dbh);

$result1 = mysql_query("select * from paises where pais='$estructura'");
$result2 = mysql_query("select * from paises where id_pais='$id_estruc'");

if($row=mysql_fetch_array($result1) or $row=mysql_fetch_array($result2))
{
 mysql_close($conexion);
	 $respuesta="estruc_repetida.php";
	 echo "<meta HTTP-EQUIV='refresh' content='1;url=$respuesta'>";
	 }else{
	 $sql ="INSERT INTO paises (pais,id_pais) VALUES('$estructura','$id_estruc')";
	 $result = mysql_query($sql);
	 mysql_close($conexion);
	 $respuesta="estruc_bd_exito.html";
	 echo "<meta HTTP-EQUIV='refresh' content='1;url=$respuesta'>";
}

?>

</body>
</html>
