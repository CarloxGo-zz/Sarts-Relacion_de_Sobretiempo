<?php
include ("security_system.php");
?>
<HTML>
<HEAD>
<TITLE>Registro de Trabajador eliminado</TITLE>
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

$daym=substr($fecham,0,2);
$monthm=substr($fecham,3,2);
$yearm=substr($fecham,6,4);
$newfecham=$yearm."-".$monthm."-".$daym;

$resultm = mysql_query("select * from jornada where ci='$cim' and fecha='$newfecham'");

if(mysql_num_rows($resultm)==0)
{
	echo "<H2><font color='red'> Error !!!</font></H2>";
	echo " ";
	echo "<H3><font color='red'>No se ubic&oacute; ninguna fecha relacionada para ese trabajador</font></H3>";
	echo " ";
	echo "<H3><font color='red'>verifique que otro usuario no la haya borrado mientras Ud. la visualizaba</font></H3>";
	
	$result = mysql_query($sql);
	mysql_close($dbh);

}else{

$borrar= mysql_query("DELETE FROM jornada WHERE ci='$cim' AND fecha='$newfecham'");

mysql_close($dbh);
?>
<h1>
  <div align="center" class="t12g Estilo2 Estilo3">REGISTRO ELIMINADO</div>
</h1>
<div align="center" class="Estilo3 Estilo3">
  <p>Visualizar el contenido de la Base de Datos </p>
  <p>en Reporte</p>
</div>
</h2>      
<p>
<?php
}
?>
</p>
  <p>&nbsp;  </p>
</form>

<p class="Estilo4">&iquest;Desea Eliminar otra Jornada?</p>
<table width="243" border="0">
                                  <tr>
                                    <td width="116"><div align="center"><font color="#FF0000" size="2"><a title="Ayuda sobre el manejo del SARTS" href="#">
                                      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
                                        <param name="movie" value="button38.swf">
                                        <param name="quality" value="high">
                                        <embed src="button38.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
                                      </object>
                                    </a></font></div></td>
                                    <td width="117"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
                                        <param name="movie" value="button19.swf">
                                        <param name="quality" value="high">
                                        <embed src="button19.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
                                    </object></td>
                                  </tr>
    </table>
                                <p>&nbsp;</p>
                                <table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td background="images/index_66.gif" class="t12w"><b>&nbsp;&nbsp;&copy;2006-2007 
      MaxSystem.NET &nbsp;Derechos Reservados</b></td>
	<td width="102"><img src="images/index_69.jpg" width=102 height=36 alt=""></td>
	<td width="222" background="images/index_70.gif" align="center" class="t12w"><div align="center"><a href="#" class="t12w"><b>Data/Privacidad</b></a><b> 
        � <a href="#" class="t12w">Accesabilidad</a></b></div></td>
  </tr>
</table>
      </div></td>
</BODY>
</HTML>