<?php
include ("security_system.php");
?>
<HTML>
<HEAD>
<TITLE>Verificar C.I. para Incluir Trabajador. Sistema ARTS Online</TITLE>
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
.Estilo3 {font-size: 24px}
.Estilo8 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18;
	font-weight: bold;
}
.Estilo14 {font-size: 18; }
.Estilo15 {font-weight: bold; font-family: Arial, Helvetica, sans-serif;}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
function enviar(){
var enviarme=confirm("Desea continuar?");
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
<td align="right" background="images/index_01.gif"><img src="images/index_03.gif" width=59 height=34 alt=""><a href="inicio.html"><img src="images/index_ini.gif" alt="" width=82 height=34 border="0"></a><img src="images/index_faq.GIF" width=82 height=34 alt=""><img src="images/index_link.gif" width=89 height=34 alt=""><a href="finalizar_sesion.php" target="_blank"><img src="images/index_sarts.gif" alt="" width=71 height=34 border="0"></a><img src="images/index_contac.GIF" width=85 height=34 alt=""></td>
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
<form name="form1" method="post" action="inc_traba.php">
<?php

// Conexion el servidor
include ("includes/bdkey.php");
$ci=$_POST['ci'];
$result1 = mysql_query("select * from traba where ci='$ci'");

if(mysql_num_rows($result1)==0)
{
?>
 <p class="t12b Estilo2">
    
    <p class="Estilo2 t12b"><strong><font color="blue">C&eacute;dula de Identidad verificada y v&aacute;lida,</font> 
    </strong>
    
    <center>
      <h4 class="Estilo14">    <span class="Estilo15"><font color="blue">click sobre [Continuar] incluir los datos</font> </span></h4>
    </center
			
			  ><center>
			    <h4><span class="Estilo8 Estilo2"><font color="blue">del Trabajador</font> </span>  
                </h4>
    </center>
			  <H2>
			    <center>
			      <p class="Estilo3">&nbsp;</p>
			      </center></H2><?php
	echo '<input name="ci" type="hidden" value="'.$_POST['ci'].'">';
	echo '<input name="jefatura" type="hidden" value="'.$_POST['jefatura_traba'].'">';
	echo '<div align="center">';
	echo '<table width="200" border="0">';
	echo '<td align="center"><input type="submit" name="aceptar" value="Continuar" style="background:#FFB400"></td>';
	echo '</tr>';
	echo '</table>';
	echo '</div>';
	}else{
	echo "<H2><font color='red'>Error !!!</font></H2>";
	echo " ";
	echo "<H3><font color='red'>C&eacute;dula ya existe</font></H3>";
	echo " ";
	echo "<H3><font color='red'>por favor verif&iacute;quela, e int&eacute;ntelo de nuevo.</font></H3>";
	echo " ";
	echo "<H3><font color='red'>De persistir este error comun&iacute;quese con el Administrador del Sistema</font></H3>";
	
?>
    <table width="123" border="0">
    <tr>
      <td width="117"><div align="center">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
          <param name="movie" value="button40.swf">
          <param name="quality" value="high">
          <embed src="button40.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
        </object>
      </div></td>
    </tr>
  </table>
    <p class="t12b Estilo2">
<?php
}
mysql_free_result($result1);	
?>

</form>
<h2>&nbsp;</h2>
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