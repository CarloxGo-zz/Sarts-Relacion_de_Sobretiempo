<?php
include ("security_system.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Incluir Trabajador en la BD. Sistema ARTS Online</title>
</head>

<body oncontextmenu="return false">

<?php

switch($_GET[plantilla])
	{
	case 1:
		$respuesta="plantilla_jornada.php";
		echo "<meta HTTP-EQUIV='refresh' content='1;url=$respuesta'>";
	break;
	
	case 2:
		$respuesta="plantilla_semana.php";
		echo "<meta HTTP-EQUIV='refresh' content='1;url=$respuesta'>";
	break;
	
	default:
		$respuesta="crear_plantilla.php";
		echo "<meta HTTP-EQUIV='refresh' content='1;url=$respuesta'>";
	break;
	}
?>

</body>
</html>
