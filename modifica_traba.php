<?php
include ("security_system.php");
ini_set('error_reporting',0);
?>
<HTML>
<HEAD>
<TITLE>Modificacion ficha de Trabajador.  Sistema ARTS Online</TITLE>
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
.Estilo3 {color: #069300}
-->
</style>

<script language="JavaScript" type="text/JavaScript">
function enviar(){
var enviarme=confirm("Desea modificar estos Datos?");
if (enviarme)
   return true ;
else
   return false ;
}
</script>

</HEAD>

<BODY BGCOLOR=#FFFFFF background="images/bgb.gif" vlink="#0000FF" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 tracingsrc="images/-downdis.gif" tracingopacity="100" oncontextmenu="return false">
<td colspan="3" valign="middle"><div align="center"> 
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
<td align="right" background="images/index_01.gif"><img src="images/index_03.gif" width=59 height=34 alt=""><a href="inicio.html"><img src="images/index_ini.gif" alt="" width=82 height=34 border="0"></a><img src="images/index_faq.GIF" width=82 height=34 alt=""><img src="images/index_link.gif" width=89 height=34 alt=""><a href="finalizar_sesion.php" target="_self"><img src="images/index_sarts.gif" alt="" width=71 height=34 border="0"></a><img src="images/index_contac.GIF" width=85 height=34 alt=""></td>
  </tr>
</table>
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td width="450" background="images/index_23.gif"><img src="images/index_22.gif" width=174 height=35 alt=""></td>
	<td background="images/index_27.gif"><img src="images/index_25.jpg" width=96 height=35 alt=""><img src="images/index_soft.GIF" width=92 height=35 alt=""></td>
  </tr>
</table>
<h2 class="Estilo3">Modificacion Datos de Trabajador</h2>
<p><span class="t12b Estilo2">
		<?php
		// Conexion al servidor
		include ("includes/bdkey.php");
		$ci=$_POST['ci'];
		// 1.Consultamos a la tabla
		$result = mysql_query("SELECT * FROM traba WHERE ci='$ci'");
		// 2. Creamos la tabla Centrada y Mostramos los registros
		echo '<form name="form1" method="post" action="mod_traba_bd.php">';
		echo '<td><input name="ci" type="hidden" value="'.$ci.'"></td>';

		while ($row=mysql_fetch_array($result))
		{
		echo '<table width="450" border="1" align="center">';
		echo '<tr><td>C.I.</td>';
		echo '<td><input name="cedul" type="text" value="'.$row[ci].'"></td>'; //readonly="readonly" 
		echo '</tr>';
		
		echo '<tr>';
		echo '<td width="180">Nombres</td>';
		echo '<td width="270"><input size="35" name="nomb" type="text" value="'.$row[nombres].'" onChange="this.value = this.value.toUpperCase();"></td>';
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Apellidos</td>';
		echo '<td><input type="text" size="35" name="apell" value="'.$row[apellidos].'" onChange="this.value = this.value.toUpperCase();"></td>';
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Regi&oacute;n</td>';
		echo '<td><select name="reg" class="Estilo56">';
		echo '<option value="'.$row[region].'">'.$row[region].'</option>';
		$tablaestructura6 = mysql_query("SELECT * FROM estructura WHERE nivel=6 ORDER BY estruc ASC");
		while ($registroestructura6 = mysql_fetch_array($tablaestructura6)){
			echo '<option value="'.$registroestructura6['estruc'].'">'.$registroestructura6['estruc'].'</option>';
		}
		mysql_free_result($tablaestructura6);
		echo '</select>';	
		echo '</tr>';	
		echo '<tr>';
		echo '<td>Direcci&oacute;n</td>';
		echo '<td><select name="direc" class="Estilo56">';
		echo '<option value="'.$row[direccion].'">'.$row[direccion].'</option>';
		$tablaestructura5 = mysql_query("SELECT * FROM estructura WHERE nivel=5 ORDER BY estruc ASC");
		while ($registroestructura5 = mysql_fetch_array($tablaestructura5)){
			?>
			<option value="<?php echo $registroestructura5['estruc']; ?>"><?php echo $registroestructura5['estruc']; ?></option>
			<?php
		}
		mysql_free_result($tablaestructura5);

		echo '</select>';	
		echo '</td></tr>';
		
		echo '<tr>';
		echo '<td>Gerencia</td>';
		echo '<td><select name="gerenc" class="Estilo56">';
		echo '<option value="'.$row[gerencia].'">'.$row[gerencia].'</option>';
		$tablaestructura4 = mysql_query("SELECT * FROM estructura WHERE nivel=4 ORDER BY estruc ASC");
		while ($registroestructura4 = mysql_fetch_array($tablaestructura4))
		{
		?>
		<option value="<?php echo $registroestructura4['estruc']; ?>"><?php echo $registroestructura4['estruc']; ?></option>
		<?php
		}
		mysql_free_result($tablaestructura4);
		
		echo '</select>';	
		echo '</td></tr>';
		
		echo '<td>Coordinaci&oacute;n</td>';
		echo '<td><select name="coordina" class="Estilo56">';
		echo '<option value="'.$row[coordinacion].'">'.$row[coordinacion].'</option>';
		$tablaestructura3 = mysql_query("SELECT * FROM estructura WHERE nivel=3 ORDER BY estruc ASC");
		while ($registroestructura3 = mysql_fetch_array($tablaestructura3))
		{
		?>
		<option value="<?php echo $registroestructura3['estruc']; ?>"><?php echo $registroestructura3['estruc']; ?></option>
		<?php
		}
		mysql_free_result($tablaestructura3);
		echo '</select>';	
		echo '</td></tr>';
		
		echo '<tr>';
		echo '<td>Estructura</td>';
		echo '<td><select name="estruc" class="Estilo56">';
		echo '<option value="'.$row[estructura].'">'.$row[estructura].'</option>';
		$tablaestructura2 = mysql_query("SELECT * FROM estructura WHERE nivel='2' ORDER BY estruc ASC");
		while ($registroestructura2 = mysql_fetch_array($tablaestructura2))
		{
		?>
		<option value="<?php echo $registroestructura2['estruc']; ?>"><?php echo $registroestructura2['estruc']; ?></option>
		<?php
		}
		mysql_free_result($tablaestructura2);
		echo '</select>';	
		echo '</td></tr>';
		
		echo '<tr>';
		echo '<td>Grupo de Trabajo</td>';
		echo '<td><select name="jefatur" class="Estilo56">';
		echo '<option value="'.$row[jefatura].'">'.$row[jefatura].'</option>';
		$tablaestructura1 = mysql_query("SELECT * FROM estructura WHERE nivel='1' ORDER BY estruc ASC");
		while ($registroestructura1 = mysql_fetch_array($tablaestructura1))
		{
		?>
		<option value="<?php echo $registroestructura1['estruc']; ?>"><?php echo $registroestructura1['estruc']; ?></option>
		<?php
		}
		mysql_free_result($tablaestructura1);
		echo '</select>';
		echo '</td></tr>';

		echo '<tr>';
		echo '<td>Cargo</td>';
		echo '<td><select name="carg" class="Estilo56">';
		echo '<option value="'.$row[cargo].'">'.$row[cargo].'</option>';
		$cargotrabajador = mysql_query("SELECT * FROM cargos ORDER BY cargo ASC");
		while ($registrocargo = mysql_fetch_array($cargotrabajador))
		{
		?>
		<option value="<?php echo $registrocargo['cargo']; ?>"><?php echo $registrocargo['cargo']; ?></option>
		<?php
		}
		mysql_free_result($cargotrabajador);
		echo '</select>';	
		echo '</td></tr>';
				
		echo '<tr>';
		echo '<td>Horario</td>';
		echo '<td><select name="horari" class="Estilo56">';
		echo '<option value="'.$row[horario].'">'.$row[horario].'</option>';
		?>
			<option value="07:00-15:00">07:00-15:00</option>
			<option value="15:00-23:00">15:00-23:00</option>
			<option value="23:00-07:00">23:00-07:00</option>
			<option value="07:30-16:30">07:30-16:30</option>
			<option value="07:00-18:00">07:00-18:00</option>
			<option value="16:00-00:00">16:00-00:00</option>
			<option value="00:00-08:00">00:00-08:00</option>
			<option value="08:00-16:00">08:00-16:00</option>
			<option value="TURNO VARIADO">TURNO VARIADO</option>
		<?php
		echo '</select>';	
		echo '</td></tr>';
		
		echo '<tr>';
		echo '<td>Estatus</td>';
		echo '<td><select name="estat" style="width:160px">';
		echo '<option value="'.$row[estatus].'" selected>'.$row[estatus].'</option>';
        echo '<option value="REGULAR">REGULAR</option>';
		echo '<option value="CONTRATADO">CONTRATADO</option>';
		echo '<option value="EVENTUAL">EVENTUAL</option>';
		echo '<option value="RETIRADO">RETIRADO</option>';
		echo '<option value="JUBILADO">JUBILADO</option>';
		echo '<option value="CESANTE">CESANTE</option>';
        echo '</select>';
							
		echo '<tr>';
		echo '<td>Manejo</td>';
		echo '<td><select name="manej" style="width:160px">';
		echo '<option value="'.$row[manejo].'" selected>'.$row[manejo].'</option>';
		echo '<option value="SI">SI</option>';
		echo '<option value="NO">NO</option>';
        echo '</select>';
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Condici&oacute;n</td>';
		echo '<td>'.$row[condicion].'</td>';
		echo '</tr>';
		}
		echo '</font></table>';
		echo '<div align="center">';
		echo '<table width="200" border="0">';
		echo '<tr>';
		
		echo '<td align="center"><input type="submit" name="submit" style="background:#FFB400" lang="es" value="Actualizar" onclick="enviar()"></td>';
		echo '</tr>';
		echo '</table>';
		echo '</div>';
		echo '</form>';
		mysql_free_result($result);
?>
</span></p>
<p>&nbsp;</p>
<p></p>
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
<!-- End ImageReady Slices -->
</BODY>
</HTML>