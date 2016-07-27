<?php
include ("security_system.php");
?>
<HTML>
<HEAD>
<TITLE>Consulta Individual de Trabajador. Sistema ARTS Online</TITLE>
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
.Estilo3 {color: #0000FF}
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
	<td width="450" background="images/index_23.gif"><img src="images/index_22.gif" width=174 height=35 alt=""></td>
	<td background="images/index_27.gif"><img src="images/index_25.jpg" width=96 height=35 alt=""><img src="images/index_soft.GIF" width=92 height=35 alt=""></td>
  </tr>
</table>
<h2>&nbsp;</h2>
<p><span class="t12b Estilo2">
  <?php

include ("includes/bdkey.php");
$ci=$_POST['ci'];

$result = mysql_query("select * from traba where ci='$ci' and condicion='1'");
if(mysql_num_rows($result)==0){
	echo "<H1><font color='red'> Error !!!</font></H1>";
	echo " ";
	echo "<H2><font color='red'>C&eacute;dula de Identidad no encontrada,</font></H2>";
	echo " ";
	echo "<H2><font color='red'>por favor verif&iacute;quela, e int&eacute;ntelo de nuevo</font></H2>";
}else{
	echo "<H3><font color='green'>Consulta Individual de Trabajadores</font></H3>";
	echo "<center>
	<table border = '2' bgcolor='#ffffff'> \n";
	while ($row=mysql_fetch_array($result)){
		echo "<tr><td><font face='verdana' color='#0000FF' size=2>C&eacute;dula de Identidad</td>
			<td><font face='verdana' color='#0000FF' size=2>$row[ci]</td></tr>\n";
		echo "<tr><td><font face='verdana' color='#0000FF' size=2>Nombres</td>
			<td><font face='verdana' color='#0000FF' size=2>$row[nombres]</td></tr>\n";
		echo "<tr><td><font face='verdana' color='#0000FF' size=2>Apellidos</td>
         	<td><font face='verdana' color='#0000FF' size=2>$row[apellidos]</td></tr>\n";
		echo "<tr><td><font face='verdana' color='#0000FF' size=2>Estructura</td>
			<td><font face='verdana' color='#0000FF' size=2>$row[estructura]</td></tr>\n";
		echo "<tr><td><font face='verdana' color='#0000FF' size=2>Grupo de Trabajo</td>
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
}
mysql_free_result($result)
?>
</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p class="t12g Estilo3">&iquest;Desea volver?</p>
<table width="243" border="0">
<tr>
<td width="113"><font color="#FF0000" size="2"><a title="Ayuda sobre el manejo del SARTS" href="#">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="103" height="24">
<param name="BGCOLOR" value=""><param name="BASE" value="."><param name="movie" value="button20.swf"><param name="quality" value="high"><embed src="button20.swf" width="103" height="24" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" base="."></embed>
</object></a></font>
</td>
<td width="114"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
<param name="movie" value="button19.swf"><param name="quality" value="high"><embed src="button19.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed></object></td>
</tr>
    </table><p>&nbsp;</p>
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