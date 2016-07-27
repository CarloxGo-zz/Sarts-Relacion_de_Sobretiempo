<?php
include ("security_system.php");
?>
<HTML>
<HEAD>
<TITLE>Verificar Datos para Generar Tarjeta por persona. Sistema ARTS Online</TITLE>
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
.Estilo3 {color: #FF0000}
.Estilo4 {font-size: 11px}
.Estilo5 {color: #000000}
.Estilo6 {font-size: 12px; text-decoration: none; font-family: tahoma;}
.Estilo7 {
	color: #0000FF;
	font-size: 14px;
}
.Estilo11 {text-decoration: none; font-size: 14; text-transform: uppercase;}
-->
</style>
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
	<td> <div align="right">
	  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="778" height="174">
        <param name="movie" value="3.swf">
        <param name="quality" value="high">
        <embed src="3.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="778" height="174" ></embed>
      </object>
	  <font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"></font></div></td>
  </tr>
</table>
  <table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td width="450" background="images/index_23.gif"><img src="images/index_22.gif" width=174 height=35 alt=""></td>
	<td background="images/index_27.gif"><img src="images/index_25.jpg" width=96 height=35 alt=""><img src="images/index_soft.GIF" width=92 height=35 alt=""></td>
  </tr>
</table>
<form name="form1" method="post" action="generar_tarjeta.php">
  <H2>
    <center>
      <p><font color="blue">Seleccione a los Trabajadores</font></p>
      <p><font color="blue"> que desea imprimir el reporte por pantalla de la(s) </font></p>
      <p><font color="blue">tarjeta(s) con fecha de inicio <?php
		
		$fechaini=list($diaini,$mesini,$anoini)=split("/",$_POST[fecha_tarjeta]);
		$fecha_tarjeta=$diaini."-".$mesini."-".$anoini;
	  
	  echo $fecha_tarjeta; ?></font></p>
	  </center>
  </H2>
  <table width="356" height="39" align="center" border="1">
  <tr bgcolor="#FFFFFF" bordercolor="#0000FF">
      <td width="61" class="t12b Estilo5"><div align="center">Seleccione</div></td>
    <td width="71" bgcolor="#FFFFFF" class="t12b Estilo5"><div align="center">C.I.</div></td>
    <td width="202" bgcolor="#FFFFFF" class="t12b Estilo5"><div align="center">Apellidos y Nombres</div></td>
	</tr>
   <?php
// Conexion el servidor
include ("includes/bdkey.php"); 

	$day1=substr($fecha_tarjeta,0,2);
	$month1=substr($fecha_tarjeta,3,2);
	$year1=substr($fecha_tarjeta,6,4);
	$fecha_dia1=$year1."-".$month1."-".$day1;

	function suma_fechas($fecha,$ndias)
	{
	if (preg_match("/[0-9]{1,2}-[0-9]{1,2}-([0-9][0-9]){1,2}/",$fecha))
	list($dia,$mes,$ano)=split("-",$fecha);
	$nueva = mktime(0,0,0, $mes,$dia,$ano) + $ndias * 24 * 60 * 60;
	$nuevafecha=date("d-m-Y",$nueva);
	return ($nuevafecha);  
	}
	$fechamas6=suma_fechas($fecha_tarjeta, 6);
	
	$day7=substr($fechamas6,0,2);
	$month7=substr($fechamas6,3,2);
	$year7=substr($fechamas6,6,4);
	$fecha_dia7=$year7."-".$month7."-".$day7;
	$fecha_fin=$day7."-".$month7."-".$year7;
	$grupo_traba=$_POST[grupo_traba];
	
	$query1=mysql_query("SELECT * FROM traba WHERE jefatura = '$grupo_traba' and condicion='1' ORDER BY apellidos ASC");
	while ($row=mysql_fetch_array($query1))
		{
		$query2=mysql_query("SELECT * FROM jornada WHERE jefatura = '$grupo_traba' and ci='".$row[ci]."'  and fecha BETWEEN '$fecha_dia1' AND '$fecha_dia7'");
		if(mysql_num_rows($query2)!=0)
			{
			$n=$n+1;
			//----------------------------------
			echo '<tr><td><center><input type="checkbox" name="ci[]" value="'.$row[ci].'"></center></td><td class="t12b"><center>'.$row[ci].'</center></td><td class="t12b">'.$row[apellidos].", ".$row[nombres].'</td>';?></tr>
			<?php
			//----------------------------------
			}else{
			echo '<tr><td class="t12b"><strong><center>X</center></strong></td><td class="t12b"><center>'.$row[ci].'</center></td><td class="t12b">'.$row[apellidos].", ".$row[nombres].'</td></tr>';
		}
	}
mysql_free_result($query1) and mysql_free_result($query2);
if($n>=1)
	{
	?>
	<script>
	function ChequearTodos(chkbox)
	{
	for (var i=0;i < document.forms["form1"].elements.length;i++)
	{
	var elemento = document.forms[0].elements[i];
	if (elemento.type == "checkbox")
	{
	elemento.checked = chkbox.checked
	}
	}
	} 
	</script>
	<tr>
	<td bgcolor="#FFFFCC" class="Estilo5"> <div align="center" class="Estilo5"><span class="Estilo6">
	<input type="checkbox" name="checkbox11" value="checkbox" onClick="ChequearTodos(this);">
	</span></div></td>
		<td class="t12b Estilo5" colspan=2><div align="right" class="Estilo5">
		  <div align="center"><strong>Todos los trabajadores pendientes</strong></div>
		</div></td>
		</tr>
	  <?php
	}else{
	?>
<tr>
    <td class="t12b Estilo5">
      <center class="Estilo5">
        <span class="Estilo5"><strong>X</strong></span></center>
    <td class="t12b Estilo5"colspan=2><div align="right" class="Estilo5">
		  <div align="center"><strong>Todos los trabajadores pendientes</strong></div>
		</div></td>
    </tr>
  <?php
}
?>
    </table>
    <table width="403" height="81" border="0">
      <tr>
        <td width="397"><div align="center">
		<p align="center" class="t12b Estilo144 Estilo3 Estilo4">Nota: Una &quot;X&quot; en la columna &quot;Seleccione&quot; significa que no se ha relacionado ninguna fecha para ese trabajador en el per&iacute;odo solicitado.</p>
		<p align="center" class="t12b Estilo144 Estilo3 Estilo4">&nbsp;</p>
		<span class="t12g Estilo151">Click en [Enviar] cuando los datos est&Eacute;n completos</span>
          <table width="249" border="0">
            <tr>
              <td width="81"><label> </label>
                  <div align="center">
                    <input type="submit" name="Submit" value="Enviar" style="background:#FFB400" onClick="enviar()">
                </div></td>
              <td width="92"><label> </label>
                  <div align="center">
                    <input type="reset" name="Submit2" value="Limpiar" style="background:#FFB400">
                </div></td>
              <td width="87"><label> </label>
                  <div align="center">
                    <input type="submit" name="Submit3" value="Ayuda" style="background:#FFB400">
                </div></td>
            </tr>
          </table>
          </div></td>
      </tr>
    </table>
	  <H2><font color='blue'><center>
	<?php
	echo '<input name="fecha_ini" type="hidden" value="'.$fecha_tarjeta.'">';
	echo '<input name="fecha_fin" type="hidden" value="'.$fecha_fin.'">';
	echo '<input name="grupo_traba" type="hidden" value="'.$_POST[grupo_traba].'">';
	echo '<input name="newfecha1" type="hidden" value="'.$fecha_dia1.'">';
	echo '<input name="newfecha2" type="hidden" value="'.$fecha_dia7.'">';
	?>
           
  </center></font></H2>
		<H2><center>
		  <span class="t12g Estilo7"><span class="Estilo11">&iquest;Desea regresar?</span></span>
		</center></H2>
    <table width="120" border="0">
    <tr>
      <td width="114"><div align="center"><span class="t12b Estilo2">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
          <param name="movie" value="button31.swf">
          <param name="quality" value="high">
          <embed src="button31.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
        </object>
      </span></div></td>
    </tr>
  </table>
  <p class="t12b Estilo2">
</form>
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td background="images/index_66.gif" class="t12w"><b>&nbsp;&nbsp;&copy;2006-2007 
      MaxSystem.NET &nbsp;Derechos Reservados</b></td>
	<td width="102"><img src="images/index_69.jpg" width=102 height=36 alt=""></td>
	<td width="222" background="images/index_70.gif" align="center" class="t12w"><div align="center"><a href="#" class="t12w"><b>Data/Privacidad</b></a><b> 
        •<a href="#" class="t12w">Accesabilidad</a></b></div></td>
  </tr>
</table>
</div></td>
</BODY>
</HTML>