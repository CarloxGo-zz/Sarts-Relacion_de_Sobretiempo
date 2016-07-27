<?php
include ("security_system.php");
ini_set('error_reporting',0);

if ($_SESSION["autentificado"] != "SI") {
    header("Location: sesion.php");
    exit();
}
?>
<HTML>
<HEAD>
<TITLE>Modificacion ficha de trabajador en BD. Sistema ARTS Online</TITLE>
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
.Estilo4 {
	color: #0033FF;
	font-size: 18px;
}
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
<h2>&nbsp;</h2>
<form name="form2" method="post" action="">
  <h2 class="t12b Estilo2">
  
<?php
include ("includes/bdkey.php");

$nomb=$_POST['nomb'];
$apell=$_POST['apell'];
$reg=$_POST['reg'];
$direc=$_POST['direc'];
$gerenc=$_POST['gerenc'];
$coordina=$_POST['coordina'];
$estruc=$_POST['estruc'];
$jefatur=$_POST['jefatur'];
$carg=$_POST['carg'];
$horari=$_POST['horari'];
$estat=$_POST['estat'];
$manej=$_POST['manej'];
$cond=$_POST['cond'];

switch($estat){
	case "REGULAR":
		$cond=1;
	break;
	
	case "EVENTUAL":
	 	$cond=1;
	break;
	
	case "CONTRATADO":
		$cond=1;
	break;
	
	case "JUBILADO":
		$cond=2;
	break;

	case "RETIRADO":
		$cond=0;
	break;
	
	case "CESANTE":
		$cond=3;
	break;
}

//Creamos la sentencia SQL y la ejecutamos
$sSQL="UPDATE traba SET nombres='$nomb',apellidos='$apell',region='$reg',direccion='$direc',gerencia='$gerenc',coordinacion='$coordina',estructura='$estruc',jefatura='$jefatur',cargo='$carg',horario='$horari',estatus='$estat',manejo='$manej',condicion='$cond' WHERE ci='$ci'";
mysql_query($sSQL);
?>

<h1><div align="center" class="t12g Estilo2 Estilo3">Registro Actualizado</div>
</h1>
<div align="center" class="Estilo3 Estilo3">Visualizar el contenido de la base de datos </div>
  </h2>
</form>

<p>&nbsp;</p>
<p align="center" class="Estilo4">&iquest;Desea modificar otro trabajador?  </p>
</p>
<div align="center">
  <table width="243" border="0">
    <tr>
      <td width="113"><font color="#FF0000" size="2"><a title="Ayuda sobre el manejo del SARTS" href="#">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
          <param name="movie" value="button24.swf">
          <param name="quality" value="high">
          <embed src="button24.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
        </object>
      </a></font></td>
      <td width="114"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
          <param name="movie" value="button19.swf">
          <param name="quality" value="high">
          <embed src="button19.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
      </object></td>
    </tr>
  </table>
</div>
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