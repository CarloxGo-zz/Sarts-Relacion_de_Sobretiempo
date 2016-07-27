<?php
session_start();
if ($_SESSION["autentificado"] != "SI") {
    header("Location: sesion.php");
    exit();
}
?>
<HTML>
<HEAD>
<TITLE>Consulta Eliminar Trabajador por Admin. Sistema ARTS Online</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<link rel="stylesheet" href="main.css" type="text/css" http-equiv="Window-target" content="_top"/>


<script type="text/javascript" language="JavaScript1.2" src="stmenu.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<script type="text/javascript" src="js/prototype.js"></script>
	<script type="text/javascript" src="js/scriptaculous.js"></script>
	<script type="text/javascript" src="js/wforms.js"></script>
	<script type="text/javascript" src="js/localization-es.js"></script>
	<script type="text/javascript" src="js/contact.js"></script>
	<script type="text/javascript" src="/mint/mint.js.php"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen, projection" />
	
	
<style type="text/css">
<!--
.Estilo2 {font-size: 18px}
-->
</style>
</HEAD>

<BODY BGCOLOR=#FFFFFF background="images/bgb.gif" vlink="#0000FF" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 tracingsrc="images/-downdis.gif" tracingopacity="100" oncontextmenu="return false">
<td colspan="3" valign="middle"><div align="center"> 
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
<td align="right" background="images/index_01.gif"><img src="images/index_03.gif" width=59 height=34 alt=""><a href="inicio.html"><img src="images/index_ini.gif" alt="" width=82 height=34 border="0"></a><img src="images/index_faq.GIF" width=82 height=34 alt=""><img src="images/index_link.gif" width=89 height=34 alt=""><a href="menu_sarts.html" target="_blank"><img src="images/index_sarts.gif" alt="" width=71 height=34 border="0"></a><img src="images/index_contac.GIF" width=85 height=34 alt=""></td>
  </tr>
</table>
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td width="450" background="images/index_23.gif"><img src="images/index_22.gif" width=174 height=35 alt=""></td>
	<td background="images/index_27.gif"><img src="images/index_25.jpg" width=96 height=35 alt=""><img src="images/index_soft.GIF" width=92 height=35 alt=""></td>
  </tr>
</table>
<h2><span class="t12b Estilo2">
  <?php

// Conexion el servidor
$dbh = mysql_connect("localhost", "wwwsart_root", "M4X1mu5") or die("No se pudo conectar a la base de datos".mysql_error());
mysql_select_db("wwwsart_sarts",$dbh);

// 1.Consultamos a la tabla
$result = mysql_query("select * from traba where ci='$ci'");

if(mysql_num_rows($result)==0)
{
	echo '<form name="form2" method="post" action="elim_traba.php">';
	echo "<H1><font color='red'> Error !!!</font></H1>";
	echo " ";
	echo "<H2><font color='red'>C&eacute;dula de Identidad no encontrada,</font></H2>";
	echo " ";
	echo "<H2><font color='red'>por favor verif&iacute;quela, e int&eacute;ntelo de nuevo</font></H2>";
	echo '<div align="center">';
	echo '<table width="200" border="0">';
	echo '<tr>';
  	echo '<td align="center"><input type="submit" name="regresar" value="Regresar" style="background:#FFB400" lang="es" maxlength="30"></td>';
    echo '</tr>';
	echo '</table>';
	echo '</div>';
	echo '</form>'
	
}else{
	// 2. Creamos la tabla Centrada y Mostramos los registros
	echo '<form name="form1" method="post" action="elim_traba_x_user_bd.php">';
	echo "<font color='green'>";
	echo '<center>';
	
	echo "<H2><font color='green'>Datos del Trabajador</font></H2>";

	echo "<center>

	<table border = '2' bgcolor='#ffffff'> \n";
	while ($row=mysql_fetch_array($result))
	{
				echo '<input name="cedul" type="hidden" value="'.$ci.'">';
				echo '<table width="200" border="0" align="center">';
				echo '<tr>';

				echo "<tr><td><font face='verdana' color='#0000FF' size=2>Cedula de Identidad</td>
						<td><font face='verdana' color='#0000FF' size=2>$row[ci]</td></tr>\n";

				echo "<tr><td><font face='verdana' color='#0000FF' size=2>Nombres</td>
         				 <td><font face='verdana' color='#0000FF' size=2>$row[nombres]</td></tr>\n";
		  
				echo "<tr><td><font face='verdana' color='#0000FF' size=2>Apellidos</td>
          				<td><font face='verdana' color='#0000FF' size=2>$row[apellidos]</td></tr>\n";

				echo "<tr><td><font face='verdana' color='#0000FF' size=2>Estructura</td>
          				<td><font face='verdana' color='#0000FF' size=2>$row[estructura]</td></tr>\n";
		  
				echo "<tr><td><font face='verdana' color='#0000FF' size=2>Jefatura de Lineas</td>
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

	
		echo '<div align="center">';
		echo '<table width="200" border="0">';
		echo "<H3><font color='green'>ATENCION: &iquest;Desea eliminar los datos de este trabajador?</font></h3>";
		echo '<tr><td>';
		echo '<input type="submit" name="si" value ="Si" style="background:#FFB400" lang="es" maxlength="30"></td>';
		echo '<input type="submit" name="no" value ="No" style="background:#FFB400" lang="es" maxlength="30"></td>';
		echo '</tr>';
		echo '</table>';
		echo '</div>';
		echo '</form>';

		}	

// 4. Cerramos el Mysql y php
mysql_free_result($result)

?>
</span></h2>

<p>&nbsp;</p>

                                <table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td background="images/index_66.gif" class="t12w"><b>&nbsp;&nbsp;&copy;2006-2007 
      MaxSystem.NET &nbsp;Derechos Reservados</b></td>
	<td width="102"><img src="images/index_69.jpg" width=102 height=36 alt=""></td>
	<td width="222" background="images/index_70.gif" align="center" class="t12w"><div align="center"><a href="#" class="t12w"><b>Data/Privacidad</b></a><b> 
        • <a href="#" class="t12w">Accesabilidad</a></b></div></td>
  </tr>
</table>
      </div></td>
</BODY>
</HTML>