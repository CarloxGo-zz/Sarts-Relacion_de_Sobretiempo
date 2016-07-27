<?php
include ("security_system.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Verificar Cédula del Trabajador</title>
</head>

<body>
<?php

// Conexion el servidor
include ("includes/bdkey.php");

// 1.Consultamos a la tabla
$result = mysql_query("select * from traba where ci='$ci' and condicion='1'");

if(mysql_num_rows($result)==0)
{
	// 3. Caso error ci
	$respuesta="ci_traba_no_enc.php";
	echo "<meta HTTP-EQUIV='refresh' content='1;url=$respuesta'>";
}
	// 3. Creamos la tabla Centrada y Mostramos los registros

	echo "<center>

	<table border = '2' bgcolor='#ffffff'> \n";
	while ($row=mysql_fetch_array($result))
		{

				echo "<tr><td><font face='verdana' color='#0000FF' size=2>Cédula de Identidad</td>
						<td><font face='verdana' color='#0000FF' size=2>$row[ci]</td></tr>\n";

				echo "<tr><td><font face='verdana' color='#0000FF' size=2>Nombres</td>
         				 <td><font face='verdana' color='#0000FF' size=2>$row[nombres]</td></tr>\n";
		  
				echo "<tr><td><font face='verdana' color='#0000FF' size=2>Apellidos</td>
          				<td><font face='verdana' color='#0000FF' size=2>$row[apellidos]</td></tr>\n";

				echo "<tr><td><font face='verdana' color='#0000FF' size=2>Estructura</td>
          				<td><font face='verdana' color='#0000FF' size=2>$row[estructura]</td></tr>\n";
		  
				echo "<tr><td><font face='verdana' color='#0000FF' size=2>Jefatura de Líneas</td>
         				 <td><font face='verdana' color='#0000FF' size=2>$row[jefatura]</td></tr>\n";

				echo "<tr><td><font face='verdana' color='#0000FF' size=2>Cargo</td>
          				<td><font face='verdana' color='#0000FF' size=2>$row[cargo]</td></tr>\n";
		
				echo "<tr><td><font face='verdana' color='#0000FF' size=2>Horario</td>
         				<td><font face='verdana' color='#0000FF' size=2>$row[horario]</td></tr>\n";

				echo "<tr><td><font face='verdana' color='#0000FF' size=2>Estatus</td>
          				<td><font face='verdana' color='#0000FF' size=2>$row[estatus]</td></tr>\n";
		  
				echo "<tr><td><font face='verdana' color='#0000FF' size=2>Manejo</td>
          				<td><font face='verdana' color='#0000FF' size=2>$row[manejo]</td></tr>\n";

			}

		echo "</table> \n</center>";

		// 4. Cerramos el Mysql y php

mysql_free_result($result)
?>
</body>
</html>
